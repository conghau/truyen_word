<?php
include_once (APPPATH . '/libraries/simple_html_dom.php');
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 2/10/15
 * Time: 9:39 AM
 */
class Mongvn implements IStory {
	protected $baselink = 'http://mong.vn/truyen/views'; // 'http://mong.vn/truyen';
	protected $arrInfo;
	protected $intro;
	protected $title;
	protected $avatar;
	protected $arrChapter;
	private $total_page_story;
	protected $arrManga = array ();
	

	public function __construct($base_link = '', $total_page_story=0) {
		$this->baselink = $base_link;
		$this->total_page_story = $total_page_story;
	}
	
	public function get_total_page_story() {
		$html = file_get_html ( $this->baselink );
		$total_number = $html->getElementById ( 'ul.pagination > li.disabled' )->childNodes ( 0 )->outertext;
		return preg_replace ( '!\D+!', '', $total_number );
	}
	
	/**
	 * 
	 * @param number $total_page_story
	 */
	public function get_list_story($total_page_story = 0) {
		$arrManga = array ();
		
		for($i = 1; $i <= $this->total_page_story; $i ++) {
			$link_story = $this->baselink . '/' . $i;
			$html = file_get_html ( $link_story );
			
			foreach ( $html->find ( 'div.item_truyen_box > div.wrap_bottom_item' ) as $element ) {
				$manga = array ();
				
				$e_title = $element->find("div.title > a", 0);
				$e_info = $element->find('div.stat_info > div.tags > a', 0);
				$e_status = $element->find('div.chuong_name > a', 0);
				
				$manga ['link'] = $e_title->href;
				$manga['title'] = $e_title->plaintext;
				$arr = explode ( "/", $manga ['link'] );
				$manga ['mongvn_id'] = preg_replace ( '!\D+!', '', $arr [5] );
				$manga['slug'] = $arr [4];
				$manga['category'] = $e_info->plaintext;
				$manga['status'] = (strtolower($e_status->plaintext) == 'hoàn thành') ? 1 : 0;
				
				array_push ( $arrManga, $manga );
			}
		}
		return $this->arrManga = $arrManga;
	}
	
	public function get_page_chapter($link_story) {
		$html = file_get_html ( $link_story );
		if ($html == FALSE) {
			return FALSE;
		}
		$r = $html->getElementById ( 'ul.pagination > li.disabled',0 );
		if(null == $r) {
			return 0;
		}
		$total_number = $r->outertext;
		return preg_replace ( '!\D+!', '', $total_number );
	}

	/**
	 * get_story_detail
	 * 
	 * @param string $link_story
	 * @return boolean|NULL[]
	 */
	public function get_story_detail($link_story ='') {
		$html = file_get_html ( $link_story );
		if ($html == FALSE) {
			return FALSE;
		}
		// get info
		$arr_info = array ();
		$targets = array (
				'tac-gia' => 'author',
				'luot-xem' => 'view',
				'nguon' => 'source',
				'cap-nhat' => 'last_chapter' 
		);
		
		//không phải truyện teen ! 
		foreach ( $html->find ( 'div.detail-info-info > table > tr' ) as $element ) {
			$key = url_friendly ( str_replace ( ':', '', $element->childNodes ( 0 )->plaintext ) );
			if (array_key_exists ( $key, $targets )) {
				$key = $targets [$key];
				
				$arr_info [$key] = $element->childNodes ( 1 )->plaintext;
			}
		}
		
		$this->arrInfo = $arr_info;
		
		// get introduce
		$arr_intro = '';
		foreach ( $html->find ( 'div.truyen_detail_noidung' ) as $element ) {
			$arr_intro = trim ( $element->innertext );
		}
		$this->intro = $arr_intro;
		
		// get avatar
		foreach ( $html->find ( 'div.detail-info-image > img' ) as $element ) {
			$this->avatar = $element->src;
		}
		
		//get link ajax
		$link_ajax = $link_story;
		$e = $html->find ( 'div#manga-detail-info > ul.breadcrumb_manga > li', -1 );
		if(null !== $e) {
			$link_ajax = $e->childNodes(0)->href;
		}
		
		$this->arrInfo ['description'] = $this->intro;
		$this->arrInfo ['image'] = $this->avatar;
		$this->arrInfo['link_ajax'] = $link_ajax;
		$this->arrInfo['status_crawler_info'] = 1;
		
		if(null == $this->avatar) {
			$this->arrInfo['status_crawler_info'] = 2;
		}
		//var_dump($this->arrInfo);die;
		return $this->arrInfo;
	}
	
	public function get_list_chapter($link_story, $html) {
		if ($html == null) {
			$html = file_get_html ( $link_story );
		}
		if (false == $html) {
			return FALSE;
		}
		$arrChapter = array ();
		$i = 0;
		foreach ( $html->find ( 'table.table_manga > tr' ) as $element ) {
			if ($i == 0) {
				$i ++;
				continue;
			}
			$chapter = array ();
			$chapter ['name'] = trim ( $element->first_child ()->first_child ()->plaintext );
			$chapter ['link'] = $element->first_child ()->first_child ()->href;
			$arr = explode ( "/", $chapter ['link'] );
			$chapter ['chapter24h_id'] = $arr [3];
			array_push ( $arrChapter, $chapter );
		}
		return $arrChapter;
	}
	public function getChapterImage($linkChapter) {
		$arrChapterImage = array ();
		if (! is_null ( $linkChapter )) { // .'<br />';
			$html = @file_get_html ( $linkChapter );
			if ($html == false) {
				return FALSE;
			}
			foreach ( $html->find ( 'img' ) as $element ) {
				var_dump ( $element );
				$a = array ();
				$a ['link'] = $element->src;
				array_push ( $arrChapterImage, $a );
			}
		}
		return $arrChapterImage;
	}
	public function curl_get_list_chapter($link_story, $alias, $pageChapter, $storyId) {

		$arrDataHtml = [];
		
		for($i = 1; $i <=$pageChapter; $i++) {
			$ch = curl_init ();
			curl_setopt ( $ch, CURLOPT_URL, $link_story );
			curl_setopt ( $ch, CURLOPT_POST, 1 );
			curl_setopt($ch, CURLOPT_POSTFIELDS,
			http_build_query(array('page' => $i,
					'ajax_pagination'=> 1,
					'alias' =>$alias,
					'url' => $link_story)));
			
			// receive server response ...
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			$server_output = curl_exec ( $ch );
			curl_close ( $ch );
			
			array_push($arrDataHtml, $server_output);
		}
		$html = '';
		$arrDataChapter = [];
		foreach ($arrDataHtml as $data_html) {
			$html = @parser_content_to_html($data_html);
			foreach ( $html->find ( 'div.truyen_list > table.tinytable > tr' ) as $element ) {
				$e = $element->childNodes ( 1 )->childNodes(0)->first_child();
				$a = [];
				$a['link'] =  $e->href ;
				$a['title'] = $e->plaintext;
				$a['story_id'] = $storyId;
				array_push($arrDataChapter, $a);
			}
			$html = '';
		}
		
		//var_dump($arrDataChapter);die;
		return $arrDataChapter;
	}
	public function get_content_chapter($link_chapter) {
		$html = file_get_html ( $link_chapter );
		$content = "";
		if ($html == FALSE) {
			return $content;
		}
		$e = $html->find ( 'div.chuong_noidung', 0 );
		if(null !== $e) {
			$content = $e->outertext;
		}
		return $content;
	}
}

<?php
include_once (APPPATH . '/libraries/simple_html_dom.php');
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 2/10/15
 * Time: 9:39 AM
 */
class Webtruyen {
	protected $baselink = 'http://webtruyen.com/home/pagingtabmain/0';
	protected $arrInfo;
	protected $intro;
	protected $title;
	protected $avatar;
	protected $arrChapter;
	private   $total_page = 1;
	private   $end_page = 1;
	private 	$start_page = 1;
	protected $arrManga = array ();
	
	public function set_end_page($end_page = 1)
	{
		$this->end_page = $end_page;
	}
	
	public function set_total_page($total_page = 1)
	{
		$this->total_page = $total_page;
	}
	
	public function set_start_page($start_page = 1)
	{
		$this->start_page = $start_page;
	}
	
	public function set_baselink($baselink = 'http://webtruyen.com/home/pagingtabmain/0')
	{
		$this->baselink = baselink;
	}
	
	/**
	 *
	 * @return array
	 */
	public function getArrManga() {
		return $this->arrManga;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getBaselink() {
		return $this->baselink;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getArrInfo() {
		return $this->arrInfo;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getIntro() {
		return $this->intro;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getAvatar() {
		return $this->avatar;
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getArrChapter()
	{
		return $this->arrChapter;
	}
	
	public function __construct()
	{
	}
	public function get_total_page($start = 1)
	{
		for($i = $start; $i <= $this->total_page; $i ++) {
			$linkManga = $this->baselink . '/' . $i;
			$html = file_get_html ( $linkManga );
			foreach ( $html->find ( 'div.pagination > ul' ) as $element ) {
				$page = $element->last_child ()->prev_sibling ()->find ( 'a', 0 )->plaintext;
				if ($this->total_page < $page) {
					$this->total_page = $page;
				}
			}
		}
		return $this->total_page;
	}
	
	public function get_list_stories()
	{
		$arrManga = array ();
		
		for($i = $this->start_page; $i <= $this->end_page; $i ++) {
			$linkManga = $this->baselink . '/' . $i;
			$html = file_get_html ( $linkManga );
			
			foreach ( $html->find ( 'ul.list_ct > li' ) as $element ) {
				
				$img_url = $element->children ( 1 )->find ( 'img', 0 )->src;
				
				$stories_url = $element->children ( 2 )->find ( 'a', 0 )->href;
				$key = null;
				if (null != $stories_url)
				{
					$arr = explode ( "/", $stories_url );
					$key = $arr [3];
				}
				$title = $element->children ( 2 )->find ( 'a', 0 )->plaintext;
				$state = $element->children ( 2 )->find ( 'div.bgprod', 0 )->plaintext;
				$manga = array ();
				$manga ['crawler_url'] = $stories_url;
				$manga ['key'] = $key;
				$manga ['crawler_img_url'] = $img_url;
				$manga ['title'] = $title;
				$manga ['state'] = $state;
				array_push ( $arrManga, $manga );
			}
		}
		var_dump ( $arrManga );die;
		return $this->arrManga = $arrManga;
	}
	public function getMangaDetail($linkManga='') {
		// try {
		//$linkManga = 'http://webtruyen.com/khong-yeu-thi-bien/';
		$html = file_get_html ( $linkManga );
		if ($html == FALSE) {
			return FALSE;
		}
		// get info
		$arr_info = array ();
		$targets = array (
				'the-loai' => 'type',
				'tac-gia' => 'author',
				'tinh-trang' => 'state',
				'luot-xem' => 'view',
				'nguon' => 'source',
				'-rating' => 'rating'
		);
		foreach ( $html->find ( 'div.contdetail > span' ) as $element ) {
			$arr = explode ( ":", $element->plaintext );
			$key = trim($arr[0]);
 			$key = url_friendly ($arr[0]);
			if (array_key_exists ( $key, $targets )) {
				$key = $targets [$key];
				$arr_info [$key] = ('Hoàn Thành' == trim($arr[1])? 'FULL' : trim($arr[1]));
			} 
		}
		$this->arrInfo = $arr_info;
		
		//get stories id
		foreach ( $html->find ( 'div.contdetail > input#hiddenID' ) as $element ) {
			$this->arrInfo['crawler_stories_id'] = $element->value;
		}
		
		// get introduce
		$intro = '';
		foreach ( $html->find ( 'div.mota > span' ) as $element ) {
			$intro .= $element->innertext;
		}
		$this->intro = $intro;
		$this->arrInfo ['description'] = $intro;
		
		//get total page
		foreach ( $html->find ( 'span.numbpage' ) as $element ) {
			$arr = explode ( "/", $element->plaintext );
			$this->arrInfo ['number_page'] = trim($arr[1]);
		}
		
		return $this->arrInfo;
	}
// 	public function getListChapter($linkManga='', $html = null, $id=0, $number_page=2) {
// 		$id = 578;
// 		$linkManga = 'http://webtruyen.com/story/Paging_listbook/';
// 		$arrChapter = array ();
// 		for ($i = 1; $i <= $number_page; $i++)
// 		{
// 			$link_crawler = $linkManga . $id . '/' . $i;
// 			// if ($html == null) {
// 			$html = file_get_html ( $link_crawler );
// 			// }
// 			// if (false == $html) {
// 			// return FALSE;
// 			// }
			
// 			$i = 0;
// 			foreach ( $html->find ( 'div.gridlistchapter > table > tr' ) as $element ) {
// 				if ($i == 0) {
// 					$i ++;
// 					continue;
// 				}
				
// 				$chapter = array ();
// 				$chapter ['name'] = trim ( $element->last_child ()->prev_sibling ()->plaintext );
// 				$chapter ['link'] = $element->last_child ()->prev_sibling ()->find ( 'a', 0 )->href;
// 				$a = preg_replace ( '/[^0-9_]|\d+_+/', '', $chapter ['link'] );
// 				$chapter ['id'] = $a;
// 				// $arr = explode ( "/", $chapter ['link'] );
// 				// $chapter ['chapter24h_id'] = $arr [3];
// 				array_push ( $arrChapter, $chapter );
// 			}
// 		}
// 		var_dump($arrChapter);
// 		return $arrChapter;
// 	}

public function getListChapter($stories_id, $crawler_stories_id = 0,$key='atashi-no-himitsu-bi-mat-cua-em', $number_page=1) {
	$arrChapter = array ();
	$arr_crawler_chapter_id = array();
	for ($index = 1 ; $index <= $number_page; $index ++)
	{
		$linkManga = 'http://webtruyen.com/story/Paging_listbook/'.$key.'/'.$index;
		//if ($html == null) {
			$html = file_get_html ( $linkManga );
		//}
		if (false == $html) {
			return FALSE;
		}
		
		$i = 0;
		foreach ( $html->find ( 'div.gridlistchapter > table > tr' ) as $element ) {
			if ($i == 0) {
				$i ++;
				continue;
			}
				
			$chapter = array ();
			$chapter ['title'] = trim ( $element->children(3)->plaintext );
			$chapter ['crawler_url'] = $element->children(3)->find('a',0)->href;
			if (FALSE == ($chapter ['crawler_url'])){
				$chapter ['crawler_chapter_id'] = 0;
			}
			else
			{
				$crawler_chapter_id = explode('_', $chapter ['crawler_url'])[1];
				$crawler_chapter_id = preg_replace('/[^0-9]/','',$crawler_chapter_id);
				$chapter ['crawler_chapter_id'] = $crawler_chapter_id;
			}
			$chapter['stories_id'] = $stories_id;
			$chapter['crawler_stories_id'] = $crawler_stories_id;
			//$arr = explode ( "/", $chapter ['link'] );
			//$chapter ['chapter24h_id'] = $arr [3];
			array_push ( $arrChapter, $chapter );
			array_push($arr_crawler_chapter_id, $chapter ['crawler_chapter_id']);
		}
	}
	//var_dump($arrChapter);
	return array($arrChapter, $arr_crawler_chapter_id);
}

	public function getContentChapter($linkChapter) {
		$arrChapterImage = array ();
		if (! is_null ( $linkChapter )) { // .'<br />';
			$html = @file_get_html ( $linkChapter );
			if ($html == false) {
				return FALSE;
			}
			foreach ( $html->find ( 'div#detailcontent' ) as $element ) {
				$content = ( $element->plaintext );
				$content = str_replace('Ads ', '', $content);//($content,0,4);
				if ('' == trim($content))
				{
					foreach ($element->find('img') as $e)
					{
						$content .= $e;
					}
				}
				//echo $content;
			}
		}
		return $content;
	}
}

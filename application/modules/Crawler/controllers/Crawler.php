<?php

class Crawler extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->data['controller'] = 'crawler';
		ini_set('memory_limit', '1204M');
		set_time_limit(0);
		$this->load->model('Crawler_m_datadao');
	}

	public function GetStoryManga24h(){
		try {
			echo "GetStoryManga24h";
			$objManga24h = new Manga24h();
			$a =  $objManga24h->getListManga();
			var_dump($a);die;
			$objDao = new Manga24h_StoryDao(MASTER);
			$r = $objDao->insert_bulk($a);

		} catch (Exception $e) {
			log_message('error',$e->getMessage());
			show_error($e->getMessage());
		}
	}


	public function UpdateDetailManga24h($linkChapter = ''){
		try {

			$objManga24h = new Manga24h();
			$objDao = new Manga24h_StoryDao(MASTER);
			$lst_manga = $objDao->get_list(0);
			foreach($lst_manga as $manga) {
				//var_dump($manga->link);;
				$r = $objManga24h->getMangaDetail($manga->link);
				echo 'l ';
				$recordset = array();
				if($r !== FALSE) {
					$recordset = $r['arrInfo'];
				}
				$recordset['status'] = STATUS_DONE;
				$objDao->update_record($manga->id, $recordset);
				echo 'done';
			}



			//$objManga24h = new Manga24h();
			//$b = $objManga24h->getMangaDetail('http://manga24h.com/4182/Bungaku-Shoujo-to-Shi-ni-Tagari-no-Douke.html');

		} catch (Exception $e) {
			log_message('error',$e->getMessage());
			show_error($e->getMessage());
		}
	}

	public function GetChapterManga24h($linkStory = ''){
		try {
			$objManga24h = new Manga24h();
			$objSDao = new Manga24h_StoryDao();
			$objDao = new Manga24h_ChapterDao(MASTER);
			$lst_manga = $objSDao->get_list_2(500);
			foreach($lst_manga as $manga) {
				var_dump($manga->link);
				$arrChapter = $objManga24h->getListChapter($manga->link);
				if($arrChapter !== FALSE) {
					$total = count($arrChapter);
					for($i =0; $i <$total; $i++) {
						$arrChapter[$i]['story_id'] = $manga->id;
						$arrChapter[$i]['manga24h_story_id'] = $manga->manga24h_id;
					}
					$r = $objDao->insert_bulk($arrChapter);
					if($r) {
						$objSDao->update_record($manga->id, array('status_2' => STATUS_DONE));
					}
				} else {
					$objSDao->update_record($manga->id, array('status_2' => STATUS_DONE));
				}
				echo 'done';
			}



			//$objManga24h = new Manga24h();
			//$b = $objManga24h->getMangaDetail('http://manga24h.com/4182/Bungaku-Shoujo-to-Shi-ni-Tagari-no-Douke.html');

		} catch (Exception $e) {
			log_message('error',$e->getMessage());
			show_error($e->getMessage());
		}
	}

	public function GetImageManga24h($linkChapter = ''){
		try {
			$objManga24h = new Manga24h();
			//$objCDao = new Manga24h_ChapterDao(MASTER);
			//$objDao = new Manga24h_ImageDao(MASTER);

			$arrImage = $objManga24h->getChapterImage('http://manga24h.com/104957/em-be-va-toi-[tt8]-chap-36/');
			var_dump($arrImage);
//			die;
//			$lst_chapter = $objCDao->get_list(600);
//			foreach($lst_chapter as $chapter) {
//				//var_dump($chapter->link);
//				$arrImage = $objManga24h->getChapterImage($chapter->link);
//				if($arrImage !== FALSE) {
//					$total = count($arrImage);
//					for($i =0; $i <$total; $i++) {
//						$arrImage[$i]['chapter_id'] = $chapter->id;
//					}
//					$r = $objDao->insert_bulk($arrImage);
//					if($r) {
//						$objCDao->update_record($chapter->id, array('status' => STATUS_DONE));
//					}
//				} else {
//					$objCDao->update_record($chapter->id, array('status' => STATUS_DONE));
//				}
				echo 'done';
//			}
//			log_message('crontab','GetImageManga24h');


			//$objManga24h = new Manga24h();
			//$b = $objManga24h->getMangaDetail('http://manga24h.com/4182/Bungaku-Shoujo-to-Shi-ni-Tagari-no-Douke.html');

		} catch (Exception $e) {
			log_message('error',$e->getMessage());
			show_error($e->getMessage());
		}
	}

	public function index() {
		try {
// 			if(!$this->input->is_cli_request())
// 			{
// 				echo "This script can only be accessed via the command line" . PHP_EOL;
// 				return;
// 			}
			//$objManga24h = new Manga24h();
			//$a =  $objManga24h->getListManga();
			//var_dump($a);
			//$objDao = new Manga24h_StoryDao(MASTER);
			//$r = $objDao->insert_bulk($a);
			//$b = $objManga24h->getMangaDetail('http://manga24h.com/3931/Abnormal-kei-Joshi-Nhung-co-nang-ki-quai.html');
			//$c = $objManga24h->getChapterImage('http://manga24h.com/93114/Bungaku-Shoujo-to-Shi-ni-Tagari-no-Douke-chap-8/');
			//var_dump($b);
			
			$this->load->model('Crawler_m_datadao');
			$objM = new Crawler_m_datadao();
				
			$website = $objM->get_value_by_key('mongvn', TRUE, TRUE);

			var_dump($website);die;

			$objMongvn = new Mongvn();
			//$arr_stories = $objMongvn->getListManga();
			
			$this->load->model('Mongvn_storydao');
			$objDao = new Mongvn_storydao(MASTER);
			$this->load->model('Mongvn_chapterdao');
			$objChapterDao = new Mongvn_chapterdao(MASTER);
			//$r = $objDao->insert_batch($arr_stories);
			
			//$r = $objMongvn->getMangaDetail('http://mong.vn/truyen/Thien-Tai-Bao-Boi-Tong-Tai-Khong-Duoc-Dung-Me-Ta/619.html');
			//var_dump($r);
			//$objMongvn->cUrlListChapter();
			//$objMongvn->getMangaDetail('http://mong.vn/truyen/Hop-Dong-Hon-Nhan-Co-Dau-14-Tuoi/6569.html');
			//var_dump($objMongvn);
			
// 			$arrStory = $objDao->get_story_crawler(NULL,0);
// 			$arrData = array ();
// 			foreach ($arrStory as $story) {
// 				$story_detail = $objMongvn->getMangaDetail($story->link);
// 				$story_detail['id'] = $story->id;
// 				$story_detail['status_crawler_info'] = 1;
// 				array_push($arrData, $story_detail);
// 			}
// 			if (!empty($arrData)) {
// 				$r = $objDao->update_batch($arrData);
// 				var_dump($r);
// 			}

			$arrStory = $objDao->get_story_crawler_chapter(4);
			$arrData = array ();
			foreach ($arrStory as $story) {
				$arr_chapter = $objMongvn->curl_get_list_chapter($story->link_ajax,$story->slug, $story->page_chapter, $story->id);
				if (!empty($arr_chapter)) {
					$r = $objChapterDao->insert_batch($arr_chapter);
					
					$objStory = array();
					$objStory['id'] = $story->id;
					$objStory['status_crawler_chapter'] = 1;
					
					$r1 = $objDao->save($objStory);
					var_dump($r.'--'.$r1);
				}
				//array_push($arrData, $arr_chapter);
				//var_dump($arrData);die;
			}
			
			
			log_message('debug','crontab da chay');
			
		} catch (Exception $e) {
			log_message('error',$e->getMessage());
			show_error($e->getMessage());
		}
	}
	
	public function get_page_story($name = 'Mongvn') {
		$obj_mData = new Crawler_m_datadao();
		$cfg_website = $obj_mData->get_value_by_key($name, TRUE, TRUE);
		$obj_website = new $name($cfg_website['base_link']);
		$total_page = $obj_website->get_total_page_story();
		if($total_page!=0 && $total_page != $cfg_website['total_page_story']) {
			$cfg_website['total_page_story'] = $total_page;
		}
		
		$json_cfg_website = json_encode($cfg_website);
		$obj_mData->update_value_by_key($name, $json_cfg_website);
		var_dump($json_cfg_website);
	}
	
	//get 
	public function get_story($name = 'Mongvn')
	{
		$this->output->enable_profiler(TRUE);
		$obj_mData = new Crawler_m_datadao();
		$cfg_website = $obj_mData->get_value_by_key($name, TRUE, TRUE);
		
		//if ('webtruyen' == $name)
		{
			$this->load->model($name.'_storydao');
			$obj_website = new $name($cfg_website['base_link'],$cfg_website['total_page_story']);
			
			$arr_stories_crawler = $obj_website->get_list_story();
			var_dump($arr_stories_crawler);die;
			
			for ($i = 1; $i <= $cfg_website['total_page_story']; $i++)
			{
				
				//create arr key
				$arr_key_crawler = array();
				foreach ($arr_stories_crawler as $k=>$v)
				{
					if(null != $v['key'])
					{
						array_push($arr_key_crawler, $v['key']);
					}
				}
					
				$this->load->model('Storiesdao');
				$obj_storiesdao = new Storiesdao();
				$arr_stories = $obj_storiesdao->get_key();
				$arr_key_2 = array();
				foreach ($arr_stories as $k=>$v)
				{
					array_push($arr_key_2, $v['key']);
				}
				
				//var_dump($arr_key_crawler);
				//var_dump($arr_key_2);
				$arr_diff = array_diff($arr_key_crawler, $arr_key_2);
					
				$arr_insert = array();
				foreach ($arr_stories_crawler as &$v)
				{
					if (in_array($v['key'], $arr_diff))
					{
						array_push($arr_insert, $v);
					}
				}
				//var_dump($arr_insert);
				if (!empty($arr_insert))
				{
					echo $i;
					$result = $obj_storiesdao->insert_batch($arr_insert);
					var_dump($result);
				}
			}
		}
	}
	
	public function get_info_stories($max_num_get_story_info = 10)
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model('Webtruyen');
		$obj_webtruyen = new Webtruyen();
		$this->load->model('Storiesdao');
		$obj_storiesdao = new Storiesdao();
		$arr_data_update = [];
		$record = $obj_storiesdao->get_by_id(2228);
		$data = $obj_webtruyen->getMangaDetail ( $record->crawler_url );
		if (1 == $record->crawler_update) {
			continue;
		}
		if (! (is_null ( $record->description )) && ($record->state == $data ['state'])) {
			continue;
		}
		if ($data ['state'] == 'FULL') {
			$data ['crawler_update'] = 1;
		}
		$data ['id'] = $record->id;
		array_push ( $arr_data_update, $data );
		$re = $obj_storiesdao->update_batch($arr_data_update);
		var_dump($re);
		//var_dump($arr_data_update);
	}
	
	public function get_info_all_stories()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model('Webtruyen');
		$obj_webtruyen = new Webtruyen();
//		var_dump($obj_webtruyen->getMangaDetail('http://webtruyen.com/bong-hong-bang/'));
		$this->load->model('Storiesdao');
		$obj_storiesdao = new Storiesdao();
		$total_record = $obj_storiesdao->count_record();
		$arr_data_update = [];
		for ($i = 2200; $i < 2500 ; $i += 10)
		{
			$arr_records = $obj_storiesdao->get(10, $i);
			foreach ($arr_records as $record)
			{
				$data = $obj_webtruyen->getMangaDetail($record->crawler_url);
				if (1 == $record->crawler_update)
				{
					continue;
				}
				if (!(is_null($record->description)) && ($record->state == $data['state']))
				{
					continue;
				}
				//var_dump(is_null($record->description));
				if ($data['state'] == 'FULL')
				{
					$data['crawler_update'] = 1;
				}
				$data['id'] = $record->id;
				array_push($arr_data_update, $data);
			}
		}
		$re = $obj_storiesdao->update_batch($arr_data_update);
		var_dump($re);
		//var_dump($arr_data_update);
	}
	
	public function getChapterWebTruyen()
	{
		//$this->output->enable_profiler(TRUE);
		$this->load->model('Storiesdao');
		$this->load->model('Chapterdao');
		$this->load->model('Webtruyen');
		
		$obj_storiesdao = new Storiesdao();
		$obj_chapterdao = new Chapterdao();
		
		$arr_stories = $obj_storiesdao->get(200,600);
		foreach ($arr_stories as $story)
		{
			$story = $obj_storiesdao->get_by_id($story->id);
			//$this->load->model('Webtruyen');
			$obj_webtruyen = new Webtruyen();
			list($arr_crawler_insert, $arr_crawler_chapter_id) = $obj_webtruyen->getListChapter($story->id,$story->crawler_stories_id,$story->key, $story->number_page);
			//var_dump($arr_crawler_insert);
			//$this->load->model('Chapterdao');
			//$obj_chapterdao = new Chapterdao();
			$arr_chapters_id = $obj_chapterdao->get_by_FIELD('stories_id',$story->id , FALSE, 'crawler_chapter_id', TRUE);
			$arr_chapters_id = $this->get_array_value($arr_chapters_id,'crawler_chapter_id');
			$arr_diff = array_diff($arr_crawler_chapter_id, $arr_chapters_id);
			//var_dump($arr_crawler_chapter_id);
			$arr_insert = array();
			foreach ($arr_crawler_insert as &$v)
			{
				if (in_array($v['crawler_chapter_id'], $arr_diff))
				{
					array_push($arr_insert, $v);
				}
			}
			//var_dump($arr_insert);
			if (!empty($arr_insert))
			{
				$result = $obj_chapterdao->insert_batch($arr_insert);
				var_dump($result);
			}
		}
	}
	
	public function getContentChapter()
	{
		$this->load->model('Mongvn_storydao');
		$this->load->model('Mongvn_chapterdao');

		$objDao = new Mongvn_storydao(MASTER);
		$objChapterDao = new Mongvn_chapterdao(MASTER);
		
		$arr_chapter = $objChapterDao->get_story_crawler(10);
		
		foreach ($$arr_chapter as $chapter) {
			$story_slug = 'Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc';
			if (!is_dir('story/'.$story_slug)) {
				mkdir('./story/' . $story_slug, 0777, TRUE);
			}
			
			$objMongvn = new Mongvn();
			$link_chapter = 'http://ngontinh.vn/truyen/Vo-Truoc-Gia-Tren-Troi-Cua-Tong-Giam-Doc-Chuong-632-Anh-yeu-em-chinh-van-Dai-Ket-Cuc/451011.htm';
			$data = 'Some file data';
			$data = $objMongvn->get_content_chapter($link_chapter);
			//var_dump($re);die;
			$this->load->helper('file');
			$file_name = '1.txt';
			if ( ! write_file('./story/'.$story_slug.'/'.$file_name, $data))
			{
				echo 'Unable to write the file';
			}
			else
			{
				echo 'File written!';
			}
		}
		
		
		
		//$this->output->enable_profiler(TRUE);
// 		$this->load->model('Webtruyen');
// 		$this->load->model('Chapterdao');
// 		$obj_chapterdao = new Chapterdao();
// 		$lst = $obj_chapterdao->get(50,0, array('status'=> 0));
// 		$arr_data_update = array();
// 		foreach ($lst as $item)
// 		{
// 			$obj_webtruyen = new Webtruyen();
// 			$linkChapter = $item->crawler_url;
// 			$content = $obj_webtruyen->getContentChapter($linkChapter);
			
			
// 			$data = array();
// 			$data ['id'] = $item->id;
// 			$data['status'] = 1;
// 			$data['content'] = $content;
			
// 			array_push ( $arr_data_update, $data );
// 		}
		
// 		$re = $obj_chapterdao->update_batch($arr_data_update);
		var_dump($re);
		
	}
	
	private function get_array_value($arr_input, $key)
	{
		$arr_data = array();
		foreach ($arr_input as $k=>$v)
		{
			if(null != $v[$key])
			{
				array_push($arr_data, $v[$key]);
			}
		}
		return $arr_data;
	}
}

<?php
/**
 * @name 設定のコントローラ
 * @copyright (C)201４ Sevenmedia Inc.
 * @author FJN
 *　@version 1.0
 */
class Crawler extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->data['controller'] = 'crawler';
		ini_set('memory_limit', '1204M');
		set_time_limit(0);
	}

	public function GetStoryManga24h(){
		try {
			$objManga24h = new Manga24h();
			$a =  $objManga24h->getListManga();
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
			echo 'da chay';
			log_message('crontab','da chay');
			
		} catch (Exception $e) {
			log_message('error',$e->getMessage());
			show_error($e->getMessage());
		}
	}
	
	public function getStory($name = 'webtruyen')
	{
		//$this->output->enable_profiler(TRUE);
		if ('webtruyen' == $name)
		{
			$this->load->model('Crawler_m_datadao');
			$objM = new Crawler_m_datadao();
			
			$website = $objM->get_by_FIELD('key', $name, TRUE);
			
			$total_page = $objM->get_value_by_key('total_page', $website->id);
			
			$this->load->model('Webtruyen');
			$obj_webtruyen = new Webtruyen();
			$total_page = $obj_webtruyen->get_total_page();
			for ($i = 1; $i <= $total_page; $i++)
			{
				$obj_webtruyen->set_start_page($i);
				$obj_webtruyen->set_end_page($i);
				$arr_stories_crawler = $obj_webtruyen->get_list_stories();
					
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
	
	public function get_info_stories($id = 0)
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
		$this->load->model('Storiesdao');
		$obj_storiesdao = new Storiesdao();
		$story = $obj_storiesdao->get_by_id(107);
		$this->load->model('Webtruyen');
		$obj_webtruyen = new Webtruyen();
		//echo ($obj_webtruyen->getTotalManga());
		$data_insert = $obj_webtruyen->getListChapter($story->id,$story->crawler_stories_id, $story->number_page);
		$this->load->model('Chapterdao');
		$obj_chapterdao = new Chapterdao();
		$re = $obj_chapterdao->insert_batch($data_insert);
		var_dump($re);
	}
	
	public function getContentChapter()
	{
		$this->load->model('Webtruyen');
		$obj_webtruyen = new Webtruyen();
		$linkChapter = 'http://webtruyen.com/khong-yeu-thi-bien/chuong-2_641191.html';
		$obj_webtruyen->getContentChapter($linkChapter);
	}
}

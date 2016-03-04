<?php
require_once APPPATH.'models/MY_Model.php';
class Mongvn_storydao extends MY_Model {
	var $table = 'mongvn_story';
	var $db_params = SLAVE;
	
	function __construct($db_params = SLAVE) {
		$this->db_params = $db_params;
		parent::__construct($this->table);
	}
	
	public function get_story_crawler($limit = NULL, $status = 1) {
		return $this->get($limit,NULL,array('status' => $status, 'status_crawler_info' => 0));
	}
	
	public function get_story_crawler_chapter($limit = NULL, $status = 1) {
		return $this->get($limit,NULL,array('status' => $status, 'status_crawler_info' => 1, 'status_crawler_chapter' => 0));
	}
}
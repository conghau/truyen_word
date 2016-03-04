<?php
require_once APPPATH.'models/MY_Model.php';
class Mongvn_chapterdao extends MY_Model {
	var $table = 'mongvn_chapter';
	var $db_params = SLAVE;
	
	function __construct($db_params = SLAVE) {
		$this->db_params = $db_params;
		parent::__construct($this->table);
	}
	
	public function get_chapter_crawler_content($limit = NULL, $status_crawler_content = 0) {
		return $this->get($limit,NULL,array('status_crawler_content' => $status_crawler_content));
	}
}
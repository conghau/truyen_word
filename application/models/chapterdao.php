<?php
/**
 * Stories dao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Chapterdao extends MY_Model {

	/**
	 * Table users
	 * 
	 * @var string
	 */
	var $table = 'tbl_chapters';
	
	/**
	 * Mode db
	 * 
	 * @var String
	 */
	var $db_params = SLAVE;
	
	/**
	 * contructor
	 * 
	 * @param string $db_params
	 */
	function __construct($db_params = SLAVE) 
	{
		$this->db_params = $db_params;
		parent::__construct($this->table);
	}
}
<?php
/**
 * Stories dao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Storiesdao extends MY_Model {

	/**
	 * Table users
	 * 
	 * @var string
	 */
	var $table = 'tbl_stories';
	
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
	
	function get_key()
	{
		$sql = <<<SQL
SELECT `key` FROM $this->table
SQL;
		$result = $this->db->query($sql)->result_array();
		return $result;
	}
	
}
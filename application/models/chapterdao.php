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
	
	function get_last_chapter($story_id)
	{
		$sql = <<<SQL
SELECT id,title FROM $this->table WHERE stories_id = ? ORDER BY id DESC LIMIT 1
SQL;
		$result = $this->db->query($sql, $story_id)->row();
		return $result;
	}
	
	function get_list_chapter($where_condition = NULL, $limit = NULL, $offset = 0, $select = '*')
	{
		$this->db->select($select);
		return $this->db->get_where($this->table, $where_condition, $limit, $offset)->result();
	}
}
<?php
/**
 * Crawler_m_datadao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Crawler_m_datadao extends MY_Model {
	/**
	 * Table users
	 *
	 * @var string
	 */
	var $table = 'crawler_m_data';
	
	/**
	 * contructor
	 *
	 */
	function __construct()
	{
		parent::__construct($this->table);
	}
	
	public function get_value_by_key($key = '', $parent_id = '')
	{
		$this->db->select('value');
		$this->db->where('key', $key);
		if ('' != $parent_id)
		{
			$this->db->where('parent_id', $parent_id);
		}
		return $this->db->get($this->table)->row()->value;
	}
}
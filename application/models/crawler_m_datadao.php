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
	
	/**
	 * get_value_by_key
	 * @param string $key
	 * @param boolean $decode
	 * @param boolean $to_array
	 */
	public function  get_value_by_key( $key = '', $decode = FALSE, $to_array = FALSE) {
		$this->db->select('value');
		$this->db->where('key', $key);
		$re = $this->db->get($this->table)->row()->value;
		
		if(NULL != $re && TRUE == $decode) {
			return json_decode($re, $to_array);
		}
		return $re;
	}
	
	public function update_value_by_key($key='', $value) {
		$this->db->where('key', $key);
		$this->db->update($this->table, array('value' => $value));
	}
}
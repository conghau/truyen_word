<?php
/**
 * Coupon dao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Coupondao extends MY_Model {
	/**
	 * Table users
	 *
	 * @var string
	 */
	var $table = 'tbl_coupon';
	
	/**
	 * contructor
	 *
	 */
	function __construct()
	{
		parent::__construct($this->table);
	}
	
	/**
	 * get_id_by_code
	 * 
	 * @param String $code
	 * @return number
	 */
	function get_id_by_code($code)
	{
		$result = $this->get_by_FIELD('code', $code);
		if (NULL == $result)
		{
			return NULL;
		}
		return $result[0]->id;
	}
}
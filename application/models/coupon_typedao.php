<?php
/**
 * Coupon Type dao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Coupon_typedao extends MY_Model {
	/**
	 * Table users
	 *
	 * @var string
	 */
	var $table = 'tbl_coupon_type';
	
	/**
	 * contructor
	 *
	 */
	function __construct()
	{
		parent::__construct($this->table);
	}
	
	/**
	 * Get discount by id
	 * 
	 * @param int $type_id
	 * @return number
	 */
	public function get_discount_by_id($type_id)
	{
		$result = $this->get_by_id($type_id);
		if (NULL == $result)
		{
			return 0;
		}
		return $result->discount;
	}
}
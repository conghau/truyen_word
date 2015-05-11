<?php
require_once APPPATH.'models/MY_Model.php';
class Productdao extends MY_Model {
	/**
	 * Table users
	 *
	 * @var string
	 */
	var $table = 'tbl_product';
	
	/**
	 * contructor
	 *
	 */
	function __construct()
	{
		parent::__construct($this->table);
	}
	/**
	 * get_stock_quantity
	 * 
	 * @param number $product_id
	 * @return number
	 */
	public function get_stock_quantity($product_id = 0)
	{
		if (0 == $product_id || ! is_numeric($product_id))
		{
			return 0;
		}
		$result = $this->get_by_id($product_id);
		if (NULL == $result)
		{
			return 0;
		}
		return $result->stock_quantity;
	}
}
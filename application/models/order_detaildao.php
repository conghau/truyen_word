<?php
/**
 * Order Detail dao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Order_detaildao extends MY_Model {
	/**
	 * Table users
	 *
	 * @var string
	 */
	var $table = 'tbl_orderdetail';
	
	/**
	 * contructor
	 *
	 */
	function __construct()
	{
		parent::__construct($this->table);
	}
}
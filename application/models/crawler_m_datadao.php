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
}
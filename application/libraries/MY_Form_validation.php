<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Form Validation Class
 *
 * @author		HauTruong
 * 
 */
class MY_Form_validation extends CI_Form_validation {
	public $CI;
	
	public function __construct() {
		parent::__construct();
		$this->CI->load->helper('language', 'cookie');
	}

	/**
	 * run
	 * 
	 * @see CI_Form_validation::run()
	 */
	function run($module = '', $group = '') {
		(is_object($module)) AND $this->CI =& $module;
		return parent::run($group);
	}

	/**
	 * error_array
	 * 
	 * @return boolean|multitype:
	 */
	function error_array()
	{
		if (count($this->_error_array) === 0)
		{
			return FALSE;
		}
		return $this->_error_array;
	
	}
	
	/**
	 * check stock quantity
	 * 
	 * @param int $str
	 * @param int $product_id
	 * @return TRUE if $str < stock_quantity ELSE FALSE
	 */
	function check_stock_quantity($str, $product_id)
	{
		if ( ! is_numeric($product_id))
		{
			return FALSE;
		}
		$this->CI->load->model('Productdao');
		$result = $this->CI->Productdao->get_stock_quantity($product_id);
		if ($str > $result)
		{
			return FALSE;
		}
		return TRUE;
	}
	
	/**
	 * check_used_coupon
	 * 
	 * @param String $str
	 */
	function check_used_coupon($str)
	{
		$this->CI->load->model('Coupondao');
		$result = $this->CI->Coupondao->get_by_FIELD('code', $str);
		if (NULL != $result)
		{
			if( STATUS_USED == $result[0]->status)
			{
				return TRUE;
			}
		}
		return FALSE;
	}
	
	/**
	 * check_unused_coupon
	 *
	 * @param String $str
	 */
	function check_unused_coupon($str)
	{
		$this->CI->load->model('Coupondao');
		$result = $this->CI->Coupondao->get_by_FIELD('code', $str);
		if (NULL != $result)
		{
			if( STATUS_UNUSED == $result[0]->status)
			{
				return TRUE;
			}
		}
		return FALSE;
	}
	
	/**
	 * check_expired_coupon
	 * 
	 * @param String $str
	 */
	function check_expired_coupon($str)
	{
		$today = date("Y-m-d");
		$this->CI->load->model('Coupondao');
		$result = $this->CI->Coupondao->get_by_FIELD('code', $str);
		if (NULL != $result)
		{
			if(strtotime($today) < strtotime($result[0]->expired_date))
			{
				return TRUE;
			}
		}
		return FALSE;
	}
	
	/**
	 * is_exist
	 * 
	 * @param String $str
	 * @param String $field
	 * @return boolean
	 */
	public function is_exist($str, $field) {
		return !$this->is_unique($str, $field);
	}
}

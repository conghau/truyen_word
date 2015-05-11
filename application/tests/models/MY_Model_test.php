<?php
/**
 * MY_Model Test
 * 
 * @author HauTruong
 *
 */
class MY_Model_Test extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('MY_Model');
	}
}
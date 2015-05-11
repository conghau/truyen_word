<?php
//---------------------Todo list----------------------//
//* Test function : 
//----------------------------------------------------//

/**
 * Order dao Dao Test
 * 
 * @author HauTruong
 *
 */
class Orderdao_Test extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Orderdao');
	}
}
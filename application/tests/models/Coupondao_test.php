<?php
//---------------------Todo list----------------------//
//* Test function : get_id_by_code
//		|+ When code not exsit
//		|+ When code exsit
//----------------------------------------------------//

/**
 * Coupon Dao Test
 * 
 * @author HauTruong
 *
 */
class Coupondao_Test extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Coupondao');
	}
	
	public function test_get_id_by_code_ShouldReturn2WhenCodeIsCP00000000024()
	{
		//give
		$code = 'CP00000000024';
		//when
		$result = $this->CI->Coupondao->get_id_by_code($code);
		//then
		$this->assertEquals(2, $result);
	}
	
	public function test_get_id_by_code_ShouldReturnNULLWhenCodeIsAAAAAAAAAAAA()
	{
		//give
		$code = 'AAAAAAAAAAAAA';
		//when
		$result = $this->CI->Coupondao->get_id_by_code($code);
		//then
		$this->assertEquals(NULL, $result);
	}
}
	
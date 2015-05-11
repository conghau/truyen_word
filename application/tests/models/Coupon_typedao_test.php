<?php
//---------------------Todo list----------------------//
//* Test function : get_discount_by_id
//		|+ When id not exsit
//		|+ When id exsit
//----------------------------------------------------//

/**
 * Coupon Type Dao Test
 * 
 * @author HauTruong
 *
 */
class Coupon_typedao_Test extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Coupon_typedao');
	}
	
	public function test_get_discount_by_id_ShouldReturn10WhenIdIs1()
	{
		//give
		$id = 1;
		//when
		$result = $this->CI->Coupon_typedao->get_discount_by_id($id);
		//then
		$this->assertEquals(10, $result);
	}
	
	public function test_get_discount_by_id_ShouldReturn0WhenIdIs0()
	{
		//give
		$id = 0;
		//when
		$result = $this->CI->Coupon_typedao->get_discount_by_id($id);
		//then
		$this->assertEquals(0, $result);
	}
	
	public function test_get_discount_by_id_ShouldReturn0WhenIdIsABC()
	{
		//give
		$id = ABC;
		//when
		$result = $this->CI->Coupon_typedao->get_discount_by_id($id);
		//then
		$this->assertEquals(0, $result);
	}

}
	
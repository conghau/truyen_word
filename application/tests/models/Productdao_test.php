<?php
//---------------------Todo list----------------------//
//* Test function : get_stock_quantity
//		|+ When product not exsit
//		|+ When product exsit
//		|+ When product id = 0
//		|+ When product id = string
//----------------------------------------------------//

/**
 * Product Dao Test
 * 
 * @author HauTruong
 *
 */
class Productdao_Test extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Productdao');
	}
	
	public function test_get_stock_quantity_ShouldReturn40WhenProductIdIs1()
	{
		//give
		$product_id = 1;
		//when
		$result = $this->CI->Productdao->get_stock_quantity($product_id);
		//then
		$this->assertEquals(40, $result);
	}
	
	public function test_get_stock_quantity_ShouldReturn0WhenProductIdIs0()
	{
		//give
		$product_id = 0;
		//when
		$result = $this->CI->Productdao->get_stock_quantity($product_id);
		//then
		$this->assertEquals(0, $result);
	}
	
	public function test_get_stock_quantity_ShouldReturn0WhenProductIdIs100()
	{
		//give
		$product_id = 100;
		//when
		$result = $this->CI->Productdao->get_stock_quantity($product_id);
		//then
		$this->assertEquals(0, $result);
	}
	
	public function test_get_stock_quantity_ShouldReturn0WhenProductIdIsABC()
	{
		//give
		$product_id = 'ABC';
		//when
		$result = $this->CI->Productdao->get_stock_quantity($product_id);
		//then
		$this->assertEquals(0, $result);
	}
}

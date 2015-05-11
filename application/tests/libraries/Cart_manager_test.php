<?php
//---------------------Todo list----------------------//
//* Test function : Insert
//----------------------------------------------------//

/**
 * Cart_manager_test
 * 
 * @author Hau Truong
 *
 */
class Cart_manager_test extends PHPUnit_Framework_TestCase
{
	protected $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('cart_manager');
	}
	
	public function testInsert()
	{
		$cart1 = array('id'=>1, 'quantity' => 2 , 'name' => 'IP6', 'price' => 1234000);
		$this->CI->cart_manager->insert($cart1);
		$re =  $this->CI->cart_manager->get_cart_content();
	}
	
}
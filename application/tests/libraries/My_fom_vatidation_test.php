<?php
//---------------------Todo list----------------------//
//* Test function : check_used_coupon
//		|+ When coupon had used
//		|+ When coupon is inused
//* Test function : is_exist
//		|+ When coupon exsit 
//		|+ When coupon not exsit
//* Test function : check_expired_coupon
//		|+ When coupon has expired 
//		|+ When coupon hasn't expired
//----------------------------------------------------//


/**
 * MY_Form_validation_test
 * 
 * @author HauTruong
 *
 */
class MY_Form_validation_test extends PHPUnit_Framework_TestCase
{
	protected $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('form_validation');
	}
	
	public function test_check_used_coupon_ShouldReturnFALSEWhenCouponHadUsed()
	{
		//give
		$coupon = 'IP000000024';
		//when
		$result = $this->CI->form_validation->check_used_coupon($coupon);
		//then
		$this->assertFalse($result);
		
	}
	
	public function test_check_used_coupon_ShouldReturnFALSEWhenCouponUnUsed()
	{
		//give
		$coupon = 'IP000000001';
		//when
		$result = $this->CI->form_validation->check_used_coupon($coupon);
		//then
		$this->assertFalse($result);
	
	}
	
	public function test_check_unused_coupon_ShouldReturnFALSEWhenCouponHadUsed()
	{
		//give
		$coupon = 'IP0000000024';
		//when
		$result = $this->CI->form_validation->check_unused_coupon($coupon);
		//then
		$this->assertFalse($result);
	
	}
	
	public function test_check_unused_coupon_ShouldReturnTRUEWhenCouponUnUsed()
	{
		//give
		$coupon = 'IP000000001';
		//when
		$result = $this->CI->form_validation->check_unused_coupon($coupon);
		//then
		$this->assertTrue($result);
	
	}
	
	public function test_check_is_exist_ShouldReturnTRUEWhenCouponExist()
	{
		//give
		$coupon = 'IP000000001';
		//when
		$result = $this->CI->form_validation->is_exist($coupon, 'tbl_coupon.code');
		//then
		$this->assertTrue($result);
	
	}
	
	public function test_check_is_exist_ShouldReturnFALSEWhenCouponNotExist()
	{
		//give
		$coupon = 'AAAAAAAAAAA';
		//when
		$result = $this->CI->form_validation->is_exist($coupon, 'tbl_coupon.code');
		//then
		$this->assertFalse($result);
	
	}
	
	public function test_check_expired_coupon_ShouldReturnTRUEWhenCouponNotExpired()
	{
		//give
		$coupon = 'IP000000001';
		//when
		$result = $this->CI->form_validation->check_expired_coupon($coupon);
		//then
		$this->assertTrue($result);
	
	}
	
	public function test_check_expired_coupon_ShouldReturnFALSEWhenCouponExpired()
	{
		//give
		$coupon = 'CP00000020012';
		//when
		$result = $this->CI->form_validation->check_expired_coupon($coupon);
		//then
		$this->assertFalse($result);
	
	}
}
?>
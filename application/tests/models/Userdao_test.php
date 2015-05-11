<?php
//---------------------Todo list----------------------//
//* Test function : login
//		|+ When UserName or Password incorrect
//		|+ When UserName and Password correct and isActive = 1
//		|+ When UserName and Password correct and isActive = 0
//* Test function : get_by_username_password
//		|+ When UserName or Password incorrect
//		|+ When UserName and Password correct
//* Test function : get_id_by_username
//		|+ When UserName is exsit
//		|+ When UserName is notexsit
//----------------------------------------------------//

/**
 * UserDao Test
 * 
 * @author HauTruong
 *
 */
class UserDao_Test extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('UserDao');
	}
	
	public function test_login_ShouldReturnFalseWhenUserNameAndPasswordIsInCorrect()
	{
		//give
		$username ='hautruong';
		$password ='c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b2c411f988e717a';
		//when
		$result = $this->CI->UserDao->login($username, $password);
		//then
		$this->assertFalse($result);
	}
	
	public function test_login_ShouldReturnFalseWhenUserNameAndPasswordIsCorrectAndIsActiveIs0()
	{
		//give
		$username ='hieu';
		$password ='afc8e16842061ea3dbb023bf5f08d1bc3a728429313fab0cba30f60954ff9064';
		//when
		$result = $this->CI->UserDao->login($username, $password);
		//then
		$this->assertFalse($result);
	}
	
	public function test_login_ShouldReturnTrueWhenUserNameAndPasswordIsCorrectAndIsActiveIs1()
	{
		//give
		$username ='hung';
		$password ='c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b2c411f988e717a';
		//when
		$result = $this->CI->UserDao->login($username, $password);
		//then
		$this->assertTrue($result);
	}
	
	public function test_get_by_username_password_ShouldReturnObjectWhenUsernameAndPasswordIsCorrect()
	{
		//give
		$username ='hung';
		$password ='c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b2c411f988e717a';
		//when
		$result = $this->CI->UserDao->get_by_username_password($username, $password);
		//then
		$this->assertEquals('hung',$result->user_name);
		$this->assertEquals('c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b2c411f988e717a',$result->password);
	}
	
	public function test_get_by_username_password_ShouldReturnNULLWhenUsernameAndPasswordIsInCorrect()
	{
		//give
		$username ='hieu';
		$password ='c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b2c411f988e717a';
		//when
		$result = $this->CI->UserDao->get_by_username_password($username, $password);
		//then
		$this->assertEquals(NULL,$result);
		$this->assertNotEquals('hieu',$result->user_name);
		$this->assertNotEquals('c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b2c411f988e717a',$result->password);
	}
	
	public function test_get_id_by_username_ShouldReturn2WhenUsernameIsHieu()
	{
		//give
		$username ='hieu';
		//when
		$result = $this->CI->UserDao->get_id_by_username($username);
		//then
		$this->assertEquals(2,$result);
	}
	
	public function test_get_id_by_username_ShouldReturn0WhenUsernameIsABC()
	{
		//give
		$username ='ABC';
		//when
		$result = $this->CI->UserDao->get_id_by_username($username);
		//then
		$this->assertEquals(0,$result);
	}
}

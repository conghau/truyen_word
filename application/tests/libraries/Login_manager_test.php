<?php
//---------------------Todo list----------------------//
//* Test function : check_login
//		|+ When have exist session 'sess_login'
//		|+ When have not exist session 'sess_login'
//* Test function : process_login
//		|+ When UserName or Password incorrect
//		|+ When UserName and Password correct and isActive = 1
//		|+ When UserName and Password correct and isActive = 0
//* Test function : logout
//		|+ When have exist session 'sess_login'
//		|+ When have not exist session 'sess_login'
//----------------------------------------------------//

/**
 * Login Manager Test
 * 
 * @author HauTruong
 *
 */
class Login_Manager_Test extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp()
	{
		if (! isset($_SESSION))
		{
			session_start();
		}
		
		$this->CI =& get_instance();
		$this->CI->load->library('login_manager');
	}
	
	public function test_check_login_ShouldReturnTrueWhenExistSession()
	{
		//give
		$_SESSION['sess_login'] = TRUE;
		//when
		$result = $this->CI->login_manager->check_login();
		//then
		$this->assertTrue($result);
	}
	
	public function test_check_login_ShouldReturnTrueWhenNotExistSession()
	{
		//give
		unset($_SESSION['sess_login']);
		//when
		$result = $this->CI->login_manager->check_login();
		//then
		$this->assertFalse($result);
	}
	
	public function test_logout_ShouldReturnNULLWhenNotExistSession()
	{
		//give
		unset($_SESSION['sess_login']);
		//when
		$result = $this->CI->login_manager->logout();
		//then
		$this->assertEquals(NULL, $_SESSION['sess_login']);
	}
	
	public function test_logout_ShouldReturnNULLWhenExistSession()
	{
		//give
		$_SESSION['sess_login'] = TRUE;
		//when
		$result = $this->CI->login_manager->logout();
		//then
		$this->assertEquals(NULL, $_SESSION['sess_login']);
	}
	
	public function test_process_login_ShouldReturnFalseWhenUserNameAndPasswordIsInCorrect()
	{
		//give
		$username ='hautruong';
		$password ='AAAAAAAAA';
		//when
		$result = $this->CI->login_manager->process_login($username, $password);
		//then
		$this->assertFalse($result);
	}
	
	public function test_process_login_ShouldReturnFalseWhenUserNameAndPasswordIsCorrectAndIsActiveIs0()
	{
		//give
		
		$username ='hung';
		$password ='c4410f72e4467dfe7d9cd78edbb2f5786bdccaa54a6010782b2c411f988e717a';
		//when
		$result = $this->CI->login_manager->process_login($username, $password);
		//then
		$this->assertFalse($result);
	}
	
	public function test_process_login_ShouldReturnTrueWhenUserNameAndPasswordIsCorrectAndIsActiveIs1()
	{
		//give
		$username ='hieu';
		$password ='afc8e16842061ea3dbb023bf5f08d1bc3a728429313fab0cba30f60954ff9064';
		//when
		$result = $this->CI->login_manager->process_login($username, $password);
		//then
		$this->assertTrue($result);
	}
}
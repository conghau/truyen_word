<?php

/**
 * Simple utility class to handle logins.
 * 
 * @author HauTruong
 */
class Login_Manager {
	
	protected $CI;
	
	public function __construct()
	{
		$this->CI =& get_instance(); 
	}
	/**
	 * check_login
	 * 
	 * @return boolean
	 */
	public function check_login()
	{
		if (isset($_SESSION['sess_login']))
		{
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * process_login
	 * Validates that a username and password are correct.
	 * 
	 * @param object $user The user containing the login information.
	 * @return boolean
	 */
	public function process_login($username, $password)
	{
		$this->CI->load->model('Userdao');
		$success = $this->CI->Userdao->login($username, $password);
		if($success)
		{
			$user_id = $this->CI->Userdao->get_id_by_username($username);
			$sess_login = array('username' => $username,'user_id' => $user_id);
			$_SESSION['sess_login'] = $sess_login;
		}
		return $success;
	}
	
	/**
	 * logout
	 * Logout user
	 */
	public function logout()
	{
		unset($_SESSION['sess_login']);
		session_destroy();
	}
}

<?php
/**
 * Order Controller
 * 
 * @author HauTruong
 *
 */
class Order extends MY_Controller {
	/**
	 * contructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('login_manager');
	
		if (! $this->login_manager->check_login())
		{
			redirect(base_url().'login');
		}
	
		$this->data['user_logined'] = $_SESSION['sess_login'];
	}
}
<?php
/**
 * Product controller
 * 
 * @author HauTruong
 *
 */
class Product extends MY_Controller {
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
		
		$this->data['user_logined'] = $_SESSION['sess_login']['username'];
	}
	
	/**
	 * show_list
	 * show all list product
	 * 
	 * @return view
	 */
	public function show_list()
	{
		try
		{
			$this->load->model('Productdao');
			$lst_product = $this->Productdao->get();
			$this->data['lst_product'] = $lst_product;
			
			if (isset($_SESSION['msg_error_check_product']))
			{
				$this->data['msg_error_check_product'] = $_SESSION['msg_error_check_product'];
				unset($_SESSION['msg_error_check_product']);
			}
			
			$this->parser->parse("product/list.tpl", $this->data);
		}
		catch (Exception $e)
		{
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
		}
	}
}
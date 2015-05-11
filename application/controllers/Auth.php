<?php
/**
 * Auth controller
 * 
 * @author HauTruong
 *
 */
class Auth extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('login_manager');
	}

	/**
	 * login
	 * 
	 */
	public function login()
	{
		try
		{
			if ($this->login_manager->check_login())
			{
				redirect(base_url().'product/list');
			}
			if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET')
			{
				// Load the template from the views directory
				$this->parser->parse("auth/login1.tpl", $this->data);
			}
			else
			{
				$config = [
					[
						'field' => 'username',
						'label' => 'Username',
						'rules' => 'required'
					],
					[
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'required'
					]
				];
				$this->load->library('form_validation');
				$this->form_validation->set_rules($config);
				if (FALSE == $this->form_validation->run())
				{
					$this->parser->parse("auth/login1.tpl", $this->data);
				}
				else
				{
					$username = $this->input->post('username', TRUE);
					$password = hash('sha256',$this->input->post('password', TRUE));
					
					$login_redirect = $this->login_manager->process_login($username, $password);
					if ($login_redirect)
					{
						redirect(base_url().'product/list');
					}
					else
					{
						$this->data['msg_error'] = 'Login Fail';
						$this->parser->parse("auth/login1.tpl", $this->data);
					}
				}
				
			}
		}
		catch (Exception $e)
		{
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
		}
	}
	
	public function logout()
	{
		try
		{
			$this->login_manager->logout();
			redirect(base_url().'login');
		}
		catch (Exception $e)
		{
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
		}
	}
}
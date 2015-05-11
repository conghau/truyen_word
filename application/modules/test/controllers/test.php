<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('login_manager');
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->parser->parse("login1.tpl", $this->data);
	}
}

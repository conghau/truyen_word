<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * My Controller
 * 
 * @author HauTruong
 */
class MY_Controller extends MX_Controller {
	
	var $data = array();
	
	/**
	 * Contructor
	 */
	function __construct()
	{
		parent::__construct();
		
		if (! isset($_SESSION))
		{
			session_start();
		}
		//init array helper
		$helpers = array('cookie', 'language', 'url');
		$this->load->helper($helpers);
		
		//init lib
		$this->load->library('parser');
		
		//init base url
		$this->data['base_url'] = base_url();
		$this->data['fixed_base_url'] = base_url().'themes/';
	}
}
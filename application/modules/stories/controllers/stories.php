<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stories extends MY_Controller {
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
		$this->parser->parse("home.tpl", $this->data);
	}
	
	public function detail($id)
	{
		$this->load->model('Storiesdao');
		$this->load->model('Chapterdao');
		
		$obj_storiesdao = new Storiesdao();
		$story = $obj_storiesdao->get_by_id($id);
		
		$obj_chapterdao = new Chapterdao();
		$arr_chapters = $obj_chapterdao->get_by_FIELD('stories_id', $id);
		
		$this->data['story'] = $story;
		$this->data['arr_chapters'] = $arr_chapters;
		$this->parser->parse("detail.tpl", $this->data);
	}
	
	public function chapter()
	{
		$this->parser->parse("chapter.tpl", $this->data);
	}
	
	public function movie()
	{
		$this->parser->parse("movie.tpl", $this->data);
	}
}

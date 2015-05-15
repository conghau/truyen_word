<?php
class Manager extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getConfig()
	{
		//$this->output->enable_profiler(TRUE);
		$this->load->model('Crawler_m_datadao');
		$objC = new Crawler_m_datadao();
		
		$lst_website = $objC->get_by_FIELD('parent_id', NULL);
		
		$lst_config = $objC->get_by_FIELD('parent_id IS NOT NULL', NULL);
		$data = array();
		foreach ($lst_website as $item)
		{
			
			$data[$item->key]['url'] = $item->value;
			foreach ($lst_config as $config)
			{
				if ($config->parent_id == $item->id)
				{
					$data[$item->key][$config->key] = $config->value;
				}
			}
		}
		$this->data['arr_data'] = $data;
		$this->parser->parse("listconfig.tpl", $this->data);
	}
}
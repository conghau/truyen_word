<?php
/**
 * Order dao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Orderdao extends MY_Model {
	/**
	 * Table users
	 *
	 * @var string
	 */
	var $table = 'tbl_order';
	
	/**
	 * contructor
	 *
	 */
	function __construct()
	{
		parent::__construct($this->table);
	}
	
	function insert_order($data_order, $data_order_detail)
	{
		try
		{
			$this->db->trans_begin();
			$id = $this->save($data_order);
			if (0 != $id) {
				foreach ($data_order_detail as &$item)
				{
					$item['order_id'] = $id;
				}
					
				$this->db->insert_batch('tbl_orderdetail', $data_order_detail);
				
				if ($this->db->trans_status() === FALSE)
				{
					$this->db->trans_rollback();
				}
				else
				{
					$this->db->trans_commit();
				}
			}
			return $id;
		}
		catch (Exception $e)
		{
			$this->db->trans_rollback();
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
			return 0;
		}
	}
}
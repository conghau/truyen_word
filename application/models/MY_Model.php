<?php
/**
 * My model
 * 
 * @author HauTruong
 *
 */
class MY_Model extends CI_Model {
	
	/**
	 * Table
	 *
	 * @var string
	 */
	var $table;
	
	function __construct($_table)
	{
		parent::__construct();
		$this->table = $_table;
	}
	
	/**
	 * Query
	 *
	 * Runs the specified query and populates the current object with the results.
	 *
	 * Warning: Use at your own risk.  This will only be as reliable as your query.
	 *
	 * @param	string $sql The query to process
	 * @param	array|bool $binds Array of values to bind (see CodeIgniter)
	 * @return	array Object
	 */
	public function query($sql, $binds = FALSE)
	{
		// Get by objects properties
		$query = $this->db->query($sql, $binds);
	
		return  $query->result();
	}
	
	/**
	 * Get
	 *
	 * Get objects from the database.
	 *
	 * @param	integer|NULL $limit Limit the number of results.
	 * @param	integer|NULL $offset Offset the results when limiting.
	 * @return	array Object
	 */
	public function get($limit = NULL, $offset = NULL)
	{
		// Get by built up query
		$query = $this->db->get($this->table, $limit, $offset);
		return $query->result();
	}
	
	/**
	 * Get by id
	 *
	 * Get 1 record from the database.
	 *
	 * @param	integer|NULL $id .
	 * @return	array Object
	 */
	public function get_by_id($id = 0)
	{
		if (0 == $id || !is_numeric($id))
		{
			return NULL;
		}
		$binds = array($id);
		$sql = <<<SQL
			select * from $this->table where id = ?
SQL;
		
		// Get by built up query
		$query = $this->db->query($sql, $binds);
		return $query->row();
	}
	
	/**
	 * Get by FIELD
	 *
	 * Get object from the database by Field
	 *
	 * @param	string|NULL $field .
	 * @param	string|NULL $val of field
	 * @param 	boolean $single_row
	 * 	 * @param 	string select column
	 * @return	array Object 
	 */
	public function get_by_FIELD($field = NULL, $val = NULL, $single_row = FALSE , $select = '*', $convert_array = FALSE)
	{
		if (NULL == $field)
		{
			return NULL;
		}
		if (NULL !== $val) 
		{
			$val = $this->db->escape_str($val);
		}
		if (! is_null($select))
		{
			$this->db->select($select);
		}
		$query = $this->db->get_where($this->table, array($this->db->escape_str($field) => $val));
		if ($single_row == TRUE)
		{
			return $query->row();
		}
		if ($convert_array == TRUE)
		{
			return $query->result_array();
		}
		return $query->result();
	}
	
	/**
	 * Save
	 *
	 * Saves the current record
	 * If object is supplied, saves relations between this object and the supplied object(s).
	 *
	 * @param	mixed $object Optional object to save or array of objects to save.
	 * @param	string $related_field Optional string to save the object as a specific relationship.
	 * @return	bool Success or Failure of the validation and save.
	 */
	public function save($arrData = NULL)
	{
		$result = array();
	
		if(empty($arrData) || !is_array($arrData))
		{
			return 0;
		}
		
		//check 
		if(array_key_exists('id', $arrData)) {
			$id = $arrData['id'];
			$this->db->where('id', $id);
			$this->db->update($this->table, $arrData);
			return $id;
		}
		else
		{
			$this->db->insert($this->table, $arrData);
			return $this->db->insert_id();
		}
	}
	
	public function insert_batch($arrData)
	{
		try
		{
			$this->db->trans_begin();
			$id = $this->db->insert_batch($this->table, $arrData);
			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
			}
			else
			{
				$this->db->trans_commit();
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
	
	public function update_batch($arrData)
	{
		try
		{
			$this->db->trans_begin();
			$id = $this->db->update_batch($this->table, $arrData,'id');
			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				return FALSE;
			}
			else
			{
				$this->db->trans_commit();
			}
			return TRUE;
		}
		catch (Exception $e)
		{
			$this->db->trans_rollback();
			log_message('error', $e->getMessage());
			show_error($e->getMessage());
			return FALSE;
		}
	
	}
	
	
	/**
	 * count_record
	 * 
	 * @param array $arr_where_condition
	 * @return int;
	 */
	public function count_record($arr_where_condition = [])
	{
		$this->db->select('count(id) as id');
		$query = $this->db->get_where($this->table, $arr_where_condition);
		return $query->row()->id;
	}
}
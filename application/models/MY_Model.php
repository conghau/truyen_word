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
	 * @param	string|NULL $field.
	 * @param	string|NULL $val of field
	 * @return	array Object
	 */
	public function get_by_FIELD($field = NULL, $val = NULL)
	{
		if (NULL == $field)
		{
			return NULL;
		}
		$query = $this->db->get_where($this->table, array($this->db->escape_str($field) => $this->db->escape_str($val)));
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
}
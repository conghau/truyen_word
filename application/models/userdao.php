<?php
/**
 * User Dao
 * 
 * @author HauTruong
 *
 */
require_once APPPATH.'models/MY_Model.php';
class Userdao extends MY_Model {

	/**
	 * Table users
	 * 
	 * @var string
	 */
	var $table = 'tbl_user';
	
	/**
	 * Mode db
	 * 
	 * @var String
	 */
	var $db_params = SLAVE;
	
	/**
	 * contructor
	 * 
	 * @param string $db_params
	 */
	function __construct($db_params = SLAVE) 
	{
		$this->db_params = $db_params;
		parent::__construct($this->table);
	}
	
	/**
	 * get_by_username_password
	 * 
	 * @param string $username
	 * @param string $password
	 * @return Object | NULL
	 */
	public function get_by_username_password($username, $password)
	{
		$binds = array($username, $password);
		$sql = <<<SQL
SELECT * FROM $this->table WHERE user_name = ? and password = ?
SQL;
		$result = $this->db->query($sql, $binds)->row();
		return $result;
	}
	
	/**
	 * get_id_by_username
	 *
	 * @param string $username
	 * @return int
	 */
	public function get_id_by_username($username)
	{
		$sql = <<<SQL
SELECT * FROM $this->table WHERE user_name = ?
SQL;
		$result = $this->db->query($sql, $username)->row();
		return $result->id;
	}
	
	/**
	 * login
	 *
	 * @param string $username
	 * @param string $password
	 * @return TRUE, FALSE
	 */
	public function login($username, $password)
	{
		$result = $this->get_by_username_password($username, $password);
		if (NULL !== $result && STATUS_ISACTIVE == $result->isactive) {
			return TRUE;
		}
		return FALSE;
	}
}
<?php
class User_account extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	
	public function insert() {
		if (empty($this->username)) {
			throw new InvalidArgumentException('Username is empty.');
		}
	}
	
	
	public function update()
	{
		if (empty($this->user_id)) {
			throw new InvalidArgumentException('user_id cannot be empty.');
		}
		$user_id = $this->user_id;
		unset($this->user_id);
		$this->db->update($this->_name, $this, array('user_id' => $user_id));
		return $user_id;
	}
	
	public function fetchAll()
	{
		$query = $this->db->get('user_account');;
		return $query ;
	}
	
	public function fetchById($user_id)
	{
		if (empty($user_id)) {
			throw new InvalidArgumentException('user_id cannot be null.');
		}
		$sql = 'SELECT * FROM '.$this->_name.' WHERE user_id = ?';
		$query = $this->db->query($sql, array($user_id));
		$results = $query->result_array();
		return $results[0];
	}


	public function delete($user_ids)
	{
		if (empty($user_ids)) {
			throw new InvalidArgumentException('Must specify user_ids to delete.');
		}
		$sql = 'DELETE FROM '.$this->_name.' WHERE user_id IN (?)';
		$query = $this->db->query($sql, array($user_ids));
	}


	
	
	
}



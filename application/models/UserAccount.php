<?php

class UserAccount extends CI_Model
{
	public $user_id;
	public $last_name;
	public $first_name;
	public $birthdate;
	public $location;
	public $password_2;

	private $_name = 'UserAccount';

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	public function test()
	{
		$test = $this->db->query('SELECT * FROM user_account');
		foreach ($test->result() as $row)
				{
				   echo $row->last_name;
				}
	}
}

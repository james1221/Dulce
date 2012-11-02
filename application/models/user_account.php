<?php
class User_account extends CI_Model
{
	public $user_id;
	public $last_name;
	public $first_name;
	public $birthdate;
	public $location;
	public $password;

	private $_name = 'User_account';

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	
	
}



<?php

class BurialRecord extends CI_Model
{
	public $data;

	private $_name = 'BurialRecord';

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
}

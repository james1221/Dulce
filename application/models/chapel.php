<?php

class Chapel extends CI_Model
{
	public $data;

	private $_name = 'Chapel';

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
}

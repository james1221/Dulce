<?php

class Category extends CI_Model
{
	public $data;

	private $_name = 'Category';

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
}

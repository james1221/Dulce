<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Dulce extends CI_Controller {
	
	public function index() {
		$this->load->view('main_head');
		$this->load->view('homepage_body');
		$this->load->view('main_footer');
	}
	
	public function products() {
		
		$this->load->view('main_head');
		$this->load->view('main_footer', $data);
	}
}

?>
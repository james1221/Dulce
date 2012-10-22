<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dulce extends CI_Controller {
	
	public function index() {
		$data['page_title'] = 'Official Homepage';
		$this->load->view('main_headincludes', $data);
		$this->load->view('main_header');
		$this->load->view('homepage_body');
		$this->load->view('main_footer');
	}
	
	public function products() {
		$data['page_title'] = 'Products';
		$this->load->view('main_headincludes');
		$this->load->view('main_header');
		$this->load->view('homepage_body');
		$this->load->view('main_footer', $data);
	}
}

?>
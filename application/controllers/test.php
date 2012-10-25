<?php 

class Test extends CI_Controller {

	
	
	
	public function index()
	{
		
		$this->load->helper('html');
		$this->load->view('test');
		$this->load->model('UserAccount');
		$this->UserAccount->test();
 		$this->view->render();  
		
		
		
		
	}
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>
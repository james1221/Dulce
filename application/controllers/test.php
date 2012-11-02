<?php 

class Test extends CI_Controller {

	public function index()
	{
		echo "test";

		$this->load->model('user_account');
		$query = $this->user_account->fetchAll();
		foreach ($query->result() as $row)
			{
			   echo $row->user_id;
			   echo $row->last_name;
			   echo $row->first_name;
			}
	}
}

?>
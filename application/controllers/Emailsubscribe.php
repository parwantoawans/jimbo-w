<?php 

class Emailsubscribe extends CI_Controller
{
	public function index(){
		$data['email'] = $this->input->post('email');
		$this->EmailSubscribeModel->store($data);

		$this->session->set_flashdata('success', 'Thank you for subscribe !');
		redirect(base_url());
	}
}


?>
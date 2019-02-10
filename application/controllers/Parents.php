<?php

class Parents extends CI_Controller
{
	public function index(){
		$this->load->view('parents/index');
	}
	public function register(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->load->model('ParentsModel');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Pnone Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
				echo json_encode(
					array(
						'status' => false,
						'data' => validation_errors()
					)
				);
		}else{
			if($this->ParentsModel->register($this->input->post('username'), $this->input->post('password'), 
				$this->input->post('email'), $this->input->post('phone'), $this->input->post('password'))){
				echo json_encode(
					array(
						'status' => true
					)
				);
			}else{
				echo json_encode(
					array(
						'status' => false,
						'data' => 'data input failed'
					)
				);
			}
		}

	}
}
?>
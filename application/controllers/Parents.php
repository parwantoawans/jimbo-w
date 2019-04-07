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
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
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
			$cekExistUsername = $this->ParentsModel->checkUserName($this->input->post('username'));
			if(is_array($cekExistUsername) && count($cekExistUsername) > 0){
				echo json_encode(
					array(
						'status' => false,
						'data' => 'username already exists'
					)
				);
				return;
			}
			if($this->ParentsModel->register($this->input->post('username'), $this->input->post('fullname'), 
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
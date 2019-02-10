<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('ExtracuricullarModel');
	}
    public function index()
	{
		$data['extraData'] = $this->ExtracuricullarModel->get();
		$this->load->view('students/index', $data);
	}
}
?>
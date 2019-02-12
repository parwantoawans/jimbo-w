<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('ExtracuricullarModel');
		$this->load->model('GalleryModel');
		$this->load->model('VideoModel');
		$this->load->model('FoodMenuModel');
	}
    public function index(){

		$data['gallery'] 	= $this->GalleryModel->get(0, 100);
		$data['videos']		= $this->VideoModel->get(0, 10);
		$data['menus']		= $this->FoodMenuModel->get();

		$data['extraData'] = $this->ExtracuricullarModel->get();
		$this->load->view('students/index', $data);
	}
}
?>
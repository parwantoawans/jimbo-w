<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('ExtracuricullarModel');
		$this->load->model('GalleryModel');
		$this->load->model('VideoModel');
		$this->load->model('FoodMenuModel');
		$this->load->model('FieldTripModel');
	}
    public function index(){

		$data['gallery'] 	= $this->GalleryModel->get(0, 100);
		$data['videos']		= $this->VideoModel->get(0, 10);
		$data['menus']		= $this->FoodMenuModel->get();

		$data['extraData'] = $this->ExtracuricullarModel->get();
		$data['fieldTrip'] = $this->FieldTripModel->get(0, 3);
		$this->load->view('students/index', $data);
	}

	public function food($id){
		$data['detail']		= $this->FoodMenuModel->getById($id);
		$data['otherMenus']		= $this->FoodMenuModel->get();
		$this->load->view('students/detailfood', $data);
	}

	public function fieldtrip($id){
		$data['detail']		= $this->FieldTripModel->getById($id);
		$data['otherTrip']		= $this->FieldTripModel->get();
		$this->load->view('students/fieldtrip', $data);
	}
}
?>
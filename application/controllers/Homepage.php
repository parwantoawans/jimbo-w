<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('GalleryModel');
		$this->load->model('NewsModel');
	}

    public function index()
	{
		$data['articlesType'] = $this->ArticlesTypeModel->get();
		$experience = $this->ExperienceModel->get();
		$data['passing_universities'] = $experience[0]['passing_universities'];
		$data['people_working'] = $experience[0]['people_working'];
		$data['student_enrolled'] = $experience[0]['student_enrolled'];
		$data['happy_smiles'] = $experience[0]['happy_smiles'];
		
		$data['teachers'] = $this->TeachersModel->get();
		$data['testimoni'] = $this->TestimoniModel->get();
		$data['classesprogram'] = $this->ClassesProgramModel->getFirstRow();
		$data['classesprogram2'] = $this->ClassesProgramModel->getSecondRow();

		$data['gallery'] = $this->GalleryModel->get();
		$data['newsData'] = $this->NewsModel->get();

		$this->load->view('homepage', $data);
	}
}
?>
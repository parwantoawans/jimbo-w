<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function index()
	{
		$result['articlesType'] = $this->ArticlesTypeModel->get();
		$experience = $this->ExperienceModel->get();
		$data['passing_universities'] = $experience[0]['passing_universities'];
		$data['people_working'] = $experience[0]['people_working'];
		$data['student_enrolled'] = $experience[0]['student_enrolled'];
		$data['happy_smiles'] = $experience[0]['happy_smiles'];
		
		$data['teachers'] = $this->TeachersModel->get();

		$data['testimoni'] = $this->TestimoniModel->get();

		$this->load->view('homepage', $data);
	}
}
?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller
{
    public function index()
	{
		// echo $_SERVER['SERVER_ADDR'] ."<br>";
		// echo $this->input->ip_address() . "<br>";
		// echo current_url();die();
		$aboutUs = $this->AboutUsModel->get();
		$data['title'] = $aboutUs[0]['title'];
		$data['title2'] = $aboutUs[0]['title2'];
		$data['title3'] = $aboutUs[0]['title3'];
		$data['desc'] = $aboutUs[0]['desc'];
		$data['desc2'] = $aboutUs[0]['desc2'];
		$data['image'] = $aboutUs[0]['image'];


		$experience = $this->ExperienceModel->get();
		$data['passing_universities'] = $experience[0]['passing_universities'];
		$data['people_working'] = $experience[0]['people_working'];
		$data['student_enrolled'] = $experience[0]['student_enrolled'];
		$data['happy_smiles'] = $experience[0]['happy_smiles'];

		$school = $this->SchoolModel->get();
		$data['misi'] = $school[0]['misi'];
		$data['misi_2'] = $school[0]['misi_2'];
		$data['misi_subtitle'] = $school[0]['misi_subtitle'];
		$data['misi_image'] = $school[0]['misi_image'];
		$data['visi'] = $school[0]['visi'];
		$data['visi_2'] = $school[0]['visi_2'];
		$data['visi_subtitle'] = $school[0]['visi_subtitle'];
		$data['visi_image'] = $school[0]['visi_image'];

		$data['news'] = $this->NewsModel->get();
		
		$this->load->view('about-us/index', $data);
	}
}
?>
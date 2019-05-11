<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('GalleryModel');
		$this->load->model('NewsModel');
		$this->load->model('VideoModel');
		$this->load->Helper('html');
	}

    public function index(){
		
		$aboutUs = $this->AboutUsModel->get();
		if(is_array($aboutUs) && count($aboutUs) > 0){
			$data['title'] = $aboutUs[0]['title'];
			$data['title2'] = $aboutUs[0]['title2'];
			$data['title3'] = $aboutUs[0]['title3'];
			$data['desc'] = $aboutUs[0]['desc'];
			$data['desc2'] = $aboutUs[0]['desc2'];
			$data['image'] = $aboutUs[0]['image'];
		}

		$experience = $this->ExperienceModel->get();
		if(is_array($experience) && count($experience) > 0){
		    $data['passing_universities'] = $experience[0]['passing_universities'];
		    $data['people_working'] = $experience[0]['people_working'];
		    $data['student_enrolled'] = $experience[0]['student_enrolled'];
		    $data['happy_smiles'] = $experience[0]['happy_smiles'];
		}
		
		$school = $this->SchoolModel->get();
		if(is_array($school) && count($school)>0){
		    $data['misi'] = $school[0]['misi'];
	    	$data['misi_2'] = $school[0]['misi_2'];
		    $data['misi_subtitle'] = $school[0]['misi_subtitle'];
		    $data['misi_image'] = $school[0]['misi_image'];
		    $data['visi'] = $school[0]['visi'];
		    $data['visi_2'] = $school[0]['visi_2'];
		    $data['visi_subtitle'] = $school[0]['visi_subtitle'];
		    $data['visi_image'] = $school[0]['visi_image'];
		}
		

		$data['news'] = $this->NewsModel->get();

		$data['gallery'] = $this->GalleryModel->get(0, 8);
		$data['videos'] = $this->VideoModel->get(0, 2);

		$schoolImprovement = $this->SchoolImprovementModel->get();
		if(is_array($schoolImprovement) && count($schoolImprovement) > 0){
			$data['sImprovementDesc'] = $schoolImprovement[0]['desc'];
			$data['sImprovementDesc2'] = $schoolImprovement[0]['desc2'];
			$data['sImprovementImg'] = $schoolImprovement[0]['image'];
		}
		
		$this->load->view('about-us/index', $data);
	}

	public function schoolimprove(){
		$data['detail'] = $this->SchoolImprovementModel->get();
		//$data['detail'][0]['desc'] = strip_tags_content($data['detail'][0]['desc'], '<p>');
		$this->load->view('aboutusimprovement', $data);
	}
}
?>
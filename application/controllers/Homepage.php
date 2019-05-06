<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('GalleryModel');
		$this->load->model('NewsModel');
		$this->load->helper('url');
		$this->load->helper('form');
	}

    public function index(){
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

	public function article($id){
		$data['detail'] = $this->ArticlesTypeModel->getById($id);
		$otherList = $this->ArticlesTypeModel->get(100);
		if(is_array($otherList) && count($otherList) > 0){
			foreach($otherList as $key => $otherRow){
				if($otherRow->articles_type_id==$id){
					unset($otherList[$key]);
				}
			}
		}
		$data["otherArticle"] = $otherList;
		$this->load->view('homepagedetailarticle', $data);
	}

	public function classes($id){
		$data['detail'] = $this->ClassesProgramModel->getById($id);
		$otherClass = $this->ClassesProgramModel->get(100);
		if(is_array($otherClass) && count($otherClass) > 0){
			foreach($otherClass as $key => $otherRow){
				if($otherRow->id==$id){
					unset($otherClass[$key]);
				}
			}
		}
		$data["otherClass"] = $otherClass;
		$this->load->view('homepagedetailclass', $data);
	}

	public function newses($id){
		$data['detail'] = $this->NewsModel->getById($id);
		$otherNews = $this->NewsModel->get(4);
		if(is_array($otherNews) && count($otherNews) > 0){
			foreach($otherNews as $key => $otherRow){
				if($otherRow->id==$id){
					unset($otherNews[$key]);
				}
			}
		}
		$data["otherNews"] = $otherNews;
		$this->load->view('homepagedetailnews', $data);
	}

	public function subscribe(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == FALSE){
			echo validation_errors();
        }else{
			$email = $this->input->post('email');
			$checkExists = $this->NewsModel->checkSub($email);
			if(is_array($checkExists) && count($checkExists)>0){
				echo "<p>E-mail already exists</p>";
			}else{
				$this->NewsModel->subscribe($email);
				echo "<p>Success to subscribe</p>";
			}
		}
	}
}
?>
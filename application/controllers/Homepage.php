<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('GalleryModel');
		$this->load->model('NewsModel');
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
}
?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function index()
	{
		// print_r($this->ContactsModel->get()[0]['alamat']); die();
		$result['articlesType'] = $this->ArticlesTypeModel->get();
		// var_dump($result['articlesType']);
		// die();
		// foreach ($result['articlesType'] as $a) {
		// 	echo $a->id . "<br>";
		// 	echo $a->articles_type . "<br>";
		// 	echo $a->desc . "<br>";
		// }

		// foreach ($result['articlesType'] as $a) {
		// 	echo
		// 	'<div class="col-lg-4">
		// 		<div class="categorie-item">
		// 			<div class="ci-thumb set-bg" data-setbg="' . base_url() . '"assets/img/homepage/section2/1.jpg"></div>
		// 			<div class="ci-text">
		// 				<h5>' . $a->articles_type .'</h5>
		// 				<p>' . $a->desc . '</p>
		// 				<a href="' . base_url('master-data/articles/articles-by-type/') . $a->id .'">Learn more</a>
		// 			</div>
		// 		</div>
		// 	</div>';
		// }
		// die();

		// print_r($result['articlesType']['0']['desc']);die();
		$experience = $this->ExperienceModel->get();
		$data['passing_universities'] = $experience[0]['passing_universities'];
		$data['people_working'] = $experience[0]['people_working'];
		$data['student_enrolled'] = $experience[0]['student_enrolled'];
		$data['happy_smiles'] = $experience[0]['happy_smiles'];
		$this->load->view('homepage', $data);
	}
}
?>
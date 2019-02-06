<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller
{
    public function index()
    {
        $data['classesprogram'] = $this->ClassesProgramModel->getFirstRow();
		$data['classesprogram2'] = $this->ClassesProgramModel->getSecondRow();
        $this->load->view('academic/index', $data);
    }
}
?>
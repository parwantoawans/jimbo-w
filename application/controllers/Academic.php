<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('CalendarModel');
    }

    public function index()
    {
        $data['classesprogram'] = $this->ClassesProgramModel->getFirstRow();
        $data['classesprogram2'] = $this->ClassesProgramModel->getSecondRow();
        
        $data['otherservice'] = $this->OtherServiceModel->getFirstRow();
        $data['otherservice2'] = $this->OtherServiceModel->getSecondRow();

        $data['schedule'] = $this->ScheduleModel->get();
        $data['calendar'] = $this->CalendarModel->get(0, 6);
        // print_r($data['schedule']);die();
        
        $this->load->view('academic/index', $data);
    }
    public function otherservice($id){

        $data['detail'] = $this->OtherServiceModel->getById($id);

        $data['classesprogram'] = $this->ClassesProgramModel->getFirstRow();
        $data['classesprogram2'] = $this->ClassesProgramModel->getSecondRow();
        
        $data['otherservice'] = $this->OtherServiceModel->getFirstRow();
        $data['otherservice2'] = $this->OtherServiceModel->getSecondRow();

        $data['schedule'] = $this->ScheduleModel->get();
        $data['calendar'] = $this->CalendarModel->get(0, 6);
        // print_r($data['schedule']);die();
        
        $this->load->view('academic/otherservice', $data);
    }
}
?>
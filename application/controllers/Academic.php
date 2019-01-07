<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller
{
    public function index()
    {
        $this->load->view('academic/index');
    }
}
?>
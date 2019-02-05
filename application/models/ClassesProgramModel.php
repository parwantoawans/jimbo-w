<?php 

class ClassesProgramModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function getFirstRow(){
        $this->db->order_by('id', 'asc')->limit(2)->offset(0);
        return $this->db->get('tm_classes_program')->result();
    }

    public function getSecondRow(){
        $this->db->order_by('id', 'asc')->limit(2)->offset(2);
        return $this->db->get('tm_classes_program')->result();
    }
}


?>
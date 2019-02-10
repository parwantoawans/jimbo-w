<?php 

class OtherServiceModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function getFirstRow(){
        $this->db->order_by('id', 'asc')->limit(3)->offset(0);
        return $this->db->get('tm_other_service')->result();
    }

    public function getSecondRow(){
        $this->db->order_by('id', 'asc')->limit(3)->offset(3);
        return $this->db->get('tm_other_service')->result();
    }
}


?>
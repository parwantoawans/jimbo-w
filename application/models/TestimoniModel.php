<?php 

class TestimoniModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        $this->db->select('testimoni, image, tm_parents.nama, tm_parents.role_parents');
        $this->db->from('tp_testimoni_parents');
        $this->db->join('tm_parents', 'tm_parents.id_parents = tp_testimoni_parents.parents_id');
        $this->db->order_by('id', 'asc');
        return $this->db->get()->result();
    }
}

?>
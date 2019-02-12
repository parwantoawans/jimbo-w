<?php 

class TestimoniModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function get( $limit = 3, $offset = 0 ){
        $this->db->select('testimoni, image, tm_parents.nama, tm_parents.role_parents');
        $this->db->from('tp_testimoni_parents');
        $this->db->join('tm_parents', 'tm_parents.id_parents = tp_testimoni_parents.id_parents');
        $this->db->order_by('id', 'asc');
        $this->db->limit($limit, $offset);
        return $this->db->get()->result();
    }
}

?>
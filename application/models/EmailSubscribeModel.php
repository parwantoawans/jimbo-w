<?php 

class EmailSubscribeModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function store($data){
        $this->email = $data['email'];
        $this->created_at = date('Y-m-d H:i:s');
        return $this->db->insert('tm_subscribe', $this);
    }
}


?>
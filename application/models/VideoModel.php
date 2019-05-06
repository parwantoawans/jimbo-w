<?php 

class VideoModel extends CI_Model{
    
    var $table = "tx_videos";

    public function get($offset = 0, $limit = 10, $where = null){
        
        $this->db->select('*')
            ->from($this->table);
        
        if($where != null)
            $this->db->where($where);

        $this->db->limit($limit, $offset);

        return $this->db->get()->result();

    }
}
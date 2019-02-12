<?php 

class GalleryModel extends CI_Model{
    
    var $table = "tm_gallery";

    public function get($offset = 0, $limit = 10, $where = null){
        
        $this->db->select('*')
            ->from($this->table);
        
        if($where != null)
            $this->db->where($where);

        $this->db->limit($limit, $offset);

        return $this->db->get()->result();

    }
}
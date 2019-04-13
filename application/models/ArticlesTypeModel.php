<?php 

class ArticlesTypeModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function get($limit = 6, $offset = 0, $order = 'articles_type_id desc' ){
        $this->db->order_by($order);
        return $this->db->get('tm_articles_type', $limit, $offset)->result();
    }

    public function update($data){
        $this->articles_type = $data['articles_type'];
        $this->desc = $data['desc'];
        $this->db->where('id', $data['id']);
        return $this->db->update('tm_articles_type', $this);
    }

    public function store($data){
        $this->articles_type = $data['articles_type'];
        $this->desc = $data['desc'];
        return $this->db->insert('tm_articles_type', $data);
    }

    public function getById($id){
        return $this->db->where('articles_type_id', $id)->get('tm_articles_type')->result_array();
    }

    public function destroy($id){
        return $this->db->delete('tm_articles_type', array('id' => $id));
    }
}


?>
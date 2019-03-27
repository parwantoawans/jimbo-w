<?php 

class FieldTripModel extends CI_Model
{
    var $table = "tx_field_trip";
    public function __construct(){
        $this->load->database();
    }

    public function get($offset = 0, $limit = 10, $where = null){
        $this->db->select('*')
            ->from($this->table);
        
        if($where != null)
            $this->db->where($where);

        $this->db->limit($limit, $offset);

        return $this->db->get()->result();
    }

    public function update($data){
        $this->db->where('id', $data['fid']);
        return $this->db->update($this->table, $data);
    }

    public function store($data){
        return $this->db->insert($this->table, $data);
    }

    public function getById($id){
        return $this->db->where('id', $id)->get($this->table)->result_array();
    }

    public function destroy($id){
        return $this->db->delete($this->table, array('id' => $id));
    }
}


?>
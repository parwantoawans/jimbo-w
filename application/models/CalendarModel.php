<?php 

class CalendarModel extends CI_Model{
    
    var $table = "tx_calendar";
    var $testTable = "tx_testing_calendar";

    public function get($offset = 0, $limit = 10, $where = null, $orderBy = 'cal_id ASC'){
        
        $this->db->order_by($orderBy);

        $this->db->select('*')
            ->from($this->table);
        
        if($where != null)
            $this->db->where($where);

        $this->db->limit($limit, $offset);

        return $this->db->get()->result();

    }

    public function getTest($offset = 0, $limit = 10, $where = null, $orderBy = "start_date ASC"){
        
        $this->db->select('*')
            ->from($this->testTable);
        
        if($where != null)
            $this->db->where($where);

        if($orderBy!=null)
            $this->db->order_by($orderBy);

        $this->db->limit($limit, $offset);

        return $this->db->get()->result();

    }
}
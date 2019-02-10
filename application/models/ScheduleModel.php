<?php 

class ScheduleModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        $this->db->select('tx_schedule.tgl, tx_schedule.jam_mulai, tx_schedule.jam_selesai,tm_subjects.nama_mapel as subject, concat(tm_teachers.nama_depan, " ", tm_teachers.nama_tengah, " ", tm_teachers.nama_belakang) as teacher');
        $this->db->from('tx_schedule');
        $this->db->join('tm_subjects', 'tm_subjects.mid = tx_schedule.mid');
        $this->db->join('tm_teachers', 'tm_teachers.peg_id = tx_schedule.peg_id');
        $this->db->order_by('tx_schedule.tgl', 'desc');
        
        return $this->db->get()->result();
    }

    public function getById($id){
        return $this->db->where('sid', $id)->get('tx_schedule')->result_array();
    }

    public function destroy($id){
        return $this->db->delete('tx_schedule', array('sid' => $id));
    }
}


?>
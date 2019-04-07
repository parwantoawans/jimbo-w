<?php 

class ParentsModel extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function get(){
        $this->db->order_by('id_parents', 'desc');
        return $this->db->get('tm_parents')->result();
    }

    public function update($data){
        $this->nama = $data['nama'];
        $this->alamat = $data['alamat'];
        $this->telephone = $data['telephone'];
        $this->role_parents = $data['role_parents'];
        $this->db->where('id_parents', $data['id']);
        return $this->db->update('tm_parents', $this);
    }

    public function store($data){
        return $this->db->insert('tm_parents', $data);
    }

    public function getById($id){
        $this->db->select('id_parents, nama, alamat, telephone, role_parents, tm_agama.id_agama, nama_agama AS agama');
        $this->db->from('tm_parents');
        $this->db->join('tm_agama', 'tm_agama.id_agama = tm_parents.id_agama');
        $this->db->order_by('id_parents', 'desc');
        return $this->db->where('id_parents', $id)->get()->result_array();
    }

    public function destroy($id){
        return $this->db->delete('tm_parents', array('id_parents' => $id));
    }

    function register($username, $fullname, $email, $phoneNum, $password){

        $data = array(
            'nama' => $fullname,
            'alamat' => '',
            'id_agama' => '7'
        );

        if( $this->store($data) == false ){
            return false;
        }

        if(!$this->db->insert('tm_users', array('username' => $username, 'password' => md5($password), 'menu_role_id' => '3')))
            return false;
        return true;
    }

    function checkUserName($username){
        return $this->db->select("*")
            ->from('tm_users')
            ->where('username', $username)->get()->result_array();
    }
}


?>
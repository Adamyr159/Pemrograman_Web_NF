<?php 
class Dosen_model extends CI_Model{
    public $id, $nama, $gender, $tmp_lahir, $tgl_lahir, $nidn, $pendidikan;

    public function getALL(){
        // menampilkan seluruh data yang ada di table mahasiswa menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}
?>
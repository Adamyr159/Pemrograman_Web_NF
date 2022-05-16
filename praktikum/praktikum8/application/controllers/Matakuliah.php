<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('Matakuliah_model');
        $matakuliah = $this->Matakuliah_model->getALL();
        $data['matakuliah'] = $matakuliah;

        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('Matakuliah_model');
        $siswa = $this->Matakuliah_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>
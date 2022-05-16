<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('Mahasiswa_model');
        $mahasiswa = $this->Mahasiswa_model->getALL();
        $data['mahasiswa'] = $mahasiswa;

        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('Mahasiswa_model');
        $siswa = $this->Mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>
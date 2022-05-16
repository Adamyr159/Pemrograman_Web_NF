<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->getALL();
        $data['dosen'] = $dosen;

        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('Dosen_model');
        $siswa = $this->Dosen_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>
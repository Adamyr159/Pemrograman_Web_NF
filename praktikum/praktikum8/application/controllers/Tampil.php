<?php 
class Tampil extends CI_Controller{
    public function index(){
    // load model
    $this->load->model('mahasiswa_model');
    $mahasiswa = $this->mahasiswa_model->getAll();
    $data['mahasiswa'] = $mahasiswa;

    // render view
    $this->load->view('layouts/header');
    $this->load->view('mahasiswa/tampil', $data);
    $this->load->view('layouts/footer');
    }

    public function dosen(){
    // load model
    $this->load->model('dosen_model');
    $dosen = $this->dosen_model->getAll();
    $data['dosen'] = $dosen;

    // render view
    $this->load->view('layouts/header');
    $this->load->view('dosen/tampil', $data);
    $this->load->view('layouts/footer');
    }

    public function matkul(){
        // load model
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matkul;
    
        // render view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/tampil', $data);
        $this->load->view('layouts/footer');
        }
}
?>
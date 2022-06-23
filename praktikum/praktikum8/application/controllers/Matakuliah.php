<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getALL();
        $data['matakuliah'] = $matakuliah;

        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getById($id);
        $data['matkul'] = $matkul;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model matakuliah
        $this->load->model('matakuliah_model','matakuliah'); //1
        $_nama = $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');
        $_dosen_id = $this->input->post('dosen_id');

        $data_matakuliah['nama'] = $_nama; //2
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode'] = $_kode;
        $data_matakuliah['dosen_id'] = $_dosen_id;

        if((!empty($_idedit))){ //update
            $data_matakuliah['id'] = $_idedit;
            $this->matakuliah->update($data_matakuliah);
        } else{
            // data baru
            $this->matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah', 'refresh');
    }

    public function edit($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model', 'matakuliah');
        $obj_matakuliah = $this->matakuliah->getById($id);
        $data['obj_matakuliah'] = $obj_matakuliah;

        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id){
        $this->load->model('matakuliah_model', 'matakuliah');

        // mengecek data matakuliah berdasarkan id
        $data_matakuliah['id'] = $id;
        $this->matakuliah->delete($data_matakuliah);
        redirect('matakuliah', 'refresh');
    }

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }

    public function upload(){
        $_idmatakuliah = $this->input->post('idmatakuliah');
        // akses model matakuliah
        $this->load->model('matakuliah_model', 'matakuliah');
        $matkul = $this->matakuliah->getById($_idmatakuliah);
        $data['matkul'] = $matkul;

        $config['upload_path']='./uploads/photos';
        $config['allowed_types']='jpg|png';
        $config['max_size']=2894;
        $config['max_width']=2894;
        $config['max_height']=2894;
        $config['file_name']=$matkul->id;

        // aktifkan library upload
        $this->load->library('upload', $config);

        // jika tidak ada file atau foto yang di upload
        if (!$this->upload->do_upload('foto')) {
            // maka tampilkan pesan error
            $data['error'] = $this->upload->display_errors();
        } else {
            // jika ada file yang di upload 
            // maka tampilkan pesan data berhasil di upload atau data sukses
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'DATA SUKSES:)';
        }
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');        
    }
}
?>
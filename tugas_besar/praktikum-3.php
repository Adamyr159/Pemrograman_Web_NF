<?php
require_once 'atas.php';
require_once 'sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header text-center">
      <h2>Form Nilai</h2>
      </section>

      <!-- Main content -->
      <section class="content">

      <div class="container-fluid">
          <div class="row">
          <div class="col-6">
              <form method="POST" action="praktikum-3.php">
                  <div class="Container">
                  <div class="form-group row">
                      <label for="nama" class="col-4 col-form-label">Nama</label> 
                      <div class="col-8">
                      <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
                  </div>
                  </div>
                  <div class="form-group row">
                      <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                      <div class="col-8">
                      <select id="matkul" name="matkul" class="custom-select">
                          <option value="DDP">Dasar Dasar Pemrograman</option>
                          <option value="WEB">Pemrograman Web</option>
                          <option value="BD">Basis Data</option>
                      </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                      <div class="col-8">
                      <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
                      </div>
                  </div>
                  
                  <div class="form-group row">
                      <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                      <div class="col-8">
                      <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                      <div class="col-8">
                      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
                      </div>
                  </div> 
                  <div class="form-group row">
                      <div class="offset-4 col-8">
                      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                      </div>
                  </div>
                  </div>
              </form>
          </div>
          </div>
      </div>
      </section>
      <!-- /.content -->
      <?php 
        $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
        $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
        $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
        $uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
        $uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
        $tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
        $total = (int)$uts + (int)$uas + (int)$tugas;
        $alphabet = $total/3;

        if ($alphabet <= 55){
            $lulus = "Anda Tidak Lulus";
        }else{
            $lulus = "Selamat Anda Lulus";
        }
        if ($alphabet >= 85){
            $grade = "A";
        }elseif($alphabet >= 70){
            $grade = "B";
        }elseif($alphabet >= 56){
            $grade = "C";
        }elseif($alphabet >= 36){
            $grade = "D";
        }elseif ($alphabet >= 10){
            $grade = "E";
        }else{
            $grade = "I(tidak ada nilai)";
        }

        if(!empty($proses)){
        echo "Nama : $nama_siswa";
        echo "<br/>Mata Kuliah : $mata_kuliah";
        echo "<br/>Nilai UTS : $uts";
        echo "<br/>Nilai UAS : $uas";
        echo "<br/>Nilai Tugas : $tugas";
        echo "<br/>Keterangan : $lulus";
        echo "<br/>Grade : $grade";
        echo "<br/> Data Telah di $proses";
        }
      ?>
    </div>

    
  <!-- /.content-wrapper -->
  <?php
  require_once 'bawah.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Nilai Mahasiswa</h2>
        <hr>
        <form method="POST" action="form_nilai.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM " type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="ddp">Dasar Pemrograman</option>
                    <option value="pw">Pemrograman Web</option>
                    <option value="jarkom">Jaringan Komunikasi</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Masukkan Nilai" type="number" class="form-control">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
<?php 
require_once 'class_nilaiMahasiswa.php';
if($_POST) {
    $ns = new nilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    $keterangan = $ns->hitungNilai();
    $hasil = $ns->kelulusan($keterangan);
    $hasil2 = $ns->grade($keterangan);
    echo "NIM = " .$ns->nim;
    echo "<br>Mata Kuliah = " .$ns->matkul;
    echo "<br>Nilai = " .$ns->nilai;
    echo "<br> Status = " .$ns->kelulusan($keterangan);
    echo "<br> Grade = " .$ns->grade($keterangan);
}

?>
</body>
</html>
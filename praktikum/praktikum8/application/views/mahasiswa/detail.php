<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Mahasiswa</h3>
    <table class="table table-striped table-bordered">
        <thead  class="table-success">
            <tr>
                <th>Id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $siswa -> id ?></td>
                <td><?= $siswa -> nim ?> </td>
                <td><?= $siswa -> nama ?></td>
                <td><?= $siswa -> gender ?></td>
                <td><?= $siswa -> tmp_lahir ?></td>
                <td><?= $siswa -> tgl_lahir ?></td>
                <td><?= $siswa -> ipk ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url();?>uploads/photos/<?=$siswa->id?>.jpg" alt="Foto <?=$siswa->nama;?>Tidak Ditemukan" width="300">
                    <div class="mt-4">
                        <h4><?=$siswa->nama?></h4>
                        <p>Foto Mahasiswa</p>
                        <?= $error;?>
                        <br>
                        <a href="https://www.instagram.com/Adamyr159" target="_blank">
                            <button class="btn btn-outline-info">INSTAGRAM</button>
                        </a>
                        <?=form_open_multipart('mahasiswa/upload');?>
                            <input type="file" name="foto" size="300">
                            <input type="hidden" name="idmahasiswa" value="<?=$siswa->id;?>">
                            <input type="submit" value="Upload Foto" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
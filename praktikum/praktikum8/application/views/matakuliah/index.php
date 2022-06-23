<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MataKuliah</title>
    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
<div class="col-md-12">
    <h3>MataKuliah</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-success">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Id Dosen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $matkul) {
            ?>
            <tr>
                <td><?= $matkul -> id ?> </td>
                <td><?= $matkul -> nama_matkul ?></td>
                <td><?= $matkul -> sks ?></td>
                <td><?= $matkul -> kode ?></td>
                <td><?= $matkul -> dosen_id ?></td>
                <td>
                    <a href="<?= base_url("index.php/matakuliah/edit/$matkul->id") ?>" class="btn btn-success btn-lg active">Edit</a>
                    <a href="<?= base_url("index.php/matakuliah/delete/$matkul->id") ?>" class="btn btn-danger btn-lg active" Onclick="return hapusMatakuliah('Anda Yakin Ingin Menghapus Data Mata Kuliah <?= $matkul->nama_matkul; ?> ?')">Hapus</a>
                    &nbsp;
                    <a href="<?= base_url("index.php/matakuliah/detail/$matkul->id") ?>" class="btn btn-info btn-lg active">Detail</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?= base_url("index.php/matakuliah/form") ?>" class="btn btn-primary btn-lg active">Tambah</a>
    </div>
</body>
</html>
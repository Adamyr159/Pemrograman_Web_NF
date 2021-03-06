<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <script>
        function hapusDosen(pesan){
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
    <h3>Dosen</h3>
    <table class="table table-striped table-bordered">
        <thead  class="table-success">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Nidn</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dosen as $dsn) {
            ?>
            <tr>
                <td><?= $dsn -> id ?> </td>
                <td><?= $dsn -> nama ?></td>
                <td><?= $dsn -> gender ?></td>
                <td><?= $dsn -> nidn ?></td>
                <td>
                    <a href="<?= base_url("index.php/dosen/edit/$dsn->id") ?>" class="btn btn-success btn-lg active">Edit</a>
                    <a href="<?= base_url("index.php/dosen/delete/$dsn->id") ?>" class="btn btn-danger btn-lg active" Onclick="return hapusDosen('Anda Yakin Ingin Menghapus Data Dosen yang bernama <?= $dsn->nama; ?> ?')">Hapus</a>
                    &nbsp;
                    <a href="<?= base_url("index.php/dosen/detail/$dsn->id"); ?>" class="btn btn-info btn-lg active">Detail</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="<?= base_url("index.php/dosen/form") ?>" class="btn btn-primary btn-lg active">Tambah</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <?php
    $username = $this->session->userdata('username');
    if ($username) {
        echo "<h2>Selamat Datang $username</h2>";
    }
     
    ?>
</head>
<body>
    <div class="col-md-12">
    <h3>Mahasiswa</h3>
    <table class="table table-striped table-bordered">
        <thead  class="table-success">
            <tr>
                <th>Id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($mahasiswa as $mhs) {
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $mhs -> nim ?> </td>
                <td><?= $mhs -> nama ?></td>
                <td><?= $mhs -> gender ?></td>
                <td><?= $mhs -> ipk ?></td>
                <td>
                    <a href="<?= base_url("index.php/mahasiswa/detail/$mhs->id") ?>">Detail</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>
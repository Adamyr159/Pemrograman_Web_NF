<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
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
                <th>Tempat lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nidn</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $siswa -> id ?></td>
                <td><?= $siswa -> nama ?></td>
                <td><?= $siswa -> gender ?></td>
                <td><?= $siswa -> tmp_lahir ?></td>
                <td><?= $siswa -> tgl_lahir ?></td>
                <td><?= $siswa -> nidn ?></td>
                <td><?= $siswa -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MataKuliah</title>
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
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $matkul) {
            ?>
            <tr>
                <td><?= $matkul -> id ?> </td>
                <td><?= $matkul -> nama ?></td>
                <td><?= $matkul -> sks ?></td>
                <td><?= $matkul -> kode ?></td>
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
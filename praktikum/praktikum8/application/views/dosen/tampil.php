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
                <th>Nidn</th>
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
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>
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
                <td><?= $guru -> id ?></td>
                <td><?= $guru -> nama ?></td>
                <td><?= $guru -> gender ?></td>
                <td><?= $guru -> tmp_lahir ?></td>
                <td><?= $guru -> tgl_lahir ?></td>
                <td><?= $guru -> nidn ?></td>
                <td><?= $guru -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url();?>uploads/photos/<?=$guru->id?>.jpg" alt="Foto <?=$guru->nama;?> Tidak Ditemukan" width="300">
                    <div class="mt-4">
                        <h4><?=$guru->nama?></h4>
                        <p>Foto Dosen</p>
                        <?= $error;?>
                        <?=form_open_multipart('dosen/upload');?>
                            <input type="file" name="foto" size="300">
                            <input type="hidden" name="iddosen" value="<?=$guru->id;?>">
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
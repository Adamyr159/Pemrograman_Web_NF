<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail MataKuliah</title>
</head>
<body>
<div class="col-md-12">
    <h3>Detail MataKuliah</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-success">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Dosen Pembimbing</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $matkul -> id ?> </td>
                <td><?= $matkul -> nama ?></td>
                <td><?= $matkul -> sks ?></td>
                <td><?= $matkul -> kode ?></td>
                <td><?= $matkul -> dosen_pembimbing ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url();?>uploads/photos/<?=$matkul->id?>.jpg" alt="Foto <?=$matkul->nama;?> Tidak Ditemukan" width="300">
                    <div class="mt-4">
                        <h4><?=$matkul->nama?></h4>
                        <p>Foto Mata Kuliah</p>
                        <?= $error;?>
                        <?=form_open_multipart('matakuliah/upload');?>
                            <input type="file" name="foto" size="300">
                            <input type="hidden" name="idmatakuliah" value="<?=$matkul->id;?>">
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
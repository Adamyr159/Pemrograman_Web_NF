<div class="container">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Form Input Mata Kuliah</h2>
    <?= form_open("matakuliah/save") ?>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Mata Kuliah" type="text" value="<?= $obj_matakuliah->nama;?>" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-4 col-form-label">SKS</label> 
            <div class="col-8">
            <input id="sks" name="sks" placeholder="Masukkan SKS Mata Kuliah" type="text" value="<?= $obj_matakuliah->sks;?>" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label> 
            <div class="col-8">
            <input id="kode" name="kode" placeholder="Masukkan Kode Mata Kuliah" type="text" value="<?= $obj_matakuliah->kode;?>" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="dosen_pembimbing" class="col-4 col-form-label">Dosen Pembimbing</label> 
            <div class="col-8">
            <input id="dosen_pembimbing" name="dosen_pembimbing" placeholder="Masukkan Dosen Pembimbing" type="text" value="<?= $obj_matakuliah->dosen_pembimbing;?>" class="form-control">
            </div>
        </div>  
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    <?= form_close() ?>
</div>
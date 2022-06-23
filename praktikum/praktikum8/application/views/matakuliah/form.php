<div class="container">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Form Input Mata Kuliah</h2>
    <?= form_open("matakuliah/save") ?>
        <div class="form-group row">
            <label for="nama_matkul" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama_matkul" name="nama_matkul" placeholder="Masukkan Nama Mata Kuliah" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-4 col-form-label">SKS</label> 
            <div class="col-8">
            <input id="sks" name="sks" placeholder="Masukkan SKS Mata Kuliah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label> 
            <div class="col-8">
            <input id="kode" name="kode" placeholder="Masukkan Kode Mata Kuliah" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="dosen_id" class="col-4 col-form-label">id Dosen</label> 
            <div class="col-8">
                <select name="dosen_id" id="dosen_id" class="form-control">
                    <?php 
                    include "config.php";
                    $result = mysqli_query($conn, "SELECT * FROM dosen");
                    while ($row = mysqli_fetch_array($result)) {?>
                        <option value="<?= $row[0]?>">
                            <?= $row[0]?>
                        </option> 
                    <?php }?>
                </select>
            </div>
        </div>  
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    <?= form_close() ?>
</div>
<?php 
require_once 'atas.php';
require_once 'sidebar.php';
require_once 'pasien.php';
require_once 'BMI.php';
require_once 'BMIPasien.php';
?>

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Form BMI</h3>
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php 
                                    $pasien1 = new Pasien();
                                    $pasien1->kode = isset($_POST['kode']) ? $_POST['kode'] : '' ;
                                    $pasien1->nama = isset($_POST['name']) ? $_POST['name'] : '' ;
                                    $pasien1->gender = isset($_POST['gender']) ? $_POST['gender'] : '' ;
                                    
                                    $bmi1 = new BMI(isset($_POST['bb']) ? $_POST['bb'] : '', isset($_POST['tb']) ? $_POST['tb'] : '');
                                    $bmiPasien1 = new BMIPasien($bmi1, $pasien1);
                                    $ar_bmi = [$bmiPasien1]; 
                                ?>
                                <form method="POST" class="col-6">
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
                                        <div class="col-8">
                                        <input id="kode" name="kode" placeholder="Masukkan Kode Pasien" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Nama Pasien</label> 
                                        <div class="col-8">
                                        <input id="name" name="name" placeholder="Masukkan Nama Pasien" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Gender</label> 
                                        <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria"> 
                                            <label for="gender_0" class="custom-control-label">Pria</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita"> 
                                            <label for="gender_1" class="custom-control-label">Wanita</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
                                        <div class="col-8">
                                        <input id="bb" name="bb" placeholder="Masukkan Berat Badan" type="number" class="form-control" aria-describedby="bbHelpBlock"> 
                                        <span id="bbHelpBlock" class="form-text text-muted">*kg</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
                                        <div class="col-8">
                                        <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan" type="number" class="form-control" aria-describedby="tbHelpBlock"> 
                                        <span id="tbHelpBlock" class="form-text text-muted">*cm</span>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-striped table-hover table-bordered">                                   
                                    <thead class="table-success">
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Periksa</th>
                                            <th>Kode Pasien</th>
                                            <th>Nama Pasien</th>
                                            <th>Gender</th>
                                            <th>Berat Badan</th>
                                            <th>Tinggi Badan</th>
                                            <th>BMI</th>
                                            <th>Status BMI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>15 April 2022</td>
                                            <td>A001</td>
                                            <td>Adam Yusron</td>
                                            <td>Pria</td>
                                            <td>55 kg</td>
                                            <td>168 cm</td>
                                            <td>19.4</td>
                                            <td>Normal</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>15 April 2022</td>
                                            <td>A002</td>
                                            <td>Aurel</td>
                                            <td>Wanita</td>
                                            <td>52 kg</td>
                                            <td>158 cm</td>
                                            <td>20.8</td>
                                            <td>Normal</td>
                                        </tr>
                                        
                                        <?php $no=3; ?>
                                        <?php if(isset($_POST['kode'])){ 
                                            foreach($ar_bmi as $obj){ 
                                        ?>
                                            <tr>
                                                <td><?= $no;?></td>
                                                <td><?= date('d F Y');?></td>
                                                <td><?= $obj->pasien->kode;?></td>
                                                <td><?= $obj->pasien->nama;?></td>
                                                <td><?= $obj->pasien->gender;?></td>
                                                <td><?= $obj->bmi->bb ." kg";?></td>
                                                <td><?= $obj->bmi->tb ." cm";?></td>
                                                <td><?= number_format($obj->bmi->nilaiBMI(),1);?></td>
                                                <td><?= $obj->bmi->statusBMI();?></td>
                                            </tr>
                                        <?php $no++; } }?>
                                    </tbody>
                                </table> 
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
<!-- /.content-wrapper -->

<?php require_once 'bawah.php'; ?>
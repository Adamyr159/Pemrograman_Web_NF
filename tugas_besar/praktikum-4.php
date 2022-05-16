<?php
require_once 'atas.php';
require_once 'sidebar.php';

class persegiPanjang {
    private $panjang;
    private $lebar;
    function __construct ($p, $l) {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
    function getLuas() {
        return $this->panjang * $this->lebar;
    }
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
      <h2>Data Persegi Panjang</h2>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <?php 
            echo "Menghitung Luas dan keliling persegi panjang";
            $satu = new persegiPanjang(4,5);
            $dua = new persegiPanjang(3,2);

            echo "<br>Luas persegi panjang 1 = " .$satu->getLuas();
            echo "<br>Luas persegi panjang 2 = " .$dua->getLuas();

            echo "<br>Keliling persegi panjang 1 = " .$satu->getKeliling();
            echo "<br>Keliling persegi panjang 2 = " .$dua->getKeliling();

          ?>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php
  require_once 'bawah.php';
  ?>
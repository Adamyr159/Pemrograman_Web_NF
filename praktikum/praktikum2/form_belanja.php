<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
<div class="container d-flex">
  <form method="POST" action="form_belanja.php" class="form col-8 me-5">
  <h2>Belanja Online</h2>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Customer</label> 
      <div class="col-8">
        <input id="nama" name="customer" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Pilih Produk</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk-pilihan" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk-pilihan" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
          <label for="produk_1" class="custom-control-label">KULKAS</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk-pilihan" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
          <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
      <div class="col-8">
        <input id="jumlah" name="jumlah-beli" placeholder="Jumlah" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  <form method="POST" class="col-4">
    <table class="w-50">
      <thead class="bg-primary text-white">
        <tr>
          <th class="p-3">Daftar Harga</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id="tv" name="tele" value="4200000" class="ps-3">TV : 4.200.000</td>
        </tr>
        <tr>
          <td id="kulkas" name="kulkas" value="KULKAS" class="ps-3">KULKAS : 3.100.000</td>
        </tr>
        <tr>
          <td id="mesinCuci" name="mc" value="MESIN CUCI" class="ps-3">MESIN CUCI : 3.800.000</td>
        </tr>
      </tbody>
      <tfoot class="bg-primary text-white text-uppercase">
        <tr>
          <th class="p-3">harga dapat berubah setiap saat</th>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<hr>
<?php 
$nama = $_POST['customer'];
$produk = $_POST['produk-pilihan'];
$jumlah_beli = $_POST['jumlah-beli'];
$kulkas = 3100000 * intval($jumlah_beli);
$mesincuci = 3800000 * intval($jumlah_beli);
$TV1 = 4200000 * intval($jumlah_beli);

echo "Nama Customer : $nama";
echo "<br>Produk Pilihan : $produk";
echo "<br>Jumlah Beli : $jumlah_beli";
switch ($produk) {
  case 'KULKAS':
    echo "<br>" . "Total Belanja : " . number_format($kulkas, 0, ',', '.');
    break;
  case 'TV':
    echo "<br>" . "Total Belanja : " . number_format($TV1, 0, ',', '.');
    break;
  case 'MESIN CUCI':
    echo "<br>" . "Total Belanja : " . number_format($mesincuci, 0, ',', '.');
    break;
  default :
    echo "<br> default"; 
}
?>
</body>
</html>


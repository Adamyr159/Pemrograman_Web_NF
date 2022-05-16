<?php 
require_once 'class_lingkaran.php';

echo "NILAI PHI :" .Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);

echo "<br>Luas lingkaran 1 = " .$lingkar1->getLuas();
echo "<br>Luas lingkaran 2 = " .$lingkar2->getLuas();

echo "<br>Keliling lingkaran 1 = " .$lingkar1->getKeliling();
echo "<br>Keliling lingkaran 2 = " .$lingkar2->getKeliling();

?>



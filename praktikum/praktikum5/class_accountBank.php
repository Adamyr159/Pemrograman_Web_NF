<?php 
require_once 'class_account.php';

class accountBank extends account {
    
    const biaya_admin = 6000;
    
    public function transfer($receiver, $duit){
        $receiver->deposit($duit);
        $this->withdraw($duit);
        $this->withdraw(self::biaya_admin);
        // echo "<br>".$duit;
    }
    public function cetak(){
        parent::cetak();
    }
    public function getSaldo(){
        return $this->saldo;
    }
}

$acc1 = new accountBank("C001", "Adam", 30000);
$acc2 = new accountBank("C002", "Wildan", 50000);
$acc3 = new accountBank("C003", "Ihsan", 1000000);
$acc4 = new accountBank("C004", "Fateh", 20000);
$acc5 = new accountBank("C005", "Aziz", 30000);
$acc6 = new accountBank("C006", "Aji", 40000);

$ar_account = [$acc1, $acc2, $acc3, $acc4, $acc5, $acc6];

echo "<h2> Data Transaksi Bank BCA per tanggal 31 maret 2022 pukul 18.00 WIB </h2>";
echo '"C0001 : Adam"<br>';
echo "Saldo awal = 30000 <br>";
$acc1->deposit(20000);
echo "Nabung = 20000 <br>";
$acc1->withdraw(40000);
echo "Narik uang 40000 <br>";
echo "Saldo sebelum di transfer Wildan = " .$acc1->getSaldo();

echo "<hr>";

echo '"C002 : Wildan"<br>';
echo "Saldo awal = 50000 <br>";
echo "Nabung = 70000 <br>" .$acc2->deposit(70000);
echo "Narik uang 20000 <br>" .$acc2->withdraw(20000);
echo "Transfer ke Adam = 40000 + Biaya Admin = 6000 <br>" .$acc2->transfer($acc1, 40000);
echo "Saldo Akhir = " .$acc2->getSaldo() ."<br><br>";
echo "<b>Saldo Adam setelah di transfer Wildan = </b>" .$acc1->getSaldo();


echo "<hr>";

echo '"C003 : Ihsan"<br>';
echo "Saldo awal = 100000 <br>";
echo "Nabung = 50000 <br>" .$acc3->deposit(50000);;
echo "Narik uang 40000 <br>" .$acc3->withdraw(40000);
echo "Transfer ke Adam = 10000 + Biaya Admin = 6000 <br>" .$acc3->transfer($acc1, 10000);
echo "Saldo Akhir = " .$acc3->getSaldo() ."<br><br>";
echo "<b>Saldo Adam setelah di transfer Ihsan = </b>" .$acc1->getSaldo();

echo "<hr>";



?>

<h2>Account Bank</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>No Account</th>
            <th>Pemilik</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($ar_account as $acc) {

        ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $acc->nomor; ?></td>
            <td><?= $acc->nama; ?></td>
            <td><?= "Rp. " .$acc->saldo; ?></td>
        </tr>

        <?php } ?>
    </tbody>
</table>

<!-- <?php 
$adam = new accountBank("C001", "Adam", 300);

echo "<br>Saldo adam setelah deposit Rp. 5000" .$adam->deposit(5000);
echo "<br>";
$adam->deposit(5000);
?> -->
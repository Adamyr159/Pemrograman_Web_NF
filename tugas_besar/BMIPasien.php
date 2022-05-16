
<?php 
require_once 'pasien.php';
require_once 'BMI.php';

class BMIPasien extends Pasien{
    public $bmi;
    public $pasien;

    function __construct($bmi, $pasien){
        $this->bmi = $bmi;
        $this->pasien = $pasien;
    }
}
?>






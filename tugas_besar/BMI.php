<?php 
class BMI{
    public $bb;
    public $tb;
    
    function __construct($bb, $tb){
        $this->bb = (int)$bb;
        $this->tb = (int)$tb;
    }
    public function nilaiBMI(){
        return $this->bb / ($this->tb/100)**2; 
    }
    public function statusBMI(){
        if($this->nilaiBMI() < 18.5 && $this->nilaiBMI() >= 0){
            echo "Kekurangan Berat Badan";
        }elseif($this->nilaiBMI() < 24.9){
            echo "Normal";
        }elseif($this->nilaiBMI() < 29.9){
            echo "Kelebihan Berat Badan";
        }elseif($this->nilaiBMI() > 30){
            echo "Obesitas";
        }else {
            echo $this->nilaiBMI(). "Tidak termasuk kedalam golongan";
        }
    }
}
?>
<?php 
class buah {
    public $name;
    protected $color;
    private $weigth;

    function set_name($n){
        return $this->name = $n;
    }
    public function set_color($c){
        return $this->color = $c;
    } 
    public function set_weight($b){
        return $this->weight = $b;
    } 
    
}
$mango = new buah();
echo $mango->set_name('mango');
echo "<br>" .$mango->set_color('orange');
echo "<br>" .$mango->set_weight('200 kg');


?>
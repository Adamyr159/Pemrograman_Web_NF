<?php 

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->$name = $name;
        $this->$color = $color;
    }

    public function intro(){
        echo "<br>Nama aku adalah {$this->name} dan warna aku adalah {$this->color}";
    }
}

class Strawberry extends Fruit {
    public function message(){
        echo "Aku sebuah Strawberry atau pisang?";
    }
}

$buah = new Strawberry("Strawberry", "Merah");
$buah->message();
$buah->intro();

?>
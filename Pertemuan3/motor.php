<?php
class Motor{

    //Atribut
    public $merk;
    public $type;
    public $color;
    public $liter;
    public $ful_tank;

    //Method 
    //Konstructor
    public function __construct($merk, $type, $color, $liter, $ful_tank)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->color = $color;
        $this->liter = $liter;
        $this->ful_tank = $ful_tank;
    }


    public function jalan($jarak)
    {
        $this->liter = $this->liter - ($jarak / 10);
        echo "Setelah menempuh jarak " . $jarak / 1000 . "km \n";
        echo "Bensin menjadi " . $this->liter / 1000 . " liter \n";
    }

    //Ngisi Bensin
    public function ngisiBensin($bensin)
    {
        $this->liter = $bensin + $this->liter;
        echo "Budi mengisi bensi lagi " . $this->liter / 1000 . " liter \n";

        if ($this->liter >= 5000) {
        echo "Bensin Budi sudah penuh";
        } else {
        echo "";
        }
    }
}

$motor = new Motor("Honda", "Supra", "Putih", 2000, 5000);

echo "Budi mengisi bensin " . $motor->liter / 1000 . " liter" . "\n";
$motor->jalan(10000);

//Cetak ngisi bensin 
$motor->ngisiBensin(5000);

?>
Footer

<?php

    //perbaningan prosedural
     $hero1_name = "Alucard";
     $hero1_hp = "4000";
     $hero1_defanse = "120"; 
     $hero1_mana = "0";
     $hero1_demage = "400";


     $hero2_name = "Akai";
     $hero2_hp = "4100";
     $hero2_defanse = "200";
     $hero2_mana = "0";
     $hero2_demage = "50";

    //perbandingan OOP
    class Hero{

        //Atribut
        public $name;
        public $hp;
        public $defanse;
        public $demage;
        public $mana;

    //Konstruktor
    //method
    public function __construct ($name, $hp, $defanse, $demage, $mana)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->defanse = $defanse;
        $this->demage = $demage;
        $this->mana = $mana;
    }

    public  function attack($target) 
    {
        $target->hp = $target->hp - ($this->demage - $target->defanse);
        echo "$this->name menyerang $target->name \n";
        echo "hp $target->name saat ini adalah : $target->hp \n";
    } 
}

$hero1 = new Hero("Alucard", 4000, 120, 400, 0);
$hero2 = new Hero("Akai", 4100, 200, 50, 0);

//memanggil method
$hero1->attack($hero2);

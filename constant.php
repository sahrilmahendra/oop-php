<?php

// define("NAMA", "Sahril Mahendra");
// echo NAMA;

// echo "<br>";

// const UMUR = 24;
// echo UMUR;


// class Coba
// {
//     const NAMA = "Sahril Mahendra";
// }

// echo Coba::NAMA;


// echo __DIR__;


// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;

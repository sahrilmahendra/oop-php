<?php
// Jualan produk
// Komik
// Game
class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "0";

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Oregairu";
$produk1->penulis = "Watari Wataru";
$produk1->penerbit = "Shogakukan";
$produk1->harga = 28000;

echo "Komik : $produk1->judul, $produk1->penulis";
echo "<br>";
echo $produk1->getLabel();

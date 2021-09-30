<?php

require_once 'App/init.php';

// $produk1 = new Komik("OreGairu", "Watari Wataru", "Shogakukan", 28000, 100);
// $produk2 = new Game("7DS Grand Cross", "Yo Kokukuji", "Netmarble", 400000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();

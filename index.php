<?php

//panggil file PropertyConstant
require('./PropertyConstant.php');

use pbo\marketplace\produk;


//object
$produk = new produk('P0001', 'laptop',10000000, 5);

$produk->setKode('P0001')->setNama('Laptop')->setHarga(10000000)->setStok(5);

//hasil 
echo "Produk: ". $produk->getNama();
echo "<br/>";

echo "Harga: Rp. ". $produk->getHarga();
echo "<br/>";

echo "Stok: ". $produk->getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "Total Harga Setelah Pajak: ". $produk->total() ;
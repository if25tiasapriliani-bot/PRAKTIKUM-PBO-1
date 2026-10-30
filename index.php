<?php

//panggil file PropertyConstant
require('./PropertyConstant.php');

use pbo\marketplace\produk;


//object
$produk = new produk('P0001', 'laptop',10000000, 5);


//hitung pajak
$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK; //1.100.00

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: Rp. ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stock;
echo "<br/>";

echo "Pajak: ". $pajak."%";
echo "<br/>";

echo "Total Harga Setelah Pajak: ". $total ;
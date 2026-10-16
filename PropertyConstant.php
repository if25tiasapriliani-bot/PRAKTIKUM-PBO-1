<?php

class produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;

    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new produk();
$produk->kode = 'P0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stock = 5;

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
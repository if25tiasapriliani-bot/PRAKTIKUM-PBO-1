<?php

class produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;

    //constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stock){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;

    }

    public function pajak(){
        return self::PAJAK * 100;
    }

    public function total(){
        return $this-> harga + ($this->harga * self::PAJAK);
    }
}
    

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
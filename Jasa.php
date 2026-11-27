<?php

namespace pbo\marketplace;

require_once('./PropertyConstant.php');

use pbo\marketplace\Produk;

class Jasa {

    use produk;

    public function payment($tipe) {

        return match($tipe) {
            "virtual"=> "Virtual Account",
            "qris"=> "QRIS",
            default => "pembayaran hanya bisa va dan qris",
        };

    }
}
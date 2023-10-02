<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;

    function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    function namaBidang() {
        return "Segitiga";
    }

    function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    function kelilingBidang() {
        // karena keliling segitiga dihitung dengan sisinya, sedangkan data hitung kita alas dan tinggi maka saya isi seperti ini
        return "Tidak bisa dihitung";
    }
}
?>

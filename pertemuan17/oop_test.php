<?php
class Mahasiswa {
    public $nama = "Andi";

    public function tampilkan() {
        return "Data Mahasiswa: " . $this->nama;
    }
}

$obj = new Mahasiswa();
echo $obj->tampilkan();
?>
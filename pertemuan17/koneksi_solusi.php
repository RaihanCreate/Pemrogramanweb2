<?php
// Pengaturan default XAMPP menggunakan user "root" dan password kosong ""
$koneksi = mysqli_connect("localhost", "root", "");

if ($koneksi) {
    echo "Koneksi ke database MySQL berhasil!";
}
?>
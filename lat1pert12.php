<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = mysqli_connect("localhost", "root", "", "lat_dbase");
    mysqli_set_charset($con, "utf8mb4");

    // Mengubah umur Karina Suwandi menjadi 36.
    $sql = "UPDATE tbl_mhs
            SET Age = 36
            WHERE FirstName = 'Karina'
              AND LastName = 'Suwandi'";

    mysqli_query($con, $sql);
    $jumlah = mysqli_affected_rows($con);

    echo "<h2>Latihan 1 - UPDATE Data Mahasiswa</h2>";
    echo "<p>Query UPDATE berhasil dijalankan.</p>";
    echo "<p>Jumlah data yang berubah: <strong>$jumlah</strong></p>";
    echo "<p>Jika hasilnya 0, umur sudah 36 atau nama tidak ditemukan.</p>";

    // Menampilkan data setelah UPDATE.
    $hasil = mysqli_query(
        $con,
        "SELECT FirstName, LastName, Age FROM tbl_mhs"
    );

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Nama Depan</th><th>Nama Belakang</th><th>Umur</th></tr>";

    while ($data = mysqli_fetch_assoc($hasil)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data["FirstName"], ENT_QUOTES, "UTF-8") . "</td>";
        echo "<td>" . htmlspecialchars($data["LastName"], ENT_QUOTES, "UTF-8") . "</td>";
        echo "<td>" . (int) $data["Age"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($con);
} catch (mysqli_sql_exception $e) {
    echo "Terjadi kesalahan: "
        . htmlspecialchars($e->getMessage(), ENT_QUOTES, "UTF-8");
}
?>
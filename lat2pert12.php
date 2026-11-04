<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = mysqli_connect("localhost", "root", "", "lat_dbase");
    mysqli_set_charset($con, "utf8mb4");

    // Menghapus mahasiswa dengan nama belakang Prabowo.
    $sql = "DELETE FROM tbl_mhs WHERE LastName = 'Prabowo'";

    mysqli_query($con, $sql);
    $jumlah = mysqli_affected_rows($con);

    echo "<h2>Latihan 2 - DELETE Data Mahasiswa</h2>";
    echo "<p>Query DELETE berhasil dijalankan.</p>";
    echo "<p>Jumlah data yang dihapus: <strong>$jumlah</strong></p>";
    echo "<p>Jika hasilnya 0, data Prabowo sudah dihapus atau tidak ditemukan.</p>";

    // Menampilkan data yang masih tersisa.
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
<?php
// Tangkap ID yang dikirim melalui URL ($_GET)
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Tampilkan simulasi pemrosesan hapus data
echo "<h3>Aksi Hapus Buku</h3>";
echo "ID Buku yang dihapus: " . $id . "<br><br>";
echo "Data buku berhasil dihapus! (Simulasi)<br><br>";

// Kembalikan tombol navigasi untuk kembali ke daftar buku
echo '<a href="../../pages/books/index.php">Kembali ke Daftar Buku</a>';
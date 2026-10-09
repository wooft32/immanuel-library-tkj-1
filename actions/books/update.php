<?php
// Tangkap data yang dikirim melalui method POST dari form edit buku
$id          = $_POST['id'] ?? '';
$title       = $_POST['title'] ?? '';
$category_id = $_POST['category_id'] ?? '';
$author_id   = $_POST['author_id'] ?? '';
$year        = $_POST['year'] ?? '';
$stock       = $_POST['stock'] ?? '';

// Tampilkan bukti simulasi data berhasil ditangkap/diperbarui
echo "<h3>Aksi Edit Buku</h3>";
echo "<pre>";
print_r([
    'id'          => $id,
    'title'       => $title,
    'category_id' => $category_id,
    'author_id'   => $author_id,
    'year'        => $year,
    'stock'       => $stock
]);
echo "</pre>";

echo "<br>Data buku berhasil diperbarui! (Simulasi)<br><br>";
echo '<a href="../../pages/books/index.php">Kembali ke Daftar Buku</a>';    
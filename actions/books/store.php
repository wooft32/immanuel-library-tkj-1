<?php

require_once '../../Config/database.php';
require_once '../../repositories/book-repository.php';

if (isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $result = storeBook($conn, $_POST); 

    if ($result) {

        header("Location: ../../pages/books/index.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>
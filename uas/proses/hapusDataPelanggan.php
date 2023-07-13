<?php

    include '../koneksi.php';
    $id = $_GET['id'];
    
    $query = "DELETE FROM tbl_pelanggan WHERE id_pelanggan = '$id'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header('Location: ../index.php?message=Sukses-hapus-data');
    } else {
        echo "Gagal hapus data";
        echo "<br>";
        echo mysqli_error($mysqli);
    }

?>
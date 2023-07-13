<?php

    include '../koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    
    $query = "INSERT INTO tbl_pelanggan (id_pelanggan, nama, alamat, no_tlp) VALUES ('$id', '$nama', '$alamat', '$no_tlp')";

    $result = mysqli_query($mysqli, $query);

    // var_dump($query);exit();

    if ($result) {
        header('Location: ../index.php?message=Sukses-tambah-data');
    } else {
        echo "Gagal menambahkan data";
        echo "<br>";
        echo mysqli_error($mysqli);
    }
    
?>
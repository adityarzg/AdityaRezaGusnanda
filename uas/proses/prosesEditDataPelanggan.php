<?php

    include '../koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    
    $query = "UPDATE tbl_pelanggan SET nama = '$nama', alamat = '$alamat', no_tlp = '$no_tlp' WHERE id_pelanggan = '$id'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header('Location: ../index.php?message=Sukses-Edit-Data');
    } else {
        echo "Gagal edit data";
        echo "<br>";
        echo mysqli_error($mysqli);
    }

?>
<?php

    include '../koneksi.php';
    $kode_pesanan = $_POST['kode_pesanan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal = $_POST['tanggal'];
    $harga_paket = $_POST['harga_paket'];
    $berat_paket = $_POST['berat_paket'];
    $status = $_POST['status'];
    
    if($harga_paket == "Personal"){
        $harga_paket = 7000;
        $total_biaya = $harga_paket * $berat_paket;
    }elseif($harga_paket == "Keluarga"){
        $harga_paket = 8000;
        $total_biaya = $harga_paket * $berat_paket;
    }elseif($harga_paket == "Business"){
        $harga_paket = 10000;
        $total_biaya = $harga_paket * $berat_paket;
    }

    $query = "INSERT INTO tbl_pesanan VALUES ('$kode_pesanan', '$id_pelanggan', '$tanggal', '$harga_paket', '$berat_paket', '$total_biaya', '$status')";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header('Location: index.php?status=sukses-tambah-data');
    } else {
        echo "Gagal menambahkan data";
        echo "<br>";
        echo mysqli_error($mysqli);
    }

?>
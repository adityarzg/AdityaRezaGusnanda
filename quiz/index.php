<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Pemrograman Web Lanjut</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="navbar-nav">
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'nomor1.php') echo 'active'; ?>" href="nomor1.php">Nomor 1</a>
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'nomor2.php') echo 'active'; ?>" href="nomor2.php">Nomor 2</a>
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'nomor3.php') echo 'active'; ?>" href="nomor3.php">Nomor 3</a>
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'nomor4.php') echo 'active'; ?>" href="nomor4.php">Nomor 4</a>
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'nomor5.php') echo 'active'; ?>" href="nomor5.php">Nomor 5</a>
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'pertemuan5.php') echo 'active'; ?>" href="pertemuan5.php">Pertemuan 5</a>
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'pertemuan6.php') echo 'active'; ?>" href="pertemuan6.php">Pertemuan 6</a>
                </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-3 mb-3">
        <b>Pilih tampilan dari nomor diatas</b>
        <hr>

        <h5>Input Data Pemesanan</h5>
        <form action="hasil.php" method="post">
            <table>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>=</td> 
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>=</td> 
                    <td><textarea name="alamat" cols="20" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Paket Laundry</td>
                    <td>=</td>
                    <td>
                        <select name="paket">
                            <option value="Ekonomis">Ekonomis</option>
                            <option value="Keluarga">Keluarga</option>
                            <option value="Prioritas">Prioritas</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Berat Barang</td>
                    <td>=</td>
                    <td><input type="number" name="berat"> Kg</td>
                </tr>
                <tr>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
            if (isset($_POST['nama'])) {
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $paket = $_POST['paket'];
                $berat = $_POST['berat'];

                if ($paket == "Ekonomis") {
                    $harga = 5000;
                } elseif ($paket == "Keluarga") {
                    $harga = 20000;
                } elseif ($paket == "Prioritas") {
                    $harga = 300000;
                }

                $total = $harga * $berat;
            }
        ?>
    </div>
<?php include("footer.php");
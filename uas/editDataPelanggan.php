<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
</head>
<body>
    <div>
        <?php
            include 'koneksi.php';

            // Memeriksa apakah ada data yang dikirim melalui metode POST atau GET
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

            // Mengambil data pelanggan dari database berdasarkan ID
            $query = "SELECT * FROM tbl_pelanggan WHERE id_pelanggan = '$id'";
            $result = mysqli_query($mysqli, $query);
            
            if ($result && mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
        ?>
            <form action="proses/prosesEditDataPelanggan.php" method="POST">
                <table>
                    <tr>
                        <th>Data Pelanggan</th>
                    </tr>
                    <tr>
                        <td>ID Pelanggan</td>
                        <td><input type="text" name="id" id="id" value="<?php echo $data['id_pelanggan']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td><input type="text" name="no_tlp" id="no_tlp" value="<?php echo $data['no_tlp']; ?>"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="SIMPAN">
            </form>
        <?php
        } else {
        echo "Data tidak ditemukan.";
        }
        } else {
            echo "ID pelanggan tidak ditemukan.";
        }
        ?>
    </div>
</body>
</html>
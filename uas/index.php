<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Pemrograman Web Lanjut</title>
</head>
<body>
    <div style="margin:10px;padding:10px;border:solid black 1px;width: 300px">
        <form action="proses/tambahDataPelanggan.php" method="POST">
            <table>
                <tr>
                    <th>Data Pelanggan</th>
                </tr>
                <tr>
                    <td>ID Pelanggan</td>
                    <td><input type="text" name="id" id="id"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="nama"></td></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="text" name="no_tlp" id="no_tlp"></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="SIMPAN">
        </form>
    </div>

    <div style="margin:10px;">
        <table border="1" cellpadding=5" style="border-collapse: collapse;">
            <tr>
                <td>ID Pelanggan</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>No Telepon</td>
                <td>Aksi</td>
            </tr>
            <?php
                include 'koneksi.php';
                $query = "SELECT * FROM tbl_pelanggan";
                $result = mysqli_query($mysqli, $query);
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id_pelanggan']."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['alamat']."</td>";
                    echo "<td>".$data['no_tlp']."</td>";
                    echo "<td>
                            <a href='editDataPelanggan.php?id=".$data['id_pelanggan']."'>Edit</a>
                            <a href='proses/hapusDataPelanggan.php?id=".$data['id_pelanggan']."'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html> 
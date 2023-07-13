<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
</head>
<body>
    <div style="margin:10px;padding:10px;">
        <table border="1" cellpadding="10" style="border-collapse: collapse">
            <tr>
                <th>INPUT</th>
                <th>OUTPUT</th>
            </tr>
            <tr>
                <form action="tambahPesanan.php" method="POST">
                    <td>
                        <h4>Pesanan Laundry</h4>
                        <label>Kode Pesanan</label>
                        <input type="text" name="kode_pesanan">
                        <br><br>
                        <label>ID Pelanggan</label>
                        <input type="text" name="id_pelanggan">
                        <br><br>
                        <label>Tanggal</label>
                        <input type="text" name="tanggal">
                        <br><br>
                        <label>Harga Paket</label>
                        <select name="harga_paket">
                            <option value="Personal">Personal</option>
                            <option value="Keluarga">Keluarga</option>
                            <option value="Business">Business</option>
                        </select>
                        <br><br>
                        <label>Berat Paket</label>
                        <input type="text" name="berat_paket">
                        <br><br>
                        <label>Status</label>
                        <input type="text" name="status">
                        <br><br>
                        <input type="submit" value="SIMPAN">
                    </td>
                </form>
                <td>
                    <h4>Data Pemesanan</h4>
                    <?php
                include '../koneksi.php';
                $query = "SELECT * FROM tbl_pesanan ORDER BY kode_pesanan DESC LIMIT 1";
                $result = mysqli_query($mysqli, $query);
                while ($data = mysqli_fetch_assoc($result)) { ?>
                    <label>Kode Pesanan : </label>
                    <span><?= $data['kode_pesanan']; ?></span>
                    <br><br>
                    <label>ID Pelanggan : </label>
                    <span><?= $data['id_pelanggan']; ?></span>
                    <br><br>
                    <label>Tanggal : </label>
                    <span><?= $data['tanggal']; ?></span>
                    <br><br>
                    <label>Harga Paket : </label>
                    <span><?= $data['harga_paket'] ?></span>
                    <br><br>
                    <label>Berat Paket : </label>
                    <span><?= $data['berat_paket'] ?></span>
                    <br><br>
                    <label>Total Harga : </label>
                    <span><?= $data['total_biaya'] ?></span>
                    <br><br>
                    <label>Status : </label>
                    <span><?= $data['status'] ?></span>
                <?php } ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
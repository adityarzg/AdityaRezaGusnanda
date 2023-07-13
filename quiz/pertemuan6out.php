<?php include("index.php"); $status="active"?>
<div class="container">
    <?php
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $jenis_tiket = $_POST["jenis_tiket"];
        $jumlah = $_POST["jumlah"];

        if($jenis_tiket == 1){
            $jenis_tiket = "VIP";
            $harga = 500000;
        }elseif($jenis_tiket == 2){
            $jenis_tiket = "Reguler";
            $harga = 250000;
        }

        $total = $harga * $jumlah;
    ?>

    <h3 class="text-uppercase">data pemesanan tiket bola seagames 2018</h3>
    <h5 class="text-uppercase">indonesia vs malaysia</h5>
    <h5 class="text-uppercase">pukul 15.00 wib </h5>
    
    <table>
        <tr>
            <td>Nama </td>
            <td>:</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td>:</td>
            <td><?php echo $telp ?></td>
        </tr>
        <tr>
            <td>Jenis Tiket</td>
            <td>:</td>
            <td><?php echo $jenis_tiket ?></td>
        </tr>
        <tr>
            <td>Harga Tiket</td>
            <td>:</td>
            <td><?php echo $harga ?></td>
        </tr>
        <tr>
            <td>Banyaknya Tiket</td>
            <td>:</td>
            <td><?php echo $jumlah ?></td>
        </tr>
        <tr>
            <td><hr></td>
            <td><hr></td>
            <td><hr></td>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td><?php echo $total ?></td>
        </tr>
    </table>
</div>
<?php include("footer.php"); ?>
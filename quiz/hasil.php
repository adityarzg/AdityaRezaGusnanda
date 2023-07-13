<?php include("index.php"); ?>
<div class="container">
<h5>DATA ORDER LAUNDRY ABADI</h5>
<br>
    <div style="font-weight: bold">
        <span>Nama Pelanggan : <?= $nama ?></span>
        <br>
        <span>Alamat : <?= $alamat ?></span>
        <br>
        <span>Pilih Paket : <?= $paket ?></span>
        <br>
        <span>Harga Jenis : <?= $harga ?></span>
        <br><br>
        <span>Jumlah Berat : <?= $berat ?> Kg</span>
        <hr>
        <span>Total Bayar : <?= $total ?></span>
    </div> 
</div>
<?php include("footer.php"); ?>
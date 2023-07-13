<?php include("index.php"); $status="active"?>
<div class="container">
    <form>
        <div class="row mb-3">
            <label class="form-label">Input Pembelian Shampo</label>
            <div class="col">
                <input type="number" class="form-control" name="jlh_shampoo" placeholder="Jumlah">
            </div>
            <div class="col">
                <input type="number" class="form-control" name="harga_shampoo" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <label class="form-label">Input Pembelian Sabun</label>
            <div class="col">
                <input type="number" class="form-control" name="jlh_sabun" placeholder="Jumlah">
            </div>
            <div class="col">
                <input type="number" class="form-control" name="harga_sabun" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <label class="form-label">Input Pembelian Bedak</label>
            <div class="col">
                <input type="number" class="form-control" name="jlh_bedak" placeholder="Jumlah">
            </div>
            <div class="col">
                <input type="number" class="form-control" name="harga_bedak" placeholder="Harga">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <div>
        <?php
            if(isset($_GET['jlh_shampoo']) && isset($_GET['jlh_sabun']) && isset($_GET['jlh_bedak'])){
                $jlh_shampoo = $_GET['jlh_shampoo'];
                $harga_shampoo = $_GET['harga_shampoo'];
                $jlh_sabun = $_GET['jlh_sabun'];
                $harga_sabun = $_GET['harga_sabun'];
                $jlh_bedak = $_GET['jlh_bedak'];
                $harga_bedak = $_GET['harga_bedak'];

                $total = ($jlh_shampoo * $harga_shampoo) + ($jlh_sabun * $harga_sabun) + ($jlh_bedak * $harga_bedak);

                if($total >= 1000000){
                    //format total into IDR
                    $total_idr = "Rp. " . number_format($total,2,',','.');
                    echo "<p>Total Harga : <b>Rp. $total_idr</b></p>";
                    echo "<p>Hadiah : <b>Selamat! Anda Mendapatkan Hadiah Berupa Handphone</b></p>";
                }elseif($total >= 500000){$total_idr = "Rp. " . number_format($total,2,',','.');
                    echo "<p>Total Harga : <b>Rp. $total_idr</b></p>";
                    echo "<p>Hadiah : <b>Selamat! Anda Mendapatkan Hadiah Berupa Dompet</b></p>";
                }else{
                    $total_idr = "Rp. " . number_format($total,2,',','.');
                    echo "<p>Total Harga : <b>Rp. $total_idr</b></p>";
                    echo "<p>Hadiah : <b>Maaf, anda harus meningkatkan total belanjaan anda untuk mendapatkan hadiah menarik</b></p>";
                }
            }
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
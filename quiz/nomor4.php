<?php include("index.php"); $status="active"?>
<div class="container">
    <form>
        <div class="mb-2 mt-3">
            <label class="form-label">Input Gaji Pokok</label>
            <input type="number" class="form-control" name="gaji_pokok" placeholder="Gaji Pokok">
        </div>
        <div class="mb-2">
            <label class="form-label">Input Tunjangan</label>
            <input type="number" class="form-control" name="tunjangan" placeholder="Tunjangan">
        </div>
        <div class="mb-3">
            <label class="form-label">Input Uang Lembur</label>
            <input type="number" class="form-control" name="uang_lembur" placeholder="Uang Lembur">
        </div>
        <div class="mb-3">
            <label class="form-label">Input Utang</label>
            <input type="number" class="form-control" name="utang" placeholder="Hutang">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <div>
        <?php
            if(isset($_GET['gaji_pokok']) && isset($_GET['tunjangan']) && isset($_GET['uang_lembur']) && isset($_GET['utang'])){
                $gaji_pokok = $_GET['gaji_pokok'];
                $tunjangan = $_GET['tunjangan'];
                $uang_lembur = $_GET['uang_lembur'];
                $utang = $_GET['utang'];
                
                $total_gaji = ($gaji_pokok + $tunjangan + $uang_lembur) - $utang;

                if($total_gaji >= 10000000){
                    $total_gaji_idr = "Rp. " . number_format($total_gaji,2,',','.');
                    echo "<p>Total Gaji : <b>$total_gaji_idr</b></p>";
                    echo "<p>Status : <b>Karyawan Tetap</b></p>";
                }elseif($total_gaji >= 5000000){
                    $total_gaji_idr = "Rp. " . number_format($total_gaji,2,',','.');
                    echo "<p>Total Gaji : <b>$total_gaji_idr</b></p>";
                    echo "<p>Status : <b>Karyawan Kontrak</b></p>";
                }else{
                    //format total gaji into IDR
                    $total_gaji_idr = "Rp. " . number_format($total_gaji,2,',','.');
                    echo "<p>Total Gaji : <b>$total_gaji_idr</b></p>";
                    echo "<p>Status : <b>Karyawan Honor</b></p>";
                }
            }
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
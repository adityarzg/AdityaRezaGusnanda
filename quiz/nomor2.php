<?php include("index.php"); $status="active"?>
<div class="container">
    <form>
        <div class="mb-2 mt-3">
            <label class="form-label">Input A</label>
            <input type="number" class="form-control" name="a" placeholder="a">
        </div>
        <div class="mb-2">
            <label class="form-label">Input B</label>
            <input type="number" class="form-control" name="b" placeholder="b">
        </div>
        <div class="mb-3">
            <label class="form-label">Input C</label>
            <input type="number" class="form-control" name="c" placeholder="c">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <div>
        <?php
            if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];
                $d = ($b * $b) - (4 * $a * $c);

                echo "<p>Nilai D : <b>$d</b></p>";
                if($d > 0){
                    echo "<p>Keterangan : <b>Diatas garis kurva</b></p>";
                }elseif($d == 0){
                    echo "<p>Keterangan : <b>Berada di garis kurva</b></p>";
                }else{
                    echo "<p>Keterangan : <b>Dibawah garis kurva</b></p>";
                }
            }
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
<?php include("index.php"); $status="active"?>
<div class="container">
    <form>
        <div class="mb-2 mt-3">
            <label class="form-label">Input Celcius</label>
            <input type="number" class="form-control" name="celcius" placeholder="Celcius">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <div>
        <?php
            if(isset($_GET['celcius'])){
                $celcius = $_GET['celcius'];
                $reamur = (3/5) * $celcius;
                $fahrenheit = ((9/5) * $celcius) + 32;

                echo "<p>Nilai Reamur : <b>$reamur</b></p>";
                echo "<p>Nilai Fahrenheit : <b>$fahrenheit</b></p>";

                if($celcius > 35){
                    echo "<p>Keterangan : <b>Sangat Panas</b></p>";
                }elseif($celcius > 20){
                    echo "<p>Keterangan : <b>Sedang</b></p>";
                }else{
                    echo "<p>Keterangan : <b>Dingin</b></p>";
                }
            }
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
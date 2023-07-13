<?php include("index.php"); $status="active"?>
<div class="container">
    <form method="POST">
        <div class="mb-2 mt-3">
            <label class="form-label">Input Baris</label>
            <input type="number" class="form-control" name="baris" placeholder="Baris">
        </div>
        <div class="mb-2 mt-3">
            <label class="form-label">Input Kolom</label>
            <input type="number" class="form-control" name="kolom" placeholder="Kolom">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $baris = $_POST["baris"];
                $kolom = $_POST["kolom"];
                echo "<table class='table table-bordered'>";
                for($i=0;$i<$baris;$i++){
                    echo "<tr>";
                    for($j=0;$j<$kolom;$j++){
                        echo "<td>Oke</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>
</div>
<?php include("footer.php"); ?>
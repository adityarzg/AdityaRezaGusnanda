<?php include("index.php"); $page="nomor1"; ?>
<div class="container">
  <form>
    <div class="mb-2 mt-3">
      <label class="form-label">Masukan Nilai Tugas</label>
      <input type="number" class="form-control" name="nilai_tugas" placeholder="Tugas">
    </div>
    <div class="mb-2">
      <label class="form-label">Masukan Nilai UTS</label>
      <input type="number" class="form-control" name="nilai_uts" placeholder="UTS">
    </div>
    <div class="mb-3">
      <label class="form-label">Masukan Nilai UAS</label>
      <input type="number" class="form-control" name="nilai_uas" placeholder="UAS">
    </div>
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>

  <div>
      <?php
          if(isset($_GET['nilai_tugas']) && isset($_GET['nilai_uts']) && isset($_GET['nilai_uas'])){
              $nilai_tugas = $_GET['nilai_tugas'];
              $nilai_uts = $_GET['nilai_uts'];
              $nilai_uas = $_GET['nilai_uas'];
              $nilai_khs = (($nilai_tugas * 0.2) + ($nilai_uts * 0.3) + ($nilai_uas * 0.5));
              $grade = "";
              if($nilai_khs >= 90){
                  $grade = "A";
              }else if($nilai_khs >= 80){
                  $grade = "B";
              }else if($nilai_khs >= 60){
                  $grade = "C";
              }else{
                  $grade = "D";
              }
              echo "<p>Nilai Akhir : <b>$nilai_khs</b></p>";
              echo "<p>Grade : <b>$grade</b></p>";
          }
      ?>
  </div>
</div>
<?php include("footer.php"); ?>
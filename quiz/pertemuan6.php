<?php include("index.php"); $status="active"?>
<div class="container">
    <h4 class="mt-3 text-center text-uppercase">Form Tiket Bola Seagames 2018</h4>
    <h5 class="mt-3 text-center text-uppercase">indonesia vs malaysia</h5>
    <h5 class="mb-3 text-center text-uppercase">pukul 15.00 wib </h5>

    <form method="POST" action="pertemuan6out.php">
        <div class="row mb-3">
            <div class="col-md-2">
                <label class="form-label">Nama Pemesan</label>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="nama" placeholder="Nama Pemesan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">
                <label class="form-label">Telp</label>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" name="telp" placeholder="Telepon">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">
                <label class="form-label">Jenis Tiket</label>
            </div>
            <div class="col-md-4">
            <select class="form-select" aria-label="Default select example" name="jenis_tiket">
                <option selected>Jenis Tiket</option>
                <option value="1">VIP</option>
                <option value="2">Reguler</option>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">
                <label class="form-label">Jumlah Tiket</label>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
                <label for="lembar">Lembar</label>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
    </form>

</div>
<?php include("footer.php"); ?>
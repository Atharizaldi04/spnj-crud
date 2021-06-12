<!-- Header -->
<?php require('header.php'); ?>
<!-- Header End -->

<!-- Konten -->
<br><br>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark text-center text-white">
                Tambah Data Mahasiswa
            </div>
            <div class="card-body">
            <form method="POST" action="tambahACT.php">
                <div class="form-group">
                    <label>NIM Mahasiswa</label>
                    <input type="number" class="form-control" name="nim_mahasiswa">
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa">
                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki - Laki" checked>
                    <label class="form-check-label" for="laki-laki">
                    Laki - Laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                    <label class="form-check-label" for="perempuan">
                    Perempuan
                    </label>
                    </div>
                </div>
                <div class="form-group">
                <label>Agama</label>
                <select class="custom-select" name="agama">
                    <option selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="number" class="form-control" name="no_telepon">
                </div>
                <div class="form-group">
                    <label>Alamat</label><br>
                    <textarea name="alamat" id="" cols="67" rows="10" ></textarea>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>

            </div>
        </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require('footer.php'); ?>
<!-- Footer End -->
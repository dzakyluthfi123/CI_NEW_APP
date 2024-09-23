<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="NRP">NRP</label>
                            <input type="number" inputmode="numeric" class="form-control" id="NRP" name="NRP">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class=" form-control" id="email" name="Email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
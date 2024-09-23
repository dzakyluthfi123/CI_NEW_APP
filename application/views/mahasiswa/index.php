<div class="container">

    <div class="row">
        <div class="col-md-6 mt-3">
            <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary"> Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row-mt-5">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs->nama; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
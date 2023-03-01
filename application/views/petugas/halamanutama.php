<div class="jumbotron">
    <h1>Hai <?= $this->session->nama_petugas ?></h1>
    <p class="lead">Selamat Datang di Aplikasi Pengaduan Masyarakat</p>
    <hr class="my-4">
    <p><?php echo date('l, d-m-Y');
        echo "<br/>";
        ?></p>
    <a href="<?= base_url('petugas/pengaduan') ?>" class="btn btn-success mb-4">Masuk</a>
</div>
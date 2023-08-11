<?= $this->extend("templates/layout") ?>
<?= $this->section("content") ?>
<h1>Ini halaman admin</h1>
<a href="<?= base_url('/admin/tambah-buku')?>">+Tambah Buku</a>
<a href="<?= base_url('/admin/buku')?>">Daftar Buku</a>
<?= $this->endSection() ?>

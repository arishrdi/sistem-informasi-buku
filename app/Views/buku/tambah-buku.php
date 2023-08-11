<?= $this->extend("templates/layout") ?>
<?= $this->section("content") ?>
<form action="<?= base_url('/admin/tambah-buku') ?>" method="post">
  <input type="text" name="judul" placeholder="Judul...">
  <input type="text" name="pengarang" placeholder="Pengarang...">
  <input type="number" name="tahun" placeholder="Tahun...">
  <button type="submit">Tambah</button>
</form>
<?= $this->endSection() ?>
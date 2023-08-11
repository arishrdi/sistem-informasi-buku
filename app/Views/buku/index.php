<?= $this->extend("templates/layout") ?>
<?= $this->section("content") ?>
<h1>Daftar Buku</h1>

<table>
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Pengarang</th>
    <th>Tahun</th>
  </tr>
  <?php foreach ($buku as $i => $buku) :  ?>
    <tr>
      <td><?= $i + 1 ?></td>
      <td><?= $buku['judul'] ?></td>
      <td><?= $buku['pengarang'] ?></td>
      <td><?= $buku['tahun']  ?></td>
    </tr>
  <?php endforeach ?>
</table>

<?= $this->endSection() ?>
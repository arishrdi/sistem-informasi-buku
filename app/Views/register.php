<?= $this->extend("templates/layout") ?>
<?= $this->section("content") ?>

<h1>Registrasi Pengunjung</h1>

<form action="<?php echo base_url('/register') ?>" method="post">
  <input type="text" name="nama" placeholder="Nama...">
  <input type="email" name="email" placeholder="Email...">
  <input type="password" name="password" placeholder="Password...">
  <input type="password" name="confirm_password" placeholder="Confirm Password...">
  <button type="submit">Register</button>
</form>
<?= $this->endSection() ?>
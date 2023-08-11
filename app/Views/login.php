<?= $this->extend("templates/layout") ?>
<?= $this->section("content") ?>


<form action="<?php echo base_url('/login'); ?>" method="post">
  <input type="email" name="email" placeholder="Email...">
  <input type="password" name="password" placeholder="Password...">
  <select name="role">
    <option value="admin">Admin</option>
    <option value="pengunjung">Pengunjung</option>
  </select>
  <button type="submit">Login</button>
</form>


<?= $this->endSection() ?>
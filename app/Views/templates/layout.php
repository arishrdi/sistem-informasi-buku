<html>

<head>
  <title>Data Buku</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <ul style="display: flex; gap: 2rem;">
      <li><a href="<?= base_url('/') ?>">Home</a></li>

      <?php if (session()->get('isLoggedIn')) : ?>

        <li><a href="<?= base_url('/dashboard') ?>">Dashboard</a></li>
        <li><a href="<?= base_url('/logout') ?>">Logout</a></li>

      <?php else : ?>

        <li><a href="<?= base_url('/login') ?>">Login</a></li>
        <li><a href="<?= base_url('/register') ?>">Register</a></li>

      <?php endif ?>

    </ul>
  </header>

  <?= $this->renderSection("content"); ?>

</body>

</html>
<?= $this->extend("templates/layout") ?>
<?= $this->section("content") ?>

<h1>Hello, <?= session()->get('email'); ?></h1>
<h1>My role is, <?= session()->get('role'); ?></h1>

<?= $this->endSection() ?>
<div class="container">
    <h1>Login Berhasil</h1>
      <div class="jumbotron">
      <h1 class="display-4">Hello, <?= session('firstname') ?></h1>
      <br>
      <a class="btn btn-primary btn-lg" href="<?= site_url('Users/logout') ?>" role="button">Log Out</a>
    </div>
</div>
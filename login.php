<?php
session_start();
include 'cabecalho.php';
?>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
          <h4 class="mb-0">Login</h4>
        </div>
        <div class="card-body">
          <?php if (!empty($_SESSION['erro_login'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['erro_login']; unset($_SESSION['erro_login']); ?></div>
          <?php endif; ?>
          <form action="login_validar.php" method="post">
            <div class="mb-3">
              <label class="form-label">Usuário</label>
              <input type="text" name="usuario" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Senha</label>
              <input type="password" name="senha" class="form-control" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'rodape.php'; ?>

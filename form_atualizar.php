<?php
include 'cabecalho.php';
include 'conexao.php';

$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$produto = $stmt->fetch();
if (!$produto) {
    echo "<div class='container my-5'><div class='alert alert-danger'>Produto não encontrado.</div></div>";
    include 'rodape.php'; exit;
}
?>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark">Atualizar Produto</div>
        <div class="card-body">
          <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($produto['nome']) ?>" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Preço (R$)</label>
              <input type="number" step="0.01" name="preco" class="form-control" value="<?= $produto['preco'] ?>" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Quantidade</label>
              <input type="number" name="quantidade" class="form-control" value="<?= $produto['quantidade'] ?>" required>
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-warning text-dark"><i class="fa fa-save"></i> Atualizar</button>
              <a href="listar.php" class="btn btn-secondary">Voltar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'rodape.php'; ?>

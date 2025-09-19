<?php
include 'cabecalho.php';
include 'conexao.php';
$produtos = $pdo->query("SELECT * FROM produtos ORDER BY id DESC")->fetchAll();
?>
<div class="container my-5">
  <div class="d-flex justify-content-between mb-3">
    <h3>Produtos</h3>
    <a href="form_cadastrar.php" class="btn btn-primary"><i class="fa fa-plus"></i> Novo</a>
  </div>
  <table class="table table-striped table-hover">
    <thead class="table-primary">
      <tr>
        <th>ID</th><th>Nome</th><th>Preço (R$)</th><th>Quantidade</th><th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($produtos as $p): ?>
      <tr>
        <td><?= $p['id'] ?></td>
        <td><?= htmlspecialchars($p['nome']) ?></td>
        <td><?= number_format($p['preco'],2,',','.') ?></td>
        <td><?= $p['quantidade'] ?></td>
        <td>
          <a href="form_atualizar.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
          <a href="apagar.php?id=<?= $p['id'] ?>" class="btn btn-danger btn-sm"
             onclick="return confirm('Excluir este produto?');"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php include 'rodape.php'; ?>

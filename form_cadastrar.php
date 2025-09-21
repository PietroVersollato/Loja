<?php include 'cabecalho.php'; ?>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">Cadastrar Produto</div>
        <div class="card-body">
          <form action="inserir.php" method="post">
            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Preço (R$)</label>
              <input type="number" name="preco" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Quantidade</label>
              <input type="number" name="quantidade" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
              <a href="listar.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Voltar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'rodape.php'; ?>
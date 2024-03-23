<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Novo cadastro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="add.php">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Capacidade</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="capacidade">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tamanho (m²)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tamanho">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</a>
        </form>
      </div>
    </div>
  </div>
</div>
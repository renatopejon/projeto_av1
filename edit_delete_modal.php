<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar Sala</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Capacidade</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="capacidade" value="<?php echo $row['capacidade']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tamanho</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tamanho" value="<?php echo $row['tamanho']; ?>">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" name="edit" class="btn btn-primary"> Atualizar</a>
        </form>
      </div>
    </div>
  </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Remover Sala</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <p class="text-center">Você tem certeza que quer remover?</p>
            <h2 class="text-center"><?php echo '#'.$row['id'].' '.$row['nome']; ?></h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Sim</a>
      </div>
    </div>
  </div>
</div>
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Cancelar Agendamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <p class="text-center">Você tem certeza que quer cancelar esse evento?</p>
            <h2 class="text-center"><?php echo 'Organizador: '. $row['nome']; ?></h2>
            <h2 class="text-center"><?php echo 'Sala: '. $row['sala']; ?></h2>
            <h2 class="text-center"><?php echo 'Assunto: '. $row['assunto']; ?></h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Sim</a>
      </div>
    </div>
  </div>
</div>
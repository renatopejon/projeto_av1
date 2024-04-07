<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Cancelar Agendamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <h6 class="text-center">Você tem certeza que quer cancelar esse evento?</h6>
            <div class="text-center"><?php echo '<b>Organizador:</b> '. $row['nome']; ?></div>
            <div class="text-center"><?php echo '<b>Sala:</b> '. $row['sala']; ?></div>
            <div class="text-center"><?php echo '<b>Assunto:</b> '. $row['assunto']; ?></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="delete_agendamentos.php?id=<?php echo $row['id']; ?>&?sala=<?php echo $row['sala']; ?>" class="btn btn-danger"> Sim</a>
      </div>
    </div>
  </div>
</div>
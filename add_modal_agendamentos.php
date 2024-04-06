<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Novo agendamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="add_agendamentos.php">
            <div class="mb-4 row">
              <label class="col-sm-1 col-form-label">Sala</label>
                <select class="form-select" style="width: 80%; margin-left: 10%; font-size: 16px;"  aria-label="Small" name="sala">
                  <option selected>Escolha sua Sala</option>
                  <?php 
                    include_once('connection.php');
          
                    $database = new Connection();
                    $db = $database->open();

                    try{    
                      $sql = 'SELECT * FROM salas';

                      foreach ($db->query($sql) as $row) {
                  ?>                       
                  <option value="<?php echo $row['id']; ?>" <?php if($row['status'] == 0){echo 'hidden';} ?>><?php echo $row['nome']; ?></option>  
                  <?php 
                }
              }
                    catch(PDOException $e){
                        echo "Houve um problema na conexão com o Banco de Dados: " . $e->getMessage();
                    }

                    //close connection
                    $database->close();
          ?>
                </select>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="nome" required>

                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Assunto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="assunto" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Participantes</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="participantes" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Data</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dat" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Horário</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" name="horario" required>
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" name="add_agendamentos" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</a>
        </form>
      </div>
    </div>
  </div>
</div>
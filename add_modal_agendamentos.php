<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Novo agendamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="add_agendamentos.php">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Salas</label>
                <select class="form-select form-select-lg mt-5" style="width: 20%; margin-left: 5%; font-size: 16px;"  aria-label="Small">
                  <option selected>Escolha sua Sala</option>
        <?php 
                    include_once('connection.php');
          
                    $database = new Connection();
                    $db = $database->open();

                    try{    
                      $sql = 'SELECT * FROM salas';

                      foreach ($db->query($sql) as $row) {
                          ?>
                            
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>  

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
                    <input type="text" class="form-control" name="nome">
                    <?php
                      echo '<input type="text" class="form-control" name="sala" value="">'
                    ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Assunto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="assunto">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Participantes</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="participantes">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Data</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dat">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Horário</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" name="horario">
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
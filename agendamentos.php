<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sua Hora - Sistema de Agendamento de Salas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Sua Hora</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Início</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="salas.php">Salas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="agendamentos.php">Agendamentos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
      <h1 class="page-header text-center">Agendamentos</h1>
      <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnew">
                <i class="bi bi-plus-circle-fill"></i> Novo Agendamento
                </button>
                <?php 
                    session_start();
                    if(isset($_SESSION['message'])){
                        ?>
                        <div class="alert alert-info text-center" style="margin-top:20px;">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php
    
                        unset($_SESSION['message']);
                    }
                ?>
                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th style="width:3%">ID</th>
                        <th style="width:50%">Nome</th>
                        <th style="width:17%">Assunto</th>
                        <th style="width:17%">Sala</th>
                        <th style="width:7%">Participantes</th>
                        <th style="width:5%">Data</th>
                        <th style="width:5%">Horário</th>
                        <th style="width:5%">Ações</th>
                    </thead>
                    <tbody>
                        <?php
                            include_once('connection.php');
    
                            $database = new Connection();
                            $db = $database->open();
                            try{    
                                $sql = 'SELECT * FROM agendamentos';
                                foreach ($db->query($sql) as $row) {
                        ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['assunto']; ?></td>                                    
                                        <td><?php echo $row['sala']; ?></td>                                    
                                        <td class="text-center"><?php echo $row['participantes']; ?></td>                                    
                                        <td><?php echo date("d/m/Y", strtotime($row['dat']));?></td>                                    
                                        <td><?php echo $row['horario']?></td>                                    
                                        <td class="text-center">
                                            <a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="bi bi-trash3"></i></a>
                                        </td>
                                        <?php include('delete_modal_agendamentos.php'); ?>
                                    </tr>
                          <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo "Houve um problema na conexão com o Banco de Dados: " . $e->getMessage();
                            }
    
                            //close connection
                            $database->close();
    
                        ?>
                    </tbody>
                </table>
            </div>
      </div>
    </div>
    
    <?php include('add_modal_agendamentos.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
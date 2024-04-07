<!doctype html>
<html lang="en">
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
            <a class="nav-link active" href="salas.php">Salas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="agendamentos.php">Agendamentos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
      <h1 class="page-header text-center">Gerenciamento de Salas</h1>
      <div class="row">
            <div class="col-12 flex-nowrap">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnew">
                <i class="bi bi-plus-circle-fill"></i> Novo Cadastro
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
                        <th style="width:7%">Capacidade</th>
                        <th style="width:7%">Tamanho</th>
                        <th style="width:5%" class="text-center">Status</th>
                        <th style="width:10%" class="text-center">Ações</th>
                    </thead>
                    <tbody>
                        <?php
                            include_once('connection.php');
    
                            $database = new Connection();
                            $db = $database->open();
                            try{    
                                $sql = 'SELECT * FROM salas';
                                foreach ($db->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['capacidade']; ?></td>                                    
                                        <td><?php echo $row['tamanho'].' m²'; ?></td>                                    
                                        <td><?php if($row['status'] == 1){echo '<div class="p-1 text-center text-light bg-success border-primary-subtle rounded-3">Disponível</div>';} else {echo '<div class="p-1 text-center text-light bg-danger border-primary-subtle rounded-3">Ocupada</div>';} ?></td>                                    
                                        <td class="text-center text-nowrap">
                                            <a href="#edit_<?php echo $row['id']; ?>" class="btn btn-info btn-sm" data-bs-toggle="modal"><i class="bi bi-pencil"></i></a>
                                            <a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="bi bi-trash3"></i></a>
                                        </td>
                                        <?php include('edit_delete_modal.php'); ?>
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


    <!-- Footer -->
    <footer class="bg-dark text-white text-center text-md-start fixed-bottom">
        <!-- Grid container -->
        <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Centro Universitário do Norte (UNINORTE)</h5>
            <h6 class="text-uppercase">AVALIAÇÃO AV1</h6>
            <br>
            <p>
                Professor: Ozeas Nobre<br>
                Disciplina: Programação Orientada A Objetos Para Web
            </p>
            </div>

            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


            <ul class="list-unstyled">

            </ul>
            </div>
            <!--Grid column-->

            

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Links</h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 4</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2020 Copyright:
        <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <?php include('add_modal.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>

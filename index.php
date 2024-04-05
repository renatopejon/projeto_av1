<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sua Hora - Sistema de Agendamento de Salas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      .container{
         
      }
      .mt-5.p-4{
        position: fixed;
        width: 100%;
        bottom: 0;
      }
    </style>
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
            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="salas.php">Salas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="agendamentos.php">Agendamentos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

<div class="container mt-5"></div>
    
<?php include('add_modal.php'); ?>

<footer class="mt-5 p-4 text-black text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      <div class="col mb-3">
        <h5>Centro Universitário Uninorte</h5><br> 
        <p class="text-muted">Porfessor: Ozeas Nobre <br> Disciplina Programação Orientada a Objetos web</p>
      </div>
      <div class="col mb-3 text-end">
        <h5>Alunos</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Leyla Regina</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Renato Pejon</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Samuel Lucas</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Wennedy Galvão</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Marcilino Freitas</a></li>
        </ul>
      </div>
      <div class="col mb-3 text-end">
        <h5>GitHub</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://github.com/LeylaRegina" class = "nav-link p-0 text-body-secondary" target="_blank">LeylaRegina</a></li>
          <li class="nav-item mb-2"><a href="https://github.com/renatopejon" class="nav-link p-0 text-body-secondary"target="_blank">RenatoPejon</a></li>
          <li class="nav-item mb-2"><a href="https://github.com/Barros1995" class="nav-link p-0 text-body-secondary"target="_blank">Barros1995</a></li>
          <li class="nav-item mb-2"><a href="https://github.com/wennedy12" class="nav-link p-0 text-body-secondary"target="_blank">Wennedy</a></li>
          <li class="nav-item mb-2"><a href="https://github.com/MarcilinoFreitas" class="nav-link p-0 text-body-secondary"target="_blank">MarcilinoFreitas</a></li>
        </ul>
      </div>
    
    </div>
  </div>
  <div class="text-center p-3">
    © 2024 Copyright:
  </div>

</footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
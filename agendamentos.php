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
            <a class="nav-link" href="salas.php">Salas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="agendamentos.php">Agendamentos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <h1 class="page-header text-center mt-5">Agendamentos</h1>
    <select class="form-select form-select-lg mt-5" style="width: 20%; margin-left: 5%; font-size: 16px;"  aria-label="Small">
      <option selected>Escolha sua Sala</option>
      <option value="1">Sala A</option>
      <option value="2">Sala B</option>
      <option value="3">Sala C</option>
    </select>
    <p id="disponibilidadeMensagem"></p>

    <script>
      const selectElement = document.getElementById('salaSelect');
      const mensagemElement = document.getElementById('disponibilidadeMensagem');

      // Simule a disponibilidade da sala (true para disponível, false para ocupada)
      const salaDisponivel = true;

      selectElement.addEventListener('change', () => {
        const salaSelecionada = selectElement.value;
        if (salaSelecionada) {
            mensagemElement.textContent = salaDisponivel ? 'Sala disponível' : 'Sala ocupada';
        } else {
            mensagemElement.textContent = ''; // Limpa a mensagem se nenhuma sala for selecionada
        }
      });
    </script>
    <div class="check mt-5" style=" margin-left: 5%; font-size: 16px;">
      <label style="margin-bottom: 10px;" for=" ">Selecione os itens:</label>
      <br>
      <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="som">Alto-Falantes</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="" value="">
        <label class="form-check-label" for="">Datashow</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="" value="" >
        <label class="form-check-label" for="">Microfone</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="" value="" >
        <label class="form-check-label" for="">Computador</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="" value="" >
        <label class="form-check-label" for="">Câmeras</label>
      </div>
    </div>
    <div class="form" style=" margin-left: 5%; margin-bottom: 200px; font-size: 16px;">
      <div class="form-floating mb-3">
          <input type="" class="form-control mt-3" style="width: 50%;" placeholder="ID" id="" >
          <label for="">ID da Sala</label>
      </div>
       <div class="form-floating">
          <input type="text" class="form-control mt-3" style="width: 50%;" placeholder="Nome" id="">
          <label for="">Nome do Organizador</label>
      </div>
      <div class="form-floating">
          <input type="int" class="form-control mt-3" style="width: 50%;" id="" placeholder="Capacidade">
          <label for="">Numero de Participantes</label>
      </div>
      <div class="form-floating">
          <input type="time" class="form-control mt-3" style="width: 50%;" id="" placeholder="Horario">
          <label for="">Horario</label>
      </div>
      <div class="form-floating">
          <input type="date" class="form-control mt-3" style="width: 50%;" id="" placeholder="Data">
          <label for="">Data</label>
      </div>
      <div class="mb-10" >
        <button type="submit" class="btn btn-primary" style="margin-top: 10px; width: 150px;">Enviar</button>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
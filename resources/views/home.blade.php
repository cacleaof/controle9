<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle</title>

    <link rel="stylesheet" href="{{ asset('site/bootstrap.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('site/style.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    <div class="input-group mb-3">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>
    <div class="container">
        <div class="row row-cols-4">
    {{-- <div class="input-group mb-3"> --}}
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Projetos</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Diario</a></li>
          <li><a class="dropdown-item" href="#">Projetos e Tarefas</a></li>
          <li><a class="dropdown-item" href="#">Copiar Projeto</a></li>
          <li><hr class="dropdown-divider" href="#">STATUS></li>
          <li><a class="dropdown-item" href="#">Diario</a></li>
          <li><a class="dropdown-item" href="#">Projetos</a></li>
          <li><a class="dropdown-item" href="#">Tarefas</a></li>
        </ul>
      {{-- </div> --}}
      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Importar</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Diario</a></li>
          <li><a class="dropdown-item" href="#">Projetos e Tarefas</a></li>
          <li><a class="dropdown-item" href="#">Copiar Projeto</a></li>
          <li><hr class="dropdown-divider" href="#">STATUS></li>
          <li><a class="dropdown-item" href="#">Diario</a></li>
          <li><a class="dropdown-item" href="#">Projetos</a></li>
          <li><a class="dropdown-item" href="#">Tarefas</a></li>
        </ul>
      </div>
      {{-- <div class="input-group mb-3"> --}}
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Diario</a></li>
          <li><a class="dropdown-item" href="#">Projetos e Tarefas</a></li>
          <li><a class="dropdown-item" href="#">Copiar Projeto</a></li>
          <li><hr class="dropdown-divider" href="#">STATUS></li>
          <li><a class="dropdown-item" href="#">Diario</a></li>
          <li><a class="dropdown-item" href="#">Projetos</a></li>
          <li><a class="dropdown-item" href="#">Tarefas</a></li>
        </ul>
        </div>
    </div>
</head>
<body>
    <center><h1>Bem-vindo ao Sistema de Projetos TELESSAUDE</h1></center>
    <div class="container">
      <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-lg btn-blue" style="background-color: #b2d9f7">EXECUÇÃO - DIARIO</button>
    <button class="btn btn-lg btn-segunda" style="background-color: #487aa1">PLANO - Atividades e Projetos</button>
    <button class="btn btn-lg btn-terceira" style="background-color: #7c8071" href="admin/n_proj" >PLANO - Novo Projeto</button>
    <button class="btn btn-lg btn-quarta" style="background-color: #dde3ca" >PLANO - Nova Tarefa</button>
  
</div>
</div>
    <script src="{{ asset('site/jquery.js')}}"></script>
    <script src="{{ asset('site/bootstrap.js')}}"></script>
</body>
</html>
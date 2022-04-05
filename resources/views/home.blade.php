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
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dados Usuário</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="logout">Mudar Senha</a></li>
          <li><a class="dropdown-item" href="{{ route('logout')  }}">Perfil</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="{{ route('logout')  }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SAIR</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form></li>
         
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
    <a class="btn btn-lg btn-primeira" style="background-color: #b2d9f7" href="admin/n_proj" role="button">EXECUÇÃO - DIARIO</a>
    <a class="btn btn-lg btn-segunda"  style="background-color: #487aa1" href="admin/n_proj" role="button">PLANO - Atividades e Projetos</a>
    <a class="btn btn-lg btn-terceira" style="background-color: #7c8071" href="admin/n_proj" role="button">PLANO - Novo Projeto</a>
    <a class="btn btn-lg btn-quarta" style="background-color: #dde3ca" href="admin/n_proj" role="button">PLANO - Nova Tarefa</a>
  
</div>
</div>
    <script src="{{ asset('site/jquery.js')}}"></script>
    <script src="{{ asset('site/bootstrap.js')}}"></script>
</body>
</html>
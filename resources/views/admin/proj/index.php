<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Cover Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Telessaude</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Diario</a>
        <a class="nav-link" href="#">Tarefas</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Bem-vindo ao Sistema de Projetos TELESSAUDE.</h1>
    <p class="lead">Selecione abaixo as opções principais ou click nos menus acima</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">EXECUÇÃO - DIARIO</a>
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Atividades e Projetos</a>
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Novo Projeto</a>
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">PLANO - Nova Tarefa</a>
    </p>
    <div class="col-md-12">
    <h5>Esse sistema foi desenvolvido para controlar os Processos e Projetos do NET/SES-PE. O primeiro passo é o Planejamento Anual de Atividades e Projetos
      do Núcleo. Cada Projeto deve ter um único gerente, responsável pela execução e atualização das atividades definidas. Estas atividades podem ser gerais
      ou definida para um único colaborador. </h5>
      <h4>LISTA DAS TAREFAS ATRIBUIDAS AO SEU USUÁRIO: {{auth()->user()->name}}</h4>
      </div>
      <div class="table">
        <table id="example" class="display" style="width:100%">
          <thead>
         <tr>
          <th>Status</th>
          <th>Projeto</th>
          <th>Tarefa</th>
          <th>Início</th>
          <th>Fim</th>
          <th>Urg</th>
          <th>Imp</th>
         </tr>
         </thead>
         <tbody>
         @foreach($tasks as $task)
         @if( $task->user_id == auth()->user()->id && $task->status == 'Executando'||$task->user_id == auth()->user()->id && $task->status == 'Pendente' )
          <tr>
          <td>{{ $task->status}} </td>
            @foreach ($projects as $project)
              @if( $project->id == $task->proj_id )
                <td><a href="{{ route('proj.showpj', ['prj' => $task->proj_id]) }}">{{ $project->projeto }} </td>
                @endif
          @endforeach
          <td><a href="{{ route('proj.showtk', ['trf' => $task->id]) }}"> {{ $task->text }}</a></td>
          <td>{{ \Carbon\Carbon::parse($task->start_date)->format('d/m/Y') }} </td>
          <td>{{ \Carbon\Carbon::parse($task->date_fim)->format('d/m/Y') }} </td>
          <td>{{ $task->urg}} </td>
          <td>{{ $task->imp}} </td>
         </tr>
         @endif
         @endforeach
         </tbody>
        </table>
        </div> 
  </main>

  <footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>


    
  </body>
</html>

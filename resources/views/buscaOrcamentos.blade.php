<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Oficina2.0</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('index') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
          </li>
        </ul>
        <div class="my-2 my-lg-0 nav-item">
           <a class="nav-link" href="{{ url('orcamento') }}">Realizar Orçamento <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Buscar Orçamentos</h1>
      </div>
    </div>
    <div class="alert alert-danger" role="alert" id="myAlert" hidden>
      This is a danger alert—check it out!
    </div>
    <div class="row">
      <div class="jumbotron bg-light col-lg-7">
        <form id="formSearch" class="form-inline" action="{{route('filtroOrcamento.send')}}" method="POST">
           {{csrf_field()}}
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="categoria">
            <div class="col-auto my-1">
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" onchange="setHint();" name="select">
                <option selected>Choose...</option>
                <option name="1" value="1">Nome do Cliente</option>
                <option name="2" value="2">Nome do Vendedor</option>
              </select>
            </div>
            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="validaData()"name="search" value="Search"></input>
        </form><br>

        <table class="table">             
          <thead  class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Descricao</th>
              <th scope="col">Data</th>
              <th scope="col">Hora</th>
              <th scope="col">Valor</th>
              <th scope="col">Vendedor</th>
              <th scope="col">Cliente</th>
            </tr>
          </thead>
          @foreach($orcamentos as $value)
          <tbody>
              <tr>
                <td>{{$value->id}}</td> 
                <td>{{$value->descricao}}</td> 
                <td>{{$value->data}}</td> 
                <td>{{$value->hora}}</td> 
                <td>{{$value->valor}}</td> 
                <td>{{$value->vendedor}}</td> 
                <td>{{$value->cliente}}</td> 
              </tr>
          </tbody>
          @endforeach
        </table>          
      </div>
    </div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
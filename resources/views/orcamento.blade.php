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
          <a class="nav-link" href="#">Filtrar Orçamentos</a>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Realizar Orçamento</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="jumbotron bg-transparent col-md-5 ">
          <form action="{{route('formulario.send')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label for="descricaoProduto">Descrição</label>
              <textarea class="form-control" name="descricaoOrcamento" id="descricaoOrcamento" placeholder="Detalhes do orçamento" rows="3" required></textarea>
            </div>

            <!-- Row2 -->
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="precoVenda">Valor Orçado</label>
                <input type="number" class="form-control" name="valorOrcado" id="valorOrcado" placeholder="1,00" step="0.01" min="0" required>
              </div>

              <div class="form-group col-md-5">
                <label for="precoVenda">Data</label>
                <input type="date" class="form-control" name="data" id="data" required>
              </div>

              <div class="form-group col-md-3">
                <label for="precoVenda">Hora</label>
                <input type="time" class="form-control" name="hora" id="hora" required>
              </div>
            </div>


            <!-- Row 3 -->
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="vendedor">Vendedor</label>
                <input type="text" class="form-control" name="vendedor" id="vendedor" required>
              </div>
              <div class="form-group col-md-6">
                <label for="cliente">Cliente</label>
                <input type="text" class="form-control" name="cliente" id="cliente" required>         
              </div>
            </div>
            <!-- Row 3 -->

            <div class="form-row justify-content-center mt-4">
              <button class="btn btn-outline-primary col-md-6 btn-block" type="submit" name="salvar">Salvar</button>
            </div>
          </form>
        </div>
      </div>       
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
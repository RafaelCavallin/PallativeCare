<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">

        <div class="col-6">
          
          <form name="formPPS">
            <div class="">
              <h3>Deambulação</h3>
              <button value="100" name="deambulacao" onclick="getValor(this.value)" class="btn btn-success btn-block">Completa</button>
              <button value="70" name="deambulacao" onclick="getValor(this.value)" class="btn btn-warning btn-block">Reduzida</button>
              <button value="50" name="deambulacao" onclick="getValor(this.value)" class="btn btn-warning btn-block">Maior parte de tempo sentado ou deitado</button>
              <button value="40" name="deambulacao" onclick="getValor(this.value)" class="btn btn-danger btn-block">Maior parte do tempo acamado</button>
              <button value="30" name="deambulacao" onclick="getValor(this.value)" class="btn btn-danger btn-block">Totalmente acamado</button>
            </div>

            <div class="">
              <h3>Atividade e evidência da doença</h3>
              <button value="100" name="atividade" onclick="getValor(this.value)" class="btn btn-success btn-block">Atividade normal e trabalho; sem evidência de doença</button>
              <button value="90" name="atividade" onclick="getValor(this.value)" class="btn btn-warning btn-block">Atividade normal e trabalho; alguma evidência de doença</button>
              <button value="80" name="atividade" onclick="getValor(this.value)" class="btn btn-warning btn-block">Atividade normal com esforço; alguma evidência de doença</button>
              <button value="70" name="atividade" onclick="getValor(this.value)" class="btn btn-warning btn-block">Incapaz para o Trabalho; Doença significativa</button>
              <button value="60" name="atividade" onclick="getValor(this.value)" class="btn btn-warning btn-block">Incapaz p/ o hobbies/trabalho doméstico. Doença significativa</button>
              <button value="50" name="atividade" onclick="getValor(this.value)" class="btn btn-danger btn-block">Incapacitado para qualquer trabalho; Doença extensa</button>
              <button value="40" name="atividade" onclick="getValor(this.value)" class="btn btn-danger btn-block">Incapaz para a maioria das atividades. Doença extensa</button>
              <button value="30" name="atividade" onclick="getValor(this.value)" class="btn btn-danger btn-block">Incapaz para quallquer atividade. Doença extensa</button>
            </div>

            <div class="invisible">
              <h3>Auto-cuidado</h3>
              <button class="btn btn-success btn-block">Completo</button>
              <button class="btn btn-success btn-block">Assistência ocasional. </button>
              <button class="btn btn-warning btn-block">Assistência Considerável</button>
              <button class="btn btn-danger btn-block">Assistência quase completa</button>
              <button class="btn btn-danger btn-block">Dependência Completa</button>
            </div>

            <div class="invisible">
              <h3>Ingesta</h3>
              <button class="btn btn-success btn-block">Normal</button>
              <button class="btn btn-success btn-block">Normal ou reduzida</button>
              <button class="btn btn-warning btn-block">Mínima a pequenos goles</button>
              <button class="btn btn-danger btn-block">Cuidados com a boca</button>
            </div>


            <div class="invisible">
              <h3>Nível da Consciência</h3>
              <button class="btn btn-success btn-block">Completa</button>
              <button class="btn btn-success btn-block">Completa ou períodos de Confusão.</button>
              <button class="btn btn-warning btn-block">Completa ou sonolência. +/- confusão</button>
              <button class="btn btn-danger btn-block">Sonolência ou coma. +/- confusão</button>
            </div>

          </form>

        </div>


      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

  <?php 


  ?>
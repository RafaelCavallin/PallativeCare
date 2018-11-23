<section id="escalaZarit" class="mb-3">

  <div class="container mt-4">

    <div class="row">
      <div class="my-2 col-md-12 mb-3">
        <h4 class="display-4">Escala de Zarit reduzida</h4><h5> – Sobrecarga Cuidador</h5>
      </div><!-- /col -->
    </div>

    <div class="row">
      <div class="col-md-12">
        <ul class="lead">
          <li>
            Avaliação da claudicação familiar em Cuidados Paliativos, sendo por eles definida como a situação de incapacidade dos elementos de uma família em 385 oferecer uma resposta adequada às múltiplas necessidades e solicitações do doente. Escala de Zarit reduzida em Cuidados Paliativos, é útil, fácil, rápida e confiável, apresentando sensibilidade e especificidade elevadas para medir a claudicação familiar.
          </li>
          <li>
            Instrumento utilizado para avaliar a sobrecarga do cuidador principal.
          </li>
          <li>
            Apresenta sete perguntas relacionando aspectos físicos e emocionais do cuidador, associados a sua rotina diária com o paciente.
          </li>
          <li>
            Classifica a sobrecarga do cuidador em leve, moderada e grave.
          </li>
          <li>
            Escala aplicada por profissional assistente social e psicólogo.
          </li>
        </ul>

        <h5>Resultado:</h5>
        <ul>
          <li>Sobrecarga leve: até 14 pontos</li>
          <li>Sobrecarga moderada: 15 – 21 pontos</li>
          <li>Sobrecarga grave: acima de 22 pontos</li>
        </ul>
        <small class="text-muted">Fonte: <a href="http://biblioteca.cofen.gov.br/wp-content/uploads/2017/05/Manual-de-cuidados-paliativos-ANCP.pdf" target="blank">Manual de Cuidados Paliativos ANCP - 2ª edição</a></small>
      </div><!-- /col -->
    </div> <!-- /row -->

    <hr>

    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8">
        <div class="card bg-light">
          <div class="card-body">
            <form action="#" method="POST">

              <!-- INICIO QUESTÃO TEMPO -->
              <div class="form-group mt-2">  
                <h5>1. Sente que, por causa do tempo que utiliza com o seu familiar/doente já não tem tempo suficiente para você mesmo?</h5>
                <select name="selectTempo" id="selectTempo" class="form-control" required="true">
                  <option value="">Selecione</option>
                  <option value="1">Nunca</option>
                  <option value="2">Quase nunca</option>
                  <option value="3">Às vezes</option>
                  <option value="4">Frequentemente</option>
                  <option value="5">Quase sempre</option>
                </select>
              </div><!-- FIM QUESTÃO TEMPO -->

              <!-- INICIO QUESTÃO STRESS -->
              <div class="form-group mt-3">  
                <h5>2. Sente-se estressado/ angustiado por ter que cuidar do seu familiar/ doente e ao mesmo tempo ser responsável por outras tarefas? (ex. Cuidar de outros familiares, ter que trabalhar).</h5>
                <select name="selectStress" id="selectStress" class="form-control" required="true">
                  <option value="">Selecione</option>
                  <option value="1">Nunca</option>
                  <option value="2">Quase nunca</option>
                  <option value="3">Às vezes</option>
                  <option value="4">Frequentemente</option>
                  <option value="5">Quase sempre</option>
                </select>
              </div><!-- FIM QUESTÃO STRESS -->

              <!-- INICIO QUESTÃO AMIGOS -->
              <div class="form-group mt-3">  
                <h5>3. Acha que a situação atual afeta a sua relação com amigos ou outros elementos da família de uma forma negativa?</h5>
                <select name="selectFamilia" id="selectFamilia" class="form-control" required="true">
                  <option value="">Selecione</option>
                  <option value="1">Nunca</option>
                  <option value="2">Quase nunca</option>
                  <option value="3">Às vezes</option>
                  <option value="4">Frequentemente</option>
                  <option value="5">Quase sempre</option>
                </select>
              </div><!-- FIM QUESTÃO AMIGOS -->

              <!-- INICIO QUESTÃO EXAUSTO -->
              <div class="form-group mt-3">  
                <h5>4. Sente-se exausto quando tem de estar junto do seu familiar/ doente?</h5>
                <select name="selectExausto" id="selectExausto" class="form-control" required="true">
                  <option value="">Selecione</option>
                  <option value="1">Nunca</option>
                  <option value="2">Quase nunca</option>
                  <option value="3">Às vezes</option>
                  <option value="4">Frequentemente</option>
                  <option value="5">Quase sempre</option>
                </select>
              </div><!-- FIM QUESTÃO EXAUSTO -->

              <!-- INICIO QUESTÃO SAÚDE -->
              <div class="form-group mt-3">  
                <h5>5. Sente que sua saúde tem-se visto afetada por ter que cuidar do seu familiar/ doente?</h5>
                <select name="selectSaude" id="selectSaude" class="form-control" required="true">
                  <option value="">Selecione</option>
                  <option value="1">Nunca</option>
                  <option value="2">Quase nunca</option>
                  <option value="3">Às vezes</option>
                  <option value="4">Frequentemente</option>
                  <option value="5">Quase sempre</option>
                </select>
              </div><!-- FIM QUESTÃO SAÚDE -->

              <!-- INICIO QUESTÃO CONTROLE -->
              <div class="form-group mt-3">  
                <h5>6. Sente que tem perdido o controle da sua vida desde que a doença o seu familiar/ doente se manifestou?</h5>
                <select name="selectControle" id="selectControle" class="form-control" required="true">
                  <option value="">Selecione</option>
                  <option value="1">Nunca</option>
                  <option value="2">Quase nunca</option>
                  <option value="3">Às vezes</option>
                  <option value="4">Frequentemente</option>
                  <option value="5">Quase sempre</option>
                </select>
              </div><!-- FIM QUESTÃO CONTROLE -->

              <!-- INICIO QUESTÃO SOBRECARREGADO -->
              <div class="form-group mt-3">  
                <h5>7. No geral, sente-se muito sobrecarregado por ter que cuidar do seu familiar/ doente?</h5>
                <select name="selectSobrecarregado" id="selectSobrecarregado" class="form-control" required="true">
                  <option value="">Selecione</option>
                  <option value="1">Nunca</option>
                  <option value="2">Quase nunca</option>
                  <option value="3">Às vezes</option>
                  <option value="4">Frequentemente</option>
                  <option value="5">Quase sempre</option>
                </select>
              </div><!-- FIM QUESTÃO SOBRECARREGADO -->

              <div class="form-group mt-3">
                <input type="submit" id="enviarZarit" class="btn btn-primary col-md-12" value="Enviar">
              </div>
            </form> 
          </div><!-- /card-body -->
        </div><!-- /card -->
      </div><!-- /col -->
    </div><!-- /row -->

  </div><!-- /container -->
</section>  

<!-- Modal -->
<div class="modal fade" id="ResultZarit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resultado Zarit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 class="display-3 text-center" id="resultado"></h2>
        <p class="lead text-center" id="msg"></p>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    
  document.querySelector('#enviarZarit').addEventListener('click', function(e){

    if($('#selectTempo option:selected').val() == ""){
      return false
    }else{
      var tempo = parseInt($('#selectTempo option:selected').val());
    }

    if($('#selectStress option:selected').val() == ""){
      return false
    }else{
      var stress = parseInt($('#selectStress option:selected').val());
    }

    if($('#selectFamilia option:selected').val() == ""){
      return false
    }else{
      var familia = parseInt($('#selectFamilia option:selected').val());
    }

    if($('#selectExausto option:selected').val() == ""){
      return false
    }else{
      var exausto = parseInt($('#selectExausto option:selected').val());
    }

    if($('#selectSaude option:selected').val() == ""){
      return false
    }else{
      var saude = parseInt($('#selectSaude option:selected').val());
    }

    if($('#selectControle option:selected').val() == ""){
      return false
    }else{
      var controle = parseInt($('#selectControle option:selected').val());
    }

    if($('#selectSobrecarregado option:selected').val() == ""){
      return false
    }else{
      var sobrecarregado = parseInt($('#selectSobrecarregado option:selected').val());
    }

    var total = tempo + stress + familia + exausto + saude + controle + sobrecarregado;

    if(total <= 14){
      var msg = "Sobrecarga leve"
    }else if((total >= 15) && (total <=21)){
      var msg = "Sobrecarga moderada"
    }else{
      var msg = "Sobrecarga grave"
    }

    $('#ResultZarit').modal('show');
    e.preventDefault()

    document.getElementById('resultado').innerHTML = total
    document.getElementById('msg').innerHTML = msg

    $('#selectTempo').prop('selectedIndex',0)
    $('#selectStress').prop('selectedIndex',0)
    $('#selectFamilia').prop('selectedIndex',0)
    $('#selectExausto').prop('selectedIndex',0)
    $('#selectSaude').prop('selectedIndex',0)
    $('#selectControle').prop('selectedIndex',0)
    $('#selectSobrecarregado').prop('selectedIndex',0)


  })

</script>
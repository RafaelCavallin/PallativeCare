<section id="escalaHad" class="mb-3">

    <div class="container mt-4">

        <div class="row">
            <div class="col-md-12 mb-4">
                <h4 class="display-4">Escala de Ansiedade e Depressão</h4><h5> - HAD</h5>
            </div>
        </div><!-- /row -->
        
        <div class="row">
            <div class="col-md-12">
                <ul class="lead">
                    <li>Questionário que pode ser autoaplicado com 14 itens, integrado por subescalas de 7 itens para depressão e 7 itens para ansiedade.</li>
                    <li>O paciente deverá selecionar para cada item a alternativa que melhor reflete a sua situação na última semana.</li>
                    <li>A HAD é uma escala simples e de fácil aplicação.</li>
                    <li>Pode ser utilizada para detectar mudanças emocionais durante o curso da enfermidade.</li>
                    <li>Sua validade para detectar enfermidade psiquiátrica definida é limitada.</li>
                </ul>
                <small class="text-muted">Fonte: <a href="http://biblioteca.cofen.gov.br/wp-content/uploads/2017/05/Manual-de-cuidados-paliativos-ANCP.pdf" target="blank">Manual de Cuidados Paliativos ANCP - 2ª edição</a></small>
            </div>
        </div><!-- /row -->

        <hr>

        <div class="row justify-content-center">
            <!-- ESCALA -->
            <div class="col-md-6">
              <div class="card bg-light">
                <div class="card-body">

                  <form action="#" method="post">
                    <!-- QUESTÃO TENSO COTRAÍDO -->
                    <div class="form-group mb-3">
                        <h5>A - Eu me sinto tenso ou contraído:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="AselectTensoContraido" id="AselectTensoContraido" required="true">
                          <option value="">Selecione</option>
                          <option value="3">A maior parte do tempo</option>
                          <option value="2">Boa parte do tempo</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Nunca</option>
                        </select>
                    </div><!-- QUESTÃO TENSO COTRAÍDO -->

                    <!-- QUESTÃO GOSTO COISAS -->
                    <div class="form-group mb-3">
                        <h5>D - Eu ainda sinto gosto pelas mesmas coisas de antes:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="DselectGosto" id="DselectGosto" required="true">
                          <option value="">Selecione</option>
                          <option value="0">Sim, do mesmo jeito que antes</option>
                          <option value="1">Não tanto quanto antes</option>
                          <option value="2">Só um pouco</option>
                          <option value="3">Já não sinto mais prazer em nada</option>
                        </select>
                    </div><!-- QUESTÃO GOSTO COISAS -->

                    <!-- QUESTÃO SENTIMENTO RUIM -->
                    <div class="form-group mb-3">
                        <h5>A - Eu sinto uma espécie de medo, como se alguma coisa ruim fosse acontecer:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="AselectMedo" id="AselectMedo" required="true">
                          <option value="">Selecione</option>
                          <option value="3">Sim, e de um jeito muito forte</option>
                          <option value="2">Sim, mas não tão forte</option>
                          <option value="1">Um pouco, mas isso não me preocupa</option>
                          <option value="0">Não sinto nada disso</option>
                        </select>
                    </div><!-- QUESTÃO SENTIMENTO RUIM -->

                    <!-- QUESTÃO RISADA E DIVERSÃO -->
                    <div class="form-group mb-3">
                        <h5>D - Dou risada e me divirto quando vejo coisas engraçadas:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="DselectRisada" id="DselectRisada" required="true">
                          <option value="">Selecione</option>
                          <option value="0">Do mesmo jeito que antes</option>
                          <option value="1">Atualmente um pouco menos</option>
                          <option value="2">Atualmente bem menos</option>
                          <option value="3">Não consigo mais</option>
                        </select>
                    </div><!-- QUESTÃO RISADA E DIVERSÃO -->

                    <!-- QUESTÃO CABEÇA CHEIA -->
                    <div class="form-group mb-3">
                        <h5>A - Estou com a cabeça cheia de preocupações:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="AselectPreocupacao" id="AselectPreocupacao" required="true">
                          <option value="">Selecione</option>
                          <option value="3">A maior parte do tempo</option>
                          <option value="2">Boa parte do tempo</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Raramente</option>
                        </select>
                    </div><!-- QUESTÃO CABEÇA CHEIA -->

                    <!-- QUESTÃO SENTIMENTO ALEGRE -->
                    <div class="form-group mb-3">
                        <h5>D - Eu me sinto alegre:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="DselectAlegre" id="DselectAlegre" required="true">
                          <option value="">Selecione</option>
                          <option value="3">Nunca</option>
                          <option value="2">Poucas vezes</option>
                          <option value="1">Muitas vezes</option>
                          <option value="0">A maior parte do tempo</option>
                        </select>
                    </div><!-- QUESTÃO SENTIMENTO ALEGRE -->

                    <!-- QUESTÃO À VONTADE RELAXADO -->
                    <div class="form-group mb-3">
                        <h5>A - Consigo ficar sentado à vontade e me sentir relaxado:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="AselectRelaxado" id="AselectRelaxado" required="true">
                          <option value="">Selecione</option>
                          <option value="0">Sim, quase sempre</option>
                          <option value="1">Muitas vezes</option>
                          <option value="2">Poucas vezes</option>
                          <option value="3">Nunca</option>
                        </select>
                    </div><!-- QUESTÃO À VONTADE RELAXADO -->

                    <!-- QUESTÃO LENTO PENSAR E FAZER -->
                    <div class="form-group mb-3">
                        <h5>D - Eu estou lento para pensar e fazer as coisas:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="DselectLento" id="DselectLento" required="true">
                          <option value="">Selecione</option>
                          <option value="3">Quase sempre</option>
                          <option value="2">Muitas vezes</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Nunca</option>
                        </select>
                    </div><!-- QUESTÃO LENTO PENSAR E FAZER -->

                    <!-- QUESTÃO FRIO BARRIGA -->
                    <div class="form-group mb-3">
                        <h5>A - Eu tenho uma sensação ruim de medo, como um frio na barriga ou um aperto no estômago:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="AselectFrioNaBarriga" id="AselectFrioNaBarriga" required="true">
                          <option value="">Selecione</option>
                          <option value="0">Nunca</option>
                          <option value="1">De vez em quando</option>
                          <option value="2">Muitas vezes</option>
                          <option value="3">Quase sempre</option>
                        </select>
                    </div><!-- QUESTÃO FRIO BARRIGA -->

                    <!-- QUESTÃO CUIDAR APARÊNCIA -->
                    <div class="form-group mb-3">
                        <h5>D - Eu perdi o interesse em cuidar da minha aparência:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="DselectAparencia" id="DselectAparencia" required="true">
                          <option value="">Selecione</option>
                          <option value="3">Completamente</option>
                          <option value="2">Não estou mais me cuidando como deveria</option>
                          <option value="1">Talvez não tanto quanto antes</option>
                          <option value="0">Me cuido do mesmo jeito que antes</option>
                        </select>
                    </div><!-- QUESTÃO CUIDAR APARÊNCIA -->

                    <!-- QUESTÃO INQUIETO -->
                    <div class="form-group mb-3">
                        <h5>A - Eu me sinto inquieto, como se eu não pudesse ficar parado em lugar nenhum:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="AselectInquieto" id="AselectInquieto" required="true">
                          <option value="">Selecione</option>
                          <option value="3">Sim, demais</option>
                          <option value="2">Bastante</option>
                          <option value="1">Um pouco</option>
                          <option value="0">Não me sinto assimsmo jeito que antes</option>
                        </select>
                    </div><!-- QUESTÃO INQUIETO -->

                    <!-- QUESTÃO ANIMADO -->
                    <div class="form-group mb-3">
                        <h5>D - Fico esperando animado as coisas boas que estão por vir:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="DselectAnimado" id="DselectAnimado" required="true">
                          <option value="">Selecione</option>
                          <option value="0">Do mesmo jeito que antes</option>
                          <option value="1">Um pouco menos do que antes</option>
                          <option value="2">Bem menos do que antes</option>
                          <option value="3">Quase nunca</option>
                        </select>
                     </div><!-- QUESTÃO ANIMADO -->

                    <!-- QUESTÃO PÂNICO -->
                    <div class="form-group mb-3">
                        <h5>A - De repente, tenho a sensação de entrar em pânico:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="AselectPanico" id="AselectPanico" required="true">
                          <option value="">Selecione</option>
                          <option value="3">A quase todo momento</option>
                          <option value="2">Várias vezes</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Não sinto isso</option>
                        </select>
                    </div><!-- QUESTÃO PÂNICO -->

                    <!-- QUESTÃO PRAZER TV -->
                    <div class="form-group mb-3">
                        <h5>D - Consigo sentir prazer quando assisto a um bom programa de televisão, de rádio ou quando leio alguma coisa:</h5>
                        <select class="form-control col-md-12 col-sm-12" name="DselectTv" id="DselectTv" required="true">
                          <option value="">Selecione</option>
                          <option value="0">Quase sempre</option>
                          <option value="1">Várias vezes</option>
                          <option value="2">Poucas vezes</option>
                          <option value="3">Quase nunca</option>
                        </select>
                    </div><!-- QUESTÃO PRAZER TV -->

                    <div class="form-group mt-3 ">
                      <button type="submit" id="enviarHAD" class="btn btn-primary btn-block">Enviar</button>
                    </div>
                  </form>

                </div><!-- /card-body -->
              </div><!-- /card -->
            </div><!-- ESCALA -->
        </div><!-- /row -->

    </div><!-- /container -->
</section>

<!-- Modal -->
<div class="modal fade" id="resultHAD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resultado KPS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group clearfix">
          <li class="list-group-item lead float-left">Ansiedade<span class="badge badge-secondary float-right" id="spanAnsiedade"></span></li>
          <li class="list-group-item lead float-left">Depressão<span class="badge badge-secondary float-right" id="spanDepressao"></span></li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
  document.querySelector('#enviarHAD').addEventListener('click', function(e){

    if ($('#AselectTensoContraido option:selected').val() == "") {
      return false
    }else{
      var Atenso = parseInt($('#AselectTensoContraido option:selected').val())
    }


    if ($('#DselectGosto option:selected').val() == "") {
      return false
    }else{
      var Dgosto = parseInt($('#DselectGosto option:selected').val())
    }


    if ($('#AselectMedo option:selected').val() == "") {
      return false
    }else{
      var Amedo = parseInt($('#AselectMedo option:selected').val())
    }


    if ($('#DselectRisada option:selected').val() == "") {
      return false
    }else{
      var Drisada = parseInt($('#DselectRisada option:selected').val())
    }


    if ($('#AselectPreocupacao option:selected').val() == "") {
      return false
    }else{
      var Apreocupado = parseInt($('#AselectPreocupacao option:selected').val())
    }

    if ($('#DselectAlegre option:selected').val() == "") {
      return false
    }else{
      var Dalegre = parseInt($('#DselectAlegre option:selected').val())
    }

    if ($('#AselectRelaxado option:selected').val() == "") {
      return false
    }else{
      var Arelaxado = parseInt($('#AselectRelaxado option:selected').val())
    }

    if ($('#DselectLento option:selected').val() == "") {
      return false
    }else{
      var Dlento = parseInt($('#DselectLento option:selected').val())
    }

    if ($('#AselectFrioNaBarriga option:selected').val() == "") {
      return false
    }else{
      var AfrioBarriga = parseInt($('#AselectFrioNaBarriga option:selected').val())
    }

    if ($('#DselectAparencia option:selected').val() == "") {
      return false
    }else{
      var Daparencia = parseInt($('#DselectAparencia option:selected').val())
    }

    if ($('#AselectInquieto option:selected').val() == "") {
      return false
    }else{
      var Ainquieto = parseInt($('#AselectInquieto option:selected').val())
    }

    if ($('#DselectAnimado option:selected').val() == "") {
      return false
    }else{
      var  Danimado = parseInt($('#DselectAnimado option:selected').val())
    }

    if ($('#AselectPanico option:selected').val() == "") {
      return false
    }else{
      var Apanico = parseInt($('#AselectPanico option:selected').val())
    }

    if ($('#DselectTv option:selected').val() == "") {
      return false
    }else{
      var Dtv = parseInt($('#DselectTv option:selected').val())
    }

    var total_A = Atenso + Amedo + Apreocupado + Arelaxado + AfrioBarriga + Ainquieto + Apanico;

    var total_D = Dgosto + Drisada + Dalegre + Dlento + Daparencia + Danimado + Dtv;

    document.getElementById('spanAnsiedade').innerHTML = total_A
    document.getElementById('spanDepressao').innerHTML = total_D

    $('#resultHAD').modal('show');
    e.preventDefault()

    $('#AselectTensoContraido').prop('selectedIndex',0)
    $('#DselectGosto').prop('selectedIndex',0)
    $('#AselectMedo').prop('selectedIndex',0)
    $('#DselectRisada').prop('selectedIndex',0)
    $('#AselectPreocupacao').prop('selectedIndex',0)
    $('#DselectAlegre').prop('selectedIndex',0)
    $('#AselectRelaxado').prop('selectedIndex',0)
    $('#DselectLento').prop('selectedIndex',0)
    $('#AselectFrioNaBarriga').prop('selectedIndex',0)
    $('#DselectAparencia').prop('selectedIndex',0)
    $('#AselectInquieto').prop('selectedIndex',0)
    $('#DselectAnimado').prop('selectedIndex',0)
    $('#AselectPanico').prop('selectedIndex',0)
    $('#DselectTv').prop('selectedIndex',0)
  })


</script>

 
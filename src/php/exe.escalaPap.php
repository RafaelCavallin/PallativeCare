<section id="escalaPap" class="mb-3">
  <div class="container mt-4">

    <div class="row">
      <div class="col-md-12 mb-4">
        <h4 class="display-4">O Palliative Prognostic Score</h4><h5> - PaP</h5>
      </div>
    </div><!-- /row -->

    <div class="row">
      <div class="col-md-6">

       <div class="card bg-light">
         <div class="card-body">
          <form action="#" method="POST">

            <div class="form-group">
              <h5>Dispneia</h5>
              <div class="custom-control custom-radio d-block">
                <input name="radioDispneia" type="radio" id="radioDispneiaN" class="custom-control-input" value="0" required="true">
                <label class="custom-control-label lead" for="radioDispneiaN">Não</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioDispneia" type="radio" id="radioDispneiaS" class="custom-control-input" value="1">
                <label class="custom-control-label lead" for="radioDispneiaS">Sim</label>
              </div>
            </div><!-- /Dispneia -->

            <hr>

            <div class="form-group">
              <h5>Anorexia</h5>
              <div class="custom-control custom-radio d-block">
                <input name="radioAnorexia" type="radio" id="radioAnorexiaN" class="custom-control-input" value="0" required="true">
                <label class="custom-control-label lead" for="radioAnorexiaN">Não</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioAnorexia" type="radio" id="radioAnorexiaS" class="custom-control-input" value="1.5">
                <label class="custom-control-label lead" for="radioAnorexiaS">Sim</label>
              </div>
            </div><!-- /Anorexia -->

            <hr>

            <div class="form-group">
              <h5>Estimativa clínica de sobrevivência (semanas)</h5>
              <div class="custom-control custom-radio d-block">
                <input name="radioSobrevivencia" type="radio" id="radioSobrevivencia12" class="custom-control-input" value="0" required="true">
                <label class="custom-control-label lead" for="radioSobrevivencia12">>12</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioSobrevivencia" type="radio" id="radioSobrevivencia1" class="custom-control-input" value="2">
                <label class="custom-control-label lead" for="radioSobrevivencia1">11 - 12</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioSobrevivencia" type="radio" id="radioSobrevivencia2" class="custom-control-input" value="2.5">
                <label class="custom-control-label lead" for="radioSobrevivencia2">9 - 10</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioSobrevivencia" type="radio" id="radioSobrevivencia3" class="custom-control-input" value="2.5">
                <label class="custom-control-label lead" for="radioSobrevivencia3">7 - 8</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioSobrevivencia" type="radio" id="radioSobrevivencia4" class="custom-control-input" value="4.5">
                <label class="custom-control-label lead" for="radioSobrevivencia4">5 - 6</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioSobrevivencia" type="radio" id="radioSobrevivencia5" class="custom-control-input" value="5">
                <label class="custom-control-label lead" for="radioSobrevivencia5">3 - 4</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioSobrevivencia" type="radio" id="radioSobrevivencia6" class="custom-control-input" value="8.5">
                <label class="custom-control-label lead" for="radioSobrevivencia6">1 - 2</label>
              </div>
            </div><!-- /estimativa clínica-->

            <hr>

            <div class="form-group">
              <h5>Pontuação na escala de performance de Karnofsky (%)</h5>
              <div class="custom-control custom-radio d-block">
                <input name="radioKps" type="radio" id="radioKpsM" class="custom-control-input" value="0" required="true">
                <label class="custom-control-label lead" for="radioKpsM">≥30</label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioKps" type="radio" id="radioKps" class="custom-control-input" value="2.5">
                <label class="custom-control-label lead" for="radioKps">10 - 20</label>
              </div>
              <small class="d-block" id="linkEscalaKps"><a href="#" onclick="Mudarestado('EscalaKps')">Escala KPS</a></small>

              <!-- ESCALA KPS -->
              <div id="EscalaKps" style="display: none;" class="mt-2">
                <table class="table table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">Graduação (%)</th>
                      <th scope="col" class="text-center">Significado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="text-center">100</th>
                      <td>Normal, ausência de queixas, sem evidências de doença</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">90</th>
                      <td>Capaz de realizar atividades normais, sinais e sintomas mínimos da doença</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">80</th>
                      <td>Atividade normal com esforço, alguns sinais ou sintomas da doença Incapacidade para grande esforço físico, consegue deambular</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">70</th>
                      <td>Não requer assistência para cuidados pessoais, mas é incapaz de realizar atividades normais, como tarefas caseiras e trabalhos ativos</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">60</th>
                      <td>Requer assistência ocasional, mas consegue realizar a maioria dos seus cuidados pessoais</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">50</th>
                      <td>Requer considerável assistência e frequentes cuidados médicos</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">40</th>
                      <td>Incapacitado, requer cuidados pessoais e assistência, autocuidado limitado Permanece mais de 50% do horário vigil sentado ou deitado</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">30</th>
                      <td>Severamente incapacitado, necessidade de tratamento de suporte permanente, embora a morte não seja iminente</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">20</th>
                      <td>Paciente muito doente, completamente incapaz, necessidade de tratamento de suporte permanente, confinado ao leito</td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">10</th>
                      <td>Moribundo, processo de morte progredindo rapidamente</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- ESCALA KPS -->
            </div><!-- /Karnofsky -->

            <hr>

            <div class="form-group">
              <h5>Leucócitos totais por mm3</h5>
              <div class="custom-control custom-radio d-block">
                <input name="radioLeucocitaria" type="radio" id="radioLeucocitaria" class="custom-control-input" value="0" required="true">
                <label class="custom-control-label lead" for="radioLeucocitaria"> <8.500 </label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioLeucocitaria" type="radio" id="radioLeucocitaria1" class="custom-control-input" value="0.5">
                <label class="custom-control-label lead" for="radioLeucocitaria1"> 8.501-11.000 </label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioLeucocitaria" type="radio" id="radioLeucocitaria2" class="custom-control-input" value="1.5">
                <label class="custom-control-label lead" for="radioLeucocitaria2"> >11.000 </label>
              </div>
            </div><!-- /leucocitária -->

            <hr>

            <div class="form-group">
              <h5>Porcentagem de linfócitos</h5>
              <div class="custom-control custom-radio d-block">
                <input name="radioLinfocitos" type="radio" id="radioLinfocitos" class="custom-control-input" value="2.5" required="true">
                <label class="custom-control-label lead" for="radioLinfocitos"> <12 </label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioLinfocitos" type="radio" id="radioLinfocitos1" class="custom-control-input" value="1">
                <label class="custom-control-label lead" for="radioLinfocitos1"> 12-19,9 </label>
              </div>
              <div class="custom-control custom-radio d-block">
                <input name="radioLinfocitos" type="radio" id="radioLinfocitos2" class="custom-control-input" value="0">
                <label class="custom-control-label lead" for="radioLinfocitos2">≥20 </label>
              </div>
            </div><!-- /Linfócitos -->

            <hr>
            <div class="row mt-3">
              <div class="col-sm-12 col-md-12 form-group">
                <input type="submit" id="enviarPap" class="btn btn-primary btn-block" value="Enviar">
              </div>
            </div> 
          </form>
         </div>
       </div>

      </div>

      <div class="col-md-6">
        <div>
          <p class="text-justify"><strong>Palliative Prognostic Score</strong> estima a sobrevida no período de 30 dias a partir da avaliação clínica e laboratorial.</p>
          <ul>
            <li>Pacientes com probabilidade reduzida de sobreviver mais de 30 dias se beneficiam com os cuidados em ambiente domiciliar, por equipe interdisciplinar.</li>
            <li>Escala aplicada por profissional médico.</li>
          </ul>
        </div>
        <div class="mt-3">
          <table class="table table-bordered">
            <thead>
              <tr class="table-active">
                <th scope="col">Grupos de risco</th>
                <th scope="col">Pontuação total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>A (probabilidade de sobrevivência aos 30 dias > 70%)</td>
                <td>0-5,5</td>
              </tr>
              <tr>
                <td>B (probabilidade de sobrevivência aos 30 dias entre 30 e 70%)</td>
                <td>5,6-11</td>
              </tr>
              <tr>
                <td>C (probabilidade de sobrevivência aos 30 dias < 30%)</td>
                <td>11,5-17,5</td>
              </tr>
            </tbody>
          </table>
          <small class="text-muted">Fonte: <a href="http://biblioteca.cofen.gov.br/wp-content/uploads/2017/05/Manual-de-cuidados-paliativos-ANCP.pdf" target="blank">Manual de Cuidados Paliativos ANCP - 2ª edição</a></small>
        </div>
      </div>
    </div><!-- /row -->
</section> 

<!-- Modal -->
<div class="modal fade" id="ResultPaP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resultado PPS</h5>
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

<script>
  function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if(display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
  }

  document.querySelector('#enviarPap').addEventListener('click', function(e){

    if (typeof $("input[name='radioDispneia']:checked").val() == "undefined") {
     return false
    }else{
      var Dispneia = parseInt($("input[name='radioDispneia']:checked").val())
    }

    if (typeof $("input[name='radioAnorexia']:checked").val() == "undefined") {
     return false
    }else{
      var Anorexia = parseInt($("input[name='radioAnorexia']:checked").val())
    }

    if (typeof $("input[name='radioSobrevivencia']:checked").val() == "undefined") {
     return false
    }else{
      var Sobrevivencia = parseInt($("input[name='radioSobrevivencia']:checked").val())
    }

    if (typeof $("input[name='radioKps']:checked").val() == "undefined") {
     return false
    }else{
      var Kps = parseInt($("input[name='radioKps']:checked").val())
    }

    if (typeof $("input[name='radioLeucocitaria']:checked").val() == "undefined") {
     return false
    }else{
      var Leucocitaria = parseInt($("input[name='radioLeucocitaria']:checked").val())
    }

    if (typeof $("input[name='radioLinfocitos']:checked").val() == "undefined") {
     return false
    }else{
      var Linfocitos = parseInt($("input[name='radioLinfocitos']:checked").val())
    }

    var resulPaP =  Dispneia + Anorexia + Sobrevivencia + Kps + Leucocitaria + Linfocitos

    if(resulPaP <= 0.5){
      var msg = "Probabilidade de sobrevivência aos 30 dias > 70%"
    }else if((resulPaP >= 5.6) && (resulPaP <= 11)){
      var msg = "Probabilidade de sobrevivência aos 30 dias entre 30 e 70%"
    }else{
      var msg = "Probabilidade de sobrevivência aos 30 dias < 30%"
    }

    document.getElementById('resultado').innerHTML = resulPaP
    document.getElementById('msg').innerHTML = msg

    $('#ResultPaP').modal('show');
    e.preventDefault()
  })
</script>
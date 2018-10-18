<section id="escalaZarit">

  <div class="container mt-4">

    <div class="row">
      <div class="my-2 col-md-12 mb-4">
        <h4 class="display-4">Escala de Zarit reduzida</h4><h5> – Sobrecarga Cuidador</h5>
      </div>

      <div class="col-md-12">
        <p class="text-justify">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laudantium id atque, distinctio nam veniam beatae minima eaque quod, quam, quis doloremque ipsam consequatur saepe, ut praesentium esse incidunt tempore.
        </p>
        <ul>
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
      </div>

      <div class="col-md-12 mt-2">
        <h5>Resultado:</h5>
        <ul>
          <li>Sobrecarga leve: até 14 pontos</li>
          <li>Sobrecarga moderada: 15 – 21 pontos</li>
          <li>Sobrecarga grave: acima de 22 pontos</li>
        </ul>
      </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <form action="./teste.php" method="POST">

          <!-- INICIO DADOS -->
          <div class="row">
            <div class="col-sm-12 col-md-8 form-group">
              <input type="text" class="form-control" name="paciente" placeholder="Paciente" required>
            </div>
            <div class="col-sm-12 col-md-4 form-group">
              <input type="text" class="form-control" name="prontuario" placeholder="Prontuário" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-8 form-group">
              <input type="text" class="form-control" name="cuidador" placeholder="Cuidador" required>
            </div>
            <div class="col-sm-12 col-md-4 form-group">
              <input type="text" class="form-control" name="idade" placeholder="Idade" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-6 form-group">
              <input type="text" class="form-control" name="grauParentesco" placeholder="Grau de parentesco" required>
            </div>
            <div class="col-sm-12 col-md-6 form-group">
              <input type="text" class="form-control" name="escolaridade" placeholder="Escolaridade" required>
            </div>
            <!-- A DATA É REGISTRADA AUTOMETICAMENTE -->
          </div><!-- FIM DADOS -->

          <!-- INICIO QUESTÃO TEMPO -->
          <div class="form-group mt-4">  
            <h5>1. Sente que, por causa do tempo que utiliza com o seu familiar/doente já não tem tempo suficiente para você mesmo?</h5>
            <div class="custom-control custom-radio d-block">
              <input name="radioTempo" type="radio" id="radioTempo1" class="custom-control-input" value="1">
              <label class="custom-control-label lead" for="radioTempo1">1 - Nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioTempo" type="radio" id="radioTempo2" class="custom-control-input" value="2">
              <label class="custom-control-label lead" for="radioTempo2">2 - Quase nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioTempo" type="radio" id="radioTempo3" class="custom-control-input" value="3">
              <label class="custom-control-label lead" for="radioTempo3">3 - Às vezes</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioTempo" type="radio" id="radioTempo4" class="custom-control-input" value="4">
              <label class="custom-control-label lead" for="radioTempo4">4 - Frequentemente</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioTempo" type="radio" id="radioTempo5" class="custom-control-input" value="5">
              <label class="custom-control-label lead" for="radioTempo5">5 - Quase sempre</label>
            </div>
          </div><!-- FIM QUESTÃO TEMPO -->

          <!-- INICIO QUESTÃO STRESS -->
          <div class="form-group mt-3">  
            <h5>2. Sente-se estressado/ angustiado por ter que cuidar do seu familiar/ doente e ao mesmo tempo ser responsável por outras tarefas? (ex. Cuidar de outros familiares, ter que trabalhar).</h5>
            <div class="custom-control custom-radio d-block">
              <input name="radioStress" type="radio" id="radioStress1" class="custom-control-input" value="1">
              <label class="custom-control-label lead" for="radioStress1">1 - Nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioStress" type="radio" id="radioStress2" class="custom-control-input" value="2">
              <label class="custom-control-label lead" for="radioStress2">2 - Quase nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioStress" type="radio" id="radioStress3" class="custom-control-input" value="3">
              <label class="custom-control-label lead" for="radioStress3">3 - Às vezes</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioStress" type="radio" id="radioStress4" class="custom-control-input" value="4">
              <label class="custom-control-label lead" for="radioStress4">4 - Frequentemente</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioStress" type="radio" id="radioStress5" class="custom-control-input" value="5">
              <label class="custom-control-label lead" for="radioStress5">5 - Quase sempre</label>
            </div>
          </div><!-- FIM QUESTÃO STRESS -->

          <!-- INICIO QUESTÃO AMIGOS -->
          <div class="form-group mt-3">  
            <h5>3. Acha que a situação atual afeta a sua relação com amigos ou outros elementos da família de uma forma negativa?</h5>
            <div class="custom-control custom-radio d-block">
              <input name="radioAmigos" type="radio" id="radioAmigos1" class="custom-control-input" value="1">
              <label class="custom-control-label lead" for="radioAmigos1">1 - Nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioAmigos" type="radio" id="radioAmigos2" class="custom-control-input" value="2">
              <label class="custom-control-label lead" for="radioAmigos2">2 - Quase nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioAmigos" type="radio" id="radioAmigos3" class="custom-control-input" value="3">
              <label class="custom-control-label lead" for="radioAmigos3">3 - Às vezes</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioAmigos" type="radio" id="radioAmigos4" class="custom-control-input" value="4">
              <label class="custom-control-label lead" for="radioAmigos4">4 - Frequentemente</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioAmigos" type="radio" id="radioAmigos5" class="custom-control-input" value="5">
              <label class="custom-control-label lead" for="radioAmigos5">5 - Quase sempre</label>
            </div>
          </div><!-- FIM QUESTÃO AMIGOS -->

          <!-- INICIO QUESTÃO EXAUSTO -->
          <div class="form-group mt-3">  
            <h5>4. Sente-se exausto quando tem de estar junto do seu familiar/ doente?</h5>
            <div class="custom-control custom-radio d-block">
              <input name="radioExausto" type="radio" id="radioExausto1" class="custom-control-input" value="1">
              <label class="custom-control-label lead" for="radioExausto1">1 - Nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioExausto" type="radio" id="radioExausto2" class="custom-control-input" value="2">
              <label class="custom-control-label lead" for="radioExausto2">2 - Quase nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioExausto" type="radio" id="radioExausto3" class="custom-control-input" value="3">
              <label class="custom-control-label lead" for="radioExausto3">3 - Às vezes</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioExausto" type="radio" id="radioExausto4" class="custom-control-input" value="4">
              <label class="custom-control-label lead" for="radioExausto4">4 - Frequentemente</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioExausto" type="radio" id="radioExausto5" class="custom-control-input" value="5">
              <label class="custom-control-label lead" for="radioExausto5">5 - Quase sempre</label>
            </div>
          </div><!-- FIM QUESTÃO EXAUSTO -->

          <!-- INICIO QUESTÃO SAÚDE -->
          <div class="form-group mt-3">  
            <h5>5. Sente que sua saúde tem-se visto afetada por ter que cuidar do seu familiar/ doente?</h5>
            <div class="custom-control custom-radio d-block">
              <input name="radioSaude" type="radio" id="radioSaude1" class="custom-control-input" value="1">
              <label class="custom-control-label lead" for="radioSaude1">1 - Nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSaude" type="radio" id="radioSaude2" class="custom-control-input" value="2">
              <label class="custom-control-label lead" for="radioSaude2">2 - Quase nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSaude" type="radio" id="radioSaude3" class="custom-control-input" value="3">
              <label class="custom-control-label lead" for="radioSaude3">3 - Às vezes</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSaude" type="radio" id="radioSaude4" class="custom-control-input" value="4">
              <label class="custom-control-label lead" for="radioSaude4">4 - Frequentemente</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSaude" type="radio" id="radioSaude5" class="custom-control-input" value="5">
              <label class="custom-control-label lead" for="radioSaude5">5 - Quase sempre</label>
            </div>
          </div><!-- FIM QUESTÃO SAÚDE -->

          <!-- INICIO QUESTÃO CONTROLE -->
          <div class="form-group mt-3">  
            <h5>6. Sente que tem perdido o controle da sua vida desde que a doença o seu familiar/ doente se manifestou?</h5>
            <div class="custom-control custom-radio d-block">
              <input name="radioControle" type="radio" id="radioControle1" class="custom-control-input" value="1">
              <label class="custom-control-label lead" for="radioControle1">1 - Nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioControle" type="radio" id="radioControle2" class="custom-control-input" value="2">
              <label class="custom-control-label lead" for="radioControle2">2 - Quase nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioControle" type="radio" id="radioControle3" class="custom-control-input" value="3">
              <label class="custom-control-label lead" for="radioControle3">3 - Às vezes</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioControle" type="radio" id="radioControle4" class="custom-control-input" value="4">
              <label class="custom-control-label lead" for="radioControle4">4 - Frequentemente</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioControle" type="radio" id="radioControle5" class="custom-control-input" value="5">
              <label class="custom-control-label lead" for="radioControle5">5 - Quase sempre</label>
            </div>
          </div><!-- FIM QUESTÃO CONTROLE -->

          <!-- INICIO QUESTÃO SOBRECARREGADO -->
          <div class="form-group mt-3">  
            <h5>7. No geral, sente-se muito sobrecarregado por ter que cuidar do seu familiar/ doente?</h5>
            <div class="custom-control custom-radio d-block">
              <input name="radioSobrecarregado" type="radio" id="radioSobrecarregado1" class="custom-control-input" value="1">
              <label class="custom-control-label lead" for="radioSobrecarregado1">1 - Nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSobrecarregado" type="radio" id="radioSobrecarregado2" class="custom-control-input" value="2">
              <label class="custom-control-label lead" for="radioSobrecarregado2">2 - Quase nunca</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSobrecarregado" type="radio" id="radioSobrecarregado3" class="custom-control-input" value="3">
              <label class="custom-control-label lead" for="radioSobrecarregado3">3 - Às vezes</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSobrecarregado" type="radio" id="radioSobrecarregado4" class="custom-control-input" value="4">
              <label class="custom-control-label lead" for="radioSobrecarregado4">4 - Frequentemente</label>
            </div>
            <div class="custom-control custom-radio d-block">
              <input name="radioSobrecarregado" type="radio" id="radioSobrecarregado5" class="custom-control-input" value="5">
              <label class="custom-control-label lead" for="radioSobrecarregado5">5 - Quase sempre</label>
            </div>
          </div><!-- FIM QUESTÃO SOBRECARREGADO -->

          <div class="row mt-3">
            <div class="col-sm-12 col-md-6 form-group">
              <input type="submit" class="btn btn-primary btn-block" value="Enviar">
            </div>
            <div class="col-sm-12 col-md-6 form-group">
              <input type="reset" class="btn btn-secondary btn-block" value="Limpar">  
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr>
  </div>
</section>  


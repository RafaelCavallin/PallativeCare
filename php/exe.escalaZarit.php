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

    <div class="row">
      <div class="my-4 col-md-12">
        <form action="./teste.php" method="POST">

          <!-- INICIO DADOS -->
          <div class="row">
            <div class="col-6 form-group">
              <input type="text" class="form-control" name="paciente" placeholder="Paciente">
            </div>
            <div class="col-6 form-group">
              <input type="text" class="form-control" name="prontuario" placeholder="Prontuário">
            </div>
          </div>
          <div class="row">
            <div class="col-8 form-group">
              <input type="text" class="form-control" name="cuidador" placeholder="Cuidador">
            </div>
            <div class="col-4 form-group">
              <input type="date" class="form-control" name="data" placeholder="Data">
            </div>
          </div>
          <div class="row">
            <div class="col-5 form-group">
              <input type="text" class="form-control" name="grauParentesco" placeholder="Grau de parentesco">
            </div>
            <div class="col-3 form-group">
              <input type="text" class="form-control" name="idade" placeholder="Idade">
            </div>
            <div class="col-4 form-group">
              <input type="text" class="form-control" name="escolaridade" placeholder="Escolaridade">
            </div>
          </div><!-- FIM DADOS -->

          <!-- INICIO QUESTÃO TEMPO -->
          <div class="form-group mt-4">  
            <h5>1. Sente que, por causa do tempo que utiliza com o seu familiar/doente já não tem tempo suficiente para você mesmo?</h5>
            <label class="custom-control custom-radio">
              <input name="radioTempo" type="radio" class="custom-control-input" value="1">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1 - Nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTempo" type="radio" class="custom-control-input" value="2">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2 - Quase nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTempo" type="radio" class="custom-control-input" value="3">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3 - Às vezes</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTempo" type="radio" class="custom-control-input" value="4">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4 - Frequentemente</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTempo" type="radio" class="custom-control-input" value="5">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5 - Quase sempre</span>
            </label>
          </div><!-- FIM QUESTÃO TEMPO -->

          <!-- INICIO QUESTÃO STRESS -->
          <div class="form-group mt-3">  
            <h5>2. Sente-se estressado/ angustiado por ter que cuidar do seu familiar/ doente e ao mesmo tempo ser responsável por outras tarefas? (ex. Cuidar de outros familiares, ter que trabalhar).</h5>
            <label class="custom-control custom-radio">
              <input name="radioStress" type="radio" class="custom-control-input" value="1">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1 - Nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioStress" type="radio" class="custom-control-input" value="2">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2 - Quase nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioStress" type="radio" class="custom-control-input" value="3">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3 - Às vezes</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioStress" type="radio" class="custom-control-input" value="4">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4 - Frequentemente</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioStress" type="radio" class="custom-control-input" value="5">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5 - Quase sempre</span>
            </label>
          </div><!-- FIM QUESTÃO STRESS -->

          <!-- INICIO QUESTÃO AMIGOS -->
          <div class="form-group mt-3">  
            <h5>3. Acha que a situação atual afeta a sua relação com amigos ou outros elementos da família de uma forma negativa?</h5>
            <label class="custom-control custom-radio">
              <input name="radioAmigos" type="radio" class="custom-control-input" value="1">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1 - Nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAmigos" type="radio" class="custom-control-input" value="2">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2 - Quase nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAmigos" type="radio" class="custom-control-input" value="3">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3 - Às vezes</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAmigos" type="radio" class="custom-control-input" value="4">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4 - Frequentemente</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAmigos" type="radio" class="custom-control-input" value="5">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5 - Quase sempre</span>
            </label>
          </div><!-- FIM QUESTÃO AMIGOS -->

          <!-- INICIO QUESTÃO EXAUSTO -->
          <div class="form-group mt-3">  
            <h5>4. Sente-se exausto quando tem de estar junto do seu familiar/ doente?</h5>
            <label class="custom-control custom-radio">
              <input name="radioExausto" type="radio" class="custom-control-input" value="1">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1 - Nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioExausto" type="radio" class="custom-control-input" value="2">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2 - Quase nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioExausto" type="radio" class="custom-control-input" value="3">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3 - Às vezes</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioExausto" type="radio" class="custom-control-input" value="4">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4 - Frequentemente</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioExausto" type="radio" class="custom-control-input" value="5">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5 - Quase sempre</span>
            </label>
          </div><!-- FIM QUESTÃO EXAUSTO -->

          <!-- INICIO QUESTÃO SAÚDE -->
          <div class="form-group mt-3">  
            <h5>5. Sente que sua saúde tem-se visto afetada por ter que cuidar do seu familiar/ doente?</h5>
            <label class="custom-control custom-radio">
              <input name="radioSaude" type="radio" class="custom-control-input" value="1">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1 - Nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSaude" type="radio" class="custom-control-input" value="2">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2 - Quase nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSaude" type="radio" class="custom-control-input" value="3">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3 - Às vezes</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSaude" type="radio" class="custom-control-input" value="4">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4 - Frequentemente</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSaude" type="radio" class="custom-control-input" value="5">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5 - Quase sempre</span>
            </label>
          </div><!-- FIM QUESTÃO SAÚDE -->

          <!-- INICIO QUESTÃO CONTROLE -->
          <div class="form-group mt-3">  
            <h5>6. Sente que tem perdido o controle da sua vida desde que a doença o seu familiar/ doente se manifestou?</h5>
            <label class="custom-control custom-radio">
              <input name="radioControle" type="radio" class="custom-control-input" value="1">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1 - Nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioControle" type="radio" class="custom-control-input" value="2">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2 - Quase nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioControle" type="radio" class="custom-control-input" value="3">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3 - Às vezes</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioControle" type="radio" class="custom-control-input" value="4">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4 - Frequentemente</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioControle" type="radio" class="custom-control-input" value="5">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5 - Quase sempre</span>
            </label>
          </div><!-- FIM QUESTÃO CONTROLE -->

          <!-- INICIO QUESTÃO SOBRECARREGADO -->
          <div class="form-group mt-3">  
            <h5>7. No geral, sente-se muito sobrecarregado por ter que cuidar do seu familiar/ doente?</h5>
            <label class="custom-control custom-radio">
              <input name="radioSobrecarregado" type="radio" class="custom-control-input" value="1">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1 - Nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSobrecarregado" type="radio" class="custom-control-input" value="2">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2 - Quase nunca</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSobrecarregado" type="radio" class="custom-control-input" value="3">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3 - Às vezes</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSobrecarregado" type="radio" class="custom-control-input" value="4">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4 - Frequentemente</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSobrecarregado" type="radio" class="custom-control-input" value="5">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5 - Quase sempre</span>
            </label>
          </div><!-- FIM QUESTÃO SOBRECARREGADO -->

          <div class="row">
            <div class="col-6 form-group">
              <input type="submit" class="btn btn-success" value="Calcular">
              <input type="reset" class="btn btn-danger" value="Limpar">  
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>  


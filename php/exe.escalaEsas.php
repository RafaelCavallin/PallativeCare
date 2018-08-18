<section id="escalaEsas">

  <div class="container mt-4">
    
    <div class="row">
      <div class="col-md-12 mb-4">
        <h4 class="display-4">A escala de avaliação de sintomas</h4><h5 class="lead"> - ESAS</h5>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-5">
        <p class="text-justify">A avaliação de sintomas deve ser realizada de forma sistemática na admissão, evoluções diárias, consultas ambulatoriais e visitas domiciliares.</p>

        <p class="text-justify">A escala de avaliação de sintomas desenvolvida em Edmonton no Canadá –
        ESAS é um instrumento valioso nesta tarefa. Consiste num pequeno questionário com nove sintomas determinados e um décimo, de livre escolha do paciente, que passará a ser registrado diariamente. A cada sintoma solicita-se ao paciente que atribua uma nota de zero a dez, sendo zero a ausência do sintoma e dez a sua maior intensidade. O profissional deve se manter imparcial e permitir que o paciente expresse a sua própria avaliação. O ESAS inclui sintomas objetivos e subjetivos. Na impossibilidade de o paciente estabelecer uma comunicação coerente (dementados, por exemplo), a ESAS pode ser preenchida por seu cuidador com base na observação cuidadosa do seu comportamento e, neste caso, os sintomas subjetivos (cansaço, depressão, ansiedade e bem-estar) devem ser deixados em branco.</p>

        <p class="text-justify">O ESAS deve ser avaliado criteriosamente todos os dias e ser usado como plataforma para as ações necessárias para o alívio de sintomas, usando-se todos os recursos necessários para este fim.</p>

        <p class="text-justify">Por princípio, nenhum questionamento deve ser feito ao paciente se não for utilizado em seu benefício. Por isso é que os interrogatórios devem ser breves, objetivos e práticos também para a equipe. Em uidados Paliativos, escalas longas e cansativas devem ser evitadas.</p>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-7">
        <form action="./teste3.php" method="POST">

          <!-- INICIO DO SELECT DOR -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Dor</label>
            <select class="form-control" name="SelectDor">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT DOR -->
          
          <!-- INICIO DO RADIO DOR -->
          <div class="md-form form-group">
            <h4>Dor</h4>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDor" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- INICIO DO RADIO DOR -->
          <hr>

          <!-- INICIO DO SELECT CANSAÇO -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Cansaço</label>
            <select class="form-control" name="SelectCansaco">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT CANSAÇO -->
          
          <!-- INICIO DO RADIO CANSAÇO -->
          <div class="md-form form-group">
            <h4>Cansaço</h4>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioCansaco" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div> <!-- FIM DO RADIO CANSAÇO -->
          
          <hr>

          <!-- INICIO DO SELECT SONOLÊNCIA -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Sonolência</label>
            <select class="form-control" name="SelectSonolencia">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT SONOLÊNCIA -->

          <!-- INICIO DO RADIO SOLOLÊNCIA -->
          <div class="md-form form-group">
            <h4>Sonolência</h4>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioSono" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- FIM DO RADIO SOLOLÊNCIA -->

          <!-- INICIO DO SELECT NÁUSEA -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Náusea</label>
            <select class="form-control" name="SelectNausea">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT NÁUSEA -->

          <!-- INICIO DO RADIO NÁUSEA -->
          <div class="md-form form-group">
            <h4>Náusea</h4>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioNausea" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- FIM DO RADIO NÁUSEA -->

          <!-- INICIO DO SELECT APETITE -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Apetite</label>
            <select class="form-control" name="SelectApetite">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT APETITE -->
          
          <!-- INICIO DO RADIO APETITE -->
          <div class="md-form form-group">
            <h4>Falta de Apetite</h4>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioApetite" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- FIM DO RADIO APETITE -->

          <!-- INICIO DO SELECT TRISTEZA -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Tristeza</label>
            <select class="form-control" name="SelectTristeza">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT APETITE -->

          <!-- INICIO DO RADIO TRISTEZA -->
          <div class="md-form form-group">
            <h4>Tristeza</h4>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioTristeza" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- FIM DO RADIO TRISTEZA -->

          <!-- INICIO DO SELECT ANSIEDADE -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Ansiedade</label>
            <select class="form-control" name="SelectAnsiedade">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT ANSIEDADE -->
          
          <!-- INICIO RADIO ANSIEDADE -->
          <div class="md-form form-group">
            <h4>Ansiedade</h4>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioAnsiedade" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- INICIO RADIO ANSIEDADE -->

          <!-- INICIO DO SELECT MAL-ESTAR -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Mal-Estar</label>
            <select class="form-control" name="SelectMalEstar">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT MAL-ESTAR -->
          
          <!-- INICIO DO RADIO MAL-ESTAR -->
          <div class="md-form form-group">
            <h4>Mal-Estar</h4>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioMalEstar" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- FIM DO RADIO MAL-ESTAR -->

          <!-- INICIO DO SELECT DISPNÉIA -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Dispnéia</label>
            <select class="form-control" name="SelectDispneia">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT DISPNÉIA -->
          
          <!-- INICIO DO RADIO DISPNÉIA -->
          <div class="md-form form-group">
            <h4>Dispnéia</h4>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioDispneia" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- FIM DO RADIO DISPNÉIA -->

          <!-- INICIO DO SELECT OUTROS -->
          <div class="sm-form form-group mb-2">
            <label class="mb-0">Outros</label> <input class="col-12 form-control mb-1" name="nameOther" type="text">
            <select class="form-control" name="SelectOutros">
              <option value="-1">Selecione</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div><!-- FIM DO SELECT OUTROS -->
          
          <!-- INICIO DO RADIO OUTROS -->
          <div class="md-form form-group">
            <h4>Outros</h4> <input class="form-control col-6" name="nameOther" type="text"> 
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="0" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">0</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="1" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">1</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="2" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">2</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="3" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">3</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="4" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">4</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="5" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">5</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="6" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">6</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="7" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">7</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="8" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">8</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="9" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">9</span>
            </label>
            <label class="custom-control custom-radio">
              <input name="radioOutros" value="10" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description lead">10</span>
            </label>
          </div><!-- FIM DO RADIO OUTROS -->
          
          <div class="row my-3">
            <div class="col-sm-12 col-md-6 form-group">
              <input type="submit" class="btn btn-primary btn-block" value="Enviar">
            </div>
            <div class="col-sm-12 col-md-6 form-group">
              <input type="reset" class="btn btn-danger btn-block" value="Limpar">  
            </div>
          </div> 

        </form>
      </div>

    </div>

  </div>
</section> 
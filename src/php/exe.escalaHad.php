<section id="escalaHad"

    <div class="container mt-4">

        <div class="row mb-3">

            <div class="col-md-12 mb-4">
                <h4 class="display-4">Escala de Ansiedade e Depressão</h4><h5> - HAD</h5>
            </div>

            <div class="col-md-12">
                <ul>
                    <li>Questionário que pode ser autoaplicado com 14 itens, integrado por subescalas de 7 itens para depressão e 7 itens para ansiedade.</li>
                    <li>O paciente deverá selecionar para cada item a alternativa que melhor reflete a sua situação na última semana.</li>
                    <li>A HAD é uma escala simples e de fácil aplicação.</li>
                    <li>Pode ser utilizada para detectar mudanças emocionais durante o curso da enfermidade.</li>
                    <li>Sua validade para detectar enfermidade psiquiátrica definida é limitada.</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- ESCALA -->
            <div class="col-md-12">
                <form action="./teste2.php" method="POST">
                    <!-- QUESTÃO TENSO COTRAÍDO -->
                    <div class="form-group mb-3">
                        <h5>A 1) Eu me sinto tenso ou contraído:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectTensoContraido">
                          <option value="-1" selected>Selecione</option>
                          <option value="3">A maior parte do tempo</option>
                          <option value="2">Boa parte do tempo</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Nunca</option>
                        </select>
                    </div><!-- QUESTÃO TENSO COTRAÍDO -->

                    <!-- QUESTÃO GOSTO COISAS -->
                    <div class="form-group mb-3">
                        <h5>D 2) Eu ainda sinto gosto pelas mesmas coisas de antes:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectGosto">
                          <option value="-1" selected>Selecione</option>
                          <option value="0">Sim, do mesmo jeito que antes</option>
                          <option value="1">Não tanto quanto antes</option>
                          <option value="2">Só um pouco</option>
                          <option value="3">Já não sinto mais prazer em nada</option>
                        </select>
                    </div><!-- QUESTÃO GOSTO COISAS -->

                    <!-- QUESTÃO SENTIMENTO RUIM -->
                    <div class="form-group mb-3">
                        <h5>A 3) Eu sinto uma espécie de medo, como se alguma coisa ruim fosse acontecer:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectMedo">
                          <option value="-1" selected>Selecione</option>
                          <option value="3">Sim, e de um jeito muito forte</option>
                          <option value="2">Sim, mas não tão forte</option>
                          <option value="1">Um pouco, mas isso não me preocupa</option>
                          <option value="0">Não sinto nada disso</option>
                        </select>
                    </div><!-- QUESTÃO SENTIMENTO RUIM -->

                    <!-- QUESTÃO RISADA E DIVERSÃO -->
                    <div class="form-group mb-3">
                        <h5>D 4) Dou risada e me divirto quando vejo coisas engraçadas:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectRisada">
                          <option value="-1" selected>Selecione</option>
                          <option value="0">Do mesmo jeito que antes</option>
                          <option value="1">Atualmente um pouco menos</option>
                          <option value="2">Atualmente bem menos</option>
                          <option value="3">Não consigo mais</option>
                        </select>
                    </div><!-- QUESTÃO RISADA E DIVERSÃO -->

                    <!-- QUESTÃO CABEÇA CHEIA -->
                    <div class="form-group mb-3">
                        <h5>A 5) Estou com a cabeça cheia de preocupações:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectPreocupacao">
                          <option value="-1" selected>Selecione</option>
                          <option value="3">A maior parte do tempo</option>
                          <option value="2">Boa parte do tempo</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Raramente</option>
                        </select>
                    </div><!-- QUESTÃO CABEÇA CHEIA -->

                    <!-- QUESTÃO SENTIMENTO ALEGRE -->
                    <div class="form-group mb-3">
                        <h5>D 6) Eu me sinto alegre:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectAlegre">
                          <option value="-1" selected>Selecione</option>
                          <option value="3">Nunca</option>
                          <option value="2">Poucas vezes</option>
                          <option value="1">Muitas vezes</option>
                          <option value="0">A maior parte do tempo</option>
                        </select>
                    </div><!-- QUESTÃO SENTIMENTO ALEGRE -->

                    <!-- QUESTÃO À VONTADE RELAXADO -->
                    <div class="form-group mb-3">
                        <h5>A 7) Consigo ficar sentado à vontade e me sentir relaxado:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectRelaxado">
                          <option value="-1" selected>Selecione</option>
                          <option value="0">Sim, quase sempre</option>
                          <option value="1">Muitas vezes</option>
                          <option value="2">Poucas vezes</option>
                          <option value="3">Nunca</option>
                        </select>
                    </div><!-- QUESTÃO À VONTADE RELAXADO -->

                    <!-- QUESTÃO LENTO PENSAR E FAZER -->
                    <div class="form-group mb-3">
                        <h5>D 8) Eu estou lento para pensar e fazer as coisas:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectLento">
                          <option value="-1" selected>Selecione</option>
                          <option value="3">Quase sempre</option>
                          <option value="2">Muitas vezes</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Nunca</option>
                        </select>
                    </div><!-- QUESTÃO LENTO PENSAR E FAZER -->

                    <!-- QUESTÃO FRIO BARRIGA -->
                    <div class="form-group mb-3">
                        <h5>A 9) Eu tenho uma sensação ruim de medo, como um frio na barriga ou um aperto no estômago:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectFrioNaBarriga">
                          <option value="-1">Selecione</option>
                          <option value="0">Nunca</option>
                          <option value="1">De vez em quando</option>
                          <option value="2">Muitas vezes</option>
                          <option value="3">Quase sempre</option>
                        </select>
                    </div><!-- QUESTÃO FRIO BARRIGA -->

                    <!-- QUESTÃO CUIDAR APARÊNCIA -->
                    <div class="form-group mb-3">
                        <h5>D 10) Eu perdi o interesse em cuidar da minha aparência:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectAparencia">
                          <option value="-1">Selecione</option>
                          <option value="3">Completamente</option>
                          <option value="2">Não estou mais me cuidando como deveria</option>
                          <option value="1">Talvez não tanto quanto antes</option>
                          <option value="0">Me cuido do mesmo jeito que antes</option>
                        </select>
                    </div><!-- QUESTÃO CUIDAR APARÊNCIA -->

                    <!-- QUESTÃO INQUIETO -->
                    <div class="form-group mb-3">
                        <h5>A 11) Eu me sinto inquieto, como se eu não pudesse ficar parado em lugar nenhum:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectInquieto">
                          <option value="-1">Selecione</option>
                          <option value="3">Sim, demais</option>
                          <option value="2">Bastante</option>
                          <option value="1">Um pouco</option>
                          <option value="0">Não me sinto assimsmo jeito que antes</option>
                        </select>
                    </div><!-- QUESTÃO INQUIETO -->

                    <!-- QUESTÃO ANIMADO -->
                    <div class="form-group mb-3">
                        <h5>D 12) Fico esperando animado as coisas boas que estão por vir:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectAnimado">
                          <option value="-1">Selecione</option>
                          <option value="0">Do mesmo jeito que antes</option>
                          <option value="1">Um pouco menos do que antes</option>
                          <option value="2">Bem menos do que antes</option>
                          <option value="3">Quase nunca</option>
                        </select>
                     </div><!-- QUESTÃO ANIMADO -->

                    <!-- QUESTÃO PÂNICO -->
                    <div class="form-group mb-3">
                        <h5>A 13) De repente, tenho a sensação de entrar em pânico:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectPanico">
                          <option value="-1" selected>Selecione</option>
                          <option value="3">A quase todo momento</option>
                          <option value="2">Várias vezes</option>
                          <option value="1">De vez em quando</option>
                          <option value="0">Não sinto isso</option>
                        </select>
                    </div><!-- QUESTÃO PÂNICO -->

                    <!-- QUESTÃO PRAZER TV -->
                    <div class="form-group mb-3">
                        <h5>D 14) Consigo sentir prazer quando assisto a um bom programa de televisão, de rádio ou quando leio alguma coisa:</h5>
                        <select class="form-control col-lg-6 col-md-12 col-sm-12" name="selectTv">
                          <option value="-1" selected>Selecione</option>
                          <option value="0">Quase sempre</option>
                          <option value="1">Várias vezes</option>
                          <option value="2">Poucas vezes</option>
                          <option value="3">Quase nunca</option>
                        </select>
                    </div><!-- QUESTÃO PRAZER TV -->

                    <div class="row mt-3">
                        <div class="col-sm-12 col-md-6 form-group mb-2">
                          <input type="submit" class="btn btn-lg btn-primary btn-block" value="Enviar">
                        </div>
                        <div class="col-sm-12 col-md-6 form-group">
                          <input type="reset" class="btn btn-lg btn-secondary btn-block" value="Limpar">  
                        </div>
                    </div>
                </form>
            </div><!-- ESCALA -->
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-md-12 my-3"> 
                <h5 class="mb-3"><em>Presença de ansiedade ou depressão, pontuação maior ou igual a 8.</em></h5>

                <h4><em>Hipodermóclise</em></h4>
                <ul>
                    <li class="text-justify">Consiste na de administração fluidos através da via subcutânea.</li>

                    <li class="text-justify">Tem grande aplicabilidade em pacientes internados em domicílio, pois permite o envolvimento mais seguro do cuidador capacitado em situações em que existe a necessidade de administrar medicamentos injetáveis em curtos intervalos de tempo.</li>

                    <li class="text-justify">Via alternativa para pacientes com dificuldade de manter acesso venoso permanente e que necessitam receber drogas injetáveis.</li>

                    <li class="text-justify">Garante a manutenção da hidratação em pacientes impedidos de receber hidratação oral, quando ainda não foi estabelecida uma via enteral mais segura.</li>

                    <li class="text-justify">Possibilita uma via segura para pacientes com necessidade de analgesia intermitente, principalmente com drogas opioides.</li>

                    <li class="text-justify">Garante a continuidade de tratamento em domicílio quando existe a necessidade de administrar antibióticos injetáveis.</li>

                    <li class="text-justify"><em>Técnica:</em> utilizar cateter agulhado (escalpe 21G ou 25G) ou não agulhado (18G e 24G), após os cuidados de assepsia, introduzir a agulha na pele em ângulo de 30 a 45 graus em direção centrípeta, com o bisel voltado para cima.</li>

                    <li class="text-justify"><em>Velocidade de Infusão:</em> a hidratação pode ser em bolus de 500ml em 20 minutos, repetindo até 3 vezes em 24h. Em infusão contínua, o volume diário não poderá ultrapassar 3000ml. Administração de volume em período noturno é mais confortável, garantindo mais autonomia dos pacientes durante o dia.</li>

                    <li class="text-justify"><em>Zonas de punção:</em> regiões deltóidea, infraclavicular, abdominal, face lateral da coxa.</li>

                    <li class="text-justify"><em>Drogas administráveis por via SC.</em></li>
                </ul>

                <table class="table table-bordered my-3">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">Fármaco</th>
                            <th scope="col">Indicações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Morfina</td>
                            <td>Dor, dispneia</td>
                        </tr>
                        <tr>
                            <td>Tramadol</td>
                            <td>Dor</td>
                        </tr>
                        <tr>
                            <td>Escopolamina</td>
                            <td>Estertores premortem, sialorreia, secreções respiratórias, obstrução intestinal</td>
                        </tr>
                        <tr>
                            <td>Morfina</td>
                            <td>Dor, dispneia</td>
                        </tr>
                        <tr>
                            <td>Midazolam</td>
                            <td>Convulsões, sedação paliativa</td>
                        </tr>
                        <tr>
                            <td>Metoclopamida</td>
                            <td>Náuseas e vômitos</td>
                        </tr>
                        <tr>
                            <td>Haloperidol</td>
                            <td>Náuseas e vômitos por opioides, vômitos em obstrução intestinal, <em>delirium</em></td>
                        </tr>
                        <tr>
                            <td>Dexametazona</td>
                            <td>Múltiplas indicações em CP</td>
                        </tr>
                        <tr>
                            <td>Octreotide</td>
                            <td>Obstrução intestinal</td>
                        </tr>
                        <tr>
                            <td>Ceftriaxone, cefepime, ampicilina</td>
                            <td>Infecção</td>
                        </tr>
                        <tr>
                            <td>Furosemida</td>
                            <td>ICC, anasarca, IRA</td>
                        </tr>
                    </tbody>
                </table>

                <h4><em>Conclusão</em></h4>
                <p class="text-justify">Internação Domiciliar e Cuidados Paliativos, com enfoque interdisciplinar, obedecendo os conceitos validados de melhor qualidade de vida aos pacientes e seus familiares, caracterizam-se como uma excelente estrutura para prestar acolhimento integral em situações de terminalidade, oferecendo suporte humanizado,  com alívio facilitado dos sintomas físicos, emocionais, sociais e espirituais em ambiente domiciliar. Escalas de avaliação de sintomas em Cuidados Paliativos são perfeitamente aplicáveis em domicilio, facilitando a pronta resolução dos sintomas pela equipe interdisciplinar, sempre com apoio do cuidador principal.</p>
            </div>
        </div>

    </div>
</section>
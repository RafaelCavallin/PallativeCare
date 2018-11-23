<section id="escalaKps" class="mb-3">
  <div class="container mt-4">

    <div class="row">
      <div class="my-2 col-md-12 mb-3">
        <h4 class="display-4">Escala de Avaliação Funcional de Karnofsky</h4><h5> – KPS</h5>
      </div>
    </div><!-- /row -->

    <div class="row">
      <div class="col-md-12 mb-2">
        <p class="text-justify lead">A escala de performance status de Karnofsky foi desenvolvida para pacientes com câncer como um meio objetivo de documentar o declínio clínico do paciente, avaliando a capacidade de realizar determinadas atividades básicas. A maioria dos pacientes com uma escala Karnofsky inferior a 70% tem indicação precoce de assistência de Cuidados Paliativos. Performance de 50% nesta escala é um indicador de terminalidade, reafirmando que estes são pacientes elegíveis para Cuidados Paliativos, a menos que exista um ganho previsivelmente benéfico em sustentar terapia para a doença de base, que seja simultaneamente disponível e possam ser tolerados. Outro instrumento útil para medir a condição clínica do paciente é a Escala de Performance Paliativa (PPS) que foi desenvolvida em 1996, em Victoria, British Columbia, e revisto em 2001.</p>
        <small class="text-muted">Fonte: <a href="http://biblioteca.cofen.gov.br/wp-content/uploads/2017/05/Manual-de-cuidados-paliativos-ANCP.pdf" target="blank">Manual de Cuidados Paliativos ANCP - 2ª edição</a></small>
      </div>
    </div><!-- /row -->

    <div class="row">
      <div class="col-md-12">
        <table class="table table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col" class="text-center">%</th>
              <th scope="col" class="text-center">Significado</th>
            </tr>
          </thead>
          <tbody>
            <form action="#" method="POST">
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="100"></th>
                <td>Normal, ausência de queixas, sem evidências de doença</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="90"></th>
                <td>Capaz de realizar atividades normais, sinais e sintomas mínimos da doença</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="80"></th>
                <td>Atividade normal com esforço, alguns sinais ou sintomas da doença Incapacidade para grande esforço físico, consegue deambular</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="70"></th>
                <td>Não requer assistência para cuidados pessoais, mas é incapaz de realizar atividades normais, como tarefas caseiras e trabalhos ativos</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="60"></th>
                <td>Requer assistência ocasional, mas consegue realizar a maioria dos seus cuidados pessoais</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="50"></th>
                <td>Requer considerável assistência e frequentes cuidados médicos</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="40"></th>
                <td>Incapacitado, requer cuidados pessoais e assistência, autocuidado limitado Permanece mais de 50% do horário vigil sentado ou deitado</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="30"></th>
                <td>Severamente incapacitado, necessidade de tratamento de suporte permanente, embora a morte não seja iminente</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="20"></th>
                <td>Paciente muito doente, completamente incapaz, necessidade de tratamento de suporte permanente, confinado ao leito</td>
              </tr>
              <tr>
                <th scope="row" class="text-center"><input name="respKPS" type="radio" value="10"></th>
                <td>Moribundo, processo de morte progredindo rapidamente</td>
              </tr>
              <tr>
                  <td colspan="2"><button type="button" id="enviarKPS" class="btn btn-primary col-sm-12 col-md-6" data-toggle="modal" data-target="#btnResultKPS">Enviar</button></td>
              </tr>
          </tbody>
        </table>
        
      </form>
      </div><!-- /col -->
    </div><!-- /row -->

  </div> 
</section>

<!-- Modal -->
<div class="modal fade" id="btnResultKPS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resultado KPS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 class="display-3 text-center" id="resultado"></h2>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  document.querySelector('#enviarKPS').addEventListener('click', function(){
    var result = document.getElementsByName('respKPS')
    for (var i = 0; i < result.length; i++) {
      if (result[i].checked) {
        result = result[i]
        document.getElementById('resultado').innerHTML = result.value
      }else{
        document.getElementById('resultado').innerHTML = 'Selecione uma opção!'
      }
    }
  })

</script>
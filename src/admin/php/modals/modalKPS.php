<div class="modal fade" id="modalKPS" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="table-responsive-sm">
					<form name="fomrKPS" action="#" method="post">
						<table id="tableKPS" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th scope="col" class="text-center">%</th>
									<th scope="col" class="text-center">Significado</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="100">100</th>
									<td>Normal, ausência de queixas, sem evidências de doença</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="90">90</th>
									<td>Capaz de realizar atividades normais, sinais e sintomas mínimos da doença</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="80">80</th>
									<td>Atividade normal com esforço, alguns sinais ou sintomas da doença Incapacidade para grande esforço físico, consegue deambular</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="70">70</th>
									<td>Não requer assistência para cuidados pessoais, mas é incapaz de realizar atividades normais, como tarefas caseiras e trabalhos ativos</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="60">60</th>
									<td>Requer assistência ocasional, mas consegue realizar a maioria dos seus cuidados pessoais</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="50">50</th>
									<td>Requer considerável assistência e frequentes cuidados médicos</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="40">40</th>
									<td>Incapacitado, requer cuidados pessoais e assistência, autocuidado limitado Permanece mais de 50% do horário vigil sentado ou deitado</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="30">30</th>
									<td>Severamente incapacitado, necessidade de tratamento de suporte permanente, embora a morte não seja iminente</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="20">20</th>
									<td>Paciente muito doente, completamente incapaz, necessidade de tratamento de suporte permanente, confinado ao leito</td>
								</tr>
								<tr>
									<th scope="row" class="text-center"><input name="respKPS" type="radio" id="resKPS" value="10">10</th>
									<td>Moribundo, processo de morte progredindo rapidamente</td>
								</tr>
							</tbody>
						</table>
						<div class="form-group mt-3 ">
							<button type="submit" id="btnEnviarKPS" class="btn btn-primary btn-block">Enviar</button>
						</div>
					</form>
					</div>
				</div><!-- /modal-body -->
			</div><!-- /modal-content -->
		</div><!-- /modal-dialog -->
</div><!-- /modal KPS-->
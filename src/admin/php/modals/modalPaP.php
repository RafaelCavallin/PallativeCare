<div class="modal fade" id="modalPaP" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form name="formPaP" action="#" method="POST">

					<div class="form-group">
						<h5>Dispneia</h5>
						<div class="custom-control custom-radio d-block">
							<input name="radioDispneia" type="radio" id="radioDispneiaN" class="custom-control-input" value="0" required>
							<label class="custom-control-label lead" for="radioDispneiaN">Não</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioDispneia" type="radio" id="radioDispneiaS" class="custom-control-input" value="1" required>
							<label class="custom-control-label lead" for="radioDispneiaS">Sim</label>
						</div>
					</div><!-- /Dispneia -->

					<hr>
					
					<div class="form-group">
						<h5>Anorexia</h5>
						<div class="custom-control custom-radio d-block">
							<input name="radioAnorexia" type="radio" id="radioAnorexiaN" class="custom-control-input" value="0" required>
							<label class="custom-control-label lead" for="radioAnorexiaN">Não</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioAnorexia" type="radio" id="radioAnorexiaS" class="custom-control-input" value="1.5" required>
							<label class="custom-control-label lead" for="radioAnorexiaS">Sim</label>
						</div>
					</div><!-- /Anorexia -->

					<hr>

					<div class="form-group">
						<h5>Estimativa clínica de sobrevivência (semanas)</h5>
						<div class="custom-control custom-radio d-block">
							<input name="radioSobrevivencia" type="radio" id="radioSobrevivencia12" class="custom-control-input" value="0" required>
							<label class="custom-control-label lead" for="radioSobrevivencia12">>12</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioSobrevivencia" type="radio" id="radioSobrevivencia1" class="custom-control-input" value="2" required>
							<label class="custom-control-label lead" for="radioSobrevivencia1">11 - 12</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioSobrevivencia" type="radio" id="radioSobrevivencia2" class="custom-control-input" value="2" required>
							<label class="custom-control-label lead" for="radioSobrevivencia2">9 - 10</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioSobrevivencia" type="radio" id="radioSobrevivencia3" class="custom-control-input" value="2.5" required>
							<label class="custom-control-label lead" for="radioSobrevivencia3">7 - 8</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioSobrevivencia" type="radio" id="radioSobrevivencia4" class="custom-control-input" value="4.5" required>
							<label class="custom-control-label lead" for="radioSobrevivencia4">5 - 6</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioSobrevivencia" type="radio" id="radioSobrevivencia5" class="custom-control-input" value="6" required>
							<label class="custom-control-label lead" for="radioSobrevivencia5">3 - 4</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioSobrevivencia" type="radio" id="radioSobrevivencia6" class="custom-control-input" value="8.5" required>
							<label class="custom-control-label lead" for="radioSobrevivencia6">1 - 2</label>
						</div>
					</div><!-- /estimativa clínica-->

					<hr>

					<div class="form-group">
						<h5>Pontuação na escala de performance de Karnofsky (%)</h5>
						<div class="custom-control custom-radio d-block">
							<input name="radioKps" type="radio" id="radioKpsM" class="custom-control-input" value="0" required>
							<label class="custom-control-label lead" for="radioKpsM">≥30</label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioKps" type="radio" id="radioKps" class="custom-control-input" value="2.5" required>
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
							<input name="radioLeucocitaria" type="radio" id="radioLeucocitaria" class="custom-control-input" value="0" required>
							<label class="custom-control-label lead" for="radioLeucocitaria"> <8.500 </label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioLeucocitaria" type="radio" id="radioLeucocitaria1" class="custom-control-input" value="0.5" required>
							<label class="custom-control-label lead" for="radioLeucocitaria1"> 8.501-11.000 </label>
						</div>
						<div class="custom-control custom-radio d-block">
							<input name="radioLeucocitaria" type="radio" id="radioLeucocitaria2" class="custom-control-input" value="1.5" required>
							<label class="custom-control-label lead" for="radioLeucocitaria2"> >11.000 </label>
						</div>
					</div><!-- /leucocitária -->

					<hr>
					
					<div class="form-group">
						<h5>Porcentagem de linfócitos</h5>

						<div class="custom-control custom-radio d-block">
							<input name="radioLinfocitos" type="radio" id="radioLinfocitos" class="custom-control-input" value="2.5" required>
							<label class="custom-control-label lead" for="radioLinfocitos"> <12 </label>
							</div>
							<div class="custom-control custom-radio d-block">
								<input name="radioLinfocitos" type="radio" id="radioLinfocitos1" class="custom-control-input" value="1" required>
								<label class="custom-control-label lead" for="radioLinfocitos1"> 12-19,9 </label>
							</div>
							<div class="custom-control custom-radio d-block">
								<input name="radioLinfocitos" type="radio" id="radioLinfocitos2" class="custom-control-input" value="0" required>
								<label class="custom-control-label lead" for="radioLinfocitos2">≥20 </label>
							</div>
						</div><!-- /Linfócitos -->

						<div class="row my-3">
							<div class="col-sm-12 col-md-12 form-group">
								<input type="submit" id="btnEnviarPap" class="btn btn-primary btn-block" value="Enviar">
							</div>
						</div> 
					</form>
					

				</div><!-- /modal-body -->
			</div><!-- /modal-content -->
		</div><!-- /modal-dialog -->
</div><!-- /modal PaP-->
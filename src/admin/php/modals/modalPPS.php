<div class="modal fade" id="modalPPS" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">

				<div class="card bg-light">
					<div class="card-body">
						<form name="formPPS" action="#" method="post">
							<div class="form-group">
								<label class="lead">Deambulação</label>
								<select id="deambulacao" class="form-control" required>
									<option value="">Selecione</option>
									<option value="100">Completa</option>
									<option value="70">Reduzida</option>
									<option value="50">Maior parte do tempo sentado ou deitado</option>
									<option value="40">Maior parte do tempo acamado</option>	
									<option value="20">Totalmente acamado</option>	
									<option value="10">Morte</option>	
								</select>
							</div><!-- /Deambulação -->

							<div class="form-group">
								<label class="lead">Atividade e evidência da doença</label>
								<select id="atividadeEvidencia" class="form-control" required>
									<option value="">Selecione</option>
									<option value="100">Atividade normal e trabalho; sem evidência de doença</option>	
									<option value="90">Atividade normal e trabalho; alguma evidência de doença</option>
									<option value="80">Atividade normal com esforço; alguma evidência de doença</option>	
									<option value="70">Incapaz para o trabalho; Doença significativa</option>	
									<option value="60">Incapaz para os hobbies/ trabalho doméstico. Doença significativa</option>	
									<option value="50">Incapacitado para qualquer trabalho. Doença extensa</option>	
									<option value="40">Incapaz para a maioria das atividades. Doença extensa</option>	
									<option value="30">Incapaz para qualquer atividade. Doença extensa</option>
								</select>
							</div><!-- /Atividade e evidência da doença -->

							<div class="form-group">
								<label class="lead">Autocuidado</label>
								<select id="autocuidado" class="form-control" required>
									<option value="">Selecione</option>
									<option value="100">Completo</option>	
									<option value="60">Assistência ocasional.</option>	
									<option value="50">Assistência considerável</option>	
									<option value="40">Assistência quase completa</option>	
									<option value="30">Dependência completa</option>	
								</select>
							</div><!-- /Autocuidado -->

							<div class="form-group">
								<label class="lead">Ingesta</label>
								<select id="ingesta" class="form-control" required>
									<option value="">Selecione</option>	
									<option value="100">Normal</option>	
									<option value="80">Normal ou reduzida</option>	
									<option value="20">Mínima a pequenos goles</option>	
									<option value="10">Cuidados com a boca</option>	
								</select>
							</div><!-- /Ingesta -->

							<div class="form-group">
								<label class="lead">Nível da Consciência</label>
								<select id="consciencia" class="form-control" required>
									<option value="">Selecione</option>	
									<option value="100">Completa</option>	
									<option value="60">Completa ou períodos de confusão</option>	
									<option value="40">Completa ou sonolência. +/- confusão</option>	
									<option value="10">Sonolência ou coma. +/- confusão</option>		
								</select>
							</div><!-- /Nível da Consciência -->

							<div class="mt-3">
								<button type="submit" id="btnEnviarPPS" class="btn btn-primary btn-block">Enviar</button>
							</div><!-- /Nível da Consciência -->
						</form>
					</div><!--/card-body -->
				</div><!--/card -->
				

			</div><!-- /modal-body -->
		</div><!-- /modal-content -->
	</div><!-- /modal-dialog -->
</div><!-- /modal PPS -->	
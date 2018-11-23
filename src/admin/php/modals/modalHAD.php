<div class="modal fade" id="modalHAD" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">

					<div class="card bg-light">
						<div class="card-body">
							<form name="formHAD" id="formHAD" action="#" method="post">

								<!-- QUESTÃO TENSO COTRAÍDO -->
								<div class="form-group mb-3">
									<h5>A - Eu me sinto tenso ou contraído:</h5>
									<select id="AselectTensoContraido" class="form-control col-md-12 col-sm-12" required>
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
									<select class="form-control col-md-12 col-sm-12" id="DselectGosto" required>
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
									<select class="form-control col-md-12 col-sm-12" id="AselectMedo" required>
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
									<select class="form-control col-md-12 col-sm-12" id="DselectRisada" required>
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
									<select class="form-control col-md-12 col-sm-12" id="AselectPreocupacao" required>
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
									<select class="form-control col-md-12 col-sm-12" id="DselectAlegre" required>
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
									<select class="form-control col-md-12 col-sm-12" id="AselectRelaxado" required>
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
									<select class="form-control col-md-12 col-sm-12" id="DselectLento" required>
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
									<select class="form-control col-md-12 col-sm-12" id="AselectFrioNaBarriga" required>
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
									<select class="form-control col-md-12 col-sm-12" id="DselectAparencia" required>
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
									<select class="form-control col-md-12 col-sm-12" id="AselectInquieto" required>
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
									<select class="form-control col-md-12 col-sm-12" id="DselectAnimado" required>
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
									<select class="form-control col-md-12 col-sm-12" id="AselectPanico" required>
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
									<select class="form-control col-md-12 col-sm-12" id="DselectTv" required>
										<option value="">Selecione</option>
										<option value="0">Quase sempre</option>
										<option value="1">Várias vezes</option>
										<option value="2">Poucas vezes</option>
										<option value="3">Quase nunca</option>
									</select>
								</div><!-- QUESTÃO PRAZER TV -->

								<div class="form-group mt-3 ">
									<button type="submit" id="btnEnviarHAD" class="btn btn-primary btn-block">Enviar</button>
								</div>
							</form>
						</div><!-- /card-body -->
					</div><!-- /card -->


				</div><!-- /modal-body -->
			</div><!-- /modal-content -->
		</div><!-- /modal-dialog -->
</div><!-- /modal HAD-->

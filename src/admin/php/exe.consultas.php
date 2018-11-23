<?php 
include_once ('./../classes/DbAdmin.php');
include_once ('./../classes/Paciente.php');


$sql = "SELECT id_paciente, nome_paciente, prontuario FROM paciente";
$filter = " WHERE id_usuario = ? AND ativo = 1 ORDER BY nome_paciente";
$data = array($_SESSION['login']['idUsuario']);
$result = select($sql, $filter, $data);

$sqlEscala = "SELECT *  FROM escala";
$resultEscala = select($sqlEscala);

$sqlConsulta = "SELECT paciente.id_paciente, paciente.nome_paciente, consulta.data_consulta, consulta.id_consulta FROM consulta INNER JOIN paciente ON paciente.id_paciente = consulta.id_paciente";
$filterConsulta = "  WHERE id_profissional = ?";
$resulConsulta = select($sqlConsulta, $filterConsulta, $data);

?>
<div class="container">
	<div class="row mt-2 mb-4">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h2 class="lead">Consulta</h2>
				</div>
				<div class="card-body">

					<form name="formConsulta" action="../classes/controllers/consultaController.php?acao=cadConsulta" method="POST">
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label for="selectPaciente">Paciente</label>
								<select name="nomePaciente" class="form-control" id="selectPaciente" required>
									<option value="">Selecione</option>
									<?php  
									foreach ($result as $value) {
										echo '<option value="' . $value['id_paciente'] .'"> '. $value['nome_paciente']. ' </option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<div class="btn-group" role="group" arial-label="Grupo de botões">
									<button type="button" id="btnPPS" class="btn btn-primary" data-toggle="modal" data-target="#modalPPS">PPS</button>
									<button type="button" id="btnPap" class="btn btn-primary" data-toggle="modal" data-target="#modalPaP">PaP</button>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalHAD">HAD</button>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKPS">KPS</button>	
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>PPS:</label>
								<input type="text" name="ResultPPS" id="ResultPPS" class="d-inline-block form-control col-xs-2 col-sm-2 col-md-2">
							</div>
							<div class="form-group col-sm-12">
								<label>PaP:</label>
								<input type="text" name="ResultPaP" id="ResultPaP" class="d-inline-block form-control col-xs-2 col-sm-2 col-md-2">
							</div>
							<div class="form-group col-sm-12">
								<label>KPS:</label>
								<input type="text" name="ResultKPS" id="ResultKPS" class="d-inline-block form-control col-xs-2 col-sm-2 col-md-2">
							</div>
							<div class="form-group col-sm-12">
								<label>HAD A:</label>
								<input type="text" name="ResultHAD_A" id="ResultHAD_A" class="d-inline-block form-control col-xs-2 col-sm-2 col-md-2">
							</div>
							<div class="form-group col-sm-12">
								<label>HAD D:</label>
								<input type="text" name="ResultHAD_D" id="ResultHAD_D" class="d-inline-block form-control col-xs-2 col-sm-2 col-md-2">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label for="descricaoConsulta">Descrição</label>
								<textarea name="descrcaoConsulta" id="descricaoConsulta" class="form-control" rows="5" required></textarea>
							</div>
						</div>
						<div class="form-row justify-content-end">
							<div class="col-md-6 col-sm-12 form-group">
								<button type="submit" class="btn btn-primary form-control">Enviar</button>	
							</div>
						</div>
					</form>

				</div><!-- /card-body -->
			</div><!-- /card -->
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h2 class="lead">Consultas</h2>
				</div><!-- /card-header -->

				<div class="card-body">

					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Paciente</th>
									<th>Data</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>

								<?php
									foreach($resulConsulta as $key){
              							$data = setData($key['data_consulta'], 1);

										echo "<tr>";
              							echo '<td>' . $key['nome_paciente'] . '</td>';
              							echo '<td>' . $data . '</td>';

              							echo '<td>

							              <a class="ml-2" href="index.php?pg=detalhesConsulta&id_p='. $key['id_paciente'] .'&id_c='. $key['id_consulta'] .'"><i class="fa fa-chart-line fa-lg text-secondary"></i></a>

							              <a class="ml-2" href="./../classes/controllers/pacienteController.php?acao=delete&id_p=' . $key['id_paciente'] . '"><i class="fa fa-trash fa-lg text-danger" id="deleteRegistro"></i></a>
							              </td>';

              							echo "</tr>";
									}

								?>

							</tbody>
						</table><!-- /table -->
					</div><!-- /table-responsive -->

				</div><!-- /card-body -->
			</div><!-- /card -->
		</div><!-- /col -->
	</div><!-- /row -->
</div><!-- /container -->

<?php 
//Incluindo os modais
include 'modals/modalPPS.php'; 
include 'modals/modalPaP.php'; 
include 'modals/modalHAD.php'; 
include 'modals/modalKPS.php'; 
?>			


<script type="text/javascript">

	Array.min = function(array) {
    	return Math.min.apply(Math, array);
	};

	document.querySelector('#btnEnviarPPS').addEventListener('click', function(e){
		
		//Pegando valores do modal
		var deambulacao = document.getElementById('deambulacao').value;
		var atividadeEvidencia = document.getElementById('atividadeEvidencia').value;
		var autocuidado = document.getElementById('autocuidado').value;
		var ingesta = document.getElementById('ingesta').value;
		var consciencia = document.getElementById('consciencia').value;

		if ((deambulacao == "") || (atividadeEvidencia == "") || (autocuidado == "") || (ingesta == "") || (consciencia == "")){
			return false;
		}else{
			var ArrayResult = [deambulacao, atividadeEvidencia, autocuidado, ingesta, consciencia]

			document.querySelector('#ResultPPS').value = Array.min(ArrayResult);
			e.preventDefault();

			$('#modalPPS').modal('hide');
		}
	})// Fim do Envia PPS

	document.querySelector('#btnEnviarPap').addEventListener('click', function(e){

		if (! $("input[type='radio'][name='radioDispneia']").is(':checked') ){
	      return false; 
	    }else{
	    	var dispneia = document.getElementsByName('radioDispneia');
			for(var i = 0; i < dispneia.length; i++){
				if(dispneia[i].checked){
			    	dispneia = parseInt(dispneia[i].value);
			   	}
			}
	    }


	    if (! $("input[type='radio'][name='radioAnorexia']").is(':checked') ){
	      return false; 
	    }else{
	    	var anorexia = document.getElementsByName('radioAnorexia');
			for(var i = 0; i < anorexia.length; i++){
				if (anorexia[i].checked) {
					anorexia = parseInt(anorexia[i].value);
				}
			}
	    }

	    if (! $("input[type='radio'][name='radioSobrevivencia']").is(':checked') ){
	      return false; 
	    }else{
	    	var sobrevivencia = document.getElementsByName('radioSobrevivencia');
			for(var i = 0; i < sobrevivencia.length; i++){
				if (sobrevivencia[i].checked) {
					sobrevivencia = parseInt(sobrevivencia[i].value);
				}
			}
	    }

	    if (! $("input[type='radio'][name='radioKps']").is(':checked') ){
	      return false; 
	    }else{
	    	var kps = document.getElementsByName('radioKps');
			for(var i = 0; i < kps.length; i++){
				if (kps[i].checked) {
					kps = parseInt(kps[i].value);
				}
			}
	    }

	    if (! $("input[type='radio'][name='radioLeucocitaria']").is(':checked') ){
	      return false; 
	    }else{
	    	var leucocitaria = document.getElementsByName('radioLeucocitaria');
			for(var i = 0; i < leucocitaria.length; i++){
				if (leucocitaria[i].checked) {
					leucocitaria = parseInt(leucocitaria[i].value);
				}
			}
	    }

	    if (! $("input[type='radio'][name='radioLinfocitos']").is(':checked') ){
	      return false; 
	    }else{
	    	var linfocitos = document.getElementsByName('radioLinfocitos');
			for(var i = 0; i < linfocitos.length; i++){
				if (linfocitos[i].checked) {
					linfocitos = parseInt(linfocitos[i].value);
				}
			}
	    }

		var resultPaP = dispneia + anorexia + sobrevivencia + kps + leucocitaria + linfocitos;

		document.querySelector('#ResultPaP').value = resultPaP;
		e.preventDefault();
		$('#modalPaP').modal('hide');	
	})// Fim do Envia Pap 

	document.querySelector('#btnEnviarHAD').addEventListener('click', function(e){

		var AtensoContraido = parseInt(document.getElementById('AselectTensoContraido').value);
		var DGosto = parseInt(document.getElementById('DselectGosto').value);
		var AMedo = parseInt(document.getElementById('AselectMedo').value);
		var DRisada = parseInt(document.getElementById('DselectRisada').value);
		var APreocupacao = parseInt(document.getElementById('AselectPreocupacao').value);
		var DAlegre = parseInt(document.getElementById('DselectAlegre').value);
		var ARelaxado = parseInt(document.getElementById('AselectRelaxado').value);
		var DLento = parseInt(document.getElementById('DselectLento').value);
		var AFrioNaBarriga = parseInt(document.getElementById('AselectFrioNaBarriga').value);
		var DAparencia = parseInt(document.getElementById('DselectAparencia').value);
		var AInquieto = parseInt(document.getElementById('AselectInquieto').value);
		var DAnimado = parseInt(document.getElementById('DselectAnimado').value);
		var APanico = parseInt(document.getElementById('AselectPanico').value);
		var DselectTv = parseInt(document.getElementById('DselectTv').value);

		var ResultHAD_A = AtensoContraido + AMedo + APreocupacao + ARelaxado + AFrioNaBarriga + AInquieto + APanico;
		var ResultHAD_D = DGosto + DRisada + DAlegre + DLento + DAparencia + DAnimado + DselectTv;	

		document.querySelector('#ResultHAD_A').value = ResultHAD_A;
		document.querySelector('#ResultHAD_D').value = ResultHAD_D;
		e.preventDefault();

		$('#modalHAD').modal('hide');
	})// Fim do Envia HAD

	document.querySelector('#btnEnviarKPS').addEventListener('click', function(e){
		
		if (! $("input[type='radio'][name='respKPS']").is(':checked') ){
	      return false; 
	    }else{
	    	var respKPS = document.getElementsByName('respKPS');
			for(var i = 0; i < respKPS.length; i++){
				if(respKPS[i].checked){
			    	respKPS = parseInt(respKPS[i].value);
			   	}
			}
	    }
	    
	    document.querySelector('#ResultKPS').value = respKPS;
	    e.preventDefault();
	    $('#modalKPS').modal('hide');
	})// Fim do Envia KPS			
</script>
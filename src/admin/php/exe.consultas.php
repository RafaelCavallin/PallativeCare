<?php 
include_once ('./../classes/DbAdmin.php');
include_once ('./../classes/Paciente.php');


$sql = "SELECT id_paciente, nome_paciente, prontuario FROM paciente";
$filter = " WHERE id_usuario = ? AND ativo = 1 ORDER BY nome_paciente";
$data = array($_SESSION['login']['idUsuario']);
$result = select($sql, $filter, $data);

$sqlEscala = "SELECT *  FROM escala";
$resultEscala = select($sqlEscala);

?>
<div class="container">
	<div class="row mt-2 mb-4">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h2 class="lead">Consulta</h2>
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group">
							<label for="selectPaciente">Paciente</label>
							<select name="" class="form-control" id="selectPaciente">
								<option value="">Selecione</option>
								<?php  
								foreach ($result as $value) {
									echo '<option value="' . $value['id_paciente'] .'"> '. $value['nome_paciente']. ' </option>';
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<label for="selectEscala">Escala</label>
									<select class="form-control" id="selectEscala">
										<option value="">Selecione</option>
										<?php  
										foreach ($resultEscala as $value) {
											echo '<option value="' . $value['id_escala'] .'"> '. $value['nome_escala']. ' </option>';
										}
										?>
									</select>
								</div>
								<div class="col-md-4 col-sm-12">
									<label for="resultado">Resultado</label>
									<input type="text" name="resultado" class="form-control">
								</div>
								<div class="col-md-1 col-sm-12 text-center">
									<label for=""> </label>
									<button type="" class="btn btn-primary form-control">+</button>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="descricaoConsulta">Descrição</label>
							<textarea name="descrcaoConsulta" id="descricaoConsulta" class="form-control" rows="5"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
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
									<th>Col 1</th>
									<th>Col 2</th>
									<th>Col 3</th>
									<th>Col 4</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Linha02</td>
									<td>Linha02</td>
									<td>Linha02</td>
									<td>Linha02</td>
								</tr>
								<tr>
									<td>Linha03</td>
									<td>Linha03</td>
									<td>Linha03</td>
									<td>Linha03</td>
								</tr>
								<tr>
									<td>Linha04</td>
									<td>Linha04</td>
									<td>Linha04</td>
									<td>Linha04</td>
								</tr>
								<tr>
									<td>Linha05</td>
									<td>Linha05</td>
									<td>Linha05</td>
									<td>Linha05</td>
								</tr>
								<tr>
									<td>Linha02</td>
									<td>Linha02</td>
									<td>Linha02</td>
									<td>Linha02</td>
								</tr>
								<tr>
									<td>Linha03</td>
									<td>Linha03</td>
									<td>Linha03</td>
									<td>Linha03</td>
								</tr>
								<tr>
									<td>Linha04</td>
									<td>Linha04</td>
									<td>Linha04</td>
									<td>Linha04</td>
								</tr>
								<tr>
									<td>Linha05</td>
									<td>Linha05</td>
									<td>Linha05</td>
									<td>Linha05</td>
								</tr>
								<tr>
									<td>Linha02</td>
									<td>Linha02</td>
									<td>Linha02</td>
									<td>Linha02</td>
								</tr>
								<tr>
									<td>Linha03</td>
									<td>Linha03</td>
									<td>Linha03</td>
									<td>Linha03</td>
								</tr>
								<tr>
									<td>Linha04</td>
									<td>Linha04</td>
									<td>Linha04</td>
									<td>Linha04</td>
								</tr>
								<tr>
									<td>Linha05</td>
									<td>Linha05</td>
									<td>Linha05</td>
									<td>Linha05</td>
								</tr>
							</tbody>
						</table><!-- /table -->
					</div><!-- /table-responsive -->

				</div><!-- /card-body -->
			</div><!-- /card -->
		</div><!-- /col -->
	</div><!-- /row -->


</div><!-- /container -->

<script>
	var sel = document.getElementById('selectEscala');
	sel.addEventListener("change", function(){
		console.log(sel.selectedIndex)
		console.log(sel.options[sel.selectedIndex].text)
		var cam = '../../src/admin/index.php?pg=consultas&escala=' + sel.options[sel.selectedIndex].text
		console.log(cam)
;		window.location = cam;
		//window.showModalDialog('../../src/admin/index.php?pg=consultas&escala=');
	});
</script>
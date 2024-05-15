
<?php
	if(!isset($_SESSION)) { session_start(); }
	$fk_secao_usuario 	= $_SESSION['fk_secao_usuario'];
	$nivel 				= $_SESSION['nivel'];
	$usuario 			= $_SESSION['nome'];
	
	$DataAtual = date('Y-m-d');
	//include "../links_includes/script.php"; 
	include "../../../../conectar.php";
?>





		<div id="conteudo" style="margin-left: 2%; margin-right: 2%;"> 
			<form action="salvar_licitacao.php" method="post" enctype="multipart/form-data">
				<strong>Preencha os campos abaixo:
				</strong>
				<div class="contorno form-group col-md-12" style="background-color: white;">
					<div id="dados_frota">
						<div class="form-row">
							<div class="form-group col-md-5 contorno">
								<label for="empresa" style="color:red;">EMPRESA:</label>
								<select class="form-control" required name="txt_id_empresa" autofocus="autofocus">
									<option value="">Escolha uma empresa</option>
									<?php
										include_once "../../../conectar.php";
										$sql = "SELECT * FROM empresas";
										$query = $con->query($sql);

										while ($dado = $query->fetch_assoc()) {
									?>                                             
									<option value="<?php echo $dado['id_empresas']; ?>">
										<?php echo $dado['razaosocial']; ?>
									</option>  
									<?php      
										}
									?>
								</select>
							</div> 

							<div class="form-group col-md-2"></div>

							<div class="form-row col-md-5 contorno">
								<div class="form-group col-md-6 ">
								<label for="" style="color:red;">DATA ENTREGA:</label>
								<input type="date" class="form-control" name="txt_data" id="txt_data" value=""  placeholder="">
								</div>
								<div class="form-group col-md-6 ">
								<label for="" style="color:red;">HORA ENTREGA:</label>
								<input type="time" class="form-control" name="txt_hora" id="txt_hora" value=""  placeholder="">
								</div>
							</div>
							
							<div class="form-group col-md-6 contorno">
								<div class="form-group col-md-10 ">
								<label for="" style="color:red;">NOME DO MUNICÍPIO:</label>
								<input type="text" class="form-control"  name="txt_nome_municipio" id="busca" value="" style="text-transform: uppercase;" placeholder="Digite o nome da cidade">
								<script type="text/javascript" src="personalizado.js"></script>
								<ul class="autocomplete" ></ul>
								</div>
							</div>
							
							&nbsp;
							
							<div class="form-row col-md-6 contorno">
								<div class="form-group col-md-6">
									<label for="" style="color:red;">MODALIDADE:</label>
									<select class="form-control"  name="txt_modalidade" >
										<option value="">Escolha uma modalidade</option>
										<option value="CONCORRÊNCIA">		CONCORRÊNCIA</option>
										<option value="CONVITE">			CONVITE</option>
										<option value="DISPENSA">			DISPENSA</option>
										<option value="PREGÃO PRESENCIAL">	PREGÃO PRESENCIAL</option>
										<option value="PREGÃO ELETRÔNICO">	PREGÃO ELETRÔNICO</option>
										<option value="TOMADA DE PREÇOS">	TOMADA DE PREÇOS</option>
									</select>
								</div> 

								<div class="form-group col-md-6">
									<label for="" style="color:red;">Nº DA MODALIDADE:</label>
									<input type="text" class="form-control"  name="txt_n_modalidade" id="txt_n_modalidade" value="" >
								</div>
							</div>
							
							<div class="form-group col-md-12 contorno">
								<label for="" style="color:red;">OBJETO DE OBRAS:</label>
								<table>
									<tr>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Pavimentação" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Pavimentação</label>
										</td>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Recapeamento" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Recapeamento</label>
										</td>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Galerias" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Galerias</label>
										</td>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Rede de Água" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Rede de Água</label>
										</td>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Rede de Esgosto" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Rede de Esgosto</label>
										</td>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Guias e Sargetas" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Guias e Sargetas</label>
										</td>
										<td width="15%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Micro Revestimentos" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Micro Revestimentos</label>
										</td>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Tapa Buracos" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Tapa Buracos</label>
										</td>
										<td width="15%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Capa Asfáltica" name="objeto[]">
											<label class="form-check-label" for="defaultCheck1">Capa Asfáltica</label>
										</td>
										<td width="10%" colspan="10" style="text-align:center;">
											<input class="form-check-input" type="checkbox" value="Outros" name="objeto[]"  data-toggle="modal" data-target="#myModal2">
											<label class="form-check-label" for="defaultCheck1">Outros</label>
										</td>
									</tr>
								</table>
							</div>
							
							<div class="form-group col-md-6 contorno">
								<div class="form-group col-md-9 ">
									<label for="" style="color:red;">VALOR DO ORÇAMENTO DA PREFEITURA (R$):</label>
									<input type="text" class="form-control"  name="txt_vlr_orc" id="txt_vlr_orc" value="" placeholder="Ex.: 1000,00" >
								</div>
							</div>
							
							
							<div class="form-group col-md-3 contorno">
								<div class="form-group col-md-12">
									<label for="" style="color:red;">CONVÊNIO:</label>
									<select class="form-control"  name="txt_convenio" >
										<option value="">Escolha um convênio</option>
										<option value="FEDERAL">			FEDERAL</option>
										<option value="ESTADUAL">			ESTADUAL</option>
										<option value="RECURSOS PRÓPRIOS">	RECURSOS PRÓPRIOS</option>
										<option value="FINISA">				FINISA</option>
										<option value="FEHIDRO">			FEHIDRO</option>
										<option value="DADE">				DADE</option>
										<option value="OUTROS"  data-toggle="modal">				OUTROS</option>
									</select>
								</div> 
							</div> 

							<div class="form-group col-md-3 contorno">
								<div class="form-group col-md-12">
									<label for="" style="color:red;">PROCESSO Nº:</label>
									<input type="text" class="form-control"  name="txt_n_processo" id="txt_n_processo" value="" placeholder="Existe nº do processo?">
								</div>
							</div>


							<div class="form-group col-md-3 contorno">
								<label for="" style="color:red;">COMPOSIÇÃO DE PREÇOS:</label><br>
								<!--<select class="form-control"  name="txt_composicao_preco" >
										<option value="">Possui composição?</option>
										<option value="SIM">SIM</option>
										<option value="NÃO">NÃO</option>
									</select>-->
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_composicao_preco" value="SIM">
								<label class="form-check-label" for="0">SIM</label>
								
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_composicao_preco" value="NÃO">
								<label class="form-check-label" for="1">NÃO</label>
							</div>

							<div class="form-group col-md-3 contorno">
								<label for="" style="color:red;">VISITA TÉCNICA:</label><br>
								<!--<select class="form-control"  name="txt_visita" >
										<option value="">Teve Visita Técnica?</option>
										<option value="SIM."  data-toggle="modal" >SIM</option>
										<option value="NÃO">NÃO</option>
									</select>-->
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_visita" value="SIM." data-toggle="modal" data-target="#myModal" >
								<label class="form-check-label" for="0">SIM</label>
								
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_visita" value="NÃO">
								<label class="form-check-label" for="1">NÃO</label>
							</div>

							<div class="form-group col-md-3 contorno">
								<label for="" style="color:red;">GARANTIA:</label><br>
								<!--<select class="form-control"  name="txt_garantia" >
										<option value="">Precisa de garantia</option>
										<option value="SIM">SIM</option>
										<option value="NÃO">NÃO</option>
									</select>-->
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_garantia" value="SIM">
								<label class="form-check-label" for="0">SIM</label>
								
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_garantia" value="NÃO">
								<label class="form-check-label" for="1">NÃO</label>
							</div>
							
							<div class="form-group col-md-3 contorno">
								<label for="" style="color:red;">ADMITE TERCEIRIZAÇÃO:</label><br>
								<!--<select class="form-control"  name="txt_admite_terceirizacao" >
										<option value="">Admite Terceirização?</option>
										<option value="ADMITE">SIM</option>
										<option value="NÃO ADMITE">NÃO</option>
									</select>-->
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_admite_terceirizacao" value="ADMITE" data-toggle="modal" data-target="#myModal4">
								<label class="form-check-label" for="0">SIM</label>
								
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input class="form-check-input" type="radio" name="txt_admite_terceirizacao" value="NÃO">
								<label class="form-check-label" for="1">NÃO</label>
							</div>


							<div class="form-group col-md-12 " >
								<label for="" style="color:red;">OBSERVAÇÃO:</label>
								<textarea type="text" class="form-control"  name="txt_observacao" id="" rows="3"></textarea>
							</div>


							<div class="form-group col-md-12 " >
								<div class="form-row">						
									<div class="form-group contorno col-md-4">
										<label for="" style="color:red;">FAZER UPLOAD DE ARQUIVOS:</label>
									
										<input type="file" name="img1"  class="form-control-file" id="exampleFormControlFile1" >
									</div>
									
									<div class="form-group contorno col-md-4">
										<label for="" style="color:red;">FAZER UPLOAD PREFEITURA:</label>
									
										<input type="file" name="img1"  class="form-control-file" id="exampleFormControlFile1" >
									</div>
									
									<div class="form-group contorno col-md-4">
										<label for="" style="color:red;">FAZER UPLOAD DA PLANILHA ORÇAMENTARIA:</label>
									
										<input type="file" name="doc1"  class="form-control-file" id="exampleFormControlFile1" >
									</div>
								</div>
							</div>


							<div class="form-group col-md-12">
								<button type="submit" name="incluir" id="incluir" class="btn button5 col-md-12">Salvar</button>
							</div>

							<script>
							   $('select').on('change', function () {
								   if ($(this).val() == "ADMITE") {
										$('#myModal4').modal('show');
									}
								});
							</script>
							
							<script>
							   $('select').on('change', function () {
								   if ($(this).val() == "SIM.") {
										$('#myModal').modal('show');
									}
								});
							</script>
							
							<script>
							   $('select').on('change', function () {
								   if ($(this).val() == "OUTROS") {
										$('#myModal3').modal('show');
									}
								});
							</script>
							
						</div>
					</div>
				</div><!--  contorno -->

				<!-- Inicio Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					<div class="modal-dialog" role="document" style="width: 358px;">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title text-center" id="mySmallModalLabel"></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<p>Por favor preencha os campos abaixo para lançar as informações das visitas:</p>
								<div class="modal-body">
									<div class="form-group">
										<label for="message-text" class="control-label">Nome do engenheiro:</label>
										<select class="form-control"  name="txt_nome_engenheiro" >
											<option value="">Escolha um engenheiro</option>
											<?php
												include_once "../../../conectar.php";
												$sql = "SELECT * FROM usuarios 
														where visita_tecnica = 1
														ORDER BY nome";
												$query = $con->query($sql);

												while ($dado = $query->fetch_assoc()) {
											?>                                             
											<option value="<?php echo $dado['nome']; ?>">
												<?php echo $dado['nome']; ?>
											</option>  
											<?php      
												}
											?>
										</select>
									</div>	
									<br>
									<div class="form-group">
										<label for="message-text" class="control-label ">Data da visita:</label>
										<input type="date" name="txt_data_visita" style="border:1px solid #969696;  border-radius:2px; padding:2px; width: 180px;">
									</div>
									<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" style="width: 100px">Salvar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Fim Modal -->		

				<!-- Inicio Modal -->
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					<div class="modal-dialog" role="document" style="width: 358px;">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title text-center" id="mySmallModalLabel"></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<p>Descreva a opção abaixo:</p>
								<div class="modal-body">
									<div class="form-group">
										<input type="text" name="txt_objeto_obra_outros" style="border:1px solid #969696;  border-radius:2px; padding:2px; width: 290px; font-size: 16px">
									</div>
									<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" style="width: 100px">Salvar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Fim Modal -->	

				<!-- Inicio Modal -->
				<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					<div class="modal-dialog" role="document" style="width: 358px;">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title text-center" id="mySmallModalLabel"></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<p>Por favor preencha com um outro convênio:</p>
								<div class="modal-body">
									<div class="form-group">
										<input type="text" name="txt_convenio_outros" style="border:1px solid #969696;  border-radius:2px; padding:2px; width: 290px; font-size: 16px">
									</div>
									<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" style="width: 100px">Salvar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Fim Modal -->	
				
				<!-- Inicio Modal -->
				<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					<div class="modal-dialog" role="document" style="width: 358px;">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title text-center" id="mySmallModalLabel"></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<p>Deseja adicionar alguma observação para está opção:</p>
								<div class="form-group">
									<input type="text" name="txt_obs_terceirizacao" style="border:1px solid #969696;  border-radius:2px; padding:2px; width: 290px; font-size: 16px">
								</div>
								<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close" style="width: 100px">Salvar</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fim Modal -->	
			</form>
		</div>
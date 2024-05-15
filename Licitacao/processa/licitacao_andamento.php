
<?php
	if(!isset($_SESSION)) { session_start(); }
	$fk_secao_usuario 	= $_SESSION['fk_secao_usuario'];
	$nivel 				= $_SESSION['nivel'];
	$usuario 			= $_SESSION['nome'];
	
	$DataAtual = date('Y-m-d');
	include "../links_includes/script.php"; 
	include "../../../../conectar.php";

	
	$sql = "SELECT * FROM licitacoes 
			where status_licitacao = 'ABERTO'
			order by id_licitacao DESC ";
	$query = $con_obras->query($sql);
?>

<div class="contorno_selecionado col-md-12 " id="divListaTabela">
	<table id="table" class="display table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>AÇÕES</th>
				<th>ANO / Nº REGISTRO</th>
				<th>RESPONSÁVEL</th>
				<th>NOME DO MUNICÍPIO</th>
				<th>MODALIDADE</th>
				<th>DATA FINAL</th>
				<th>HORA FINAL</th>
				<th>VALOR DO ORÇAMENTO DA PREFEITURA</th>
				<th>CONVÊNIO</th>
				<th>COMPOSIÇÃO DE PREÇOS</th>
				<th>VISITA TÉCNICA</th>
				<th>OBJETO DE OBRAS</th>
				<th>STATUS</th>
				<th >OBSERVAÇÃO</th>
			</tr>
		</thead>

		<tbody>
			<?php
			//exibe as linhas encontradas na consulta
			while ($dado = $query->fetch_assoc()) {
			?>
				<tr>
					<td>
					<?php
						if($_SESSION['nivel'] == 1 ){
							?> 
							<a href="<?php echo "impressao.php?id_licitacao=" . $dado['id_licitacao'] ?>" 
							target="_blank" title="Gerar relatório em arquivo PDF" style="color:#f8c261">
							<i class="fas fa-file-pdf fa-2x"></i></a> &nbsp;
							<a href="<?php echo "excluir_entrega.php?id_licitacao=".$dado['id_licitacao'];?>" onclick="return confirm('Deseja realmente excluir esse relatorio?')" title="Excluir registro" style="color:#ff0000"><i class="fas fa-trash-alt fa-2x"></i></a> 
							<a href="<?php echo "editar_licitacao.php?id_licitacao=".$dado['id_licitacao'];?>" title="Editar registro" style="color:#1e961e"><i class="fas fa-pen fa-2x"></i></a> 
							<a href="<?php echo "form_licitacao_status.php?id_licitacao=".$dado['id_licitacao'];?>" title="Status registro" style="color:#2858d1"><i class="fas fa-exchange-alt fa-2x"></i></a>
							<!--<a href="<?php //echo "devolucao.php?id_licitacao=".$dado['id_licitacao'];?>" title="Devolução" style="color:#2858d1"><i class="fas fa-redo-alt fa-2x"></i></a> -->
							<?php
						}elseif($_SESSION['nivel'] == 4 OR $_SESSION['nivel'] == 2){
							?> 
							<a href="<?php echo "impressao.php?id_licitacao=" . $dado['id_licitacao'] ?>" 
							target="_blank" title="Gerar relatório em arquivo PDF" style="color:#f8c261"><i class="fas fa-file-pdf fa-2x"></i></a> &nbsp;
							<a href="<?php echo "editar_licitacao.php?id_licitacao=".$dado['id_licitacao'];?>" title="Editar registro" style="color:#1e961e"><i class="fas fa-pen fa-2x"></i></a> 
							<a href="<?php echo "form_licitacao_status.php?id_licitacao=".$dado['id_licitacao'];?>" title="Status registro" style="color:#2858d1"><i class="fas fa-exchange-alt fa-2x"></i></a>
							<!--<a href="<?php //echo "devolucao.php?id_licitacao=".$dado['id_licitacao'];?>" title="Devolução" style="color:#2858d1"><i class="fas fa-redo-alt fa-2x"></i></a> -->
							<?php
						}
					?> 

					</td>
					<td>
						<?php
							$ano = substr($dado['numeracao_anual'], 0, 4);
							$numero = substr($dado['numeracao_anual'], -3);
							echo $ano;
							echo " / ";
							echo $numero;
						?>
					</td>
					<td><?php echo $dado['responsavel'];?></td>
					<td><?php echo $dado['nome_municipio'];?></td>
					<td><?php echo $dado['modalidade'];?></td>
					<td><?php echo date("d/m/Y", strtotime($dado['data']));?></td>
					<td><?php echo date("H:i", strtotime ($dado['hora'])) ;?></td>
					<td style="text-align: right;"><?php echo number_format($dado['valor_orcamento'],2, ',', '.');?></td>
					<td><?php echo $dado['convenio'];?></td>
					<td><?php echo $dado['composicao_precos'];?></td>
					<td>
						<?php 
							$visita = $dado['visita_engenheiro'];
							$status = $dado['status_visita'];
							echo $visita;
							if (($visita == 'SIM.')and($status == 'Realizada')){
						?>
							<a href="<?php echo "../visita_tecnica/impressao.php?id_licitacao=" . $dado['id_licitacao'] ?>" 
							target="_blank" title="Gerar relatório em arquivo PDF" style="color:#f8c261"><i class="fas fa-file-pdf fa-2x"></i></a> &nbsp;
						<?php 	}?>
					</td>
					<td><?php echo $dado['objeto'];?></td>
					<td><?php echo $dado['status_licitacao'];?></td>
					<td><?php echo $dado['observacao'];?></td>
				</tr>         
			<?php
			}
			?>
		</tbody>

		<tfoot>
			<tr class="print">
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
				<th><select><option value=""></option></select></th>
			</tr>
		</tfoot>
	</table>
</div>

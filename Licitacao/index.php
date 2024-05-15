<!doctype html>
<html>
	<head>
		<?php include_once "links_includes/head.php"; ?>
		<link href="links_includes/estilos.css" rel="stylesheet" type="text/css">
		<link href="links_includes/estrutura.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="container-botoes_sair" class="col-md-12 ">
			<a href="../inicio/index.php" style="float: right">
				<button class="btn button_sair col-md-12">
					SAIR
				</button>
			</a>
		</div>
		
		<div id="conteudo" >
			<div class="e_barra_btns flex " >
				<div class="e_btn_acesso_facil ">
					<span class="swfa fas fa-circle relative"></span>
					<div class="relative text-base" id="form_licitacao">Cadastrar Licitação</div>
				</div>
			
				<div class="e_btn_acesso_facil ">
					<span class="swfa fas fa-circle relative"></span>
					<div class="relative text-base" id="licitacao_andamento">Licitações em Andamento</div>
				</div>

				<div class="e_btn_acesso_facil ">
					<span class="swfa fas fa-circle relative"></span>
					<div class="relative text-base" id="licitacao_ganhou">Licitações que Ganhou</div>
				</div>

				<div class="e_btn_acesso_facil ">
					<span class="swfa fas fa-circle relative"></span>
					<div class="relative text-base" id="licitacao_perdeu">Licitações que Perdeu</div>
				</div>
				
				<div class="e_btn_acesso_facil ">
					<span class="swfa fas fa-circle relative"></span>
					<div class="relative text-base" id="licitacao_n_paticipou">Licitações que não Participou</div>
				</div>
				

				
				<div class="e_btn_acesso_facil ">
					<span class="swfa fas fa-circle relative"></span>
					<div class="relative text-base" id="opcao_6"></div>
				</div>
				
				<div class="e_btn_acesso_facil ">
					<span class="swfa fas fa-circle relative"></span>
					<div class="relative text-base" id="opcao_7"></div>
				</div>
			</div>
			
			
			<div class="e_cont_cards flex flex-wrap gap-10 my-20" id="e_cont_cards">
					
			</div>		
			
			<div class=" col-md-12 " id="divListaTabela">
					
			</div>

			<div id="cont_position_topo" style="z-index:999999">
				<div id="cont_boton_top" class="trans">
					<a style="cursor:pointer;" id="top">. </a>
				</div>
			</div>
			
			<script src="js/custom.js"></script>
		</div>
	</body>
</html>
<?php
    if(!isset($_SESSION)) { session_start(); } 
	date_default_timezone_set('America/Sao_Paulo');
	
	
	//$nivel = $_SESSION['nivel'];
	//$fk_secao_usuario = $_SESSION['fk_secao_usuario'];
?>
		<meta charset="utf-8">
		<title>Licitações </title>
		<link rel="shortcut icon" href="../../../favicon.ico" />
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
		
		<meta http-equiv="Content-Language" content="pt-br">
		
		<!-- MENU -->
		<style type="text/css">
			@import "../../../menu/style3.css";  
		</style>
		<!-- MENU -->

		<link href="../../../fontawesome/css/all.css" rel="stylesheet">
		<link href="../../../Font-Awesome-6.x/css/all.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="../../../DataTables/Buttons-1.5.6/css/buttons.dataTables.min.css">

		<link rel="stylesheet" href="../../../DataTables/FixedHeader-3.1.4/css/fixedHeader.dataTables.min.css"> 

		<link rel="stylesheet" href="../../../DataTables/FixedColumns-3.2.5/css/fixedColumns.bootstrap.min.css"> 

		<!-- DATA TABLES -->
		<style type="text/css">
			@import "../../../DataTables/DataTables-1.10.18/css/jquery.dataTables.css";
			@import "../../../DataTables/DataTables-1.10.18/css/bootstrap2.css";
		</style>

		<script src="../../../DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
		<script src="../../../DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

		<script src="../../../DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>

		<script src="../../../DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
		<script src="../../../DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>
		<script src="../../../DataTables/Buttons-1.5.6/js/buttons.flash.min.js"></script>
		<script src="../../../DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

		<script src="../../../ajax/jszip.min.js"></script>

		<script src="../../../DataTables/FixedHeader-3.1.4/js/dataTables.fixedHeader.min.js"></script>
		<script src="../../../DataTables/FixedColumns-3.2.5/js/dataTables.fixedColumns.min.js"></script>
		<!-- DATA TABLES -->

<?php
	/*
	if($nivel == 5){
		include_once "../../../menu/menu-user.php"; 
	}else{
		include_once "../../../menu/menu-admin.php"; 
	}
	*/
?>



$(document).ready(function () {
	$('#licitacao_andamento').click(function() {	
		$("#e_cont_cards").html("<div class='alert alert-warning col-md-12' role='alert'>Aguarde, carregando dados! <img src='../../../../imagens/loading.gif' style='width:50px; heigth:50px'></img></div>");
		$.post('processa/licitacao_andamento.php', function(retorna){
			$("#e_cont_cards").html(retorna);
		});
	});	
	
	$('#licitacao_ganhou').click(function() {	
		$("#e_cont_cards").html("<div class='alert alert-warning col-md-12' role='alert'>Aguarde, carregando dados! <img src='../../../../imagens/loading.gif' style='width:50px; heigth:50px'></img></div>");
		$.post('processa/licitacao_concluida.php?Status=GANHOU', function(retorna){
			$("#e_cont_cards").html(retorna);
		});
	});
	
	$('#licitacao_perdeu').click(function() {	
		$("#e_cont_cards").html("<div class='alert alert-warning col-md-12' role='alert'>Aguarde, carregando dados! <img src='../../../../imagens/loading.gif' style='width:50px; heigth:50px'></img></div>");

		$.post('processa/licitacao_concluida.php?Status=PERDEU', function(retorna){
			$("#e_cont_cards").html(retorna);
		});
	});	
		
	$('#licitacao_n_paticipou').click(function() {	
		$("#e_cont_cards").html("<div class='alert alert-warning col-md-12' role='alert'>Aguarde, carregando dados! <img src='../../../../imagens/loading.gif' style='width:50px; heigth:50px'></img></div>");

		$.post('processa/licitacao_concluida.php?Status=N_PARTICIPOU', function(retorna){
			$("#e_cont_cards").html(retorna);
		});
	});	



	$('#form_licitacao').click(function() {	
		$("#e_cont_cards").html("<div class='alert alert-warning col-md-12' role='alert'>Aguarde, carregando dados! <img src='../../../../imagens/loading.gif' style='width:50px; heigth:50px'></img></div>");

		$.post('processa/form_licitacao.php', function(retorna){
			$("#e_cont_cards").html(retorna);
		});
	});	
	
	

	
	
	
	$("#cont_position_topo").hide();
	$(window).scroll(function(){
		if($(window).scrollTop() >= 200)
		{			 
			$("#cont_position_topo").fadeIn(1000);
		}
		else
		{
			$("#cont_position_topo").fadeOut(1000);
		}
	});

    $('#top').click(function(){ 
    $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    }); 
	
	
	
});

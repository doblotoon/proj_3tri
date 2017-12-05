$(document).ready(function(){
	//modal
	$('.clicavel').click(function(){
		var id;
		id = $(this).attr('id');
		$('.'+id).removeClass('escondido');

	})
	$('.fechar').click(function(){
		$('.modal').addClass('escondido');
	})

	//fim modal
	
	//professor escondido
	$("#clicavel").click(function(){

		$('#esconder').toggleClass('escondido');

	})

	//aluno escondido
	$("#clicavel1").click(function(){

		$('#esconder1').toggleClass('escondido');

	})
	$("#clicavel2").click(function(){

		$('#esconder2').toggleClass('escondido');

	})
	$("#clicavel3").click(function(){

		$('#esconder3').toggleClass('escondido');

	})


	//tabs

	/*$("#tab6").click(function(){
		var id;
		id = $(this).attr('id');

		$("."+id).addClass('ativo');
		
		$("."+id).removeClass('ativo');
	})
	//tentativa de fazer uma imagem como um <submit>

	$('#enviar').click(function(){
		var id,a;
		a = '<input type='+submit+'name='+enviar+'>';
		id = $(this).attr('id');
		$('.'+id).append(a);

	}) isso fica para outro dia*/
	$(".tab").click(function(){
		var id;

		id = $(this).attr('id');

		$(".tab").removeClass('ativo');

		$("#"+id).addClass('ativo');
	})
})
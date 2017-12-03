$(document).ready(function(){
	$('.clicavel').click(function(){
		var id;
		id = $(this).attr('id');
		$('.'+id).removeClass('escondido');

	})
	$('.fechar').click(function(){
		$('.modal').addClass('escondido');
	})


	$("#clicavel").click(function(){

		$('#esconder').toggleClass('escondido');

	})
	
	$("#clicavel").click(function(){

		$('#esconder').toggleClass('escondido');

	})
	$("#clicavel1").click(function(){

		$('#esconder1').toggleClass('escondido');

	})
	$("#clicavel2").click(function(){

		$('#esconder2').toggleClass('escondido');

	})
	$("#clicavel3").click(function(){

		$('#esconder3').toggleClass('escondido');

	})
})
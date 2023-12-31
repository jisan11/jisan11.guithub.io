jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();

	jQuery.ajax({
		url:'Main_app/loggin.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando.....');
		}
	})

	.done(function(respuesta){
		console.log(respuesta);
		if (!respuesta.error){
			if (respuesta.tipo == 'Admin') {
				location.href= 'Main_app/Admin/';

			}else if (respuesta.tipo == 'Usuario') {
				location.href= 'Main_app/Usuario/';
				Main_app/Usuario/login.php
			}
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
				},3000);
				$('.botonlg').val('Iniciar Session');
			}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});

	});

$(document).ready(function(){
	$('#mobile-menu-button').on('click', toggleMobileMenu);
	
		
		function toggleMobileMenu()
		{
			var $mobileMenu = $('#mobile-main-menu');
			$mobileMenu.slideToggle('fast');
		}

	$('#nav > li > a').click(function() {
		
		if($(this).attr('class' != 'active')){
			$('#nav li ul').slideUp();
			$(this).next().slideToggle();
			$('#nav li a').removeClass('active');
			$(this).addClass('active');
		}
	});




// CAPTCHA

$('#botton').on('click', function() {
				var formData = $('#formulario').serialize();
				var ruta = 'ajax.php';
				$.ajax({
					url:ruta,
					type:'POST',
					data:formData,
					succes: function(datos)
					{
						$('#respuesta').html(datos);
					}
				});
			});
			$('#actualizar_captcha').on("click", function(){
				document.location.reload();
			});

});

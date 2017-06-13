$(window).load(function(){

		$("#owl-landing-1").owlCarousel({
			autoPlay: 10000,
			navigation : false, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true
		});
	

	if ($("#practice").length){
		console.log("rest");
		load_ejercicio();
		console.log("World");
		load_edicion();
	};

	$('#ra_mail').keyup(function(){
        var email = $('#ra_mail').val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(web/isEmailExist)?>",
            data: "email="+email,                     
            success: function(response){
                    $('#msg').html(response);
            }
        });
    });

    $('#ra_username').keyup(function(){
        var email = $('#ra_mail').val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(web/isUsernameExist)?>",
            data: "email="+email,                     
            success: function(response){
                    $('#msg').html(response);
            }
        });
    });

    $('#ra_val_password').keyup(function(){
        var password = $('#ra_val_password').val();
        var password_i =  $('#ra_password').val();

        if (password != password_i){
        	$('#pass').html('response');
        }
    });


	$('#frm-login').on('submit', function(e) {
		if ($.trim($("#msg").val()) === "") {
			alert('El nombre de usuario o el correo ya están registrados. Revisa igualmente que la validación de tus contraseñas coincida.');
	    	return false;
		}
	});
});



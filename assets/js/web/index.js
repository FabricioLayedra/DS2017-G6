$(window).ready(function(){

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

    var check_mail = 0;
    var check_user = 0;
    var check_pass = 0;

	$('#ra_mail-su').change(function(){
        var email = $('#ra_mail-su').val();
        $.ajax({
            type: "POST",
            url: "/DS2017-G6/index.php/web/isEmailExist",
            data: "email="+email,              
            success: function(response){
                if (response == 1){
                    alert('Ese mail ya existe');
                    check_mail = 0;
                }else{
                    check_mail = 1;
                }                
            }
        });
    });

    $('#ra_username-su').change(function(){
        var user = $('#ra_username-su').val();
        $.ajax({
            type: "POST",
            url: "/DS2017-G6/index.php/web/isUsernameExist",
            data: "user="+user,         
            success: function(response){
                if (response == 1){
                    alert('Ese usuario ya existe');
                    check_user = 0;
                }else{
                    check_user = 1;
                }     
            }

        });
    });

    $('#ra_val_password-su').change(function(){
        var password = $('#ra_val_password-su').val();
        var password_i =  $('#ra_password-su').val();

        if (password != password_i){
        	alert('Las contraseñas no coinciden');
            check_pass = 0;
        }else{
            check_pass = 1;
        }
    });


	$('#frm-login-su').on('submit', function(e) {
		if (check_pass == 0 || check_user == 0 ||check_mail ==0) {
            var msg = '';
            if (check_pass == 0){
                msg = msg + " Las contraseñas no coinciden."
            }
            if (check_user == 0){
                msg = msg + " Ese usuario ya existe"
            }
            if (check_mail == 0){
                msg = msg + " Ese mail ya existe"
            }
			alert(msg);
	    	return false;
		}
	});
});



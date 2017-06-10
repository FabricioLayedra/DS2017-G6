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
});



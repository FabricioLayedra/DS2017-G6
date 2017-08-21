function updateMenuToday(id_restaurant){
	$.ajax({
		url: "/ds2017-g6/index.php/services/getLunchesByRestaurantId",
		type: 'POST',
		data: {
			"restaurant" : String(id_restaurant)
		},
		dataType:'json',
		success: function(data){
			$(".soup-exec").empty();
			$(".sec-exec").empty();
			$(".drinks").empty();
			$(".desserts").empty();
			$(".soup-student").empty();
			$(".sec-student").empty();

			for (i in data){
				if (data[i].is_executive == "1"){
					if(data[i].type == "0"){
						$(".soup-exec").append("<p>"+data[i].name+"</p>");
					}else{
						if(data[i].type == "1"){
							$(".sec-exec").append("<p>"+data[i].name+"</p>");
						}else{
							if(data[i].type == "2"){
								$(".drinks").append("<p>"+data[i].name+"</p>");
							}else{
								$(".desserts").append("<p>"+data[i].name+"</p>");
							}
						}
					}
				}else{
					if(data[i].type == "0"){
						$(".soup-student").append("<p>"+data[i].name+"</p>");
					}else{
						$(".sec-student").append("<p>"+data[i].name+"</p>");
					}
				}
			}
		}
	});
}
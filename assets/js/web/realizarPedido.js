$(document).ready(function(){
  console.log("hola");
  var splittedUrl = window.location.href.split("/");
  var idRes = splittedUrl[splittedUrl.length - 1];
	$.ajax({
		type:'GET',
		url:"/DS2017-G6/index.php/services/getLunches",
		success:function(response){
			for (var i = 0; i < response.length; i++){

        var restaurant = response[i].restaurant;
        console.log(restaurant)
        var name = restaurant.name;
        var payFlag = restaurant.has_online;
        var plates = response[i].plates;
        var id = restaurant.id_restaurant;

        if (id !== idRes){
          continue;
        }

        $("#tablaAlmuerzos").append("<tr>" +
                      "<th scope='row'><p>"+name+"</p>" +
                      "<a class='btn btn-default' href='/DS2017-G6/index.php/web/pedido/"+ id+"'>Hacer Pedido</a>" +
                      "</th>" +
                      "<td id='normalSopa-" + id + "'>" +
                      "</td>" +
                      "<td id='normalSegundo-" + id + "'>" +
                      "</td>" +
                      "<td id='ejecutivoSopa-" + id + "'>" +
                      "</td>" +
                      "<td id='ejecutivoSegundo-" + id + "'>" +
                      "</td>" +
                      "<td id='bebidaAlmuerzo-" + id + "'>" +
                      "</td>" +
                      "<td id='postresAlmuerzo-" + id + "'>" +
                      "</td>" +
                    "</tr>");

        for (var j = 0; j < plates.length; j++ ){
            var plate = plates[j];
                        console.log(plate);
            var dishName = plate.name;
            var dishType = plate.type;
            var dishExecFlag = plate.is_executive;
            if (dishType === "1"){
              if (dishExecFlag === "1"){
                  $("#ejecutivoSegundo-"+ id).append("<p>" + dishName + "</p>");
              } else {
                  $("#normalSegundo-"+ id).append("<p>" + dishName + "</p>");
              }
            } else if (dishType === "2"){
              $("#bebidaAlmuerzo-"+ id).append("<p>" + dishName + "</p>");
            } else if (dishType === "3"){
              $("#postresAlmuerzo-"+ id).append("<p>" + dishName + "</p>");
            } else if (dishType === "0"){
              if (dishExecFlag === "1"){
                  $("#ejecutivoSopa-"+ id).append("<p>" + dishName + "</p>");
              } else {
                  $("#normalSopa-"+ id).append("<p>" + dishName + "</p>");
              }
            }
        }
      }
		}
	});

  $("#tipoAlmuerzo").on('change', function(){

    if ($("#tipoAlmuerzo").val() == "ejecutivo"){
      $("#bebidas").css("display", "inline");
      $("#postres").css("display", "inline");

      var total = parseFloat($("#valorPedidoPlatoPrincipal").text()) + parseFloat($("#valorPedidoPostre").text()) + parseFloat($("#valorPedidoBebida").text());
    } else if ($("#tipoAlmuerzo").val() == "estudiantil") {
      $("#bebidas").css("display", "none");
      $("#postres").css("display", "none");
      var total = parseFloat($("#valorPedidoPlatoPrincipal").text());
    }

    $("#totalPedido").text(total);

  });


  $("#tipoPagoAlmuerzo").on("change", function(){
    console.log($("#tipoPagoAlmuerzo").val());
    if ($("#tipoPagoAlmuerzo").val() == "tarjeta"){
      $("#containerPago").css("display", "inline");
      if (Math.random() > 0.70){
        $("#finalizarPedidoBtn").attr("data-toggle", "modal");
        $("#finalizarPedidoBtn").attr("data-target", "#malModal");
      } else {
        $("#finalizarPedidoBtn").attr("data-toggle", "modal");
        $("#finalizarPedidoBtn").attr("data-target", "#buenModal");
      }
    } else {
      $("#containerPago").css("display", "none");
      if (Math.random() > 0.70){
        $("#finalizarPedidoBtn").attr("data-toggle", "modal");
        $("#finalizarPedidoBtn").attr("data-target", "#malModal");
      } else {
        $("#finalizarPedidoBtn").attr("data-toggle", "modal");
        $("#finalizarPedidoBtn").attr("data-target", "#buenModal");
      }
    }
  });
});

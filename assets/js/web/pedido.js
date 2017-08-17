$("#tipoAlmuerzo").on('change', function(){
  $("#containerPedido").empty();
  console.log($("#tipoAlmuerzo").val())
  if ($("#tipoAlmuerzo").val() == "ejecutivo"){
    $("#containerPedido").append("" +
    "<div class='row'>" +
      "<div class='col-md-8'>" +
        "<p id='pedidoPlatoPrincipal'>Arroz Con Huevo y Sopa de Lentejas</p>" +
        "<p id='pedidoBebida'> Jugo de Tamarindo </p>" +
        "<p id='pedidoPostre' class='mb-10' > Gelatina </p>" +
        "<p class='bold'> TOTAL: </p> " +
      "</div>" +
      "<div class='col-md-4'>" +
        "<p id='valorPedidoPlatoPrincipal'>2.50</p>" +
        "<input type='checkbox' name='bebida' id='valorPedidoBebida' >0.50</p>" +
        "<input type='checkbox' name='postre' class='mb-10' id='valorPedidoPostre'>0.75</p>" +
        "<p class='bold' id='totalPedido'> </p> " +
      "</div>" +
    "</div>" +
    "");
    var total = parseFloat($("#valorPedidoPlatoPrincipal").text()) + parseFloat($("#valorPedidoPostre").text()) + parseFloat($("#valorPedidoBebida").text());
  } else if ($("#tipoAlmuerzo").val() == "estudiantil") {
    $("#containerPedido").append("" +
    "<div class='row'>" +
      "<div class='col-md-8'>" +
        "<p class='mb-10' id='pedidoPlatoPrincipal'>Arroz Con Huevo y Sopa de Lentejas</p>" +
        "<p class='bold'> TOTAL: </p> " +
      "</div>" +
      "<div class='col-md-4'>" +
        "<p class='mb-10' id='valorPedidoPlatoPrincipal'>2.50</p>" +
        "<p class='bold' id='totalPedido'> </p> " +
      "</div>" +
    "</div>" +
    "");
    var total = parseFloat($("#valorPedidoPlatoPrincipal").text());
  }
  console.log(total);
  $("#totalPedido").text(total);
})

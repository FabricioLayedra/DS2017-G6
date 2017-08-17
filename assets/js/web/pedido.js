$(document).ready(function(){


  $("#tipoAlmuerzo").on('change', function(){

    if ($("#tipoAlmuerzo").val() == "ejecutivo"){
      $("#pedidoAlmuerzoEjecutivo").css("display", "inline");
      $("#pedidoAlmuerzoEstudiantil").css("display", "none");

      var total = parseFloat($("#valorPedidoPlatoPrincipal").text()) + parseFloat($("#valorPedidoPostre").text()) + parseFloat($("#valorPedidoBebida").text());
    } else if ($("#tipoAlmuerzo").val() == "estudiantil") {
      $("#pedidoAlmuerzoEstudiantil").css("display", "inline");
      $("#pedidoAlmuerzoEjecutivo").css("display", "none");
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

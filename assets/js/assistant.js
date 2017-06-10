
$( document ).ready(function() {
    filldata($("#selectedRes").val());
});

$("#restaurantSearch").click(function(){
    filldata(($("#selectedRes")).val());
});

function filldata(query){
  data = [
      {
          "id": 1,
          "nombre": "Arroz con Menestra",
          "restaurante": "Coca Cola",
          "categoria": "tipica"
      },
      {
          "id": 2,
          "nombre": "Arroz con Menestra",
          "restaurante": "Coca Cola",
          "categoria": "internacional"
      },
      {
          "id": 3,
          "nombre": "Arroz con Menestra",
          "restaurante": "Coca Cola",
          "categoria": "almuerzo"
      },
      {
          "id": 4,
          "nombre": "Arroz con Menestra",
          "restaurante": "Coca Cola",
          "categoria": "mar"
      },
      {
          "id": 5,
          "nombre": "Arroz con Carne",
          "restaurante": "Coca Cola",
          "categoria": "almuerzo"
      },
      {
          "id": 6,
          "nombre": "Guineo",
          "restaurante": "Coca Cola",
          "categoria": "postre"
      }
  ]

  var dishes_quantity = {
      "postre": 0,
      "almuerzo": 0,
      "internacional": 0,
      "mar": 0,
      "tipica": 0,
      "piqueos": 0
  }

  $("#collapsePostresRes").children().children().empty()
  $("#collapseAlmuerzoRes").children().children().empty()
  $("#collapseInternacionalRes").children().children().empty()
  $("#collapseMarRes").children().children().empty()
  $("#collapseTipicosRes").children().children().empty()
  $("#collapsePiqueosRes").children().children().empty()

  var columnHeaders = '<div class="row"><div class="col-md-6"><h4> <strong> Nombre </strong> </h4></div><div class="col-md-6"><h4> <strong> Restaurante </strong> </h4></div></div>';

  $("#collapsePostresRes").children().children().append(columnHeaders);
  $("#collapseAlmuerzoRes").children().children().append(columnHeaders);
  $("#collapseInternacionalRes").children().children().append(columnHeaders);
  $("#collapseMarRes").children().children().append(columnHeaders);
  $("#collapseTipicosRes").children().children().append(columnHeaders);
  $("#collapsePiqueosRes").children().children().append(columnHeaders);

  for (i = 0; i < data.length; i++) {
      var item = data[i];

      if (query !== ""){
          if (item.restaurante.toLowerCase() != query.toLowerCase()){
              continue;
          }
      }
      var toAppend = '<div class="row"><div class="col-md-6"><h5><a href="./plates/' + item.id +'">' + item.nombre + '</a></h5></div><div class="col-md-6"><h5>' + item.restaurante + '</h5></div></div>';
      var hola = $("#collapsePostresRes");
      if (item.categoria == 'postre'){
          $("#collapsePostresRes").children().children().append(toAppend);
          dishes_quantity.postre += 1;
      } else if (item.categoria == 'almuerzo'){
          $("#collapseAlmuerzoRes").children().children().append(toAppend);
          dishes_quantity.almuerzo += 1;
      } else if (item.categoria == 'internacional'){
          $("#collapseInternacionalRes").children().children().append(toAppend);
          dishes_quantity.internacional += 1;
      } else if (item.categoria == 'mar'){
          $("#collapseMarRes").children().children().append(toAppend);
          dishes_quantity.mar += 1;
      } else if (item.categoria == 'tipica'){
          $("#collapseTipicosRes").children().children().append(toAppend);
          dishes_quantity.tipica += 1;
      } else if (item.categoria == 'piqueos'){
          $("#collapsePiqueosRes").children().children().append(toAppend);
          dishes_quantity.piqueos += 1;
      }
  }

  $("#almuerzoNRes").text(dishes_quantity.almuerzo.toString() + " Platillos");
  $("#piqueosNRes").text(dishes_quantity.piqueos.toString() + " Platillos");
  $("#tipicosNRes").text(dishes_quantity.tipica.toString() + " Platillos");
  $("#marNRes").text(dishes_quantity.mar.toString() + " Platillos");
  $("#internacionalNRes").text(dishes_quantity.internacional.toString() + " Platillos");
  $("#postresNRes").text(dishes_quantity.postre.toString() + " Platillos");


}

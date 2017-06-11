
$( document ).ready(function() {
    filldata($("#dishQuery").val());
});

$("#dishSearch").click(function(){
    filldata(($("#dishQuery")).val());
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

  $("#collapsePostres").children().children().empty()
  $("#collapseAlmuerzo").children().children().empty()
  $("#collapseInternacional").children().children().empty()
  $("#collapseMar").children().children().empty()
  $("#collapseTipicos").children().children().empty()
  $("#collapsePiqueos").children().children().empty()

  var columnHeaders = '<div class="row"><div class="col-md-6"><h4> <strong> Nombre </strong> </h4></div><div class="col-md-6"><h4> <strong> Restaurante </strong> </h4></div></div>';

  $("#collapsePostres").children().children().append(columnHeaders);
  $("#collapseAlmuerzo").children().children().append(columnHeaders);
  $("#collapseInternacional").children().children().append(columnHeaders);
  $("#collapseMar").children().children().append(columnHeaders);
  $("#collapseTipicos").children().children().append(columnHeaders);
  $("#collapsePiqueos").children().children().append(columnHeaders);

  for (i = 0; i < data.length; i++) {
      var item = data[i];

      if (query !== ""){
          if (item.nombre.toLowerCase().indexOf(query.toLowerCase()) === -1){
              continue;
          }
      }
      var toAppend = '<div class="row"><div class="col-md-6"><h5><a href="./plates/' + item.id +'">' + item.nombre + '</a></h5></div><div class="col-md-6"><h5>' + item.restaurante + '</h5></div></div>';
      var hola = $("#collapsePostres");
      if (item.categoria == 'postre'){
          $("#collapsePostres").children().children().append(toAppend);
          dishes_quantity.postre += 1;
      } else if (item.categoria == 'almuerzo'){
          $("#collapseAlmuerzo").children().children().append(toAppend);
          dishes_quantity.almuerzo += 1;
      } else if (item.categoria == 'internacional'){
          $("#collapseInternacional").children().children().append(toAppend);
          dishes_quantity.internacional += 1;
      } else if (item.categoria == 'mar'){
          $("#collapseMar").children().children().append(toAppend);
          dishes_quantity.mar += 1;
      } else if (item.categoria == 'tipica'){
          $("#collapseTipicos").children().children().append(toAppend);
          dishes_quantity.tipica += 1;
      } else if (item.categoria == 'piqueos'){
          $("#collapsePiqueos").children().children().append(toAppend);
          dishes_quantity.piqueos += 1;
      }
  }

  $("#almuerzoN").text(dishes_quantity.almuerzo.toString() + " Platillos");
  $("#piqueosN").text(dishes_quantity.piqueos.toString() + " Platillos");
  $("#tipicosN").text(dishes_quantity.tipica.toString() + " Platillos");
  $("#marN").text(dishes_quantity.mar.toString() + " Platillos");
  $("#internacionalN").text(dishes_quantity.internacional.toString() + " Platillos");
  $("#postresN").text(dishes_quantity.postre.toString() + " Platillos");


}

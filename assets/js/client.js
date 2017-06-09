
$( document ).ready(function() {
    // Call DBS and GET all the info needed to create the following array of foods:
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

    for (i = 0; i < data.length; i++) {
        var item = data[i];
        var toAppend = '<div class="row"><div class="col-md-6"><h5><a>' + item.nombre + '</a></h5></div><div class="col-md-6"><h5>' + item.restaurante + '</h5></div></div>';
        var hola = $("#collapsePostres");
        if (item.categoria == 'postre'){
            $("#collapsePostres").children().children().append(toAppend);
        } else if (item.categoria == 'almuerzo'){
            $("#collapseAlmuerzo").children().children().append(toAppend);
        } else if (item.categoria == 'internacional'){
            $("#collapseInternacional").children().children().append(toAppend);
        } else if (item.categoria == 'mar'){
            $("#collapseMar").children().children().append(toAppend);
        } else if (item.categoria == 'tipica'){
            $("#collapseTipicos").children().children().append(toAppend);
        } else if (item.categoria == 'piqueos'){
            $("#collapsePiqueos").children().children().append(toAppend);
        }
    }
});

$( document ).ready(function() {
    //var id = <?php echo end($this->uri->segment_array()); ?>;
    //Somehow we gotta get the food id here :) maybe a hidden field would be ok
    var id = 6;
    fillplatedata(id);
});

function fillplatedata(id){
  // Suponiendo que recibo una respuesta de algun lado AL MENOS parecida a esta...
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

      if (item.id === id){
          $("#foodName").text(item.nombre);
          $("#foodRestaurant").text(item.restaurante);
          $("#foodCategory").text(item.categoria);
          $("#foodIngredients").text("Ingrediente 1, Ingrediente 2, Ingrediente 3, Ingrediente 4");
          $("#foodDescription").text("Excelente cocina ecuatoriana preparada con las mejores especias y artes culinarias. De sabor exquisito y a un precio modico.");
          break;
      }
  }




}


$("#restaurantSearch").click(function(){
  var query = $("#selectedRes").val();
  $("div[id^='collapse']").each(function(){
    $(this).children().children().children().each(function(){
      var res = $(this).children().eq(1).text().replace(/\s+/g, '');
      if (res !== query.replace(/\s+/g, '') && res !== "Restaurante"){
        $(this).hide();
      }else{
        $(this).show();
      }
    });
  });
})

$("#dishSearch").click(function(){
  var query = $("#dishQuery").val().toLowerCase();
  if (query !== ""){
    $("div[id^='collapse']").each(function(){
      $(this).children().children().children().each(function(){
        var dish = $(this).children().eq(0).text().replace(/\s+/g, '').toLowerCase();
        console.log(dish);
        if (dish.indexOf(query.replace(/\s+/g, '')) === -1  && dish !== "nombre"){
          $(this).hide();
        }else{
          $(this).show();
        }
      });
    });
  }else{
    $("div[id^='collapse']").each(function(){
      $(this).children().children().children().each(function(){
          $(this).show();
      });
    });
  }
});

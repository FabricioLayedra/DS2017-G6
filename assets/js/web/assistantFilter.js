$(document).ready(function(){

});

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

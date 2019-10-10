$("#my__button-order").click(function(){
    $("#background__grey").show();
    $("#my__form").show();
});

$("#background__grey").click(function(){
    $("#background__grey").hide();
    $("#my__form").hide();
});

$('#my__form').click(function(event) {
    event.stopPropagation();
  });


$("#close__button").click(function(){ 
    $("#background__grey").hide();
    $("#my__form").hide();
   // $("#form__callyou").show();
});




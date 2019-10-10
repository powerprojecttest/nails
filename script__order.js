/*-----------------SHOW__order------------------*/ 
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


/*-----------------SHOW__PRICE------------------*/ 
$("#next__nails").click(function(){
    $("#background__grey1").show();
    $("#my__price").show();
});

$("#background__grey1").click(function(){
    $("#background__grey1").hide();
    $("#my__price").hide();
});

$('#my__price').click(function(event) {
    event.stopPropagation();
  });


/*
$("#close__button").click(function(){ 
    $("#background__grey").hide();
    $("#my__price").hide();
});
*/
var owl = $('.owl-carousel'); 
owl.owlCarousel({ 
    loop:true, 
    nav:true, 
     navText : ['<i class="fa fa-angle-left" aria-hidden="false"></i>','<i class="fa fa-angle-right" aria-hidden="false"></i>'], 
    margin:10, 
    responsive:{ 
        0:{ 
            items:1 
        }, 
        600:{ 
            items:3 
        },             
        960:{ 
            items:3 
        }, 
        1200:{ 
            items:3 
        } 
    } 
});

$('.owl-nav').removeClass('disabled');



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
});




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
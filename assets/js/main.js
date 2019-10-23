window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

$('#menu1').click(function (e) {
    e.preventDefault();

    $('html, body').animate({
        scrollTop: $("#menu1_child").offset().top
    }, 1000);

});

$('#menu2').click(function (e) {
    e.preventDefault();

    $('html, body').animate({
        scrollTop: $("#menu2_child").offset().top
    }, 1000);

});

$('#menu3').click(function (e) {
    e.preventDefault();

    $('html, body').animate({
        scrollTop: $("#menu3_child").offset().top
    }, 1000);

});

$('#menu4').click(function (e) {
    e.preventDefault();

    $('html, body').animate({
        scrollTop: $("#menu4_child").offset().top
    }, 1000);
});

$(document).ready(function() {
    $('#my__form').submit(function(e) {
        var your_name = $('#yourname').val();
        var your_phone = $('#yourphone').val();
        var chek = true;

        $(".error").remove();

        if (your_name.length< 1) {
            $('#yourname').after('<span class="error"></br><p class="error__text">Это поле обязательно для заполнения</p></span>');
            check = false;
        }
        if (your_phone.length< 1) {
            $('#yourphone').after('<span class="error"></br><p class="error__text">Это поле обязательно для заполнения</p></span>');
            check = false;
        }
        /*else if(!your_phone.match(/^\d+/)){
            $('#yourphone').after('<span class="error"></br><p class="error__text">Введите цыфры </p></span>');
            check = false;
        }*/
        if (check == false){
            e.preventDefault();
        }
        
    });
});
$('#closeBtn').on('click', function(){
    $('#secondModal').modal('show')
});



document.addEventListener('DOMContentLoaded', function (event) {
    // array with texts to type in typewriter
    var dataText = ["Ваш маникюр"];

    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
        // chekc if text isn't finished yet
        if (i < (text.length)) {
            // add next character to h1
            document.querySelector(".sweet__manicure1").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

            // wait for a while and call this function again for next character
            setTimeout(function () {
                typeWriter(text, i + 1, fnCallback)
            }, 100);
        }
        // text finished, call callback if there is a callback function
        else if (typeof fnCallback == 'function') {
            // call callback after timeout
            setTimeout(fnCallback, 700);
        }
    }

    // start a typewriter animation for a text in the dataText array
    function StartTextAnimation(i) {
        if (typeof dataText[i] == 'undefined') {
            setTimeout(function () {
                StartTextAnimation(0);
            }, 20000);
        }
        // check if dataText[i] exists
        if (i < dataText[i].length) {
            // text exists! start typewriter animation
            typeWriter(dataText[i], 0, function () {
                // after callback (and whole text has been animated), start next text

            });
        }
    }

    // start the text animation
    StartTextAnimation(0);
});

document.addEventListener('DOMContentLoaded', function (event) {
    // array with texts to type in typewriter
    var dataText = ["со вкусом!"];

    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
        // chekc if text isn't finished yet
        if (i < (text.length)) {
            // add next character to h1
            document.querySelector(".sweet__manicure2").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

            // wait for a while and call this function again for next character
            setTimeout(function () {
                typeWriter(text, i + 1, fnCallback)
            }, 100);
        }
        // text finished, call callback if there is a callback function
        else if (typeof fnCallback == 'function') {
            // call callback after timeout
            setTimeout(fnCallback, 700);
        }
    }

    // start a typewriter animation for a text in the dataText array
    function StartTextAnimation(i) {
        if (typeof dataText[i] == 'undefined') {
            setTimeout(function () {
                StartTextAnimation(0);
            }, 20000);
        }
        // check if dataText[i] exists
        if (i < dataText[i].length) {
            // text exists! start typewriter animation
            typeWriter(dataText[i], 0, function () {
                // after callback (and whole text has been animated), start next text
            });

        }
    }

    // start the text animation
    setTimeout(function () {
        $('.sweet__manicure2').show();
        StartTextAnimation(0);
    }, 1800);

});

$(window).scroll(function () {
    $('#navbarToggleExternalContent').removeClass('show');
    $('#navbarToggleExternalContent').addClass('hide');
});

$('#navbarToggleExternalContent').on('mouseleave', function(){
    $(this).removeClass('show')
});

var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    nav: true,
    navText: ["<div class='arrow_left'></div>", "<div class='arrow_right'></div>"],
    margin: 10,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        960: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
});

$('.owl-nav').removeClass('disabled');






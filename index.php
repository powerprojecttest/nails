<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

error_log("Form request", 0);
if(isset($_POST['buttonform'])){
  error_log("Form request",0);
  $name=$_POST['inputform'];
  $tell=$_POST['input_name_form'];

  //$email=$_POST['email2'];
  // Instantiation and passing true enables exceptions
  $mail = new PHPMailer;


  //Server settings
  $mail->SMTPDebug = 2;    

  $mail->isSMTP();   
  $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );                                         // Set mailer to use SMTP

  $mail->CharSet = 'UTF-8';
  $mail->Host       = 'mail.powersite.com.ua';  // Specify main and backup SMTP servers
  $mail->SMTPAuth   = true;                     // Enable SMTP authentication
  $mail->Username   = 'admin@powersite.com.ua'; // SMTP username
  $mail->Password   = 'AueuR6GZw3';                           // SMTP password
  $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, ssl also accepted
  $mail->Port       = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('admin@powersite.com.ua', 'Powersite');
  $mail->addAddress('yana.halimonenko@gmail.com');               // Name is optional
  $mail->addReplyTo('info@powerproject.com.ua', 'Information');

  // Attachments
  // $mail->addAttachment('intro.png');    // Optional name

  // Content
  error_log("Здравствуйте, меня зовут -".$name."Телефон -".$tell, 0);
  $mail->isHTML(true);  // Set email format to HTML
  $mail->Subject = 'Новая запись на маникюр!';
  $mail->Body    = "Здравствуйте, меня зовут -".$name."Телефон -".$tell;
    

  $mail->send();
  echo 'Message has been sent';
}
?>

<!DOCTYPE html>
<html >
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Malinna</title>
    <meta name="description" content="Malinna">
    <meta name="keywords" content="Malinna">


	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	  <link href="//allfont.ru/allfont.css?fonts=corinthia" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adapt.css">
    <link rel="stylesheet" href="forma.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   
    <link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet">
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </head>
<body>
<div class="container">
  <section>
    <div class="row">
      <div class="col-sm-4" id="fon_1">
        <div class="pos-f-t">
          <div class="collapsed1">
            <div class="collapse in width" id="navbarToggleExternalContent">
              <div class="bg-dark p-4">
                <br><h4 class="text-white">Меню</h4><br>
                  <span class="text-muted" id="menu1">О нас</span><br>
                  <span class="text-muted" id="menu2">Прайс</span><br>
                  <span class="text-muted" id="menu3">Фото работ</span><br>
                  <span class="text-muted" id="menu4">Контакты</span><br>
              </div>
            </div>
          </div>
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
        </div>
      </div>

<script>
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

$('#menu1').click( function (e){
e.preventDefault()
    $('html, body').animate({
        scrollTop: $("#menu1_child").offset().top
    }, 1000);

});

$('#menu2').click( function (e){
e.preventDefault()
    $('html, body').animate({
        scrollTop: $("#menu2_child").offset().top
    }, 1000);

});

$('#menu3').click( function (e){
e.preventDefault()
    $('html, body').animate({
        scrollTop: $("#menu3_child").offset().top
    }, 1000);

});

$('#menu4').click( function (e){
e.preventDefault()
    $('html, body').animate({
        scrollTop: $("#menu4_child").offset().top
    }, 1000);

});
</script>
        <div class="col-sm-4" id="heder-col">
            <img class="logo__malinna" src="img/malinna_text_logo.png" alt="">
            <p class="studio__nails">Студия ногтевого сервиса</p>
        </div>

        <div class="col-sm-4">
          <div id="logo-col">
              <img class="logo__malina_manicure" src="img/logo1.png" alt="">
              <p class="sweet__manicure1">Ваш маникюр</p> 
              <p class="sweet__manicure2">со вкусом!</p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-12 call__me">
          <h4>+38 (096) 323 50 00</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12" id="btn-main">
         <button class='button__order' id="my__button-order">Записаться</button>
        </div>
    </div>
  </section>


  <section class="section__none_padding">
    <div class=" about " id="menu1_child">
      <div class="row">

        <div class="col-sm-12">
            <div class="about__us"><p>О нас</p>
            <div class="pink__line"></div>  
            </div>       
        </div>

    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="text-center text__about_us">
            <div class="col-sm-12">
              <p>Студия "Малинна" рада приветствовать Вас</p>
              <p>Мы предоставляем услуги ногтевого сервиса. Наши мастера владеют разными техниками и работают профессиональными материалами.
              Материалы европейского качества обеспечивают длительную носку и ухоженный вид маникюра,а также безопасны для вас.</p>
            </div>
            <div class="col-sm-12 ">
            <div class="panel" style="display:none">
              <p>Мы предлагаем широкую палитру цветов и разнообразие дизайнов. Инструменты в нашей студии проходят все этапы дезинфекции и стерилизации (сухожар).</p>
              <p>При клиенте вскрывается стерильный пакет с комплектом инструментов, а также используем одноразовые расходные материалы. 
              Мы работаем на профессиональном оборудовании, что позволяет сократить время процедуры.
              Вас всегда ожидает тёплая атмосфера - мы предложим Вам фильм, wi-fi и чашечку кофе.</p>
</div>
            </div>
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col" id="btn-main1">
           <button class='btn btn-outline-primary button__more accordion '>Подробнее</button>
      </div>
	    <div class="col" id="btn-main1">
           <button class='btn btn-outline-primary button__more expanded '>Скрыть</button>
      </div>
    </div>
  
  </div>
</section>


<section>
  <div id="menu2_child">
    <div class="row line__price">
      <div class="col-sm-12">
        <div class="about__us"><p>Прайс</p>
          <div class="pink__line"></div>  
        </div>       
      </div>
    </div>

    <div class="row" id="rw_photos" style="margin:0;">

      <div class="col-md-4 col-sm-12 img-col1">
        <div class="father">
          <div class="opasity__block"></div>
          <div class=""><img class="first__photo" src="img/hands.jpg" alt=""></div>
          <div class="icon"><img class="icon__photo" src="img/hands_icon.png" alt=""></div>
            <div class="text__on-block">
              <div class="circle__flag"></div>
              <div class="circle__flag-price-how_much">350</div>
              <div class="circle__flag-price-uan">грн</div>
              <div><p  class="main__text">КОМПЛЕКС "РУЧКИ"</p></div>
              <div><p  class="dependent__text">Снятие гель лака, маникюр и покрытие</p></div>
            </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 img-col1">
        <div class="father">
          <div class="opasity__block"></div>
          <div class=""><img class="first__photo" src="img/correction.jpg" alt=""></div>
          <div class="icon"><img class="icon__photo" src="img/correction_icon.png" alt=""></div>
            <div class="text__on-block">
              <div class="circle__flag"></div>
              <div class="circle__flag-price-how_much">450</div>
              <div class="circle__flag-price-uan">грн</div>
              <div><p  class="main__text">КОРРЕКЦИЯ</p></div>
              <div><p  class="dependent__text">Коррекция/укрепление гелевой системой, маникюр и покрытие</p></div>
            </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 img-col1">
        <div class="father">
          <div class="opasity__block"></div>
          <div class=""><img class="first__photo" src="img/foots.jpg" alt=""></div>
          <div class="icon"><img class="icon__photo" src="img/legs_icon.png" alt=""></div>
            <div class="text__on-block">
              <div class="circle__flag"></div>
              <div class="circle__flag-price-how_much">400</div>
              <div class="circle__flag-price-uan">грн</div>
              <div><p  class="main__text">КОМПЛЕКС "НОЖКИ"</p></div>
              <div><p  class="dependent__text">Снятие гель лака, педикюр и покрытие</p></div>
            </div>
        </div>
      </div>

    </div>

    <div class="row">  
      <div class="col subheder-col" id="btn-main2">
        <button class='btn btn-outline-primary button__more-price' id="next__nails">Подробный прайс</button>
      </div>
    </div>
  </div>
</section>

<section>

  <div  id="menu3_child" class="row line__photo">
    <div class="col-sm-12">
      <div class="photo__nails"><p>Фото работ</p>
        <div class="pink__line"></div>  
      </div>       
    </div>
  </div>

  <div class="outer__container">   
    <div class="owl-carousel owl-theme">
      <div class="overflow"><div> <a class="fancybox" rel="group"  href="img/nail1.png"><img src="img/nail1.png" class="photo__gallery"  alt=""></a></div></div>
      <div class="overflow"> <div><a class="fancybox" rel="group"  href="img/nail2.png"><img src="img/nail2.png" alt="" style="width:900px;"></a></div></div>
      <div class="overflow"> <div><a class="fancybox" rel="group"  href="img/nail3.png"><img src="img/nail3.png" alt="" style="width:900px;"></a></div></div>
      <div class="overflow"> <div><a class="fancybox" rel="group"  href="img/nail4.png"><img src="img/nail4.png" alt="" style="width:900px;"></a></div></div>
      <div class="overflow"> <div><a class="fancybox" rel="group"  href="img/nail5.png"><img src="img/nail5.png" alt="" style="width:900px;"></a></div></div>
      <div class="overflow"> <div><a class="fancybox" rel="group"  href="img/nail6.png"><img src="img/nail6.png" alt="" style="width:900px;"></a></div></div>
    </div>
  </div>

  <div id="cont-button">
      <div class="row">
        <div class="col-sm-12" id="btn-main3">
            <a class="click-me" href="photo__nails.html"><button class='btn btn-outline-primary button__more-nails'>Больше работ</button></a>
        </div> 
      </div>
  </div>
</section>


<section class="section__none_padding">
  <div id="insta">
    <div class="row">
      <div class="col-sm-12" id="inst">
        <h3>Подпишись на нас в инстаграм <a href="https://www.instagram.com/malinnastudio/" target="_blank"><img class="subscribe__icon" src="img/insta__icon_big.png" alt=""></a></h3>
      </div>
    </div>

    <div class="row row__btn">
      <div class="col-sm-12 " id="btn-main4">
        <a href="https://www.instagram.com/malinnastudio/" target="_blank"><button class='btn btn-outline-primary button__subscribe'>подписаться</button></a> 
      </div> 
    </div>
  </div>
</section>

<section class="section__none_padding">
  <div id="menu4_child">

  <div class="row line__contacts">
    <div class="col-sm-12">
      <div id="inst" class="contacts"><p>Контакты</p>
        <div class="pink__line"></div>  
      </div>       
    </div>
  </div>
 
  <div class="row" style="margin:0;">
    <div class="col-md-4 col-sm-12 f-1">
      <img class="photo__fasad" src="img/foto__fasad.png" alt=""> 
    </div>
    <div class="col-md-4 col-sm-12 adress">
      <p class="our__adress"><strong>АДРЕС:</strong></p><br>
      <div class="adress__content" >
        <p class="our__adress__text">Cофиевская Борщаговка,</p>
        <p> ЖК София,</p>
        <p> ул.Л.Украинки,6</p><br>
        <p class="time__hours"><strong>Время работы:</strong></p>
        <p class="time">пн-вс 10:00 - 20:00</p><br><br>
        <a href="https://www.instagram.com/malinnastudio/" target="_blank"><p class="malinastudio__insta"></a><a href="https://www.instagram.com/malinnastudio/" target="_blank"><i>malinastudio</i><img class="malinastudio" src="img/insta__icon.png" alt=""></p></a>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 f-3">
      <div id="map">
          <div class="contacts_map">
            <iframe width="" height="" src="https://maps.google.com/maps?q=%D0%96%D0%9A%20%22%D0%A1%D0%BE%D1%84%D0%B8%D1%8F%22%20%D1%83%D0%BB.%20%D0%9B.%20%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%BA%D0%B8%2C6+(%D0%9C%D0%B0%D0%BB%D0%B8%D0%BD%D0%BD%D0%B0)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div><br />
      </div>
    </div>
  </div>
</div>
</section>
</div>

<footer class="probootstrap-footer malinna__footer">
  <div class="container-fluid" id="inst-cont__footer">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <div class="malinna__copyright"><p>© Студия ногтевого сервися “Малинна”. 2019. Все права защищены</p></div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--*********************************FORM********************************-->
<iframe name="FormName" style="display: none;"></iframe>
<div id="background__grey" class="container_background" style="display: none;">
<div class=" container">
      <div class="my__form">
    <form id="my__form" method="POST" action="" target="" style="display: none;">
      <div class="order__service order__main_text"><label>Заказать услугу</label></div>
      <div class="your__name"><input placeholder="Ваше имя" type="text" name="inputform"> </div>
      <div class="your__phone"><input placeholder="Ваш телефон" type="tel" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" name="input_name_form"> </div>
      <div class="services order__main_text"><label>Услуги</label></div> 

<section>
<div class="row row__services">
  <div class="col-sm-6">
  <div class="row one__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service1">

      <label class="form-check-label" for="service1">
          <p class="manicure__form">Маникюр женский<p class="price__form"> 120 грн</p></p></label>
    </div>
  </div>

  <div class="row one__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service2">
      
      <label class="form-check-label" for="service2"><p class="manicure__form">Маникюр европейский<p class="price__form"> 100 грн</p></p></label>
    </div>
  </div>

  <div class="row one__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service3">
      <label class="form-check-label" for="service3"><p class="manicure__form">Гель-лак, френч, лунный.<p class="price__form"> 250 грн</p></p></label>
    </div>
  </div>

  <div class="row one__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service4">
      <label class="form-check-label" for="service4"><p class="manicure__form">Дизайн ногтей(1шт)<p class="price__form"> 5-30 грн</p></p></label>
    </div>
  </div>

  <div class="row one__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service5">
      <label class="form-check-label" for="service5"><p class="manicure__form">Ремонт ногтя(1шт)<p class="price__form"> 30 грн</p></p></label>
    </div>
  </div>

  <div class="row one__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service6">
      <label class="form-check-label" for="service6"><p class="manicure__form">Снятие нарощенных<p class="price__form"> от 80 грн</p></p></label>
    </div>
  </div>

  <div class="row one__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service7">
      <label class="form-check-label" for="service7"><p class="manicure__form">Spa-процедура<p class="price__form"> 80 грн</p></p></label>
    </div>
  </div>

</div>



<div class="col-sm-6">
  <div class="row second__coll"> 
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="service1">
        <label class="form-check-label" for="service1"><p class="manicure__form">Маникюр мужской<p class="price__form">150 грн</p></p></label>
      </div>
  </div>

  <div class="row second__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service2">
      <label class="form-check-label" for="service2"><p class="manicure__form">Покрытие гель-лак<p class="price__form"> 230 грн</p></p></label>
    </div>
  </div>

  <div class="row second__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service3">
      <label class="form-check-label" for="service3"><p class="manicure__form">Снятие гель-лака <p class="price__form"> 50 грн</p></p></label>
    </div>
  </div>

  <div class="row second__coll ">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service4">
      <label class="form-check-label" for="service4"><p class="manicure__form">Наращивание ногтей<p class="price__form"> от 700 грн</p></p></label>
    </div>
  </div>

  <div class="row second__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service5">
      <label class="form-check-label" for="service5"><p class="manicure__form">Коррекция нарощенных<p class="price__form"> от 400 грн</p></p></label>
    </div>
  </div>

  <div class="row second__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service6">
      <label class="form-check-label" for="service6"><p class="manicure__form">Педикюр женский<p class="price__form"> 170 грн</p></p></label>
    </div>
  </div>

  <div class="row second__coll">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="service7">
      <label class="form-check-label" for="service7"><p class="manicure__form">Педикюр мужской<p class="price__form"> 250 грн</p></p></label>
    </div>
  </div>
</div>
</section>
<section>
<div class="row">
  <div class="col-sm-12">
    <div class="btn__submit">
      <input type="submit" name="buttonform" id="close__button" value="Записаться">
    </div>
  </div>
</div>
</section>
</form>
</div>
</div>
</div>
<!--*********************************FORM********************************-->

<!--*********************************FORM_CALL_YOU********************************-->
<iframe name="FormName" style="display: none;"></iframe>
<div id="background__grey2" class="container_background" style="display: none;">
  <div class=" container">
    <div class="form__thank">
      <form id="form__thank" method="POST" action="" target="FormName"> 
      <label for="text__label">Спасибо за запись! Мы сегодня свяжемся с Вами!</label>
      </form>
    </div>
  </div>
</div>
<!--*********************************FORM_CALL_YOU********************************-->

<!------------------------------------PRICE-------------------------------------->
<iframe name="FormName" style="display: none;"></iframe>
<div id="background__grey1" class="container_background_price" style="display: none;">
  <div class=" container">
    <div class="my__price">
      <form id="my__price" method="POST" action="" target="FormName" style="display: none;">

        <div class="row price price__row">
            <div class="offset-sm-1 col-sm-10">
                <div id="price"><p>Прайс</p>
                <div class="pink__line"></div>  
                </div>       
            </div>
        </div>
                <div class="row price">
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Маникюр гигиенический, женский.</p>
                        <p class="red__text">Обрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>120 грн</p></div>
                </div>
        
                <div class="row price">
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Маникюр гигиенический, мужской.</p>
                        <p class="red__text">Обрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>150 грн</p></div>
                </div>
        
                <div class="row price">
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Маникюр европейский.</p>
                        <p class="red__text">Необрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>80 грн</p></div>
                </div>
        
                <div class="row price">
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Покрытие ногтей (гель-лак).</p>
                        <p class="red__text">Подготовка ногтевой пластины к нанесению гель-лака и покрытие</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>230 грн</p></div>
                </div>
        
                <div class="row price">
                    <div class="offset-sm-1 col-sm-9 manicure"><p>Покрытие ногтей гель-лак френч, лунный.</p>
                        <p class="red__text">Подготовка ногтевой пластины к нанесению гель-лака и покрытие в стиле френч </p></div>
                    <div class="col-sm-1 text-left"><p>250 грн</p></div>
                </div>
        
                <div class="row price">
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Снятие гель-лака.</p>
                        <p class="red__text">Снятие покрытия с ногтевой пластины посредством профессиональной жидкости</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>50 грн</p></div>
                </div>
        
                <div class="row price">
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Дизайн ногтей (1 ноготь). </p>
                        <p class="red__text">Дизайн, роспись и декорирование ногтей </p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>5-30 грн</p></div>
                </div>
        
                <div class="row price">
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Ремонт ногтей (1 ноготь).</p>
                        <p class="red__text">Удаление трещин, надломов и сколов ногтя</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>30 грн</p></div>
                </div>
        
                <div class="row price">      
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Наращивание ногтей. </p>
                        <p class="red__text">Наращивание ногтей на форму (гелевая основа)</p></div>
                    <div class="col-sm-1 text-right"><p>от</p></div>
                    <div class="col-sm-1 text-left"><p>700 грн</p></div>
                </div>
        
                <div class="row price">      
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Снятие нарощенных ногтей.</p>
                        <p class="red__text">Удаление геля с натуральных ногтей</p></div>
                    <div class="col-sm-1 text-right"><p>от</p></div>
                    <div class="col-sm-1 text-left"><p>90 грн</p></div>
                </div>
        
                <div class="row price">      
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Коррекция нарощенных ногтей.</p>
                        <p class="red__text">Коррекция нарощенных ногтей (гелевая система)</p></div>
                    <div class="col-sm-1 text-right"><p>от</p></div>
                    <div class="col-sm-1 text-left"><p>400 грн</p></div>
                </div>
        
                <div class="row price">      
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Spa-процедура для рук.</p>
                        <p class="red__text">Spa-уход включает: пиллинг, маску и крем для рук</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>90 грн</p></div>
                </div>
        
                <div class="row price">      
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Педикюр гигиенический, женский. </p>
                        <p class="red__text">Обрезной педикюр с ванночкой и полированием подошвы</p></div>
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-1 text-left"><p>170 грн</p></div>
                </div>
        
                <div class="row price">      
                    <div class="offset-sm-1 col-sm-8 manicure"><p>Педикюр гигиенический, мужской. </p>
                        <p class="red__text">Обрезной педикюр с ванночкой и полированием подошвы</p></div>
                    <div class="col-sm-1 text-right"></div>
                <div class="col-sm-1 text-left"><p>250 грн</p></div>
            </div>
      </form>
    </div>
  </div>
</div>
<!------------------------------------PRICE-------------------------------------->

<!------------------------------------Your__sweet_manicure-------------------------------------->

<script src="script__order.js"></script> 
<script>
document.addEventListener('DOMContentLoaded',function(event){
  // array with texts to type in typewriter
  var dataText = [ "Ваш маникюр"];
  
  // type one text in the typwriter
  // keeps calling itself until the text is finished
  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i < (text.length)) {
      // add next character to h1
     document.querySelector(".sweet__manicure1").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function() {
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
     if (typeof dataText[i] == 'undefined'){
        setTimeout(function() {
          StartTextAnimation(0);
        }, 20000);
     }
     // check if dataText[i] exists
    if (i < dataText[i].length) {
      // text exists! start typewriter animation
     typeWriter(dataText[i], 0, function(){
       // after callback (and whole text has been animated), start next text
       
     });
    }
  }
  // start the text animation
  StartTextAnimation(0);
});
</script>

<script>
document.addEventListener('DOMContentLoaded',function(event){
  // array with texts to type in typewriter
  var dataText = [ "со вкусом!"];
  
  // type one text in the typwriter
  // keeps calling itself until the text is finished
  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i < (text.length)) {
      // add next character to h1
     document.querySelector(".sweet__manicure2").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function() {
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
     if (typeof dataText[i] == 'undefined'){
        setTimeout(function() {
          StartTextAnimation(0);
        }, 20000);
     }
     // check if dataText[i] exists
    if (i < dataText[i].length) {
      // text exists! start typewriter animation
     typeWriter(dataText[i], 0, function(){
       // after callback (and whole text has been animated), start next text
       
     });
    }
  }
  // start the text animation
        setTimeout(function() {
	$('.sweet__manicure2').show();
        StartTextAnimation(0);
	
        }, 1800);
});
</script>
<script>

$(window).scroll(function(){ 
$('#navbarToggleExternalContent').removeClass('show');
$('#navbarToggleExternalContent').addClass('hide');

});
</script>

<script>


var owl = $('.owl-carousel'); 
owl.owlCarousel({ 
    loop:true, 
    nav:true, 
     navText : ["<div class='arrow_left'></div>","<div class='arrow_right'></div>"], 
    margin:10, 
    responsive:{ 
        0:{ 
            items:1 
        }, 
        600:{ 
            items:1
        },             
        960:{ 
            items:1 
        }, 
        1200:{ 
            items:1
        } 
    } 
});

$('.owl-nav').removeClass('disabled');

</script>

<script>

$('.expanded').hide(); 
$('.panel').css({ height: "0px"});
$('.accordion').click(function(){  
	$(this).hide();
	$('.expanded').show();          
        $('.panel').each( function (i){
           $(this).show();
            $('.panel').animate({ height: "120px"},500);
	    
});          
});



$('.expanded').click(function(){  
	    $(this).hide();
	    $('.accordion').show();
$('.panel').each( function (i){  
            $(this).animate({height: "0px"},500);   
             
});   
    $('.panel').hide();   
    $('.panel').css({ height: "0px"});
});          
</script>

</body>
</html>






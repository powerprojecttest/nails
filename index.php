<?php




ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

if(isset($_POST['buttonform'])){

$name=$_POST['inputform'];

//$email=$_POST['email2'];


// Instantiation and passing true enables exceptions
$mail = new PHPMailer;


    //Server settings
    $mail->SMTPDebug = 0;    

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
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'LEtter';
    $mail->Body    = "
      HEllo!!
      $name
";
   

    $mail->send();
    echo 'Message has been sent';
}
?>






<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nails</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    
  </head>
  <body>
    <div id="line"></div>
    <div id="mainmenu">
      <div class="container-fluid">
        <nav class="menu__nav">
          <ul class="text-center menu__list">
            <li class="menu__list-item"><a href="#">Главная</a></li>
            <li class="menu__list-item"><a href="#">Обо мне</a></li>
            <li class="menu__list-item"><a href="#">Прайс</a></li>
            <li class="menu__list-item"><a href="#">Портфолио</a></li>
            <li class="menu__list-item"><a href="#">Наши мастера</a></li>
            <li class="menu__list-item"><a href="#">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
   <header class="header header--main container wrapper-header">
     <div class="header__photo">
        <div class="row  text__mainpage">
            <div class="text-md-left col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <div class="header__content">
                <div id='logo'><a  href="/"><img src="img/logo.png" alt="" height="" width=""></a></div>
                <div class="button__mainpage" id="my__button-order"><p class="order">Заказать услугу</p></div>
              </div>
            </div>
          </div>
         </div>
   </header>

  <section id="portfolio">
    <div class="container portfolio">
      <div class="row  ">

          <div id="line__portfolio"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 "><div class="portfolio__line"></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 "><div class="portfolio__text">Портфолио</div></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 "><div class="portfolio__line"></div></div>

          
          <div class="outer__container">
            <div class="owl-carousel owl-theme">

            <div class="overflow"><div> <a class="fancybox" rel="group"  href="img/nail1.png"><img src="img/nail1.png" alt=""></a></div></div>
            <div class="overflow"> <div><a class="fancybox" rel="group"  href="img/logo.png"><img src="img/logo.png" alt=""></a></div></div>
            </div>
          </div>
      </div>
    </div>
     
  </section>

    <section id="about">
      <div class="container">
        <div class="row .mb-100 about_inna">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="about__photo"><a  href="/"><img src="img/inna.png" alt="" ></a></div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="about__text">Обо мне</div>
            <div class="float__malina"><img src="img/line__malinna.png" alt="" height="" width=""></div>
            <div class="about__description">Здравствуйте, меня зовут Инна, я основатель салона “Малинна” и мастер маникюра.<br><br>
                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.<br><br>
                В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.<br><br><br>
                            Ваша, Инна</div>
          </div>
        </div>
      </div>
    </section>

    <section id="price">
        <div class="container price">
          <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="price__text">Прайс</div>
                </div>
          </div>




<div class="cont__price mb-100">
          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Маникюр гигиенический, женский.</p>
                  <p class="red__text">Обрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>120 грн</p></div>
          </div>

          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Маникюр гигиенический, мужской.</p>
                  <p class="red__text">Обрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>150 грн</p></div>
          </div>

          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Маникюр европейский.</p>
                  <p class="red__text">Необрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>80 грн</p></div>
          </div>

          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Покрытие ногтей (гель-лак).</p>
                  <p class="red__text">Подготовка ногтевой пластины к нанесению гель-лака и покрытие</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>230 грн</p></div>
          </div>

          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Покрытие ногтей гель-лак френч, лунный.</p>
                  <p class="red__text">Подготовка ногтевой пластины к нанесению гель-лака и покрытие в стиле френч </p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>250 грн</p></div>
          </div>

          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Снятие гель-лака.</p>
                  <p class="red__text">Снятие покрытия с ногтевой пластины посредством профессиональной жидкости</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>50 грн</p></div>
          </div>

          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Дизайн ногтей (1 ноготь). </p>
                  <p class="red__text">Дизайн, роспись и декорирование ногтей </p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>5-30 грн</p></div>
          </div>

          <div class="row price">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Ремонт ногтей (1 ноготь).</p>
                  <p class="red__text">Удаление трещин, надломов и сколов ногтя</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>30 грн</p></div>
          </div>

          <div class="row price">      
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Наращивание ногтей. </p>
                  <p class="red__text">Наращивание ногтей на форму (гелевая основа)</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"><p>от</p></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>700 грн</p></div>
          </div>

          <div class="row price">      
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Снятие нарощенных ногтей.</p>
                  <p class="red__text">Удаление геля с натуральных ногтей</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"><p>от</p></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>90 грн</p></div>
          </div>

          <div class="row price">      
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Коррекция нарощенных ногтей.</p>
                  <p class="red__text">Коррекция нарощенных ногтей (гелевая система)</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"><p>от</p></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>400 грн</p></div>
          </div>

          <div class="row price">      
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Spa-процедура для рук.</p>
                  <p class="red__text">Spa-уход включает: пиллинг, маску и крем для рук</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>90 грн</p></div>
          </div>

          <div class="row price">      
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Педикюр гигиенический, женский. </p>
                  <p class="red__text">Обрезной педикюр с ванночкой и полированием подошвы</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>170 грн</p></div>
          </div>

          <div class="row price">      
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 manicure"><p>Педикюр гигиенический, мужской. </p>
                  <p class="red__text">Обрезной педикюр с ванночкой и полированием подошвы</p></div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-left"><p>250 грн</p></div>
          </div>
        </div>
      </div>
    <div class="float__malina_plus_briliant"><img src="img/malina_plus_briliant.png" alt="" height="" width=""></div>
    </section>

    <section id="contacts"> 
      <div class="container contacts">
      <div class="row .mb-100">
        <div id="line__contacts"></div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 "><div class="contacts__line"></div></div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 "><div class="contacts__text">Контакты</div></div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 "><div class="contacts__line"></div></div>
      </div>

      <div class="rowContactstwo">
        <div id="map" class="col-md-8 map"></div>
        <div class="col-md-4 adress">
          <p class="our__adress">Наш адрес</p>
          <div class="adress__content" >
            <p class="our__adress__text"> ЖК "София" <br> ул. Л. Украинки, 6 <br> (вход с ул. И. Франка)</p>
            <p class="title-contact"> Телефон </p>
            <p class="our__adress__text"><a href="tel:0963235000" >096-323-50-00</a></p>
            <div class="our_social-links"><p class="title-contact"> Мы в соцсетях:</p>
            <img src="img/insta.png" alt="" class="icon__footer"><a href="https://www.instagram.com/malinnastudio/" target="_blank"></a></div>
        </div>
        </div>
      </div>
    </div>
    <div class="float_briliant"><img src="img/briliant.png" alt="" height="" width=""></div>
    </section>
<!--*************************FOOTER************************************-->
    <footer class="probootstrap-footer malinna__footer">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="malinna__copyright"><p>Copyright © 2019. Malinna. All rights reserved</p></div>
            </div>
        </div>
      </footer>



    
<!--*********************************FORM********************************-->
    <iframe name="FormName" style="display: none;"></iframe>

 
    <div id="background__grey" class="container_background" style="display: none;">
      <div class=" container my__form">
        <form id="my__form" method="POST" action="" target="FormName" style="display: none;">
          <div class="order__service"><label>Заказать услугу</label></div>
          <div class="your__name"><input placeholder="Ваше имя" type="text" name="inputform"> </div>
          <div class="your__phone"><input placeholder="Ваш телефон" type="tel" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" name="inputform"> </div>
          <div class="services"><label>Услуги</label></div>

          
          
  <div class="row row__services">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service1">
          <label class="form-check-label" for="service1"><p class="manicure__form">Маникюр женский<p class="price__form"> 120 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service2">
          <label class="form-check-label" for="service2"><p class="manicure__form">Маникюр европейский<p class="price__form"> 100 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service3">
          <label class="form-check-label" for="service3"><p class="manicure__form">Гель-лак, френч, лунный.<p class="price__form"> 250 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service4">
          <label class="form-check-label" for="service4"><p class="manicure__form">Дизайн ногтей(1шт)<p class="price__form"> 5-30 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service5">
          <label class="form-check-label" for="service5"><p class="manicure__form">Ремонт ногтя(1шт)<p class="price__form"> 30 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service6">
          <label class="form-check-label" for="service6"><p class="manicure__form">Снятие нарощенных<p class="price__form"> от 80 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service7">
          <label class="form-check-label" for="service7"><p class="manicure__form">Spa-процедура<p class="price__form"> 80 грн</p></p></label>
        </div>
      </div>

    </div>



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <div class="row"> 
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="service1">
            <label class="form-check-label" for="service1"><p class="manicure__form">Маникюр мужской<p class="price__form">150 грн</p></p></label>
          </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service2">
          <label class="form-check-label" for="service2"><p class="manicure__form">Покрытие гель-лак<p class="price__form"> 230 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service3">
          <label class="form-check-label" for="service3"><p class="manicure__form">Снятие гель-лака <p class="price__form"> 50 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service4">
          <label class="form-check-label" for="service4"><p class="manicure__form">Наращивание ногтей<p class="price__form"> от 700 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service5">
          <label class="form-check-label" for="service5"><p class="manicure__form">Коррекция нарощенных<p class="price__form"> от 400 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service6">
          <label class="form-check-label" for="service6"><p class="manicure__form">Педикюр женский<p class="price__form"> 170 грн</p></p></label>
        </div>
      </div>

      <div class="row">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="service7">
          <label class="form-check-label" for="service7"><p class="manicure__form">Педикюр мужской<p class="price__form"> 250 грн</p></p></label>
        </div>
      </div>
    </div>
  </div>

          <input type="submit" name="buttonform" id="close__button" value="Записаться">
        </form>
      </div>
    </div> 
    
<!--*********************************FORM********************************-->
    <script src="js/script__portfolio.js"></script>


    <script type="text/javascript">
$(document).ready(function() {
    $("a.fancybox").fancybox();
});
</script>


    <!-- Google Maps-->
<script>
    function initMap() {
        var myLatLng = {lat: 50.400872, lng: 30.375282};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            draggable: $(window).width() > 640,
            center: myLatLng,
            scrollwheel: false,
        });

        var contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h1 id="firstHeading" class="firstHeading">Malinna</h1>' +
            '<div id="bodyContent">' +
            '<p> ЖК "София"<br> ' +
            'ул. Л. Украинки,6'+
            '</div>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var image = 'img/raspberries-small.png';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Malinna',
            icon: image
        });
        var ww = $(window).width();
        if (ww > 991) {
            infowindow.open(map, marker);
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        } else {
            infowindow.close();
        }
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdXm6GX3_UccW4Fgq2SgvaHg4eHWJcbw0&callback=initMap">
</script>
    
  </body>
</html>

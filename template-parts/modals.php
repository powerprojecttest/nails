<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//error_log("Form request", 0);
//var_dump($_POST);
if (isset($_POST['submit']) && $_POST['submit'] === 'order') {

    $first_name = $_POST['first_name'];
    $phone      = $_POST['phone'];
    $services   = (isset($_POST['services'])) ? $_POST['services'] : [];

    $html = "<h1>Здравствуйте, меня зовут -" . $first_name . "Телефон -" . $phone . "</h1>";
    $html .= "<h3>Хочу заказать следующие услуги:</h3>";
    $html .= "<ul>";
    if ($services) {
        foreach ($services as $service) {
            $html .= "<li>$service</li>";
        }
    }
    $html .= "</ul>";

    // Instantiation and passing true enables exceptions
    $mail = new PHPMailer;

    // Server settings
    $mail->SMTPDebug = 2;

    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    // Set mailer to use SMTP
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'mail.powersite.com.ua';      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'admin@powersite.com.ua'; // SMTP username
    $mail->Password = 'AueuR6GZw3';             // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, ssl also accepted
    $mail->Port = 587;                          // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@powersite.com.ua', 'Powersite');
    $mail->addAddress('yana.halimonenko@gmail.com');               // Name is optional
    $mail->addReplyTo('info@powerproject.com.ua', 'Information');

    // Attachments
    // $mail->addAttachment('intro.png');    // Optional name

    // Content
    //error_log("Здравствуйте, меня зовут -" . $first_name . "Телефон -" . $phone, 0);
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'Новая запись на маникюр!';
    $mail->Body = $html;

    $result = $mail->send();
    $result = true;
    if ($result) {
        $script = "<script>";
        $script .=    "$(function($){";
        $script .=        "$('#secondModal').modal('show');";
        $script .=    "});";
        $script .= "</script>";
        echo $script;
    } else {
        $script = "<script>";
        $script .=    "$(function($){";
        $script .=        "$('#fistModal').modal('show');";
        $script .=    "});";
        $script .= "</script>";
        echo $script;
    }
}
?>

<!-----FORM - ORDER modal window ------->
<div class="modal fade " id="fistModal" tabindex="-1" role="dialog" aria-labelledby="fistModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="my__form">
                <form id="my__form" method="POST" action="//<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
                    <div class="order__service order__main_text"><span>Заказать услугу</span></div>

                    <label class="your__name"><input id="yourname" placeholder="Ваше имя" type="text" name="first_name"> </label>
                    <label class="your__phone"><input id="yourphone"  placeholder="Ваш телефон" type="tel"  name="phone"> </label>

                    <div class="services order__main_text"><span>Услуги</span></div>

                    <section>
                        <div class="row row__services">
                            <div class="col-md-6 col-sm-12">
                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Маникюр женский" class="form-check-input" type="checkbox" id="service1">
                                        <label class="form-check-label" for="service1">
                                            <p class="manicure__form">Маникюр женский<p class="price__form"> 120 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Маникюр европейский" class="form-check-input" type="checkbox" id="service2">
                                        <label class="form-check-label" for="service2">
                                            <p class="manicure__form">Маникюр европейский<p class="price__form"> 100 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Гель-лак, френч, лунный." class="form-check-input" type="checkbox" id="service3">
                                        <label class="form-check-label" for="service3">
                                            <p class="manicure__form">Гель-лак, френч, лунный.<p class="price__form"> 250 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Дизайн ногтей(1шт)" class="form-check-input" type="checkbox" id="service4">
                                        <label class="form-check-label" for="service4">
                                            <p class="manicure__form">Дизайн ногтей(1шт)<p class="price__form"> 5-30 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Ремонт ногтя(1шт)" class="form-check-input" type="checkbox" id="service5">
                                        <label class="form-check-label" for="service5">
                                            <p class="manicure__form">Ремонт ногтя(1шт)<p class="price__form"> 30 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Снятие нарощенных" class="form-check-input" type="checkbox" id="service6">
                                        <label class="form-check-label" for="service6">
                                            <p class="manicure__form">Снятие нарощенных<p class="price__form"> от 80 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row one__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Spa-процедура" class="form-check-input" type="checkbox" id="service7">
                                        <label class="form-check-label" for="service7">
                                            <p class="manicure__form">Spa-процедура<p class="price__form"> 80 грн</p></p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Маникюр мужской" class="form-check-input" type="checkbox" id="service1">
                                        <label class="form-check-label" for="service1">
                                            <p class="manicure__form">Маникюр мужской<p class="price__form">150 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Покрытие гель-лак" class="form-check-input" type="checkbox" id="service2">
                                        <label class="form-check-label" for="service2">
                                            <p class="manicure__form">Покрытие гель-лак<p class="price__form"> 230 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Снятие гель-лака" class="form-check-input" type="checkbox" id="service3">
                                        <label class="form-check-label" for="service3">
                                            <p class="manicure__form">Снятие гель-лака <p class="price__form"> 50 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll ">
                                    <div class="form-check">
                                        <input name="services[]" value="Наращивание ногтей" class="form-check-input" type="checkbox" id="service4">
                                        <label class="form-check-label" for="service4">
                                            <p class="manicure__form">Наращивание ногтей<p class="price__form"> от 700 грн</p></p></label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Коррекция нарощенных" class="form-check-input" type="checkbox" id="service5">
                                        <label class="form-check-label" for="service5">
                                            <p class="manicure__form">Коррекция нарощенных<p class="price__form"> от 400 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Педикюр женский" class="form-check-input" type="checkbox" id="service6">
                                        <label class="form-check-label" for="service6">
                                            <p class="manicure__form">Педикюр женский<p class="price__form"> 170 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                                <div class="row second__coll">
                                    <div class="form-check">
                                        <input name="services[]" value="Педикюр мужской" class="form-check-input" type="checkbox" id="service7">
                                        <label class="form-check-label" for="service7">
                                            <p class="manicure__form">Педикюр мужской<p class="price__form"> 250 грн</p></p>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section>
                        <div class="row">
                            <div class="col-sm-12" id="btn-main">
                                <button name="submit" value="order" type="submit" class="btn btn-primary button__order">Отправить</button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<!-----/FORM - ORDER ------->

<!-------FORM_CALL_YOU------->
<div class="modal fade " id="secondModal" tabindex="-1" role="dialog" aria-labelledby="secondModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content modal_thank">
            <p class="wordsofthanks">Спасибо за запись! Мы сегодня свяжемся с Вами!</p>
        </div>
        <div class="modal-footer">
            <div class="col-sm-12" id="btn-main">
                <button type="button" class="btn btn-primary button__order" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<!---------/FORM CALL YOU---------->

<!---------PRICE modal window-------------->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="my__price">
                <form id="my__price" method="POST" action="" target="FormName">

                    <div class="row price price__row">
                        <div class="offset-sm-1 col-sm-10">
                            <div id="price"><p>Прайс</p>
                                <div class="pink__line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Маникюр гигиенический, женский.</p>
                            <p class="red__text">Обрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>120 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Маникюр гигиенический, мужской.</p>
                            <p class="red__text">Обрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>150 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Маникюр европейский.</p>
                            <p class="red__text">Необрезной маникюр с ванночкой и шлифовкой ногтей</p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>80 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Покрытие ногтей (гель-лак).</p>
                            <p class="red__text">Подготовка ногтевой пластины к нанесению гель-лака и покрытие</p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>230 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Покрытие ногтей гель-лак френч, лунный.</p>
                            <p class="red__text">Подготовка ногтевой пластины к нанесению гель-лака и покрытие в стиле
                                френч </p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>250 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Снятие гель-лака.</p>
                            <p class="red__text">Снятие покрытия с ногтевой пластины посредством профессиональной
                                жидкости</p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>50 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Дизайн ногтей (1 ноготь). </p>
                            <p class="red__text">Дизайн, роспись и декорирование ногтей </p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>5-30 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Ремонт ногтей (1 ноготь).</p>
                            <p class="red__text">Удаление трещин, надломов и сколов ногтя</p></div>
                        <div class="col-md-1 col-sm-6 text-right"></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>30 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Наращивание ногтей. </p>
                            <p class="red__text">Наращивание ногтей на форму (гелевая основа)</p></div>
                        <div class="col-md-1 col-sm-6 text-right"><p>от</p></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>700 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Снятие нарощенных ногтей.</p>
                            <p class="red__text">Удаление геля с натуральных ногтей</p></div>
                        <div class="col-md-1 col-sm-6 text-right"><p>от</p></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>90 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Коррекция нарощенных ногтей.</p>
                            <p class="red__text">Коррекция нарощенных ногтей (гелевая система)</p></div>
                        <div class="col-md-1 col-sm-6 text-right"><p>от</p></div>
                        <div class="col-md-1 col-sm-6 text-left"><p>400 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Spa-процедура для рук.</p>
                            <p class="red__text">Spa-уход включает: пиллинг, маску и крем для рук</p></div>
                        <div class="col-md-1 col-sm-6  text-right"></div>
                        <div class="col-md-1 col-sm-6  text-left"><p>90 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Педикюр гигиенический, женский. </p>
                            <p class="red__text">Обрезной педикюр с ванночкой и полированием подошвы</p></div>
                        <div class="col-md-1 col-sm-6  text-right"></div>
                        <div class="col-md-1 col-sm-6  text-left"><p>170 грн</p></div>
                    </div>

                    <div class="row price">
                        <div class="col-md-10 col-sm-12 manicure"><p>Педикюр гигиенический, мужской. </p>
                            <p class="red__text">Обрезной педикюр с ванночкой и полированием подошвы</p></div>
                        <div class="col-md-1 col-sm-6  text-right"></div>
                        <div class="col-md-1 col-sm-6  text-left"><p>250 грн</p></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-------/PRICE----------->
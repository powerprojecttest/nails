<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Malinna - <?php echo $template_name; ?></title>
    <meta name="description" content="Malinna - <?php echo $template_name; ?>">
    <meta name="keywords" content="Malinna - <?php echo $template_name; ?>">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link rel="stylesheet" href="//allfont.ru/allfont.css?fonts=corinthia" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <?php //if( $template_name === 'Home' ): ?>
        <link rel="stylesheet" href="assets/css/adapt.css">
        <link rel="stylesheet" href="assets/css/forma.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    <?php //elseif($template_name === 'Portfolio'): ?>
        <link rel="stylesheet" href="assets/css/photo__nails.css">
    <?php //endif; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<!-- container-start -->
<div class="container">
    <section>
        <?php if( $template_name === 'Home' ): ?>
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
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarToggleExternalContent"
                                    aria-controls="navbarToggleExternalContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>
                </div>

                <div class="col-sm-4" id="heder-col">
                    <img class="logo__malinna animated flipInX" src="assets/img/malinna_text_logo.png" alt="">
                    <p class="studio__nails animated pulse">Студия ногтевого сервиса</p>
                </div>

                <div class="col-sm-4">
                    <div id="logo-col">
                        <img class="logo__malina_manicure" src="assets/img/logo1.png" alt="">
                        <p class="sweet__manicure1">Ваш маникюр</p>
                        <p class="sweet__manicure2">со вкусом!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 call__me animated fadeIn">
                    <h4>+38 (096) 323 50 00</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12" id="btn-main">
                    <button type="button" id="my__button-order" class="btn btn-primary button__order"
                            data-toggle="modal" data-target="#fistModal"> Записаться
                    </button>
                </div>
            </div>
        <?php elseif($template_name === 'Portfolio'): ?>
            <div class="row">
                <div class="col-sm-4" id="heder-col">
                    <img class="logo__malinna__new" style="width:250px; padding-top: 40px;" src="assets/img/malinna_text_logo.png" alt="">
                    <p class="studio__nails__new" style="font-size:12px;">Студия ногтевого сервиса</p>
                </div>
                <div class="col-sm-4" id="heder-col">
                    <div class="tell-center__new" style="text-align: center; padding-top: 40px;"><p
                                style="font-size: 16px;">+38 (096) 323 50 00</p></div>
                    <div id="btn-main">
                        <button type="button" id="my__button-order" class="btn btn-primary button__order"
                                data-toggle="modal" data-target="#fistModal"> Записаться
                        </button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="logo-col">
                        <img class="logo__malina_manicure__new" src="assets/img/logo1.png" alt="">
                        <p class="sweet__manicure1__new">Ваш маникюр</p>
                        <p class="sweet__manicure2__new">со вкусом!</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>

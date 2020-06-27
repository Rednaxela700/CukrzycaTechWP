<html class="no-js" lang="pl">
<?php wp_head(); ?>
<head>
    <meta charset="utf-8">
    <title><?php
        wp_title('');
        echo ' | ' . bloginfo('name');
        ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->
<div class="page__wrapper">
<header class="header">
    <div class="header__wrapper">
        <div class="header__container">
            <div class="logo__container">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo_header.png" alt="conference logo"
                         class="logo__item">
                </a>
                <!--                <img src="http://via.placeholder.com/264x55" alt="conference logo">-->
            </div>
            <nav class="nav__wrapper">
                <ul class="nav__container nav__container--js mobile--hidden">
                    <li class="nav__item"><a href="" class="nav__link"><span class="nav__text">O konferencji</span></a>
                    </li>
                    <li class="nav__item"><a href="" class="nav__link"><span class="nav__text">Prelegenci</span></a>
                    </li>
                    <li class="nav__item"><a href="" class="nav__link"><span class="nav__text">Agenda</span></a></li>
                    <li class="nav__item"><a href="" class="nav__link"><span class="nav__text">Media o nas</span></a>
                    </li>
                    <li class="nav__item"><a href="" class="nav__link"><span class="nav__text">Partnerzy</span></a></li>
                    <li class="nav__item">
                        <div class="nav__btn">
                            <a href="#checkout" class="btn js-navBtn">Bilety i rezerwacja
                                <span class="nav__btn--icon"><i class="fa fa-chevron-down"></i></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="hamburger__container desktop--hidden">
                <button class="hamburger__btn"></button>
            </nav>
        </div>
    </div>
</header>

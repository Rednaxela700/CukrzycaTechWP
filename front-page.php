<?php include 'header.php'; ?>
<main>
    <section class="hero">
        <div class="hero__wrapper">
            <div class="hero__container">
                <h1 class="hero__heading">cukrzyca <br> <span class="text__lightblue">tech</span> fest <br><span
                        class="text__lightblue">2020</span></h1>
                <div class="subheading__container">
                    <h2 class="subheading__item">21 <br>wrzesień</h2>
                    <p class="subheading__paragraph text__lightblue">
                        Gdynia<br>
                        Pomorski Park Naukowo Technologiczny
                    </p>
                </div>
            </div>

            <a class="btn hero__btn" href="404.html">Weź udział w wydarzeniu</a>
            <div class="hero__bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 250 250"
                     class="hero__ellipse hero__ellipse--sm">
                    <defs>
                        <style>
                            .cls-1, .cls-3 {
                                fill: none;
                            }

                            .ellipse-sm {
                                stroke: #5c8ac8;
                                stroke-width: 24px;
                                fill: none;

                            }

                            .cls-2 {
                                stroke: none;
                            }
                        </style>
                    </defs>
                    <g id="Ellipse_3" data-name="Ellipse 3" class="ellipse-sm">
                        <circle class="cls-2" cx="125" cy="125" r="125"/>
                        <circle class="cls-3" cx="125" cy="125" r="113"/>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="640" height="640" viewBox="0 0 640 640"
                     class="hero__ellipse hero__ellipse--lg">
                    <defs>
                        <style>
                            .cls-1, .cls-3 {
                                fill: none;
                            }

                            .ellipse-big {
                                stroke: #163e6f;
                                stroke-width: 48px;
                                fill: none;
                            }

                            .cls-2 {
                                stroke: none;
                            }
                        </style>
                    </defs>
                    <g id="Ellipse_1" data-name="Ellipse 1" class="ellipse-big">
                        <circle class="cls-2" cx="320" cy="320" r="320"/>
                        <circle class="cls-3" cx="320" cy="320" r="296"/>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="340" height="340" viewBox="0 0 340 340"
                     class="hero__ellipse hero__ellipse--md">
                    <defs>
                        <style>
                            .cls-1, .cls-3 {
                                fill: none;
                            }

                            .cls-1 {
                                stroke: #5c8ac8;
                                stroke-width: 32px;
                            }

                            .cls-2 {
                                stroke: none;
                            }
                        </style>
                    </defs>
                    <g id="Ellipse_2" data-name="Ellipse 2" class="cls-1">
                        <circle class="cls-2" cx="170" cy="170" r="170"/>
                        <circle class="cls-3" cx="170" cy="170" r="154"/>
                    </g>
                </svg>
            </div>
        </div>
        <div class="section hero__overview">
            <div id="idea" class="section__link"></div>
            <h2 class="hero__heading hero__heading--small">Idea konferencji</h2>
            <p class="text__lightblue text__hero">Już po raz siódmy zapraszamy na największą w Polsce konferencję email
                marketingową — Mail My Day. Czeka
                na Ciebie aż 360 minut dużej dawki inspirujących prelekcji i case study. Drugi dzień to 15 praktycznych,
                certyfikowanych warsztatów do wyboru. Dzięki wiedzy naszych ekspertów dowiesz się, jak efektywnie
                wykorzystać email marketing, łączyć go z innymi działaniami i przekładać to wszystko na zyski.
                Konferencja to także świetna okazja intensywnej wymiany doświadczeń między uczestnikami oraz budowania
                relacji na lata.
            </p>
        </div>
    </section>
    <section class="section speakers">
        <div id="speakers" class="section__link"></div>
        <h2 class="section__title">Prelegenci</h2>
        <div class="speakers__container">
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/corey-haines.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">corey haines</p>
                <span class="speaker__company">Baremetrics</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/yam-regev-keynote-1-4rsluffson20.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">yam regev</p>
                <span class="speaker__company">Zest.is</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/ben-blanki-300x300-6qr080tli2p0.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">ben blanki</p>
                <span class="speaker__company">Promo.com</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/henrique-moniz-5jl5caoo6td0.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">henrique moniz</p>
                <span class="speaker__company">G2.com</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/stephen-meiller-1-1--79jrkugpm480.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Stephen Meiller</p>
                <span class="speaker__company">Unbounce</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/lm7-4eso7m383kj0.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Łukasz Maroszczyk</p>
                <span class="speaker__company">Signify</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/agata-krzysztofik-400x400-1euuet819a2g.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Agata Krzysztofik </p>
                <span class="speaker__company">Piktochart</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/8-1-male-1--3te7jru0gqn0.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Mick Griffin</p>
                <span class="speaker__company">Brand24</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/lowisz-4ns5knvcl730.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Stephen M. Lowisz</p>
                <span class="speaker__company">21LEAP</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="<?php echo get_template_directory_uri()?>/img/brennan-dunn-54cesheb3em0.png" alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Brennan Dunn</p>
                <span class="speaker__company">RightMessage</span>
            </div>
        </div>
    </section>
    <section class="section agenda">
        <div id="agenda" class="section__link"></div>
        <h2 class="section__title">Agenda</h2>
        <div class="agenda__wrapper">
            <div class="agenda__container">
                <div class="agenda__item">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_stopwatch.svg" alt="" class="timetable__img">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">Otwarcie i rejestracja uczestników</div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_stopwatch.svg" alt="" class="timetable__img">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:30</span>
                            <div class="timetable__title">Ceremonia otwarcia</div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/brennan-dunn-54cesheb3em0.png" alt=""
                                 class="timetable__img timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">10:00</span>
                            <div class="timetable__title">Keynote - The Future of Java and You - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Heather VanCura</a> Java Community Process (JCP)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/lowisz-4ns5knvcl730.png" alt="" class="timetable__img timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">The Reactive Landscape - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Clement Escoffier</a> Red Hat</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_stopwatch.svg" alt="" class="timetable__img">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">11:00</span>
                            <div class="timetable__title">Przerwa na kawę & networking</div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/8-1-male-1--3te7jru0gqn0.png" alt=""
                                 class="timetable__img  timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">11:30</span>
                            <div class="timetable__title">Object-Oriented Programming in the Enterprise - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Nicolas Frankel</a>  Exoscale</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/lm7-4eso7m383kj0.png" alt="" class="timetable__img timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">12:00</span>
                            <div class="timetable__title">Object-Oriented Programming in the Enterprise - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Ahmet Yıldız</a> adesso Turkey</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/agata-krzysztofik-400x400-1euuet819a2g.png" alt=""
                                 class="timetable__img  timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">12:30</span>
                            <div class="timetable__title">Keynote - The Future of Java and You - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Heather VanCura</a> Java Community Process (JCP)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/ben-blanki-300x300-6qr080tli2p0.png" alt=""
                                 class="timetable__img  timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">The Reactive Landscape - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Clement Escoffier</a> Red Hat</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_stopwatch.svg" alt="" class="timetable__img">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">Przerwa na kawę & networking</div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/stephen-meiller-1-1--79jrkugpm480.png" alt=""
                                 class="timetable__img  timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">Object-Oriented Programming in the Enterprise - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Nicolas Frankel</a> Exoscale</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/corey-haines.png" alt="" class="timetable__img  timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">Object-Oriented Programming in the Enterprise - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Ahmet Yıldız</a> adesso Turkey</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/yam-regev-keynote-1-4rsluffson20.png" alt=""
                                 class="timetable__img  timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">Keynote - The Future of Java and You - EN</div>
                            <div class="timetable__subtitle">
                                By <span><a href="#">Heather VanCura</a> Java Community Process (JCP)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_stopwatch.svg" alt="" class="timetable__img">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">Uroczyste zakończenie konferencji</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section media">
        <div id="media" class="section__link"></div>
        <h2 class="section__title">Media o nas</h2>
        <div class="media__wrapper">
            <div class="media__container">
                <div class="media__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/2175.jpg" alt="post img" class="post__thumb">
                    <div class="post__content">
                        <span class="post__date">11 lip 2013</span>
                        <div class="post__title">
                            <a href="#">Nowa konferencja na trójmiejskiej scenie eventowej</a>
                        </div>
                        <div class="post__excerpt">Bankowe aplikacje mobilne są utożsamiane z wygodą i swobodą
                            korzystania […]
                        </div>
                    </div>
                </div>
                <div class="media__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/226.jpg" alt="post img" class="post__thumb">
                    <div class="post__content">
                        <span class="post__date">11 lip 2013</span>
                        <div class="post__title">
                            <a href="#">Nowa konferencja na trójmiejskiej scenie eventowej</a>
                        </div>
                        <div class="post__excerpt">Bez wątpienia testy to niezbędny element całego procesu wytwarzania
                            oprogramowania. […]
                        </div>
                    </div>
                </div>
                <div class="media__item">
                    <img src="<?php echo get_template_directory_uri()?>/img/3588.jpg" alt="post img" class="post__thumb">
                    <div class="post__content">
                        <span class="post__date">11 lip 2013</span>
                        <div class="post__title">
                            <a href="#">Nowa konferencja na trójmiejskiej scenie eventowej</a>
                        </div>
                        <div class="post__excerpt">Niedawno pisaliśmy o akcji CSR prowadzonej przez Sii we Wrocławiu,
                            […]
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn__blue media__btn">Pokaż więcej</button>
        </div>
    </section>
    <section class="section register">
        <div id="register" class="section__link"></div>
        <h2 class="section__title">Bilety i rejestracja</h2>
        <div class="register__wrapper">
            <div class="register__container">
                <div class="register__item">
                    <div class="ticket__container">
                        <div class="ticket__header">
                            <span class="ticket__subtitle">early bird registration</span>
                            <h3 class="ticket__title">Main conference</h3>
                            <div class="ticket__price">0 zł</div>
                        </div>
                        <div class="ticket__body">
                            <ul class="ticket__advantages">
                                <li>One day full pass</li>
                                <li>Early Bird Morning Tea</li>
                                <li>Early Bird Lunch</li>
                                <li>Early Bird Afternoon Tea</li>
                                <li>Early Bird Limited numbers!!!</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn register__btn">Rezerwuj pakiet</a></div>
                <div class="register__item">
                    <div class="ticket__container">
                        <div class="ticket__header">
                            <span class="ticket__subtitle">regular bird registration</span>
                            <h3 class="ticket__title">Main conference</h3>
                            <div class="ticket__price">250 zł</div>
                        </div>
                        <div class="ticket__body">
                            <ul class="ticket__advantages">
                                <li>One day full pass</li>
                                <li>Early Bird Morning Tea</li>
                                <li>Early Bird Lunch</li>
                                <li>Early Bird Afternoon Tea</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn register__btn">Rezerwuj pakiet</a></div>
                <div class="register__item">
                    <div class="ticket__container">
                        <div class="ticket__header">
                            <span class="ticket__subtitle">student registration</span>
                            <h3 class="ticket__title">Main conference</h3>
                            <div class="ticket__price">450 zł</div>
                        </div>
                        <div class="ticket__body">
                            <ul class="ticket__advantages">
                                <li>One day full pass</li>
                                <li>Early Bird Morning Tea</li>
                                <li>Early Bird Lunch</li>
                                <li>Early Bird Afternoon Tea</li>
                                <li>Early Bird Limited numbers!!!</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn register__btn">Rezerwuj pakiet</a></div>
            </div>

        </div>
    </section>
    <section class="section partners">
        <div id="partners" class="section__link"></div>
        <h2 class="section__title">Partnerzy</h2>
        <div class="partners__wrapper">
            <span class="partners__subtitle">organizatorzy</span>
            <div class="partners__container">
                <img src="<?php echo get_template_directory_uri()?>/img/logo_promo.png" alt="partner logo" class="partners__img">
                <img src="<?php echo get_template_directory_uri()?>/img/cxqnrnn3.mnd.png" alt="partner logo" class="partners__img">
                <img src="<?php echo get_template_directory_uri()?>/img/logo_ptd.png" alt="partner logo" class="partners__img">
                <img src="<?php echo get_template_directory_uri()?>/img/logo_caryone_white_big.png" alt="partner logo" class="partners__img">
                <img src="<?php echo get_template_directory_uri()?>/img/B._Braun_logo.png" alt="partner logo" class="partners__img">
                <img src="<?php echo get_template_directory_uri()?>/img/abbott_logo.png" alt="partner logo" class="partners__img">
            </div>
        </div>
    </section>
    <section class="section contact">
        <div id="contact" class="section__link"></div>
        <h2 class="section__title">Kontakt</h2>
        <div class="contact__wrapper">
            <div class="contact__container">
                <p class="contact__text">
                    Już po raz siódmy zapraszamy na największą w Polsce konferencję email marketingową — Mail My Day.
                    Czeka na Ciebie aż 360 minut dużej dawki inspirujących prelekcji i case study. Drugi dzień to 15
                    praktycznych, certyfikowanych warsztatów do wyboru. Dzięki wiedzy naszych ekspertów dowiesz się, jak
                    efektywnie wykorzystać email marketing, łączyć go z innymi działaniami i przekładać to wszystko na
                    zyski. Konferencja to także świetna okazja intensywnej wymiany doświadczeń między uczestnikami oraz
                    budowania relacji na lata.
                </p>
                <button class="btn contact__btn">Szybki kontakt</button>
            </div>
        </div>
        <div class="contact__ellipses">
            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 250 250"
                 class="contact__ellipse contact__ellipse--sm">
                <defs>
                    <style>
                        .cls-1, .cls-3 {
                            fill: none;
                        }

                        .ellipse-sm {
                            stroke: #5c8ac8;
                            stroke-width: 24px;
                            fill: none;

                        }

                        .cls-2 {
                            stroke: none;
                        }
                    </style>
                </defs>
                <g id="Ellipse_3" data-name="Ellipse 3" class="ellipse-sm">
                    <circle class="cls-2" cx="125" cy="125" r="125"/>
                    <circle class="cls-3" cx="125" cy="125" r="113"/>
                </g>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="340" height="340" viewBox="0 0 340 340"
                 class="contact__ellipse contact__ellipse--md">
                <defs>
                    <style>
                        .cls-1, .cls-3 {
                            fill: none;
                        }

                        .cls-1 {
                            stroke: #5c8ac8;
                            stroke-width: 32px;
                        }

                        .cls-2 {
                            stroke: none;
                        }
                    </style>
                </defs>
                <g id="Ellipse_2" data-name="Ellipse 2" class="cls-1">
                    <circle class="cls-2" cx="170" cy="170" r="170"/>
                    <circle class="cls-3" cx="170" cy="170" r="154"/>
                </g>
            </svg>
        </div>
        <div class="contact__bg js-lazy"></div>
    </section>
</main>
<?php include 'footer.php'; ?>


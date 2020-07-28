<?php include 'header.php'; ?>
<main>
    <section class="hero">
        <div class="bg__container">
            <div class="hero__wrapper">
                <div class="hero__container">
                    <h1 class="hero__heading">cukrzyca <br> <span class="text__lightblue">tech</span> fest <br><span
                            class="text__lightblue">2021</span></h1>
                    <div class="subheading__container">
                        <h2 class="subheading__item">27-28 Marca<br></h2>
                        <p class="subheading__paragraph text__lightblue">
                            Gdynia<br>
                            Pomorski Park Naukowo Technologiczny
                        </p>
                    </div>
                </div>

                <a class="btn hero__btn" href="#register">Zarejestruj się terez!</a>
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
                <h2 class="hero__heading hero__heading--small">IDEA konferencji</h2>
                <p class="text__lightblue text__hero">XXI wiek przyniósł nam wiele nowoczesnych rozwiązań dla diabetyków. Pompy, CGMy, inteligentne peny i wreszczie - systemy zamkniętej pętli cukrzycowej. Technologia ma jednak to do siebie, że potrafi nas przerosnąć, dlatego często suzkamy wsparcia wśród społeczności, wiedzy, instrukcji czy też pomocnej dłoni. Konferencję CukrzycaTech fest tworzymy właśnie dla Was - żeby ułatwić wejście w świat "diabtech", dzielić się więdzą oraz po prostu spotkać przyjazną nam osobę, z tymi samymi problemami. Darmowe Expo, na którym wystawią się topowe firmyprodukujące sprzęt dla diabetyków, wykłady oraz warsztaty - to wszystko już w Marcu, w nowoczesnej Gdyni.
                </p>
            </div>
            <div class="hero__bg--img js-lazy"></div>
        </div>
    </section>
	<section class="section media">
        <div id="blog" class="section__link"></div>
        <h2 class="section__title">Nasz blog</h2>
        <div class="media__wrapper">
			 <div class="media__container">
<?php $temp_query = clone $wp_query; ?>
<?php query_posts( 'posts_per_page=3' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
			 <div class="media__item">
                 <?php
                 if ( has_post_thumbnail() ) {
    the_post_thumbnail('post-thumbnail', ['class' => 'post__thumb js-lazy']);
} ?>
                    <div class="post__content">
                        <span class="post__date"><?php the_time('j F Y'); ?></span>
                        <div class="post__title">
                            	<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="post__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 40 ); ?></div>
                    </div>
                </div>
<?php endwhile; ?>
<?php $wp_query = clone $temp_query; ?>
            </div>
            <!--<button class="btn__blue media__btn">Pokaż więcej</button>-->
		</div>
    </section>
    <section class="section speakers">
        <div id="speakers" class="section__link"></div>
        <h2 class="section__title">Prelegenci</h2>
        <div class="speakers__container">
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="http://cukrzyca.tech/wp-content/uploads/2020/07/jaroslaw-jerry-gilewicz.jpg" alt="speaker img"
                         class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Jarosław Jerry Gilewicz</p>
                <span class="speaker__company">Cukrzyca.Tech</span>
            </div>
            <div class="speakers__item">
                <div class="speaker__popup">
                    <img src="http://cukrzyca.tech/wp-content/uploads/2020/07/maciej-łysiak.jpg"
                         alt="speaker img" class="speaker__img">
                    <button class="speaker__btn">+</button>
                </div>
                <p class="speaker__name">Maciej Łysiak</p>
                <span class="speaker__company">Nie Słodzę Vlog</span>
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
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_stopwatch.svg" alt=""
                                 class="timetable__img">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">8:00</span>
                            <div class="timetable__title">Otwarcie i rejestracja uczestników</div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon_stopwatch.svg" alt=""
                                 class="timetable__img">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:00</span>
                            <div class="timetable__title">Otwarcie</div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="http://cukrzyca.tech/wp-content/uploads/2020/07/jaroslaw-jerry-gilewicz.jpg"
                                 alt=""
                                 class="timetable__img timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">09:15</span>
                            <div class="timetable__title">Nowoczesne technologie - przeszłość, teraźniejszość i przyszłość.</div>
                            <div class="timetable__subtitle">
                                <span><a href="#">Jarosław Jerry Gilewicz</a> Cukrzyca.Tech</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agenda__item agenda__item--active">
                    <div class="timetable__container">
                        <div class="timetable__icon">
                            <img src="http://cukrzyca.tech/wp-content/uploads/2020/07/maciej-łysiak.jpg" alt=""
                                 class="timetable__img timetable__img--active">
                        </div>
                        <div class="timetable__item">
                            <span class="timetable__hour">9:45</span>
                            <div class="timetable__title">TBA</div>
                            <div class="timetable__subtitle">
                                <span><a href="#">Maciej Łysiak</a> Nie Słodzę Vlog</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!--    <section class="section media">
        <div id="media" class="section__link"></div>
        <h2 class="section__title">Media o nas</h2>
        <div class="media__wrapper">
            <div class="media__container">
                <div class="media__item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/2175.jpg" alt="post img"
                         class="post__thumb">
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
                    <img src="<?php echo get_template_directory_uri() ?>/img/226.jpg" alt="post img"
                         class="post__thumb">
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
                    <img src="<?php echo get_template_directory_uri() ?>/img/3588.jpg" alt="post img"
                         class="post__thumb">
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
    </section> -->
    <section class="section register">
        <div id="register" class="section__link"></div>
        <h2 class="section__title">Bilety i rejestracja</h2>
        <div class="register__wrapper">
            <div class="register__container">
                <div class="register__item">
                    <div class="ticket__container">
                        <div class="ticket__header">
                            <span class="ticket__subtitle"></span>
                            <h3 class="ticket__title">Darmowe Expo</h3>
                            <div class="ticket__price">0 zł</div>
                        </div>
                        <div class="ticket__body">
                            <ul class="ticket__advantages">
                                <li>Jeden dzień (wybrany)</li>
                                <li>Ponad 10 wystawców</li>
                                <li>Strefa networking</li>
                            </ul>
                        </div>
                    </div>
                    <a href="https://app.evenea.pl/event/cukrzycatechfest2020/" class="btn register__btn">Zarejestruj się</a>
                </div>
                <div class="register__item">
                    <div class="ticket__container">
                        <div class="ticket__header">
                            <span class="ticket__subtitle"></span>
                            <h3 class="ticket__title">Scena główna</h3>
                            <div class="ticket__price">50 zł</div>
                        </div>
                        <div class="ticket__body">
                            <ul class="ticket__advantages">
								<li>Prelekcje i wykłady</li>
                                <li>Dwa dni Expo</li>
                                <li>Lunch i kawa</li>
                                <li>Strefa networking</li>
                            </ul>
							<br/><br/><br/><br/><p style="text-align:center;">
							<b>Już wkrótce!</b>
							</p>
                        </div>
                    </div>
                    <!--<a href="" class="btn register__btn">Kup Bilet</a>--></div>
                <div class="register__item">
                    <div class="ticket__container">
                        <div class="ticket__header">
                            <span class="ticket__subtitle"></span>
                            <h3 class="ticket__title">Warsztaty</h3>
                            <div class="ticket__price"></div>
                        </div>
                        <div class="ticket__body">
                            <ul class="ticket__advantages">
                                <li>Psychologiczne</li>
                                <li>Dietetyczne</li>
                                <li>AAPS Build Party</li>
                                <li>Loop Build Meetup</li>
                            </ul>
							<br/><br/><br/><br/><p style="text-align:center;">
							<b>Już wkrótce!</b>
							</p>
                        </div>
                    </div>
                    <!--<a href="" class="btn register__btn">Sprawdź ofertę</a>--></div>
            </div>

        </div>
    </section>
    <section class="section partners">
        <div id="partners" class="section__link"></div>
        <h2 class="section__title">Partnerzy</h2>
		 <div class="partners__wrapper">
            <span class="partners__subtitle" style="font-size:20px !important;"><b>Partner Strategiczny</b></span>
            <div class="partners__container">
                <img src="http://cukrzyca.tech/wp-content/uploads/2020/07/1200px-Hoffmann-La_Roche_logo.svg.png" alt="Roche"
                     class="partners__img">

            </div>
        </div>
		<div class="partners__wrapper">
            <div class="partners__container"><span class="partners__subtitle"><br/><br/></span></div>
        </div>
        <div class="partners__wrapper">
            <span class="partners__subtitle">organizatorzy</span>
            <div class="partners__container">
                <img src="http://cukrzyca.tech/wp-content/uploads/2020/07/logo-cukrzycatech.jpg" alt="partner logo"
                     class="partners__img">
				<img src="http://cukrzyca.tech/wp-content/uploads/2020/07/d_labs_logo-1.jpg" alt="partner logo"
                     class="partners__img">

            </div>
        </div>


    </section>
    <section class="section contact">
        <div id="contact" class="section__link"></div>
        <h2 class="section__title">Kontakt</h2>
        <div class="contact__wrapper">
            <div class="contact__container">
                <p class="contact__text">
                    jerry@cukrzyca.tech<br/>
					+48 784 367 186
                </p>
                <button class="btn contact__btn">Zapisz się do newslettera</button>
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


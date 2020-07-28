<footer class="footer">
    <div class="footer__container">
        <div class="footer__item">
            <img src="<?php echo get_template_directory_uri() ?>/img/cukrzycatechfest-footerlogo.png" alt="footer logo"
                 class="footer__logo">
            <div class="social__container">
                <div class="social__item">
                    <a href="https://www.facebook.com/groups/loopedpolska/" target="_blank" referrerpolicy="no-referrer" rel="noopener">
                        <img src="<?php echo get_template_directory_uri() ?>/img/social_fb.svg" alt="socialmedia_icon"
                             class="social__img">
                    </a>
                </div>
                <div class="social__item">
                    <a href="https://www.linkedin.com/company/cukrzyca-tech" target="_blank" referrerpolicy="no-referrer" rel="noopener">
                        <img src="<?php echo get_template_directory_uri() ?>/img/social_li.svg" alt="socialmedia_icon"
                             class="social__img">
                    </a>
                </div>
				 <div class="social__item">
                    <a href="https://www.instagram.com/cukrzyca.tech/" target="_blank" referrerpolicy="no-referrer" rel="noopener">
                        <img src="<?php echo get_template_directory_uri() ?>/img/social_ig.svg" alt="socialmedia_icon"
                             class="social__img">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__item"><span>Projekt graficzny: <a href="https://cary.one/" class="footer__item">Cary One</a></span></div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>

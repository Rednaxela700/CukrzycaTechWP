<footer class="footer">
    <div class="footer__container">
        <div class="footer__item">
            <img src="<?php echo get_template_directory_uri() ?>/img/cukrzyca_techfest_footer.png" alt="footer logo"
                 class="footer__logo">
            <div class="social__container">
                <div class="social__item">
                    <a href="https://" target="_blank" referrerpolicy="no-referrer" rel="noopener">
                        <img src="<?php echo get_template_directory_uri() ?>/img/social_fb.svg" alt="socialmedia_icon"
                             class="social__img">
                    </a>
                </div>
                <div class="social__item">
                    <a href="https://" target="_blank" referrerpolicy="no-referrer" rel="noopener">
                        <img src="<?php echo get_template_directory_uri() ?>/img/social_tw.svg" alt="socialmedia_icon"
                             class="social__img">
                    </a>
                </div>
                <div class="social__item">
                    <a href="https://" target="_blank" referrerpolicy="no-referrer" rel="noopener">
                        <img src="<?php echo get_template_directory_uri() ?>/img/social_li.svg" alt="socialmedia_icon"
                             class="social__img">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__item"><span>Projekt graficzny: Cary One</span></div>
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

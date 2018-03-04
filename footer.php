    <footer class="footer">
        <div class="footer__left-block">
            <a name="bottom" class="footer__anchor"></a>
            <a href="https://vk.com/mrglock" class="footer_link-social">
                <img src="img/vk_logo.svg" alt="Страница Вконтакте" class="footer__vk-logo">
            </a>
            <p class="footer__copyright">Все права защищены. 2017 г.</p>
        </div>
        <div class="footer__right-block">
            <a href="mailto:blah-blah@yandex.ru" class="footer__link-mail">
                <p class="footer__text-mail">blah-blah@yandex.ru</p>
            </a>
            <a href="https://vk.com/ya_mashamosya" class="footer__link-creator">
                <p class="footer__text-creator">Created by Chuvatkina M.</p>
            </a>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.nicescroll.iframehelper.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script>
        $(function() {  
        $("html").niceScroll({
            cursorcolor: '#2E3E5C',
            cursorwidth: "8px",
            cursorborder: 'none',
            background: "#6D92BE",
            cursoropacitymin: 0,
            cursoropacitymax: 0,
            nativeparentscrolling:  true,
            directionlockdeadzone: false
    });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(1000);
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".section-fourth__anchor").click(function() {
                $('body').scrollTo(".footer__anchor", 500);
            });
        });
    </script>
</body>
</html>
<section class="back-2">
    <div class="section-width">
        <h1 class="linedTtl">ЗАКАЗАТЬ СЦЕНАРИЙ</h1>
        <form class="question">
            <input type="text" id="testid" placeholder="Имя" name="name" />
            <input type="text" placeholder="E-mail" name="email" />
            <input type="text" class="last" placeholder="Телефон" name="phone" />
            <textarea placeholder="Вопрос" name="comment"></textarea>
            <div class="response"></div>
            <input type="submit" id="sendEmail" value="Отправить" />
        </form>
    </div>
</section>
<section>
    <div class="section-width">
        <div class="logos">
            <?php echo apply_filters('the_content', get_post_field('post_content', 783)); ?>
        </div>

        <p class="req">
            <?php echo get_theme_mod('inn', 'ИП Постнова М.П., ИНН 301726210632, ОГРНИП 309301620100039, БИК 041806835, Р/с 40802810310000040955'); ?><br/>
            <?php echo get_theme_mod('address', 'г. Астрахань, ул. Кирова 55а, офис 414‏'); ?>
        </p>
    </div>
</section>
<div style="display: none;">
    <div id="mail">
        <h1 class="linedTtl">Написать нам</h1>
        <form class="questionMail">
            <input type="text" placeholder="Имя" name="name" />
            <input type="text" placeholder="E-mail" name="email" />
            <input type="text" class="last" placeholder="Телефон" name="phone" />
            <textarea placeholder="Комментарий" name="comment"></textarea>
            <div class="response"></div>
            <input type="submit" value="Отправить" />
        </form>
    </div>
</div>
<div style="display: none;">
    <div id="brif">
        <h1 class="linedTtl">Запрос коммерческого предложения</h1>
        <form id="brif-form" class="questionMail">
            <input type="text" placeholder="Имя" name="name" />
            <input type="text" placeholder="E-mail" name="email" />
            <input type="text" class="last" placeholder="Телефон" name="phone" />
            <textarea placeholder="Комментарий" name="comment"></textarea>
            <div class="response"></div>
            <input type="submit" value="Отправить" />
        </form>
    </div>
</div>
<div style="display: none;">
    <div id="scen">
        <h1 class="linedTtl">Заказать сценарий</h1>
        <form class="questionMail">
            <input type="text" placeholder="Имя" name="name" />
            <input type="text" placeholder="E-mail" name="email" />
            <input type="text" class="last" placeholder="Телефон" name="phone" />
            <textarea placeholder="Комментарий" name="comment"></textarea>
            <div class="response"></div>
            <input type="submit" value="Отправить" />
        </form>
    </div>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter29735900 = new Ya.Metrika({
                    id: 29735900,
                    webvisor: true,
                    clickmap: true,
                    accurateTrackBounce: true
                });
            } catch (e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29735900" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php wp_footer() ?>
</body>
</html>
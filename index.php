<?php get_header(); ?>
<section>
    <div class="section-width">
        <h2 class="darkTtl">
            Первый сценарий для квеста в реальности <br />разработан нами в декабре 2013 года.
        </h2>
        <div class="scen-desc">
            <span class="icon1">Заключаем договор.</span>
            <span class="icon2">100% юридическая<br />ответственность.</span>
            <span class="icon3">Безналичный расчет.</span>
            <span class="icon4">Работа на результат.</span>
        </div>
    </div>
</section>
<section class="shadow">
    <div class="section-width">
        <h1 class="darkTtl">Реализованные сценарии</h1>
        <p class="tiny tiny__bigger">более 50 сценариев для России, СНГ и Европы</p>
    </div>
    <?php $scenario = new WP_Query( array( 'post_type' => 'scenario', 'posts_per_page' => -1) ); ?>
    <div class="scen-image">
        <ul>
            <?php while ( $scenario->have_posts() ) : $scenario->the_post(); ?>
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
                $url = $thumb['0'];
            ?>

            <a href="<?php the_permalink(); ?>"><li style="background-image: url(<?=$url?>)" class="<?php if(get_post_meta(get_the_ID(), 'meta-box-checkbox', true)){echo "new";} ?>">
					<span class="scen-title">
						<?php the_title(); ?><br/>
						<span class="scen-city"><?php echo get_post_meta(get_the_ID(), 'city', true); ?></span>
					</span>
            </li></a>
<!--             <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/2.jpg);">
					<span class="scen-title">
						Загадки Тутанхамона<br/>
						<span class="scen-city">Мурманск</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/3.jpg);">
					<span class="scen-title">
						Замок Графа Дракулы<br/>
						<span class="scen-city">Анапа</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/4.jpg);">
					<span class="scen-title">
						Заточение<br/>
						<span class="scen-city">Нефтеюганск</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/5.jpg);" class="new">
					<span class="scen-title">
						Звонок<br/>
						<span class="scen-city">Красноярск</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/6.jpg);">
					<span class="scen-title">
						Код да Винчи<br/>
						<span class="scen-city">Набережные Челны</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/7.jpg);">
					<span class="scen-title">
						Комната допроса<br/>
						<span class="scen-city">Сургут</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/8.jpg);">
					<span class="scen-title">
						Курортный роман<br/>
						<span class="scen-city">Анапа</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/9.jpg);" class="new">
					<span class="scen-title">
						E.B.O.L.A.<br/>
						<span class="scen-city">Бишкек</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/10.jpg);">
					<span class="scen-title">
						Побег из Алькатраса<br/>
						<span class="scen-city">Нефтеюганск</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/11.jpg);">
					<span class="scen-title">
						Узники подземелья<br/>
						<span class="scen-city">Уссурийск</span>
					</span>
            </li>
            <li style="background-image: url(<?php bloginfo('template_directory'); ?>/images/quests/12.jpg);">
					<span class="scen-title">
						Шпион, выйди вон<br/>
						<span class="scen-city">Сургут</span>
					</span>
            </li> -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>   
        </ul>
        <div class="clear"></div>
    </div>
    <div class="section-width">
        <p class="centered">Это только часть из множества других реализованных сценариев!</p>
        <p class="italic">
            Мы напишем сценарий квеста на любую<br />заявленную Вами тематику!<span>
                    Долой шаблоны!
                </span>
        </p>
    </div>
</section>
<section class="shadow">
    <div class="section-width examples">
        <h1 class="linedTtl dark">Примеры из наших сценариев</h1>
        <div class="scen">
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/1.jpg" data-fancybox-group="gallery">
                <img style="display: none;" alt="Сценарий для квеста в реальности" />
                <div class="item1"></div>
            </a>
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/2.jpg" data-fancybox-group="gallery">
                <div class="item2"></div>
            </a>
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/3.jpg" data-fancybox-group="gallery">
                <div class="item3"></div>
            </a>
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/4.jpg" data-fancybox-group="gallery">
                <div class="item4"></div>
            </a>
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/5.jpg" data-fancybox-group="gallery">
                <div class="item5"></div>
            </a>
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/6.jpg" data-fancybox-group="gallery">
                <div class="item6"></div>
            </a>
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/7.jpg" data-fancybox-group="gallery">
                <div class="item7"></div>
            </a>
            <a class="fancybox" href="<?php bloginfo('template_directory'); ?>/images/scenario/8.jpg" data-fancybox-group="gallery">
                <div class="item8"></div>
            </a>
        </div>
    </div>
</section>
<section class="shadow">
    <div class="section-width examples">
        <h1 class="linedTtl dark">Наша команда</h1>
        <div class="team">
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/images/team/team1.jpg" alt="Александр. Сценарист квестов" />
                <p>
                    <span>Александр</span><br />
                    Сценарист квестов<br />
                    7 лет опыта
                </p>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/images/team/team2.jpg" alt="Михаил. Сценарист квестов" />
                <p>
                    <span>Михаил</span><br />
                    Сценарист квестов<br />
                    2 года опыта
                </p>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/images/team/team3.jpg" alt="Евгений. Гейм-дизайнер" />
                <p>
                    <span>Евгений</span><br />
                    Гейм-дизайнер<br />
                    11 лет опыта
                </p>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/images/team/team4.jpg" alt="Оксана. Звукорежиссер" />
                <p>
                    <span>Оксана</span><br />
                    Звукорежиссер<br />
                    9 лет опыта
                </p>
            </div>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/images/team/team5.jpg" alt="Егор. Дизайнер интерьеров" />
                <p>
                    <span>Егор</span><br />
                    Дизайнер интерьеров<br />
                    5 лет опыта
                </p>
            </div>
        </div>
    </div>
</section>
<section class="shadow">
    <div class="section-width prices">
        <h1 class="linedTtl dark">Стоимость разработки</h1>
        <p class="tiny">Скидка при совместном заказе 20 000 руб.</p>
        <div class="price-wrap">
            <div class="price scen-box">
                Сценарий для<br />квеста<br />
                <span>75 000 руб</span>
            </div>
            <div class="sign">
                <span>+</span>
            </div>
            <div class="price sound-box">
                Музыкальное<br />сопровождение<br />
                <span>24 000 руб</span>
            </div>
            <div class="sign">
                <span>=</span>
            </div>
            <div class="price sale-box">
                <span class="old">99 000 руб</span><br />
                <span class="new">79 000 руб</span>
            </div>
        </div>
        <a href="#scen" id="brif-btn-3" class="download-brif-2 fancybox">Заказать сценарий</a>
    </div>
</section>
<section class="shadow">
    <div class="section-width sheme">
        <h1 class="linedTtl dark">Схема работы</h1>
        <div class="sheme-wrap">
            <div class="number">
                <span>1</span><br/>
                Получите<br />коммерческое<br/>
                предложение<br/>
            </div>
            <div class="arrow">
                <img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.jpg" />
            </div>
            <div class="number">
                <span>2</span><br />
                Заполните<br />
                бриф
            </div>
            <div class="arrow">
                <img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.jpg" />
            </div>
            <div class="number">
                <span>3</span><br />
                Мы подпишем<br />
                с вами договор
            </div>
            <div class="number">
                <span>5</span><br />
                Вы получите<br />
                результат
            </div>
            <div class="arrow">
                <img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.jpg" />
            </div>
            <div class="number">
                <span>4</span><br />
                Выполним работу<br />
                в срок
            </div>
        </div>
    </div>
</section>
<section class="shadow">
    <div class="section-width faq">
        <h1 class="linedTtl dark">Часто задаваемые вопросы</h1>
        <div class="faq-box">
            <h1>Что я получу заказав у вас сценарий для моего квеста?</h1>
            <p>
                Вы получаете все необходимое, для того, чтобы приступить к реализации квеста в реальности, а именно 4 файла, которые содержат:
            </p>
            <ol>
                <li>Пошаговый алгоритм действий и загадок, рассчитанных на полноценную игру команды из 4х человек, а именно на 60 минут;</li>
                <li>Подробное описание загадок, действий, расположения предметов. Рисунки, примеры и пр. Если описываемые предметы возможно приобрести в интернете, то указываем ссылки на них.</li>
                <li>Рисованный план квеста адаптированный под Ваше помещение. С указанием и расположением всех предметов, загадок, и последовательности их нахождения игроками.</li>
                <li>Блок-схема действий игроков. Показаны различные варианты последовательности действий, которые приведут к Победе. Кроме того, предусмотрена защита от возникновения ситуаций, когда игроки выполняют действия из середины или конца квеста, минуя ряд предыдущих.</li>
            </ol>
        </div>
        <div class="faq-box">
            <h1>Предусмотрено ли Вашими сценариями использование технически-сложных, электронных механизмов?</h1>
            <p>
                Да, обязательно! Во всех наших квестах используются технически-сложные механизмы, которые вызывают у игроков эффект WOW! Все описываемые нами механизмы-загадки, электронные механизмы, вполне реализуемы инженерами и гармонично встраиваются именно в том жанре квеста, который создается.
            </p>
        </div>
        <div class="faq-box">
            <h1>Зачем нужно музыкальное сопровождение квеста?</h1>
            <p>
                Музыкальное сопровождение квеста это фоновая музыка с набором спецэффектов, голосов, звуков, погружающая игроков в атмосферу квеста в процессе его прохождения. Длительность звукового сопровождения не менее 60 минут. Записывается на студии звукозаписи, нашим профессиональным звукорежиссером.
            </p>
        </div>
    </div>
</section>
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
<?php get_footer() ?>
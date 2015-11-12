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
        <?php $our_team = new WP_Query( array( 'post_type' => 'our_team', 'posts_per_page' => 5) ); ?>
        <h1 class="linedTtl dark">Наша команда</h1>
        <!-- <img src=" <?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="" class="slider-image"> -->
        <div class="team">
            <?php while ( $our_team->have_posts() ) : $our_team->the_post(); ?>
            <div>
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" />
                <p>
                    <span><?php the_title(); ?></span><br />
                    <?php the_content(); ?>
                </p>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
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
     <?php  
      $posts = get_posts( array(
            'numberposts'     => 5, // тоже самое что posts_per_page
            'offset'          => 0,
            'category'        => '',
            'category_name'   => 'FAQ',
            'orderby'         => 'post_date',
            'order'           => 'ASC',
            'include'         => '',
            'exclude'         => '',
            'meta_key'        => '',
            'meta_value'      => '',
            'post_type'       => 'post',
            'post_mime_type'  => '', // image, video, video/mp4
            'post_parent'     => '',
            'post_status'     => 'publish'
        ) );
        foreach($posts as $post){ setup_postdata($post);?>
        <div class="faq-box">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?>
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
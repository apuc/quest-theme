<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<section>
    <?php wp_nav_menu( array( 'theme_location' => 'header_menu','container' => 'nav', 'container_class' => 'navigation_top') );?>
    <div class="section-width">
        <div class="header-block left">
            <a href="/">
                <img src="<?php echo get_theme_mod('img-logo', 'Логотип не установлен'); ?>" alt="Сценарий для квеста.рф" width="200" />
            </a>
        </div>
        <div class="header-block center">
            <div class="header-phone lptracker_phone"><div></div><?php echo get_theme_mod('phone_textbox', '8 (999) 601-33-47'); ?></div>
            <br/>
            <div class="header-phone-label">
                <span class="header-phone-label-item">Мы онлайн</span>
                <span class="header-phone-label-item header-phone-label-item-whatsapp">Whatsapp</span>
                <span class="header-phone-label-item header-phone-label-item-viber">Viber</span>
            </div>
        </div>
        <div class="header-block right">
            <a href="#mail" id="mail-btn" class="mailUs fancybox">Написать нам</a>
        </div>
    </div>
</section>

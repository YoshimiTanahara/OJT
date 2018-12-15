<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
<!--     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation/_reset.scss"> -->
<!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
  <?php
    wp_enqueue_script('jquery');
    // wp_enqueue_script('base'),get_template_directory_url(),
    wp_head();
  ?>
</head>
<body>

    <header>
        <section class="header-nav">
            <!-- ナビゲーションバー -->
            <div class="navigation">
                <?php
                    $args = [
                    'menu' => 'navigation',
                    'container' => 'false',
                    'menu_class' => 'navi-list'
                    ];
                    wp_nav_menu($args);
                    ?>

                    <?php
                    wp_head();
                ?>
            </div>
            <!-- ロゴ -->
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            </div>
        </section>
    <!-- ハンバーガーメニュー -->
        <div id="hbToggle" class="js-hamburger hamburger"><span></span></div>
            <div id="drower-bg"></div>
        <ul class="drower js-drower">
            <?php
                wp_nav_menu($args);
                wp_head(); 
            ?>
        </ul>
    </header>


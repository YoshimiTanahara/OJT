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

    <header class="header-layer">
        <section class="header-nav">
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
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            </div>
        </section>
    </header>


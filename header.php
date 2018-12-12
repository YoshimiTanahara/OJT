<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/css/app.css">
<!-- Swiper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
  <?php
    wp_enqueue_script('jquery');
    wp_enqueue_script('base'),get_template_directory_url(),
    wp_head();
  ?>
</head>
<body>
  <header ?php body_class(); ?>
    <div class="picture">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>./img/logo.png" alt="">
      </div>
    </div>

<?php
  $args = [
  'menu' => 'navigation',
  'container' => 'false',
  'menu_class' => 'header-right'
];
wp_nav_menu($args);
?>

  <?php
    wp_head();
  ?>
  </header>
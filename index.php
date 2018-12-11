<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/css/app.css">
</head>
<body>
  <header></header>
  <main>
    <section class="picture">
      <div class="logo">
        <img src="./img/logo.png" alt="">
      </div>
      <div class="visual">
        <img src="./img/visual_1_pc.png" alt="">
      </div>
      <div class="text">
        <img src="./img/visual_text_pc.png" alt="">
      </div>
    </section>
  </main>

  <?php get_template_part('page', 'article'); ?>

  <footer></footer>
</body>
</html>
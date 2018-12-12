<?php get_header(); ?>

<?php get_bloginfo('template_url').'/img/visual_3_sp.png' ?>



<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>
        <h1 class="single-page-ttl"><?php the_title(); ?></h1>
        <div class="single-page-contents"><?php the_content(); ?></div>
    <?php endwhile; ?>
<?php else: ?>
    <h2 class="single-page-ttl">投稿はまだありません</h2>
<?php endif; ?>


<?php get_footer(); ?>
<?php get_header(); ?>
<!-- 
<figure class="custom-image-test">
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</figure> -->



<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>
        <h1 class="single-page-ttl"><?php the_title(); ?></h1>
        <div class="single-page-contents"><?php the_content(); ?></div>
    <?php endwhile; ?>
<?php else: ?>
    <h2 class="single-page-ttl">投稿はまだありません</h2>
<?php endif; ?>


<?php get_footer(); ?>
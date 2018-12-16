<?php get_header(); ?>


<main>
    <div class="picture-container">
        <div class="text">
            <img class="textpc"src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="pc">
            <img class="textsp" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="sp">
        </div>

<!-- swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="visual">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="pc">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="visual">
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
    </div>

        <p class="info">進化し続ける「街」</p>
        <p class="info">アメリカンビレッジマガジン</p>
</main>

<?php get_template_part('page', 'article'); ?>

<?php get_footer(); ?>
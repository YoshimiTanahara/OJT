<?php get_header(); ?>


<main>
    <div class="picture-container">
        <div class="text">
            <img class="textpc" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="pc">
            <img class="textsp" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="sp">
        </div>

<!-- swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="visual">
                    <img class="visual-pc" src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="pc">
                     <img class="visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="pc">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="visual">
                    <img class="visual-pc" src="<?php echo get_template_directory_uri(); ?>/img/visual_7_pc.png" alt="pc">
                     <img class="visual-sp" src="<?php echo get_template_directory_uri(); ?>/img/visual_7_sp.png" alt="pc">
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
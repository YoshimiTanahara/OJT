<?php get_header(); ?>

    <main>
            <div class="text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="">
            </div>

      <!-- swiper -->
            <div class="visual">
                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="">
                <p class="info">進化し続ける「街」アメリカンビレッジマガジン</p>
            </div>
        </div>
    </main>

<?php get_template_part('page', 'article'); ?>

<?php get_footer(); ?>
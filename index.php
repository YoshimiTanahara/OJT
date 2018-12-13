<?php get_header(); ?>

    <main>
            <div class="text">
                <img class="textpc"src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="pc">
                <img class="textsp" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="sp">
            </div>

      <!-- swiper -->
            <div class="visual">
                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="pc">
              <!--   <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="sp"> -->

                <p class="info">進化し続ける「街」アメリカンビレッジマガジン</p>
            </div>
        </div>
    </main>

<?php get_template_part('page', 'article'); ?>

<?php get_footer(); ?>
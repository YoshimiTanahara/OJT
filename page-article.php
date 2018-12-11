<!-- 記事一覧 -->
    <article>
    <?php if (have_posts()): ?>

            <? while (have_posts()): the_post(); ?>
            <section>
                <?php if (has_post_thumbnail()): ?>
                    <figure><?php the_post_thumbnail('thumbnail'); ?></figure>
                <?php else: ?>
                    <figure><img src="ダミー画像を入れる" alt="dummy"></figure>
                <?php endif; ?>
                <time><?php the_time('20y / m / d');?></time>
                <h3><?php the_title(); ?></h3>
                <nav><a href="">READ MORE</a></nav>
            </section>
            <?php endwhile; ?>

    <?php else: ?>
    <img src="ダミー画像を入れる" alt="dummy">

    <?php endif; ?>
    </article>
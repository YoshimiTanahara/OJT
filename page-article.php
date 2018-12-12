<!-- 記事一覧 -->

    <article class="articles-container">
    <h1 class="article-section-ttl">Latest Articles</h1>
    <ul class="article-wrapper">
    <?php if (have_posts()): ?>

            <? while (have_posts()): the_post(); ?>
           <section class="article-card">
                <?php if (has_post_thumbnail()): ?>
                    <div><?php the_post_thumbnail('middle'); ?></div>
                <?php else: ?>
                    <figure><img src="ダミー画像を入れる" alt="dummy"></figure>
                <?php endif; ?>
                <time><?php the_time('20y / m / d');?></time>
                <h3 class="article-title"><?php the_title(); ?></h3>
                <nav><a href="" class="readmore">READ MORE</a></nav>
            </section>
            <?php endwhile; ?>

    <?php else: ?>
    <img src="ダミー画像を入れる" alt="dummy">

    <?php endif; ?>
    </ul>
    </article>
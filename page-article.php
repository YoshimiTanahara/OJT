<!-- 記事一覧 -->
<article class="articles-container">
    <h1 class="article-section-ttl">Latest Articles</h1>
    <ul class="article-wrapper">
        <?php if (have_posts()): ?>
            <? while (have_posts()): the_post(); ?>
                <section class="article-card">
                    <div class="thumbmail-container">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="thumbnail"><?php the_post_thumbnail('middle'); ?></div>
                        <?php else: ?>
                            <div class="thumbnail"><p>サムネイルはありません</p></div>
                        <?php endif; ?>
                    </div>

                    <div class="card-text-container">
                        <div class="post-time"><time><?php the_time('Y / m / d');?></time></div>
                        <h3 class="article-title"><?php the_title(); ?></h3>
                        <div class="readmore-container"><a href="<?php the_permalink(); ?>"class="readmore">READ MORE</a></div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php else: ?>
        <div class="no-article"><p>投稿記事はまだありません</p></div>
        <?php endif; ?>
    </ul>
</article>
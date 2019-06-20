<?php get_header(); ?>

<main>
<?php query_posts('posts_per_page=6'); ?>    
<?php if (have_posts()): ?>

    <h1>Latest Articles</h1>

    <div class="content">
        <ul class="img-box">
            
        <?php while(have_posts()): the_post(); ?>

        <li>
            <?php has_post_thumbnail(); ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <span class="date"><?php the_time('Y/m/d'); ?></span>    
            <span class="text-box"><?php the_title(); ?></span>
            <div class="readmore">                 
                <a href="<?php the_permalink(); ?>">READ MORE</a>
            </div>
        </li>
        <?php endwhile; ?>

        </ul>

<?php else: ?>
  <h2 class="sub-title">投稿はありません</h2>
<?php endif; ?>

</div>
<div>
    <a href=""></a>
</div>

</main>

<?PHP get_footer(); ?>
<?php get_header(); ?>

<?php have_posts(); ?>
<h2>Latest Articles</h2>

<ul>
    <?php while(have_posts()): the_post(); ?>

    <li>
    <?php has_post_thumbnail(); ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <span><?php the_time('Y/m/d'); ?></span>    
        <span><?php the_title(); ?></span>
        <a href="<?php the_permalink(); ?>">READ MORE</a>
    </li>
    <?php endwhile; ?>

</ul>


<?PHP get_footer(); ?>
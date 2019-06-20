 <?php get_header(); ?>

<div class="content">
  <main>

  <?php if(have_posts()): while(have_posts()):the_post(); ?>

    <h1><a><?php the_title(); ?></a></h1>

    
    <p><?php the_content(); ?></p>

    <?php endwhile; endif; ?>

    <?php previous_post_link('%link','前へ'); ?>
    <?php next_post_link('%link','次へ'); ?>

  </main>

</div>


<?php get_footer(); ?>













<?php get_footer(); ?>
<?php get_header(); ?>

<?php 
if(have_posts()) :
    while (have_posts()) :
        the_post();
// 記事を表示する部分のソース

    endwhile;
else:
    // 記事が無い場合の表示ソース

endif;
    

?>











<?php get_footer(); ?>
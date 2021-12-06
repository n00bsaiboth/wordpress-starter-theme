<?php
/**
 * The main template file
 * 
 */

get_header();
?>

<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_title(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

<?php else: ?>

<p>No posts found. </p>

<?php endif; ?>

<?php
    get_footer();
?>
<?php
/**
 * The main template file
 * 
 */

get_header();
?>

<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?> <?php post_class(); ?>>
<div>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
</div>
<div>
<?php the_content(); ?>
</div>
<?php endwhile; ?>

<?php else: ?>

<p>No posts found. </p>

<?php endif; ?>

<?php
    get_footer();
?>
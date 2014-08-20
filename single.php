<?php get_header(); ?>

<?php the_post() ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<p> This is single page. <?php the_content(); ?></p>

<h3>Tags</h3>
<p><?php the_tags(); ?></p>

<?php get_footer(); ?>
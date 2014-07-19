<?php
/*
  Template Name: Spring Field Page
 */
?>
<p>This is spring field page.</p>

<?php the_post() ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<p><?php the_content(); ?></p>
<?php get_header() ?>

<?php if ( have_posts() ) : ?>
 <?php while ( have_posts() ) :
the_post(); ?>
 <!-- Muestra el contenido del post
-->
 <?php endwhile; 

 ?>

<?php get_footer() ?>
 <?php

 
get_header(); ?>


 
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//

?>
    <?php the_content();?>
    <?php
	} // end while
     wp_reset_postdata();
} // end if
?>

<?php get_footer(); ?>

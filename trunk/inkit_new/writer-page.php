<?php
/**
 * Template Name: Writer Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package Inkit
 * @subpackage Inkit
 * @since Inkit
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="wrapper"><!------content start here------->
<div class="content_top_bg"></div>
<div class="content">
	<?php get_sidebar(); ?>
	
	<div class="sidebar2">
	<div class="content_bg1">	  <div class="stories1" ><img src="<?php bloginfo('template_directory'); ?>/images/writer_of_the_month_img.png" width="406" height="88"></div>
	  <div class="stories_main_heading_writer"><p>Writer of the month</p></div>
	  <div class="main_writer"><?php the_content(); ?></div>
	  <div class="clear"></div>
	  <div class="bottomcorner_writer"><img src="<?php bloginfo('template_directory'); ?>/images/bottom_corner.png" width="44" height="44"></div>
	</div>
	
	<div class="content_last_bg"></div>
	
	</div><!------sidebar2 ends here-------->

</div><!------sidebar1 close here-------->

</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage inkit
 * @since inkit
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="wrapper"><!------content start here------->
<div class="content_top_bg"></div>
<div class="content">
	<?php get_sidebar(); ?>
	
	<div class="sidebar2">
	<div class="content_about_bg">
		  <div class="stories" ><img src="<?php bloginfo('template_directory'); ?>/images/aboutthefounder.png" width="406" height="88"></div>
	  <div class="main1"><?php the_content(); ?></div>
		</div>
	
	<div class="content_last_bg"></div>
	
	</div><!------sidebar2 ends here-------->

</div><!------sidebar1 close here-------->

</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
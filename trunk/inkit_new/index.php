<?php
/**
 * The main template file.
 * @package WordPress
 * @subpackage inkit
 */

get_header(); ?>


<div class="wrapper"><!------content start here------->
<div class="content_top_bg"></div>
<div class="content">
	<?php get_sidebar(); ?>
	<?php if(is_home()): ?><?php get_template_part( 'content-home', get_post_format() ); ?><?php endif; ?> 
	
	
</div><!------sidebar1 close here-------->


</div>
<?php get_footer(); ?>
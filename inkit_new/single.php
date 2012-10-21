<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage inkit
 * @since inkit
 */

get_header();?>
<div class="wrapper">
	<!------content start here------->
	<div class="content_top_bg"></div>
	<div class="content">
		<?php get_sidebar();?>
		<div class="sidebar2">
			<!------sidebar2 start here-------->
			<div class="content_bg1">
				
				<?php 
				 $category = get_the_category();  
	$path = get_bloginfo('template_directory');
	switch ($category[0]->cat_ID) {
		case '1':
			$img_header = '<img width="320" height="73" src="'. $path .'/images/latest_stories.png">';
			break;
			
		case '3':
			$img_header = '<img width="320" height="73" src="'. $path .'/images/latest_poem.png">';
			break;
			
		case '13':
			$img_header = '<img width="193" height="81" src="'. $path .'/images/ourblog_img.png">';
			break;	
	}
	?>
	
<div class="stories"><?php echo $img_header; ?></div>
<div class="clear"></div>

				<div class=" single">
					<?php while (  have_posts() ) : the_post(); ?>	
					  <div class="cont1">
					  	<div class="stores_subheading"><p><?php the_title(); ?></p></div><div class="clear"></div>
					  	<div class="stores_content"><?php the_content(); ?><p>By : <?php echo get_post_meta($post->ID, 'custom_author', true); ?><br /><?php echo get_post_meta($post->ID, 'custom_school_name', true); ?></p></div>
					  </div>
					<?php endwhile; ?>
				</div>
				<div class="back"><a href="javascript: window.history.go(-1)"><img  src="<? bloginfo('template_directory') ?>/images/back.jpg"></a></div>
			</div>
			<div class="content_last_bg"></div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>

<style>
	.single{height: 380px;overflow: auto;padding-left: 21px;padding-top: 50px;}
	.cont1 {float: left;height: auto;max-height: 645px;overflow: hidden;width: 546px;}
	.stores_content {width: 100%;}
</style>

<?php get_footer(); ?>

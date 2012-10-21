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
		<?php $category = get_the_category();   ?>
<?php if($category[0]->cat_ID == 14 ):  ?>
	<div class="stories" ><img src="<?php bloginfo('template_directory'); ?>/images/panel_of_judges.png" width="320" height="73"></div><div class="main2">
<?php while (  have_posts() ) : the_post(); ?>	 
	  	<div class="judge_left"><div class="judge_picture"><img src="<?php echo get_post_meta($post->ID, 'custom_picture_judge', true); ?>" /></div></div>
  		<div class="judge_right"><div class="judge_title"><p><?php the_title(); ?></p></div><div class="judge_content"><p><?php the_content(); ?></p></div></div> 
  		<div class="clear"></div><br /><br />
<?php endwhile; ?>
<?php wp_paging($args); ?>
</div>
<?php else : ?>
	
	<?php 
	$path = get_bloginfo('template_directory');
	switch ($category[0]->cat_ID) {
		case '1':
			$img_header = '<img width="193" height="81" src="'. $path .'/images/stories.png">';
			break;
			
		case '3':
			$img_header = '<img width="193" height="81" src="'. $path .'/images/poems.png">';
			break;
			
		case '13':
			$img_header = '<img width="193" height="81" src="'. $path .'/images/ourblog_img.png">';
			break;	
	}
	?>
	
<div class="stories"><?php echo $img_header; ?></div>
<div class="clear main">
<?php while (  have_posts() ) : the_post(); ?>
  <div class="cont1" <?php if($i!=2 && $i!=5 && $i!=8) :?> style="background:url(<?php bloginfo('template_directory'); ?>/images/line.png)  no-repeat scroll 177PX 0 transparent;"<?php endif; $i++;?> >
	  <div class="stores_subheading"><p><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></p></div>
	  <div class="stores_content"><p>By : <?php echo get_post_meta($post->ID, 'custom_author', true); ?><br /><?php echo get_post_meta($post->ID, 'custom_school_name', true); ?></p></div>  
  </div>
<?php endwhile; ?>
</div>
<div id="paging_main"><?php wp_paging(); ?></div>
<?php endif; ?>
						</div>
			<div class="content_last_bg"></div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
<style>
	.page-numbers{margin: 0px 3px;}
</style>
<?php get_footer(); ?>

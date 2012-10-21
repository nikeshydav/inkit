
<div class="sidebar2"><!------sidebar2 start here-------->
<div class="content_bg">
   <div class="stories"><img width="193" height="81" src="<?php bloginfo('template_directory'); ?>/images/stories.png"></div>
  <div class="main">
  <div class="stories_main_heading"><p>Latest Stories</p></div>
  <div class="clear">
	 <?php 
	$args=array('category__in' => array(1),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	?>
	<?php while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
	  <div class="cont1" <?php if($i!=2) :?> style="background:url(<?php bloginfo('template_directory'); ?>/images/line.png)  no-repeat scroll 175PX 0 transparent;"<?php endif; $i++;?> >
		  <div class="stores_subheading"><p><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></p></div>
		  <div class="stores_content"><p>By : <?php echo get_post_meta($post->ID, 'custom_author', true); ?><br /><?php echo get_post_meta($post->ID, 'custom_school_name', true); ?></p></div>
	  </div>
	<?php endwhile; ?>  
  </div> 
</div>
  
 <div class="more"><a href="<?php echo get_category_link(1); ?>"><img width="78" height="26" src="<?php bloginfo('template_directory'); ?>/images/more.png"></a></div>
 <div class="poems"><img width="193" height="81" src="<?php bloginfo('template_directory'); ?>/images/poems.png"></div>
   <div class="main">
  <div class="stories_main_heading1"><p>Latest Stories</p></div>
  <div class="clear">
   <?php 
	$args=array('category__in' => array(3),'post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,);
	$my_query = null;
	$my_query = new WP_Query($args);
	$i=0;
	?>
	<?php while (  $my_query->have_posts() ) :  $my_query->the_post(); ?>
	  <div class="cont1" <?php if($i!=2) :?> style="background:url(<?php bloginfo('template_directory'); ?>/images/line.png)  no-repeat scroll 175PX 0 transparent;"<?php endif; $i++;?> >
	  <div class="stores_subheading"><p><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></p></div>
	  <div class="stores_content"><p>By : <?php echo get_post_meta($post->ID, 'custom_author', true); ?><br /><?php echo get_post_meta($post->ID, 'custom_school_name', true); ?></p></div>
	  </div>
	<?php endwhile; ?>  
  </div>
</div>
 <div class="more1"><a href="<?php echo get_category_link(3); ?>"><img width="78" height="26" src="<?php bloginfo('template_directory'); ?>/images/more.png"></a></div> 


</div>
<div class="content_last_bg"></div>
</div>
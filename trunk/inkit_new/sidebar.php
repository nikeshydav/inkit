<?php
/**
 * The Sidebar containing the main widget area.
 * @package WordPress
 * @subpackage inkit
 * @since inkit
 */
?>
<?php 
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
?>
<div class="sidebar1">
<div class="sidebar1_content">
<ul>
<li class="s_img1"><a href="<?php echo get_permalink(41); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/submit<?php if(get_the_ID() == 41): ?>_hover<?php endif; ?>.png"  ></a></li>
<li class="s_img2"><a href="<?php echo get_permalink(73); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/writeofmonth<?php if(get_the_ID() == 73): ?>_hover<?php endif; ?>.png"></a></li>
<li>
<div class="s_img3">
<a href="<?php echo get_category_link(14); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/panelof-judges<?php if($cat_id == 14): ?>_hover<?php endif; ?>.png" class="img1"></a>
<a href="<?php echo get_permalink(50); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/askyourdoubts<?php if(get_the_ID() == 50): ?>_hover<?php endif; ?>.png" class="img1"></a>
<a href="<?php echo get_category_link(13); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ourblog<?php if($cat_id == 13): ?>_hover<?php endif; ?>.png" class="img1"></a>
</div>
</li>
<li>
	<ul class="facebook_bg">
	<li class="s_img4"><a href="https://www.facebook.com/pages/Ink-it-in/372499559476596" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.jpg"></a></li>
	<li class="s_img5"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sponsor.png"></a></li>
	</ul>
</li>
</ul>
</div>
</div><!------sidebar1 close here-------->

<script>
$(document).ready(function(){
	$('.s_img1 img, .s_img2 img, .s_img3 img').on('mouseenter',function(){
		var srs = $(this).attr('src').split(".png");
		$(this).attr('src', srs[0]+"_hover.png");
	});
	
	$('.s_img1 img, .s_img2 img, .s_img3 img').on('mouseleave',function(){
		var srs = $(this).attr('src').split("_hover.png");
		$(this).attr('src', srs[0]+".png");
		
	});
});
</script>
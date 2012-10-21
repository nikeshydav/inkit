<?php
/**
 * Template Name: Doubts Page
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
	<div class="content_bg1">
	 	  <div class="doubts" ><img src="<?php bloginfo('template_directory'); ?>/images/doubts.png" width="193" height="81"></div>
	  <div class="main1">

<form id="new_post_form" name="new_post_form" action="" enctype="multipart/form-data" method="POST">

	<ul class="post-form">
		<li>
			<label for="new-post-title">Name  </label>
			<input class="requiredField" type="text" value="" name="post_title" id="new-post-title" minlength="2">
		</li>
		<li>
			<label for="cf_custom_email">Email  </label>
			<input class="requiredField" type="text" name="cf_custom_email" id="cf_custom_email" minlength="2" value="">
		</li>		
		<li>
			<label for="new-post-desc">Ask Your Doubt  </label>
			<textarea name="post_content" class="requiredField" id="new-post-desc" cols="60" rows="8"></textarea>
		</li>
		<li style="display:none;">
			<label for="cf_custom_number">Captcha  </label>
			<input class="requiredField" type="text" name="cf_custom_number" id="cf_custom_number" minlength="2" value="">
		</li>
		<li class="post">
			<input type="image" src="<?php bloginfo('template_directory'); ?>/images/post.jpg" name="post_new_submit" value="Submit">
		</li>
	</ul>
</form>
</div>
	</div>
	
	<div class="content_last_bg"></div>
	
	</div><!------sidebar2 ends here-------->

</div><!------sidebar1 close here-------->

</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
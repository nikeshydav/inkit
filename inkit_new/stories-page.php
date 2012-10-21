<?php
/**
 * Template Name: Story and Peom Page
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
	   <div class="sumit_story_poem" ><img src="<?php bloginfo('template_directory'); ?>/images/submit_stories_poems.png" width="444" height="86"></div>
	  <div class="main1">

<form id="new_post_form" name="new_post_form" action="" enctype="multipart/form-data" method="POST">
<?php
$err_tit = $err_aut = $err_sch = $err_age = $err_eml = $err_num = $err_cont == '';

if($_POST){
	$category = $_POST['category'];
	$post_title = $_POST['post_title'];
	$custom_author = $_POST['custom_author'];
	$custom_school_name = $_POST['custom_school_name'];
	$custom_age = $_POST['custom_age'];
	$custom_email = $_POST['custom_email'];
	$custom_number = $_POST['custom_number'];
	$post_content = $_POST['post_content'];
	
	if($category =='' ) $err_cat ='err';
	if($post_title =='' )$err_tit ='err';
	if($custom_author=='' )$err_aut ='err';
	if($custom_school_name=='' )$err_sch ='err';
	if($custom_age=='' )$err_age ='err';
	if($custom_email=='' )$err_eml ='err';
	if($custom_number=='' )$err_num ='err';
	if($post_content=='' )$err_cont ='err';
	
	
	if($err_tit == '' && $err_aut == '' && $err_sch == '' && $err_age == '' && $err_eml == '' && $err_num == '' && $err_cont == '' ){
			$my_post = array(
			     'post_title' => $post_title,
			     'post_date' => NOW(),
			     'post_content' => $post_content,
			     'post_status' => 'publish',
			     'post_type' => 'post',
			  );

			echo $post_id = wp_insert_post($my_post);
			
			add_post_meta($post_id, 'custom_author', $custom_author);
			add_post_meta($post_id, 'custom_school_name', $custom_school_name);
			add_post_meta($post_id, 'custom_age', $custom_age);
			add_post_meta($post_id, 'custom_email', $custom_email);
			add_post_meta($post_id, 'custom_number', $custom_number);
	}
	
}
?>
<style> .err{border:1px solid #F00;}</style>
	<ul class="post-form">
		<li>
			<label for="new-post-cat"> Category  </label>
			<select name="category" id="cat" class="cat requiredField <?php echo $err_cat ?>">
				<option value="-1">--Select--</option>
				<option class="level-0" value="13">Story</option>
				<option class="level-0" value="3">Poem</option>
			</select>
		</li>
		<li>
			<label for="new-post-title"> Title </label>
			<input class="requiredField <?php echo $err_tit ?>" type="text" value="" name="post_title" id="new-post-title" minlength="2">
		</li>
		<li>
			<label for="custom_author"> Added By  </label>
			<input class="requiredField <?php echo $err_aut ?>" type="text" name="custom_author" id="custom_author" minlength="2" value="">
		</li>
		<li>
			<label for="custom_school_name">School Name  </label>
			<input class="requiredField <?php echo $err_sch ?>" type="text" name="custom_school_name" id="custom_school_name" minlength="2" value="">
		</li>
		<li>
			<label for="custom_age">Age  </label>
			<input class="requiredField <?php echo $err_age ?>" type="text" name="custom_age" id="custom_age" minlength="2" value="">
		</li>
		<li>
			<label for="custom_email">Email  </label>
			<input class="requiredField <?php echo $err_eml ?>" type="text" name="custom_email" id="custom_email" minlength="2" value="">
		</li>
		<li>
			<label for="custom_number">Contact Number  </label>
			<input class="requiredField <?php echo $err_num ?>" type="text" name="custom_number" id="custom_number" minlength="2" value="">
		</li>
		<li>
			<label for="new-post-desc">Stories Description  </label>
			<textarea name="post_content" class="requiredField <?php echo $err_cont ?>" id="new-post-desc" cols="60" rows="8"></textarea>
		</li>
		<li class="submit">
			<input type="image" src="<?php bloginfo('template_directory'); ?>/images/submit.jpg" name="post_new_submit" value="Submit">
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
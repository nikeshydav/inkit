<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 * @package WordPress
 * @subpackage inkit
 * @since inkit
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/latest.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Libby_Heavy_900.font.js"></script>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript">
			Cufon.replace('.cufon');
		</script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="container"><!----container start here------>
<div id="header"><!-----header start here----------->
<div class="menu">
<div class="menuholder">
<div class="logo"><a href="<?php echo bloginfo('home') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/inkit_logo.png"></a></div>
<div class="menu1"><?php 
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
?>
	<ul>
		<li><a href="<?php echo bloginfo('home') ?>" id="home" <?php if(is_home()): ?> class="active"  <?php endif; ?> >Home</a></li>
		<li><a href="<?php echo get_category_link(1); ?>" id="stories" <?php if($cat_id == 1): ?> class="active"  <?php endif; ?> >Stories</a>
		 <ul class="menu_bg">
       			<li class="ddmenu"><a href="<?php echo get_category_link(1); ?>">Latest Stories</a></li>
       			<li style="margin-left:3px;"><hr></li>
      			 <li class="ddmenu"><a href="<?php echo get_category_link(15); ?>">Featured Stories</a></li>
    </ul></li>
		<li><a href="<?php echo get_category_link(3); ?>" id="poem" <?php if($cat_id == 3): ?> class="active"  <?php endif; ?> >poem</a>
		 <ul class="menu_bg1">
       <li class="ddmenu"><a href="<?php echo get_category_link(3); ?>">Latest Poems</a></li>
       <li style="margin-left:3px;"><hr></li>
      <li class="ddmenu"><a href="<?php echo get_category_link(16); ?>">Featured Poems</a></li>
    </ul></li>	
		<li><a href="<?php echo get_permalink(2); ?>" id="about" <?php if(get_the_ID() == 2): ?> class="active"  <?php endif; ?> >about us</a></li>
	</ul>
</div>
<div class="clear"></div>
<div class="title"><p class="cufon"><img src="<?php bloginfo('template_directory'); ?>/images/title.png" /></p></div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>


</div><!-----header close here-------->

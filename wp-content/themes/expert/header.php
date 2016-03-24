<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="height=device-height,width=device-width" />
<meta name="viewport" content="initial-scale=1.0" />
<meta name="HandheldFriendly" content="true"/>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
wp_head();
?>
</head>
<body  <?php body_class(); ?>>
<?php 
global $dor_general_settings_page;
foreach ( $dor_general_settings_page->options_generalsettings as $value ) {
	if(isset($value['id'])){
		
		if ( get_theme_mod( $value['id'] ) === FALSE ) {
		   $$value['id'] = $value['std']; 
		} 
		else {
		   $$value['id'] = get_theme_mod( $value['id'] ); 
		}
		
	}
}

expert_update_body_integration();
$header_image = get_header_image(); ?>
<div id="wrapper">
<div id="header">
	<div id="header-block">
		<div class="container <?php echo \expert_theme\device; ?>">
			<div class="ftricons">
			   <a  <?php if( ! $_show_facebook_icon || get_theme_mod("_facebook_url") == "" || get_theme_mod("_facebook_url") == "#"  ){ echo "style=\"display:none;\""; } ?> href="<?php if( trim($_facebook_url) ) { echo esc_url($_facebook_url);} else { echo "javascript:;";}?>" target="_blank" title="Facebook">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/Facebook-icon.png" width="45" height="45" alt="" />
			   </a>
			   <a <?php if(!$_show_twitter_icon || get_theme_mod("_twitter_url") == "" || get_theme_mod("_twitter_url") == "#"){ echo "style=\"display:none;\""; } ?> href="<?php if( trim($_twitter_url) ){ echo esc_url($_twitter_url);} else { echo "javascript:;";}?>" target="_blank" title="Twitter">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/twitter_icon.png" width="45" height="45" alt="" />
			   </a>
			   <a <?php if( ! $_show_rss_icon || get_theme_mod("_rss_url") == ""|| get_theme_mod("_rss_url") == "#" ) { echo "style=\"display:none;\""; } ?>  href="<?php if( trim($_rss_url) ) { echo esc_url($_rss_url);} else { echo "javascript:;";}?>" target="_blank" title="Rss">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/rss-icon.png" width="45" height="45" alt="" />
			   </a>
			</div>
			<div id="nav-search">
			   <?php get_search_form(); ?>
			</div>
		</div>
	</div>
<?php
if(! empty($header_image)){
global $dor_color_control_page;
foreach ( $dor_color_control_page->options_colorcontrol as $value ) {
    if ( get_theme_mod( $value['id'] ) === FALSE ) {
    	$$value['id'] = $value['std']; 
	} else { 
	    $$value['id'] = get_theme_mod( $value['id'] ); 
	}
}
?>
<h1 id="site-title" class="site-title" style="	height: 76px;">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1><?php if(display_header_text()) bloginfo( 'name' ); ?></h1>
			</a>
</h1>
	<?php
} else if( trim($_logo_img) ) { ?>
<h1 id="site-title">
	    <span>
		    <a style="color: #c7c6c6;" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	         <?php
	          echo "<img id=\"site-title\" src=\"".$_logo_img."\" alt=\"logo\">";
	          ?>
           </a>
       </span>
    </h1>
	<?php }
	else{ ?>
 
	<h1 id="site-title">
	   <span>
			<a class="site-title-a" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php  echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>
			</a>
	   </span>
	</h1>
	
	<?php } ?>
	<div class="get_title" style="display:none"><label><?php if(is_home()){echo '';} else { echo get_the_title( get_option('page_for_posts', true)) ;} ?></label></div><div class="web_buisnes_menu">
  <?php
  $wdwt_show_home = true;
	if(has_nav_menu( 'primary-menu')){
	  $wdwt_show_home = false;
	} 
	$wdwt_menu = wp_nav_menu(array(
		'show_home' => $wdwt_show_home,
		'theme_location' => 'primary-menu',
		'fallback_cb'  => 'wp_page_menu', 
		'sort_column' => 'menu_order',
		'echo'            => false,  
		'menu_class' => 'nav container', 
		'theme_location' => 'primary-menu' ) );	
	echo $wdwt_menu;
		?>
	</div>
</div>
<!--header-->
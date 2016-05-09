<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Athena
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        
		<meta name="description" content="第69回九大祭　期日：2016年11月　場所：九州大学伊都キャンパス">
		<meta name="keywords" content="69,2016,九大祭,kyudaisai,2016年,学祭,九州大学,ミスコン,伊都,糸島,伊都キャンパス,ミスキャンパス,百花">
        
        <meta property="og:title" content="第69回九大祭公式webサイト">
        <meta property="og:image" content="http://www.kyudaisai.jp/69thpre/wp-content/img/top_img.jpg">
        <meta property="og:type" content="website" />
        <meta property="og:url" contetnt="[http://www.lyudaisai.jp]">
        <meta name="robots" content="noindex,nofollow" />

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <div id="athena-search" class="noshow">
            
            <div class="row">
                
                <span class="fa fa-search"></span>
                
                <?php get_search_form( ); ?>
                
                <span class="fa fa-close"></span>
       
                
                
            </div>
            
        </div>
        
        <div id="page" class="hfeed site">

            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'athena'); ?></a>

            <header id="masthead" class="site-header" role="banner">

                <div id="athena-header" class="<?php echo is_front_page() ? 'frontpage' : ''; ?>">

                    <div class="header-inner">

                        <div class="row">

                            <div class="athena-branding">

                                <div class="site-branding">
                                    
                                    <div id="athena-logo" class="<?php echo get_theme_mod('logo_bool', 'on' ) == 'on' ? 'show' : 'hidden'; ?>">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                            <img src="<?php echo get_theme_mod( 'logo', get_template_directory_uri() . '/inc/images/logo.png' ) ?>" title="<?php bloginfo('name'); ?>" />
                                        </a>
                                    </div>
                                        <h1 class="site-title <?php echo get_theme_mod('logo_bool', 'on' ) == 'off' ? 'show' : 'hidden'; ?>">
                                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                        </h1>

                                        <p class="site-description <?php echo get_theme_mod('logo_bool', 'on' ) == 'off' ? 'show' : 'hidden'; ?>">
                                            <?php bloginfo('description'); ?>
                                        </p>
                                        
                                    <?php //endif; ?>
                                    
                                </div><!-- .site-branding -->

                            </div>

                            <div class="athena-header-menu">

                                <?php if( class_exists( 'WooCommerce' ) ) : ?>
                                
                                    <div class="athena-mobile-cart">

                                        <a class="athena-cart" href="<?php echo WC()->cart->get_cart_url() ; ?>"><span class="fa fa-shopping-cart"></span> <?php echo WC()->cart->get_cart_total(); ?></a>

                                    </div>
                                
                                <?php endif; ?>
                                
                                
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                    
                                    <?php
                                    
                                    if( has_nav_menu( 'primary' ) ) :
                                        
                                        $menu = wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'menu_id' => 'primary-menu',
                                            'menu_class' => 'athena-nav',
                                        ));
                                    else :
                                        
                                        echo '<div id="athena-add-menu"><a class="athena-cart" href="' . admin_url( 'nav-menus.php' ) . '">' . __( 'Add a Primary Menu', 'athena' ) . '</a></div>';
                                    
                                    endif;
                                    

                                    ?>


                                </nav><!-- #site-navigation -->

                                
                            </div>

                        </div>
                    </div>
                </div>

            </header><!-- #masthead -->

            <div id="content" class="site-content">

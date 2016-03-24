<?php
ob_start(); 
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
include_once('baztro.php');
include_once('includes/installs.php');
include_once('includes/core/core.php');
// Implement the Custom Header feature.
require get_template_directory() . '/includes/custom-header.php';
require get_template_directory() . '/includes/customizer.php';

function magazine_scripts() {
	wp_enqueue_style( 'magazine-style', get_stylesheet_uri() );
	wp_enqueue_style( 'magazine-font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	}
add_action( 'wp_enqueue_scripts', 'magazine_scripts' );


	/*
	* Home Icon for Menu
	*/
	
	function magazine_hdmenu() {	
		echo '<ul>';
		if ('page' != get_option('show_on_front')) {
		if (is_front_page())
$class = 'class="current_page_item home-icon"';
else
$class = 'class="home-icon"';
			echo '<li ' . $class . ' ><a href="'.esc_url(home_url()) . '/"><i class="fa fa-home"></i></a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}

add_filter( 'wp_nav_menu_items', 'magazine_home_link', 10, 2 );
function magazine_home_link($items, $args) {
if (is_front_page())
$class = 'class="current_page_item home-icon"';
else
$class = 'class="home-icon"';
$homeMenuItem =
'<li ' . $class . '>' .
$args->before .
'<a href="' .esc_url(home_url( '/' )) . '" title="Home">' .
$args->link_before . '<i class="fa fa-home"></i>' . $args->link_after .
'</a>' .
$args->after .
'</li>';
$items = $homeMenuItem . $items;
return $items;
}

function magazine_post_meta_data() {
	printf( __( '%2$s  %4$s', 'magazine' ),
	'meta-prep meta-prep-author posted', 
	sprintf( '<span itemprop="datePublished" class="timestamp updated">%3$s</span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_html( get_the_date() )
	),
	'byline',
	sprintf( '<span class="author vcard" itemprop="author" itemtype="http://schema.org/Person"><span class="fn">%3$s</span></span>',
		get_author_posts_url( get_the_author_meta( 'ID' ) ),
		sprintf( esc_attr__( 'View all posts by %s', 'magazine' ), get_the_author() ),
		esc_attr( get_the_author() )
		)
	);
}
/* Enable support for post-thumbnails ********************************************/
		
	// If we want to ensure that we only call this function if
	// the user is working with WP 2.9 or higher,
	// let's instead make sure that the function exists first
	
function magazine_theme_setup() { 
		if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' );
	}	
		add_image_size( 'defaultthumb', 270, 270 );

		/**
         * magazine translations.
         * Add your files into /languages/ directory.
		 * @see http://codex.wordpress.org/Function_Reference/load_theme_textdomain
         */
	    load_theme_textdomain('magazine', get_template_directory() . '/languages');
		/**
         * Add callback for custom editor stylesheets. (editor-style.css)
         * @see http://codex.wordpress.org/Function_Reference/add_editor_style
         */
		add_theme_support("title-tag");
        add_editor_style();
		
		/**
         * This feature enables post and comment RSS feed links to head.
         * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
         */
        add_theme_support('automatic-feed-links');
		
		register_nav_menus(
			array(
 				'magazine-navigation' => __('Navigation', 'magazine'),
				)		
		);
		//woocommerce plugin support
		add_theme_support( 'woocommerce' );
		
	// Setup the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'magazine_custom_background_args', array(
		'default-color' => '#ffffff',
		'default-image' => '',
	) ) );
		

			
global $content_width;
if ( ! isset( $content_width ) ) {
	$content_width = 770;
}

}	
	add_action( 'after_setup_theme', 'magazine_theme_setup' );
	

/* Excerpt ********************************************/

    function magazine_excerptlength_teaser($length) {
    return 10;
    }
    function magazine_excerptlength_index($length) {
    return 48;
    }
    function magazine_excerptmore($more) {
    return '...';
    }
    
    
    function magazine_excerpt($length_callback='', $more_callback='') {
    global $post;
    add_filter('excerpt_length', $length_callback);
 
    add_filter('excerpt_more', $more_callback);
   
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = ''.$output.'';
    echo $output;
    }

	
//----------------------------- Search form ----------------------------------------//

 function magazine_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __( 'Search for:','magazine' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Go','magazine' ) .'" />
	</div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'magazine_search_form' );


/* Widgets ********************************************/

    function magazine_widgets_init() {

	register_sidebar(array(
		'name' => __( 'Sidebar Right', 'magazine' ),
	    'before_widget' => '<div class="box clearfloat"><div class="boxinside clearfloat">',
	    'after_widget' => '</div></div>',
	    'before_title' => '<h4 class="widgettitle">',
	    'after_title' => '</h4>',
		'id' => 'magsidebar',
	));
	register_sidebar(array(
		'name' => __( 'Bottom Menu 1', 'magazine' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
		'id' => 'magbottom1',
	));

	register_sidebar(array(
		'name' => __( 'Bottom Menu 2', 'magazine' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
		'id' => 'magbottom2',
	));	

	register_sidebar(array(
		'name' => __( 'Bottom Menu 3', 'magazine' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
		'id' => 'magbottom3',
	));	

	register_sidebar(array(
		'name' => __( 'Bottom Menu 4', 'magazine' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
		'id' => 'magbottom4',
	));	

	
}
add_action('widgets_init', 'magazine_widgets_init');
//---------------------------- [ Pagenavi Function ] ------------------------------//
 
function magazine_pagenavi() {
	global $wp_query;
	$big = 123456789;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
	            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	            echo '<div class="wp-pagenavi">';
	            echo '<span class="pages">'. $paged . ' of ' . $wp_query->max_num_pages .'</span>';
	            foreach ( $page_format as $page ) {
	                    echo "$page";
	            }
	           echo '</div>';
	 }
}
/* ----------------------------------------------------------------------------------- */
/* Customize Comment Form
/*----------------------------------------------------------------------------------- */
add_filter( 'comment_form_default_fields', 'magazine_comment_form_fields' );
function magazine_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="large-6 columns"><div class="row collapse prefix-radius"><div class="small-3 columns">' . '<span class="prefix"><i class="fa fa-user"></i>' . __( 'Name','magazine' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</span> </div>' .
                    '<div class="small-9 columns"><input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></div></div></div>',
        'email'  => '<div class="large-6 columns"><div class="row collapse prefix-radius"><div class="small-3 columns">' . '<span class="prefix"><i class="fa fa-envelope-o"></i>' . __( 'Email','magazine' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</span></div> ' .
                    '<div class="small-9 columns"><input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="20"' . $aria_req . ' /></div></div></div>',
        'url'    => '<div class="large-6 columns"><div class="row collapse prefix-radius"><div class="small-3 columns">' . '<span class="prefix"><i class="fa fa-external-link"></i>' . __( 'Website','magazine' ) . '</span> </div>' .
                    '<div class="small-9 columns"><input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div></div>'        
    );
    
    return $fields;
    
    
}

add_filter( 'comment_form_defaults', 'magazine_comment_form' );
function magazine_comment_form( $argsbutton ) {
        $argsbutton['class_submit'] = 'button'; 
    
    return $argsbutton;
}

ob_clean();
?>
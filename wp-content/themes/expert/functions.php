<?php
function expert_setup_elements(){
	// add custom header in admin menu
	add_theme_support( 'custom-header', array(
	    'default-text-color'  => '220e10',
		'default-image'       => '',
		'header-text'         => true,
		'wp-head-callback'    => 'expert_header_style',
		
	) );
		// add custom background in admin menu
	$expert_defaults = array(
		'default-color'          => 'ECECEC',
		'default-image'          => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $expert_defaults );
	add_theme_support( 'title-tag' );
	if(!get_theme_mod('background_color',false)){
		set_theme_mod('background_color','ececec')	;
	}
	
	load_theme_textdomain('sp_webBusiness', get_template_directory() . '/Languages' );
	add_editor_style();
	
}
add_action( 'after_setup_theme', 'expert_setup_elements' );



function expert_header_style(){
	$header_image = get_header_image();
	?>
	
	<style type="text/css">
		
	<?php
	if ( ! empty( $header_image ) ) {
	?>.site-title {
			background: url(<?php header_image(); ?>) no-repeat scroll top;
			/*background-size: 1600px auto;*/
		}
		<?php
	}
	?>
		#site-title h1, #site-title a{
		color:#<?php echo get_header_textcolor(); ?> !important;
		}
		
	</style>
	
	<?php
}


$expert_mobile_browser = '0';
$expert_tablet_browser = '0';

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $expert_mobile_browser++;
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $expert_mobile_browser++;
}    
 
 $expert_user_agent = empty($_SERVER['HTTP_USER_AGENT']) ? false : $_SERVER['HTTP_USER_AGENT'];


$expert_mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$expert_mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($expert_mobile_ua,$expert_mobile_agents)) {
    $expert_mobile_browser++;
}
 if(isset($_SERVER['ALL_HTTP']))
if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini') > 0) {
    $expert_mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows') > 0) {
    $expert_mobile_browser = 0;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'iemobile')>0) {
	$expert_mobile_browser++;
}


//////////////////////////////////////tablet
if (preg_match('/(ipad|android|android 3.0|xoom|sch-i800|playbook|tablet|kindle)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $expert_tablet_browser++;
}
if(preg_match('/(ipad|viewpad|tablet|bolt|xoom|touchpad|playbook|kindle|gt-p|gt-i|sch-i|sch-t|mz609|mz617|mid7015|tf101|g-v|ct1002|transformer|silk| tab)/i', $expert_user_agent )  ||( preg_match('/android/i', $expert_user_agent ) && !preg_match('/mobile/i', $expert_user_agent )) ){
	$expert_tablet_browser++;
}

if ($expert_mobile_browser > 0) { define ("expert_theme\device", "phone" ,TRUE);}

elseif ($expert_tablet_browser > 0) { define ("expert_theme\device", "tablet" ,TRUE);}

else {define ("expert_theme\device", "", TRUE);}  


function expert_entry_meta() {
    $categories_list = get_the_category_list(', ' );

	if ( $categories_list ) {
		echo '<span class="categories-links"><span class="sep">C.</span> ' . $categories_list . '</span>';
	}


	$tag_list = get_the_tag_list( '', __( ' , ', 'sp_webBusiness' ) );
	
	if ( $tag_list ) {
		echo '<span class="tags-links"><span class="sep">T. </span>' . $tag_list . '</span>';
	}


}


function expert_posted_on() {
	
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>','sp_webBusiness' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s','sp_webBusiness' ), get_the_author() ) ),
		get_the_author()
		
	);
}

/////////////////////// include admin

function expert_post_nav() {
	global $post;
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next    = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
		<nav class="page-navigation">
			<?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title', 'Previous post link' ); ?>
			<?php next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>', 'Next post link'  ); ?>
		</nav>
	<?php
}



require_once('admin/main_admin_controler.php');

function expert_widgets_init()
{

    // Area 1, located at the top of the sidebar.

    register_sidebar(array(

            'name' => __('Primary Widget Area','sp_webBusiness'),

            'id' => 'sidebar-1',

            'description' => __('The primary widget area','sp_webBusiness'),

            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',


            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-title">',

            'after_title' => '</h3>',

        )
    );

    // Area 2, located below the Primary Widget Area in the sidebar. Empty by default.

    register_sidebar(array(

            'name' => __('Secondary Widget Area', 'sp_webBusiness'),

            'id' => 'sidebar-2',

            'description' => __('The secondary widget area', 'sp_webBusiness'),

            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-title">',

            'after_title' => '</h3>',
        )
    );
    register_sidebar(array(

            'name' => __('Footer Sidebar', 'sp_webBusiness'),

            'id' => 'footer-sidebar',

            'description' => __('The footer-sidebar', 'sp_webBusiness'),

            'before_widget' => '<div style="float: left;" id="%1$s" class="widget-container widget_conteiner_fotter %2$s">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="widget-title">',

            'after_title' => '</h3>',
        )
    );
}

//Register sidebars by running expert_widgets_init() on the widgets_init hook.

add_action('widgets_init', 'expert_widgets_init');

//Add support for WordPress 3.0's custom menus

add_action('init', 'expert_register_menu');


//Register area for custom menu

function expert_register_menu()
{

    register_nav_menu('primary-menu', __('Primary Menu','sp_webBusiness'));

}
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails


    add_theme_support('post-thumbnails', array('post'));

    set_post_thumbnail_size(150, 150);


add_action('publish_page', 'expert_add_custom_field_automatically');

add_action('publish_post', 'expert_add_custom_field_automatically');

function expert_add_custom_field_automatically($post_ID)
{

    if (!wp_is_post_revision($post_ID)) {

        add_post_meta($post_ID, 'field-name', 'custom value', true);

    }

}

if( !function_exists('expert_the_excerpt_max_charlength')){
	function expert_the_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;
	
		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				echo mb_substr( $subex, 0, $excut ).'...';
			} else {
				echo $subex.'...';
			}
			
		} else {
			echo $excerpt;
		}
	}
}

function expert_post_thumbnail($width, $height)
{

    $thumb = get_post_custom_values("Image");

    if (!empty($thumb)) {

        $str = '<img src="' . $thumb[0] . '" width="' . $width . '" height="' . $height . '" alt="' . get_the_title() . '" width="' . $width . '" height="' . $height . '" border="0" />';
        return $str;

    }

    return !empty($thumb);
}

function expert_catch_that_image()
{

    global $post, $posts;

    $first_img = '';
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if(isset($matches [1] [0])){	
    	$first_img = $matches [1] [0];
	}
    if (empty($first_img)) {

        //Defines a default image

        $first_img = get_template_directory_uri() . "/images/default.jpg";

    }

    return $first_img;
}


function expert_first_image($width, $height,$url_or_img=0)
{
    $thumb = expert_catch_that_image();
    if ($thumb) {

        $str = "<img src=\"";
        $str .= $thumb;

        $str .= '"';
        $str .= 'alt="'.get_the_title().'" width="'.$width.'" height="'.$height.'" border="0" />';
        return $str;
    }
}

function expert_empty_thumb()
{

    $thumb = get_post_custom_values("Image");

    return !empty($thumb);

}

function expert_display_thumbnail($width, $height)
{
    if (has_post_thumbnail()) the_post_thumbnail(array($width, $height));

    elseif (!expert_empty_thumb()) {
        return expert_first_image($width, $height);
    } else {
        return expert_post_thumbnail($width, $height);
    }
}

function expert_thumbnail($width, $height)
{

    if (has_post_thumbnail())

        the_post_thumbnail(array($width, $height));

    elseif (expert_empty_thumb()) {

        return expert_post_thumbnail($width, $height);

    }
}

//the_content($more_link_text, $strip_teaser);

function expert_remove_more_jump_link($link)
{

    $offset = strpos($link, '#more-');
    if ($offset) {
        $end = strpos($link, '"', $offset);
    }
    if ($end) {
        $link = substr_replace($link, '', $offset, $end - $offset);
    }

    return $link;

}

add_filter('the_content_more_link', 'expert_remove_more_jump_link');



function expert_comment($comment, $args, $depth) {
	
	$GLOBALS['comment'] = $comment;
	
	switch ($comment->comment_type){
		case '' :
		?>
		<div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<div class="comment-avatar"><?php echo get_avatar($comment, $size = '54'); ?></div>
		<div class="comment-body">
			<p class="comment-meta"><span
					class="comment-author"><?php comment_author_link(); ?></span><?php _e(' on ', 'sp_webBusiness'); ?><?php comment_date() ?><?php _e(' at ', 'sp_webBusiness'); ?><?php comment_time() ?>
				.</p>
			<?php if ($comment->comment_approved == '0') { ?>
				<p><strong><?php _e('Your comment is awaiting moderation.', 'sp_webBusiness'); ?></strong></p>
			<?php } ?>
		
			<?php comment_text(); ?>
		
			<p class="comment-reply-meta"><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></p>
		</div>
		<?php
		break;
		
		case 'pingback'  :
		case 'trackback' :
		?>
		<div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>" class="post pingback">
		<p><?php _e('Pingback:', 'sp_webBusiness'); ?> <?php comment_author_link(); ?><?php edit_comment_link(__('Edit', 'sp_webBusiness'), ' '); ?></p>
		<?php
		break;
		
	}
}




function expert_update_post_format()
{

    global $options_post_format_options;

    foreach ($options_post_format_options as $value) {

        if (get_theme_mod($value['id']) === FALSE) {
            $value['id'] = $value['std'];
        } else {
            $value['id'] = get_theme_mod($value['id']);
        }

    }
    switch ($pf_post_format) {

        case 1:
            return "post-1";
            break;

        case 2:
            return "post-2";
            break;

        case 3:
            return "post-3";
            break;
    }
}

function expert_update_head_integration()
{

    global $dor_integration_page;

    foreach ($dor_integration_page->options_integration as $value) {

        if (get_theme_mod($value['id']) === FALSE) {
            $$value['id'] = $value['std'];
        } else {
            $$value['id'] = get_theme_mod($value['id']);
        }

    }
	if($_integrate_header_enable)
    	echo stripslashes($_integration_head);

}

function expert_update_body_integration()
{

    global $dor_integration_page;

    foreach ($dor_integration_page->options_integration as $value) {

        if (get_theme_mod($value['id']) === FALSE) {
            $$value['id'] = $value['std'];
        } else {
            $$value['id'] = get_theme_mod($value['id']);
        }

    }
	if($_integrate_body_enable)
   	 echo stripslashes($_integration_body);

}

function expert_update_top_of_post_integration()
{

    global $dor_integration_page;

    foreach ($dor_integration_page->options_integration as $value) {

        if (get_theme_mod($value['id']) === FALSE) {
            $$value['id'] = $value['std'];
        } else {
            $$value['id'] = get_theme_mod($value['id']);
        }

    }
	if($_integrate_singletop_enable)
	 echo stripslashes($_integration_single_top);

}

function expert_update_bottom_of_post_integration()
{

    global $dor_integration_page;

    foreach ($dor_integration_page->options_integration as $value) {

        if (get_theme_mod($value['id']) === FALSE) {

            $$value['id'] = $value['std'];
        } else {

            $$value['id'] = get_theme_mod($value['id']);

        }

    }
	if($_integrate_singlebottom_enable)
		echo stripslashes($_integration_single_bottom);

}



function expert_update_typography()
{
//update options
    global $dor_typography_page;

    foreach ($dor_typography_page->options_typography as $value) {
		if(isset($value['id'])){
			if (get_theme_mod($value['id']) === FALSE) {
				$$value['id'] = $value['std'];
			} else {
				$$value['id'] = get_theme_mod($value['id']);
			}
		}

    }
    ?>

    <style type="text/css">
        h1, h2, h3, h4, h5, h6 {
            font-family: <?php echo $_type_headers_font; ?>;
            font-weight: <?php echo $_type_headers_weight; ?>;
            letter-spacing: <?php echo $_type_headers_kern; ?>;
            text-transform: <?php echo $_type_headers_transform; ?>;
            font-variant: <?php echo $_type_headers_variant; ?>;
            font-style: <?php echo $_type_headers_style; ?>;
        }

        .nav, .metabar, .subtext, .subhead, .widget-title, .reply a, .editpage, #page .wp-pagenavi, .post-edit-link, #wp-calendar caption, #wp-calendar thead th, .soapbox-links a, .fancybox, .standard-form .admin-links, .ftitle small {
            font-family: <?php echo $_type_headers_font; ?>;
            font-weight: <?php echo $_type_headers_weight; ?>;
            letter-spacing: <?php echo $_type_headers_kern; ?>;
            text-transform: <?php echo $_type_headers_transform; ?>;
            font-variant: <?php echo $_type_headers_variant; ?>;
            font-style: <?php echo $_type_headers_style; ?>;
        }

        body {
            font-family: <?php echo $_type_primary_font; ?>;
            font-weight: <?php echo $_type_primary_weight; ?>;
            letter-spacing: <?php echo $_type_primary_kern; ?>;
            text-transform: <?php echo $_type_primary_transform; ?>;
            font-variant: <?php echo $_type_primary_variant; ?>;
            font-style: <?php echo $_type_primary_style; ?>;
        }

        input, textarea {
            font-family: <?php echo $_type_inputs_font; ?>;
            font-weight: <?php echo $_type_inputs_weight; ?>;
            letter-spacing: <?php echo $_type_inputs_kern; ?>;
            text-transform: <?php echo $_type_inputs_transform; ?>;
            font-variant: <?php echo $_type_inputs_variant; ?>;
            font-style: <?php echo $_type_inputs_style; ?>;
        }

    </style>
<?php
}

function expert_update_layout_editor()
{
//for update global options
    global $dor_layout_page;
	if ( ! isset( $content_width ) ) $content_width = 900;

    foreach ($dor_layout_page->options_themeoptions as $value) {
		if(isset($value['id'])){
			if (get_theme_mod($value['id']) === FALSE) {
				
				$$value['id'] = $value['std'];
			} else {
				
				$$value['id'] = get_theme_mod($value['id']);
			}
		}

    }
    if (get_theme_mod("gs_full_width")) {
		
		$them_content_are_width='100%';
		?><script>var full_width_web_buisnes=1</script><?php
		
	}
	else {
			
		$them_content_are_width=$gs_content_area . "px;";
		?><script> var full_width_web_buisnes=0</script><?php
	}
	if (get_theme_mod("gs_full_width")) {
        ?>
        <style>
            body {
                margin-right: 24.1%;
            }
        </style>
    <?php
    }
    switch ($gs_default_layout) {
        //set styles leauts
        case 1:
			?>
            <style type="text/css">
			#sidebar1,
			#sidebar2 {
				display:none;
			}
			#blog	{
				display:block; 
				float:left;
			}
       
            .container{
            width:<?php echo $them_content_are_width; ?>;
            }        
            #blog{
            width:100%;
            }               
            </style>
			<?php
            break;
        case 2:
			?>
            <style type="text/css">
			#sidebar2{
				display:none;
			} 
			#sidebar1 {
				display:block;
				float:right;
			}
			#blog{
				display:block;
				float:left;
			} 
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo $gs_main_column ; ?>%;
            }
            #sidebar1{
            width:<?php echo (100  - $gs_main_column-1); ?>%;
            }
            </style>
			<?php
            break;
        case 3:
			?>
            <style type="text/css">
			#sidebar2{
				display:none;
			} 
			#sidebar1 {
				display:block;
				float:left;
			} 
			#blog{
				display:block;
				float:left;
			}
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo $gs_main_column ; ?>%;
            }
            #sidebar1{
            width:<?php echo (100  - $gs_main_column-1); ?>%;
			margin-right: 1%;
            }
            </style>
			<?php
            break;
        case 4:
		?>
            <style type="text/css">
			#sidebar2{
				display:block;
				float:right;
			} 
			#sidebar1 {
				display:block; float:right;
			} 
			#blog{
				display:block;
				float:left;
			}
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo ($gs_main_column-2) ; ?>%;
            }
            #sidebar1{
            width:<?php echo $gs_pwa_width ; ?>%;
            }
            #sidebar2{
            width:<?php echo (100 - $gs_pwa_width - $gs_main_column); ?>%;
			margin-right: 1%;
            }
            </style>
			 <?php
            break;
        case 5:
		?>
            <style type="text/css">
			#sidebar2{
				display:block;
				float:left;
			} 
			#sidebar1 {
				display:block;
				float:left;
			} 
			#blog{
				display:block;
				float:right;
			}
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo ($gs_main_column-2); ?>%;
            }
            #sidebar1{
            width:<?php echo $gs_pwa_width; ?>%;
			margin-right: 1%;
			}
            #sidebar2{
            width:<?php echo (100- $gs_pwa_width - $gs_main_column); ?>%;
			margin-right: 1%;
            }
            </style>
			<?php
            break;
        case 6:
		?>
            <style type="text/css">
			#sidebar2{
				display:block;
				float:right;
			} 
			#sidebar1 {
				display:block;
				float:left; 
			} 
			#blog{
				display:block;
				float:left;
			}    			       
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo ($gs_main_column-2) ; ?>%;
            }
            #sidebar1{
            width:<?php echo $gs_pwa_width ; ?>%;
			margin-right: 1%;
            }
            #sidebar2{
            width:<?php echo (100 - $gs_pwa_width - $gs_main_column); ?>%;
            }            
            </style>
			<?php
            break;
    }
}


function expert_update_general_settings()
{

    global $dor_general_settings_page;

    foreach ($dor_general_settings_page->options_generalsettings as $value) {

        if (get_theme_mod($value['id']) === FALSE) {
            $$value['id'] = $value['std'];
        } else {
            $$value['id'] = get_theme_mod($value['id']);
        }

    }
}

function expert_update_color_control(){
//for update global options
global $dor_color_control_page;

foreach ($dor_color_control_page->options_colorcontrol as $value) {
     $$value['id'] = $value['std']; 
}
?>

 <style type="text/css">

h1, h2, h3, h4, h5, h6 {
    color:<?php echo $cc_text_headers_color; ?>;
}

.searchback {
    background-color:<?php echo '#'.expert_ligthest_brigths($cc_selected_menu_color,20); ?> !important;
}

.read_more, .post-password-form input[type="submit"], .more-link {
     background-color: <?php echo $cc_selected_menu_color; ?>;
	 color:<?php echo $cc_primary_links_hover_color ?>;
}

#header{
	/*background-color:<?php //echo $cc_content_back_color; ?>;*/
}
.shadow
{
		background:url(<?php echo get_template_directory_uri(); ?>/images/stver.png) bottom center no-repeat <?php echo $cc_shadow_background_color; ?>;
	    background-color: ;
}

.container{
    color: <?php echo $cc_primary_text_color; ?>;
}

#wrapper, #content{
    color: <?php echo $cc_primary_text_color; ?>;
	/*background-color: <?php //echo $cc_content_back_color; ?>;*/
}

#site-title
{
	/*background-color:<?php //echo $cc_content_back_color; ?>;*/
}
#header-block,.web_buisnes_menu{
	background-color:<?php echo $cc_head_elem_back_color; ?>;
}
#footer .container.phone{
	background-color:<?php echo $cc_footer_back_color; ?>;
}

.topPost {
    background-image: url(<?php echo get_template_directory_uri(); ?>/images/topPost-back<?php if($cc_color_scheme == "Theme-1") echo "1"; elseif($cc_color_scheme == "Theme-2") echo "2"; elseif($cc_color_scheme == "Theme-3") echo "3"; else echo "1"; ?>.png);
}
.about_us_img {
   background-image: url(<?php echo get_template_directory_uri(); ?>/images/topPost-back<?php if($cc_color_scheme == "Theme-1") echo "1"; elseif($cc_color_scheme == "Theme-2") echo "2"; elseif($cc_color_scheme == "Theme-3") echo "3"; else echo "1"; ?>.png);
}
body, .content {
  /*  background-color: <?php //echo $cc_content_back_color; ?>;*/
}

#footer {
    background-color: <?php echo $cc_footer_back_color; ?>;
}

#header {
    color: <?php echo $cc_text_headers_color; ?>;
}
#footer {
    color: <?php echo $cc_footer_text_color; ?>;
}
a:link, a:visited {
    text-decoration: none;
    color: <?php echo $cc_primary_links_color; ?>;
}
a {
    text-decoration: none;
    color: <?php echo $cc_primary_links_color; ?>;
}
a:hover, a:focus, a:active {
   color: <?php echo $cc_primary_links_hover_color; ?>;
}
.web_buisnes_menu a:hover, .web_buisnes_menu .current-menu-item > a, .web_buisnes_menu .current_page_item > a,.web_buisnes_menu .current-page-parent > a,.web_buisnes_menu .current-menu-parent  > a  {
    color: <?php echo $cc_primary_links_hover_color; ?>;
}

.web_buisnes_menu li:hover {
    background-color: <?php echo $cc_menu_color; ?>;
}
.get_title{
	background-image:url(<?php echo get_template_directory_uri(); ?>/images/Shado.png);
	background-position: bottom;
	background-repeat: no-repeat;
	color: <?php echo $cc_primary_links_hover_color; ?>;
}
.comment-author .fn {
   color: <?php echo $cc_text_headers_color; ?> !important;
}
.sep{
  color: <?php echo $cc_selected_menu_color; ?>;
}
.nav .current-menu-item, .nav .current_page_item  , .nav .current-page-parent, #menu-button-block,.get_title,.nav .current-menu-parent, a .page-links-number{
   background-color: <?php echo $cc_selected_menu_color; ?>;
}
a .page-links-number{
  color:<?php echo $cc_primary_links_hover_color; ?>;
}
.nav li li:hover {
    background-color: <?php echo $cc_menu_color; ?>;
}
.web_buisnes_menu a{
	color:<?php echo $cc_primary_links_color ?>;
}
.nav.phone  > li  > a, .nav.phone  > li  > a:link, .nav.phone  > li  > a:visited, .page-links-number {
	color:<?php echo $cc_primary_links_color; ?>;
	background:<?php echo $cc_head_elem_back_color; ?>;
}
.nav.phone  > li:hover > a ,.nav.phone  > li  > a:hover, .nav.phone  > li  > a:focus, .nav.phone  > li  > a:active {
	color:<?php echo $cc_primary_links_hover_color; ?>;
	background:<?php echo $cc_menu_color; ?>;
}
#menu-button-block a {
	background-image:url(<?php echo get_template_directory_uri(); ?>/images/menu.phone.png);
}
.nav.phone   li ul li  > a, .nav.phone   li ul li  > a:link, .nav.phone   li  ul li > a:visited {
	color:<?php echo $cc_primary_links_color ?> !important;
}
.nav.phone   li ul li:hover  > a,.nav.phone   li ul li  > a:hover, .nav.phone   li ul li  > a:focus, .nav.phone   li ul li  > a:active,  .nav.phone  li.current-menu-item > a:hover{
	color:<?php echo $cc_primary_links_hover_color; ?> !important;
	background-color:<?php echo $cc_menu_color; ?> !important;
}
.nav.phone  li.has-sub >  a, .nav.phone  li.has-sub > a:link, .nav.phone  li.has-sub >  a:visited {
	background:<?php echo $cc_head_elem_back_color; ?>  url(<?php echo get_template_directory_uri(); ?>/images/menu_right.png) right top no-repeat !important;
	background-size:contain !important;
}
.nav.phone  li.has-sub:hover > a,.nav.phone  li.has-sub > a:hover, .nav.phone  li.has-sub > a:focus, .nav.phone  li.has-sub >  a:active, .nav.phone  li.has-sub.current-menu-ancestor > a:hover, .nav.phone  li.has-sub.current-menu-item > a:focus, .nav.phone  li.has-sub.current-menu-item > a:active, .nav.phone  li.current-menu-parent > a:hover, .nav.phone  li.current-menu-parent > a:focus, .nav.phone  li.current-menu-parent > a:active, .nav.phone  li.current-menu-ancestor > a:hover, .nav.phone  li.current-menu-ancestor > a:focus, .nav.phone  li.current-menu-ancestor > a:active{
	background:<?php echo $cc_menu_color; ?>  url(<?php echo get_template_directory_uri(); ?>/images/menu_right.png) right top no-repeat !important;
	background-size:contain !important;
}
.nav.phone  li ul li.has-sub > a, .nav.phone  li ul li.has-sub > a:link, .nav.phone  li ul li.has-sub > a:visited{
	background:<?php echo $cc_head_elem_back_color; ?>  url(<?php echo get_template_directory_uri(); ?>/images/down_menu.png) right bottom no-repeat !important;
	background-size:contain !important;

}
.nav.phone  li ul li.has-sub:hover > a,.nav.phone  li ul li.has-sub > a:hover, .nav.phone  li ul li.has-sub > a:focus, .nav.phone  li ul li.has-sub > a:active {
	background:<?php echo '#'.expert_ligthest_brigths($cc_menu_color,15); ?>  url(<?php echo get_template_directory_uri(); ?>/images/down_menu.png) right bottom no-repeat !important;
	background-size:contain !important;
}
.nav.phone  li.current-menu-item > a
{
	color:<?php echo $cc_primary_links_hover_color ?> !important;
	background-color:<?php echo $cc_selected_menu_color; ?> !important;
}
.nav.phone  li.current-menu-ancestor > a:hover, .nav.phone  li.current-menu-item > a:focus, .nav.phone  li.current-menu-item > a:active{
   	color:<?php echo $cc_primary_links_color ?> !important;
	background-color:<?php echo $cc_menu_color; ?> !important;
}
.nav.phone  li.current-menu-parent > a,  .nav.phone  li.current-menu-parent > a:visited,
.nav.phone  li.has-sub.current-menu-item  > a,  .nav.phone  li.has-sub.current-menu-item > a:visited,
.nav.phone  li.current-menu-ancestor > a, .nav.phone  li.current-menu-ancestor > a:visited,
 {
	color:<?php echo $cc_primary_links_hover_color ?> !important;
	background:<?php echo $cc_selected_menu_color; ?>  url(<?php echo get_template_directory_uri(); ?>/images/down_menu.png) right bottom no-repeat !important;
		background-size:contain !important;
}
.nav.phone  li ul  li.current-menu-item > a, .nav.phone  li ul  li.current-menu-item > a:visited,
 .nav.phone  li ul  li.current-menu-item > a:focus, .nav.phone  li ul  li.current-menu-item > a:active{
	color:<?php echo $cc_primary_links_hover_color ?> !important;
	background-color:<?php echo '#'.expert_ligthest_brigths($cc_selected_menu_color,15); ?> !important;
}
.nav.phone  li ul  li.current-menu-ancestor > a:hover,{
    background-color:<?php echo '#'.expert_ligthest_brigths($cc_menu_color,15); ?> !important;
}
.nav.phone li ul  li.current-menu-parent > a,  .nav.phone  li ul  li.current-menu-parent > a:visited,
.nav.phone li ul li.current-menu-parent  > a:hover, .nav.phone  li ul  li.current-menu-parent > a:focus, .nav.phone  li ul  li.current-menu-parent > a:active,
.nav.phone  li ul  li.has-sub.current-menu-item > a,  .nav.phone  li ul  li.has-sub.current-menu-item > a:visited,
.nav.phone  li ul  li.has-sub.current-menu-ancestor > a:hover, .nav.phone  li ul  li.has-sub.current-menu-item > a:focus, .nav.phone  li ul  li.has-sub.current-menu-item > a:active,
.nav.phone li ul  li.current-menu-ancestor > a,  .nav.phone  li ul  li.current-menu-ancestor > a:visited,
.nav.phone li ul li.current-menu-ancestor  > a:hover, .nav.phone  li ul  li.current-menu-ancestor > a:focus, .nav.phone  li ul  li.current-menu-ancestor > a:active {
	color:<?php echo $cc_primary_links_hover_color ?> !important;
	background:<?php echo '#'.expert_ligthest_brigths($cc_selected_menu_color,15); ?>  url(<?php echo get_template_directory_uri(); ?>/images/down_menu.png) right bottom no-repeat !important;
	background-size:contain !important;
}
.nav.phone  li.current-menu-parent > a, .nav.phone  li.current-menu-parent > a:link, .nav.phone  li.current-menu-parent > a:visited,
.nav.phone  li.current-menu-parent > a:hover, .nav.phone  li.current-menu-parent > a:focus, .nav.phone  li.current-menu-parent > a:active,
.nav.phone  li.has-sub.current_page_item  > a, .nav.phone  li.has-sub.current_page_item > a:link, .nav.phone  li.has-sub.current_page_item > a:visited,
.nav.phone  li.has-sub.current-menu-ancestor > a:hover, .nav.phone  li.has-sub.current_page_item > a:focus, .nav.phone  li.has-sub.current_page_item > a:active,
.nav.phone  li.current-menu-ancestor > a, .nav.phone  li.current-menu-ancestor > a:link, .nav.phone  li.current-menu-ancestor > a:visited,
.nav.phone  li.current-menu-ancestor > a:hover, .nav.phone  li.current-menu-ancestor > a:focus, .nav.phone  li.current-menu-ancestor > a:active {
	color:<?php echo $cc_primary_links_hover_color ?> !important;
	background:<?php echo $cc_selected_menu_color; ?>  url(<?php echo get_template_directory_uri(); ?>/images/down_menu.png) right bottom no-repeat !important;
	background-size:contain !important;
}
.nav.phone  li ul  li.current_page_item > a, .nav.phone  li ul  li.current_page_item > a:link, .nav.phone  li ul  li.current_page_item > a:visited,
.nav.phone  li ul  li.current-menu-ancestor > a:hover, .nav.phone  li ul  li.current_page_item > a:focus, .nav.phone  li ul  li.current_page_item > a:active{
	color:<?php echo $cc_primary_links_hover_color ?> !important;
	background-color:<?php echo '#'.expert_ligthest_brigths($cc_selected_menu_color,15); ?> !important;
}
.nav.phone li ul  li.current-menu-parent > a, .nav.phone  li ul  li.current-menu-parent > a:link, .nav.phone  li ul  li.current-menu-parent > a:visited,
.nav.phone li ul li.current-menu-parent  > a:hover, .nav.phone  li ul  li.current-menu-parent > a:focus, .nav.phone  li ul  li.current-menu-parent > a:active,
.nav.phone  li ul  li.has-sub.current_page_item > a, .nav.phone  li ul  li.has-sub.current_page_item > a:link, .nav.phone  li ul  li.has-sub.current_page_item > a:visited,
.nav.phone  li ul  li.has-sub.current-menu-ancestor > a:hover, .nav.phone  li ul  li.has-sub.current_page_item > a:focus, .nav.phone  li ul  li.has-sub.current_page_item > a:active,
.nav.phone li ul  li.current-menu-ancestor > a, .nav.phone  li ul  li.current-menu-ancestor > a:link, .nav.phone  li ul  li.current-menu-ancestor > a:visited,
.nav.phone li ul li.current-menu-ancestor  > a:hover, .nav.phone  li ul  li.current-menu-ancestor > a:focus, .nav.phone  li ul  li.current-menu-ancestor > a:active {
	color:<?php echo $cc_primary_links_color ?> !important;
	background:<?php echo '#'.expert_ligthest_brigths($cc_menu_color,15); ?>  url(<?php echo get_template_directory_uri(); ?>/images/down_menu.png) right bottom no-repeat !important;
	background-size:contain !important;
	
}
.form-submit #submit {
background-color:<?php echo $cc_selected_menu_color; ?>;
color:<?php echo $cc_primary_links_hover_color; ?>;
}
.comment-reply-link{
background-color:<?php echo $cc_selected_menu_color; ?>;

}
.sub-menu, .nav ul {
background-color: <?php echo '#'.expert_ligthest_brigths($cc_head_elem_back_color,15); ?>;
}
    </style>

<?php
}
?>
<?php

$themename = "Slider Options";
$shortname = "ct";

//add_action('admin_init', 'mytheme_add_init');


///////////////////////////////////
///////////////////////////////////
//theme options end
///////////////////////////////////
///////////////////////////////////


/***************/
/*page meta box*/
/***************/

define('expert_theme\MY_WORDPRESS_FOLDER', $_SERVER['DOCUMENT_ROOT']);
define('expert_theme\MY_THEME_FOLDER', str_replace('\\', '/', dirname(__FILE__)));
define('expert_theme\MY_THEME_PATH', '/' . substr(\expert_theme\MY_THEME_FOLDER, stripos(\expert_theme\MY_THEME_FOLDER, 'wp-content')));

add_action('admin_init', 'expert_web_business_meta_init');

function expert_web_business_meta_init()
{
    // review the function reference for parameter details
    // http://codex.wordpress.org/Function_Reference/wp_enqueue_script
    // http://codex.wordpress.org/Function_Reference/wp_enqueue_style

    wp_enqueue_script('web_business_meta_js', \expert_theme\MY_THEME_PATH . '/custom/meta.js', array('jquery'));
    wp_enqueue_style('web_business_meta_css', \expert_theme\MY_THEME_PATH . '/custom/meta.css');

    // review the function reference for parameter details
    // http://codex.wordpress.org/Function_Reference/add_meta_box

    foreach (array('post', 'page') as $type) {
        add_meta_box('web_business_all_meta', 'Web Business Custom Meta Box', 'expert_meta_setup', $type, 'normal', 'high');
    }

    add_action('save_post', 'expert_meta_save');
}

function expert_meta_setup()
{
    global $post;
	global $dor_layout_page,$dor_general_settings_page;
    // using an underscore, prevents the meta variable
    // from showing up in the custom fields section
    $meta = get_post_meta($post->ID, '_web_business_meta', TRUE);
	global $post;
	if( gettype ($post->ID) == 'integer' ){
		$meta=array(
			'layout' =>  $dor_layout_page->options_themeoptions[0]['std'] ,
			'content_width' =>  '' ,
			'main_col_width' =>  '',
			'pr_widget_area_width' =>  '',
			'fullwidthpage' => '',
			'show_comments' => $dor_general_settings_page->options_generalsettings[4]['std'],
			'blogstyle' => '',
			'showthumb' => '',
			'blog_perpage' => get_theme_mod("_n_of_home_post",3),
			'showtitle' => '',
			'showdesc' => '',
			'detect_portrait' => '',
			'thumbsize' => '2',
			'static_pages_on' => '',			
			'all_categories_on' => '',
			'tags_on' => '',
			'archives_on' => '',
			'authors_on' => '',
		);
		
	}
	else
	{
		$meta_if_par_not_initilas=array(
			'layout' =>  $dor_layout_page->options_themeoptions[0]['std'] ,
			'content_width' =>  '' ,
			'main_col_width' =>  '' ,
			'pr_widget_area_width' =>  '',
			'fullwidthpage' =>NULL,
			'show_comments' =>NULL,
			'blogstyle' => '',
			'showthumb' => '',
			'blog_perpage' => get_theme_mod("_n_of_home_post",3),
			'showtitle' => '',
			'showdesc' => '',
			'detect_portrait' => '',
			'thumbsize' => '2',
			'static_pages_on' => '',			
			'all_categories_on' => '',
			'tags_on' => '',
			'archives_on' => '',
			'authors_on' => '',
			'blog_posts_on' => '',
		);
		foreach($meta_if_par_not_initilas as $key=>$meta_if_par_not_initila){
			
			if(!isset($meta[$key])){
				$meta[$key]=$meta_if_par_not_initila;
			}
		
		}
		
	}

    // instead of writing HTML here, lets do an include
    include(\expert_theme\MY_THEME_FOLDER . '/custom/meta.php');

    // create a custom nonce for submit verification later
    echo '<input type="hidden" name="web_business_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
}

function expert_meta_save($post_id)
{
    // authentication checks

    // check user permissions
    if (isset($_POST['post_type']) && $_POST['post_type'] == 'page') {
        if (!current_user_can('edit_page', $post_id)) return $post_id;
    } else {
        if (!current_user_can('edit_post', $post_id)) return $post_id;
    }

    // authentication passed, save data

    // var types
    // single: _web_business_meta[var]
    // array: _web_business_meta[var][]
    // grouped array: _web_business_meta[var_group][0][var_1], _web_business_meta[var_group][0][var_2]

    $current_data = get_post_meta($post_id, '_web_business_meta', TRUE);
	if(isset($_POST['_web_business_meta']))
    $new_data = $_POST['_web_business_meta'];

    expert_meta_clean($new_data);

    if ($current_data) {
        if (is_null($new_data)) delete_post_meta($post_id, '_web_business_meta');
        else update_post_meta($post_id, '_web_business_meta', $new_data);
    } elseif (!is_null($new_data)) {
        add_post_meta($post_id, '_web_business_meta', $new_data, TRUE);
    }

    return $post_id;
}

function expert_meta_clean(&$arr)
{
    if (is_array($arr)) {
        foreach ($arr as $i => $v) {
            if (is_array($arr[$i])) {
                expert_meta_clean($arr[$i]);

                if (!count($arr[$i])) {
                    unset($arr[$i]);
                }
            } else {
                if (trim($arr[$i]) == '') {
                    unset($arr[$i]);
                }
            }
        }

        if (!count($arr)) {
            $arr = NULL;
        }
    }
}

/*******************/
/*page meta box end*/
/*******************/

//search filter
function expert_SearchFilter($query)
{
    if ($query->is_search or $query->is_feed) {
// Portfolio
		if(!isset($_GET['inc-posts']) && !isset($_GET['inc-pages'])){
			
				$query->set('post_type', array('post', 'page'));
			
		}
		else
        if ($_GET['inc-posts'] == "on" && $_GET['inc-pages'] != "on") {
            $query->set('post_type', 'post');
        } else if ($_GET['inc-posts'] != "on" && $_GET['inc-pages'] == "on") {
            $query->set('post_type', 'page');
        } else if ($_GET['inc-posts'] == "on" && $_GET['inc-pages'] == "on") {
            $query->set('post_type', array('post', 'page'));
        } else {
            $query->set('post_type', '');
        }
        if (isset($_GET['month']) && $_GET['month'] != "no") {
            $query->set('year', substr($_GET['month'], 0, 4));
            $query->set('monthnum', substr($_GET['month'], 4, 2));
        }
    }
}

// This filter will jump into the loop and arrange our results before they're returned
//add_filter('pre_get_posts', 'expert_SearchFilter');


function expert_update_page_layout_meta_settings()
{
    /*update page layout*/
    global $post;
	
	if(isset($post))
    $web_business_meta = get_post_meta($post->ID, '_web_business_meta', TRUE);

		global $dor_layout_page;

		if(!isset($web_business_meta['content_width']))
		$web_business_meta['content_width'] = $dor_layout_page->options_themeoptions[2]['std'];
		if(!isset($web_business_meta['main_col_width']))
		$web_business_meta['main_col_width'] = $dor_layout_page->options_themeoptions[3]['std'];
		if(!isset($web_business_meta['layout']))
		$web_business_meta['layout'] = $dor_layout_page->options_themeoptions[0]['std'];
		if(!isset($web_business_meta['pr_widget_area_width']))
		$web_business_meta['pr_widget_area_width'] = $dor_layout_page->options_themeoptions[4]['std'];

if (isset($web_business_meta['fullwidthpage'])) {
		
		$them_content_are_width='100%';
		?><script>var full_width_web_buisnes=1</script><?php
		
	}
	else {
			
		if(isset($web_business_meta['content_width']))
			$them_content_are_width=$web_business_meta['content_width'] . "px;";
		else
			$them_content_are_width=$dor_layout_page->options_themeoptions[2]['std'];
		?><script> var full_width_web_buisnes=0</script><?php
	}
	

     switch ($web_business_meta['layout']) {
        //set styles leauts
        case 1:
			?>
            <style type="text/css">
			#sidebar1,
			#sidebar2 {
				display:none;
			}
			#blog	{
				display:block; 
				float:left;
			};
       
            .container{
            width:<?php echo $them_content_are_width; ?>
            }        
            #blog{
            width:<?php echo $them_content_are_width; ?>
            }               
            </style>
			<?php
            break;
        case 2:
			?>
            <style type="text/css">
			#sidebar2{
				display:none;
			} 
			#sidebar1 {
				display:block;
				float:right;
			}
			#blog{
				display:block;
				float:left;
			} 
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo $web_business_meta['main_col_width']-1; ?>%;
            }
            #sidebar1{
            width:<?php echo (100  - $web_business_meta['main_col_width']-1); ?>%;
            }
            </style>
			<?php
            break;
        case 3:
			?>
            <style type="text/css">
			#sidebar2{
				display:none;
			} 
			#sidebar1 {
				display:block;
				float:left;
			} 
			#blog{
				display:block;
				float:left;
			}
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo $web_business_meta['main_col_width']; ?>%;
            }
            #sidebar1{
            width:<?php echo (100  - $web_business_meta['main_col_width']-1); ?>%;
			margin-right: 1%;
            }
            </style>
			<?php
            break;
        case 4:
		?>
            <style type="text/css">
			#sidebar2{
				display:block;
				float:right;
			} 
			#sidebar1 {
				display:block; float:right;
			} 
			#blog{
				display:block;
				float:left;
			}
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo ($web_business_meta['main_col_width']-2) ; ?>%;
            }
            #sidebar1{
            width:<?php echo $web_business_meta['pr_widget_area_width'] ; ?>%;
            }
            #sidebar2{
            width:<?php echo (100  - $web_business_meta['pr_widget_area_width'] - $web_business_meta['main_col_width']); ?>%;
			margin-right: 1%;
            }
            </style>
			 <?php
            break;
        case 5:
		?>
            <style type="text/css">
			#sidebar2{
				display:block;
				float:left;
			} 
			#sidebar1 {
				display:block;
				float:left;
			} 
			#blog{
				display:block;
				float:right;
			}
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo ($web_business_meta['main_col_width']-2); ?>%;
            }
            #sidebar1{
            width:<?php echo $web_business_meta['pr_widget_area_width']; ?>%;
			margin-right: 1%;
            }
            #sidebar2{
            width:<?php echo (100  - $web_business_meta['pr_widget_area_width'] - $web_business_meta['main_col_width']); ?>%;
			margin-right: 1%;
            }
            </style>
			<?php
            break;
        case 6:
		?>
            <style type="text/css">
			#sidebar2{
				display:block;
				float:right;
			} 
			#sidebar1 {
				display:block;
				float:left; 
			} 
			#blog{
				display:block;
				float:left;
			}    			       
            .container{
            width:<?php echo $them_content_are_width; ?>
            }
            #blog{
            width:<?php echo ($web_business_meta['main_col_width']-2); ?>%;
            }
            #sidebar1{
            width:<?php echo $web_business_meta['pr_widget_area_width']; ?>%;
			margin-right: 1%;
            }
            #sidebar2{
            width:<?php echo (100  - $web_business_meta['pr_widget_area_width'] - $web_business_meta['main_col_width']); ?>%;
            }            
            </style><?php
            break;
    }
    /*update page layout end*/
}

if ( ! function_exists( '_wp_render_title_tag' ) ) {
    function expert_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'expert_render_title' );
}

/// include requerid scripts and styles



add_action('wp_head','expert_include_requerid_scripts_for_theme',1);

function expert_include_requerid_scripts_for_theme(){
	wp_enqueue_script('jquery');	
	wp_enqueue_script('roundabout',get_template_directory_uri().'/roundabout/roundabout.js');
	wp_enqueue_script('jquery-effects-transfer');
	wp_enqueue_style('nivo_slider',get_template_directory_uri().'/nivo_files/nivo-slider.css');
	wp_enqueue_style('nivo_default',get_template_directory_uri().'/nivo_files/themes/default/default.css');
	wp_enqueue_script('nivo_pack',get_template_directory_uri().'/nivo_files/jquery.nivo.slider.pack.js');
	wp_enqueue_script('custom_js',get_template_directory_uri().'/scripts/javascript.js');
	wp_enqueue_script('response', get_template_directory_uri().'/scripts/responsive.js', array('jquery'), false, true);
	wp_enqueue_style( 'webdr-style', get_stylesheet_uri(), array(), '2013-11-18' );
	if ( is_singular() && get_theme_mod( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	
}

add_action('wp_head', 'expert_header');

function expert_header(){
expert_update_head_integration(); 
	
wp_get_post_tags('type=monthly&format=link');	
expert_update_layout_editor();
expert_update_color_control();
expert_update_typography();

/// get params for style meta e.t.
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
if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
 if(get_theme_mod('_favicon_enable','')=='on' && $_favicon_img){ ?>
<link rel="shortcut icon" href="<?php if(trim($_favicon_img)) echo $_favicon_img;?>" type="image/x-icon" />
<?php  }
}

expert_footer_sidebar();
expert_custom_head();
}


function expert_secondary_queries( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-1,-1347' );
    }
}
add_action( 'pre_get_posts', 'expert_secondary_queries' );


function expert_ligthest_brigths($color,$pracent){

	$new_color=$color;
	if(!(strlen($new_color==6) || strlen($new_color)==7))
	{
		return $color;
	}
	$color_vandakanishov=strpos($new_color,'#');
	if($color_vandakanishov == false) {
		$new_color= str_replace('#','',$new_color);
	}
	$color_part_1=substr($new_color, 0, 2);
	$color_part_2=substr($new_color, 2, 2);
	$color_part_3=substr($new_color, 4, 2);
	$color_part_1=dechex( (int) (hexdec( $color_part_1 ) + (( 255-( hexdec( $color_part_1 ) ) ) * $pracent / 100 )));
	$color_part_2=dechex( (int) (hexdec( $color_part_2)  + (( 255-( hexdec( $color_part_2 ) ) ) * $pracent / 100 )));
	$color_part_3=dechex( (int) (hexdec( $color_part_3 ) + (( 255-( hexdec( $color_part_3 ) ) ) * $pracent / 100 )));
	$new_color=$color_part_1.$color_part_2.$color_part_3;
	if($color_vandakanishov == false){
		return $new_color;
	}
	else{
		return '#'.$new_color;
	}

}



function expert_custom_head(){
	
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
}?>

<script>
	var skzbi_hasce="<?php echo get_template_directory_uri(); ?>";
	$ = jQuery;
</script>
<?php

	echo "<style>".stripslashes(get_theme_mod("_custom_css"))."</style>";
?>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#slider').nivoSlider({
        effect: "<?php echo trim(get_theme_mod('ct_effect','random')); ?>", // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: <?php echo get_theme_mod('ct_anim_speed','500'); ?>, // Slide transition speed
        pauseTime: <?php echo get_theme_mod('ct_pause_time','4000'); ?>, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: <?php if(get_theme_mod('ct_pause_on_hover')){echo "true";}else{echo "false";} ?>, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
	jQuery('#slider').nivoSlider();
});
</script>

<?php
	
	
}



function expert_footer_sidebar(){ ?>
<script>
(function($) {})(jQuery);

jQuery(document).ready(function(){
	
	addSizes();
	jQuery(window).resize(function(){

		addSizes();
	});
		
	function addSizes(){
		var heights = jQuery("div.widget_conteiner_fotter").map(function ()	{return jQuery(this).height();}).get(),maxHeight = (Math.max.apply(null, heights)+12);
		var paddT=0;
		 jQuery('.footer-list-block>div').each(function(){
			var $img = jQuery(this);
			paddT=paddT+(parseInt($img.width())+ parseInt($img.css('padding-right')) + parseInt($img.css('padding-left')) + parseInt($img.css('margin-right')) + parseInt($img.css('margin-left')));
			
		});
		
		jQuery('.footer-list').height(maxHeight);
		
		jQuery('.footer-list-block').width(paddT+12);
		jQuery('.footer-list-block').height(maxHeight);
		jQuery('.footer-list-block').css({left:"0px"});
		jQuery('.footer-list-button-right span').css({margin:((maxHeight/2)-20)+"px 0px 0px 0px"});
		jQuery('.footer-list-button-left span').css({margin:((maxHeight/2)-20)+"px 0px 0px 0px"});

		if(jQuery(".footer-list-block").width()<jQuery(".footer-list").width()){

			//alert("footer-list-block="+jQuery(".footer-list-block").width()+" footer-list="+jQuery(".footer-list").width())
			jQuery(".footer-list-button-left").css({display:"none"});
			jQuery(".footer-list-button-right").css({display:"none"});
		}
		
		else
			{
				jQuery(".footer-list-button-left").css({display:"block"});
			jQuery(".footer-list-button-right").css({display:"block"});}	
	}
		
	function leftMove(){
		leftsize=jQuery('.footer-list-block').offset().left;
		if((jQuery('.footer-list').offset().left-jQuery('.footer-list-block').width()+jQuery('.footer-list').outerWidth())>=leftsize){
			clearInterval(goleft);
			return false;
		}
		jQuery('.footer-list-block').css({"left": "-=1px"});
		leftsize-=1;
	}
		
	function rightMove(){
		if(jQuery('.footer-list-block').offset().left>=jQuery('.footer-list').offset().left){
			clearInterval(goleft);
			return false;
		}
		jQuery('.footer-list-block').css({"left": "+=1px"});
		leftsize-=1;
	}
	
	var mobile   = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent); 
	windowsPhone = /windows phone/i.test(navigator.userAgent); 
	var clickstart = mobile ? "touchstart" : "mousedown";
	var clickend = mobile ? "touchend" : "mouseup";
	
	if(windowsPhone){
		jQuery(".footer-list-button-right").click(function(event){
			leftsize=jQuery('.footer-list-block').offset().left;
			if((jQuery('.footer-list').offset().left-jQuery('.footer-list-block').width()+jQuery('.footer-list').outerWidth())>=leftsize){
				clearInterval(goleft);
				return false;
			}
			jQuery('.footer-list-block').animate({"left": "-=50px"},500);
			leftsize-=100;
		});
			
		jQuery(".footer-list-button-left").click(function(event){
			if(jQuery('.footer-list-block').offset().left>=jQuery('.footer-list').offset().left){
			clearInterval(goleft);
			return false;
			}
			jQuery('.footer-list-block').animate({"left": "+=100px"},500);
			leftsize-=100;
		});
		
	}else{
		jQuery(".footer-list-button-right").bind(clickstart,function(event){
			goleft=setInterval(leftMove,5);
		}).bind(clickend,function(event) {
			clearInterval(goleft);
			return false;
		});
		
			
		jQuery(".footer-list-button-left").bind(clickstart,function(event){
			goright=setInterval(rightMove,5);
		}).bind(clickend,function(event) {
			clearInterval(goright);
			return false;
		});
	}
	
	/*jQuery(".footer-list-button-left").mousedown(function(event){
		goright=setInterval(rightMove,5);
	}).mouseup(function(event) {
		clearInterval(goright);
	});*/		
});
</script>
<?php
}

add_action( 'pre_get_posts', 'main_queries_for_expert' );
function main_queries_for_expert($query){
	if(is_home() && is_front_page() && $query->is_main_query()){
		
		global $paged;
		global $dor_home_page;
		foreach ($dor_home_page->options_homepage as $value) {
			if(isset($value['id'])){
				
				if (get_theme_mod( $value['id'] ) === FALSE) {
					
					 $$value['id'] = $value['std']; 
				} 
				else { 
				
				$$value['id'] = get_theme_mod( $value['id'] );
				 
				}	
			}
		}
		if($_n_of_home_post=='')
		   $_n_of_home_post='10';
		$cats = get_categories('hide_empty=0');
        $cat_query="";
		$cat_checked="";
        foreach ($cats as $categs) {
        	$str = "content_cat".$categs->cat_ID;
           if ($$str) {
                $cat_query.=$categs->cat_ID.",";
           }                      
        } 
		$cat_query=substr($cat_query, 0, -1);
		$query->set( 'showposts', $_n_of_home_post );
		$query->set( 'paged', $paged );
		$query->set( 'cat', $cat_query );
		$query->set( 'order', 'DESC' );
		
	}
}
?>

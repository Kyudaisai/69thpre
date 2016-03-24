<?php 

//for update general_settings
global $dor_general_settings_page, $dor_home_page;
foreach ( $dor_general_settings_page->options_generalsettings as $value ) {
    if ( get_theme_mod( $value['id'] ) === FALSE ) { 
	   $$value['id'] = $value['std']; 
	} else {
   	   $$value['id'] = get_theme_mod( $value['id'] ); 
	}
}

foreach ( $dor_home_page->options_homepage as $value ) {
	if(isset($value['id'])){
		if ( get_theme_mod( $value['id'] ) === FALSE ) {
		   $$value['id'] = $value['std']; 
		} else { 
		   $$value['id'] = get_theme_mod( $value['id'] ); 
		}
	}
}

get_header();
if ( substr( get_permalink(), -1 ) == '/' ) 
   $page_url = get_permalink();
else
   $page_url = get_permalink().'/' ;

if( ( is_home() || ('page' == get_theme_mod( 'show_on_front' ) && $page_url == site_url().'/') ) && !$_hide_slider ){
?>
<div id="slider-block"  style=" height:<?php echo get_theme_mod('ct_slider_height','500'); ?>px;">
<div class="shadow">
<div id="pre_slider" style=" height:<?php echo get_theme_mod('ct_slider_height','500'); ?>px;">
	<div id="pre_slider_container" class="container <?php echo \expert_theme\device; ?>" style="height:100% !important">
		<div id="slider" class="nivoSlider" style="height:100% !important">
		<?php
		$image_link=get_theme_mod('web_busines_image_link',get_template_directory_uri('template_url').'/images/slder_1.jpg'.';;;;'.get_template_directory_uri('template_url').'/images/slder_2.jpg'.';;;;'.get_template_directory_uri('template_url').'/images/slder_3.jpg');
		
		if($image_link){
			$link_array=explode(';;;;',$image_link);
			if(count($link_array)>1)
			array_pop($link_array);
		}		
		else {$link_array=array();}	
		$image_href=stripslashes(get_theme_mod('web_busines_image_href',''));
		if($image_href){
			$href_array=explode(';;;;',$image_href);
			if(count($href_array)>1)
			array_pop($href_array);
		}
		else {$href_array=array();}	
		

		$image_textarea=stripslashes(get_theme_mod('web_busines_image_textarea','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ;;;;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.;;;;Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'));
		if($image_textarea){
			$textarea_array=explode(';;;;',$image_textarea);
			array_pop($textarea_array);
		}
		else {$textarea_array=array();}

	?>
	<?php for($i=0;$i<count($link_array);$i++){ ?>
		<a href="<?php if(isset($href_array[$i])) echo $href_array[$i]; ?>">
			<img  src="<?php echo $link_array[$i]; ?>"  alt=""  <?php if(isset($textarea_array[$i]) && $textarea_array[$i]!=""){ ?> title="#htmlcaption<?php echo $i;?>" <?php } ?> />
		</a>
	<?php } ?>
	</div>
</div>
</div>
</div>
</div>
	<?php for($i=0;$i<count($textarea_array);$i++){ 
		if($textarea_array[$i]==""){continue;}
		else{
		?>
			<div id="htmlcaption<?php echo $i; ?>" class="nivo-html-caption"><?php echo $textarea_array[$i]; ?></div>
		<?php } ?>
	<?php } 
global $dor_home_page;
foreach ($dor_home_page->options_homepage as $value) {
	if(isset($value['id'])){
		if (get_theme_mod( $value['id'] ) === FALSE) { 
		   $$value['id'] = $value['std']; 
		} else { 
		   $$value['id'] = get_theme_mod( $value['id'] ); 
		}
	}
}

}

if (is_home() && !$_hide_top_posts) {
    	$topPosts = 0;
    	?>
<div class="content">
<div class="container top-posts <?php echo \expert_theme\device; ?>" id="top_posts_web" style="">
<?php  ?><ul id="sample-roundabout" class="topPosts">
<?php
global $post;
if(isset($post))
$arr = get_post_meta($post->ID,'_arr',TRUE);

$cats = get_categories('hide_empty=0');
$cat_query="";
foreach ($cats as $categs) {
  $str = "top_cat".$categs->cat_ID;
  if ($$str) {
     $cat_query.=$categs->cat_ID.",";
  }                         
}
$expert_query = new WP_Query('showposts=3&paged='.$paged.'&cat='.$cat_query.'&orderby=date&order=ASC');

while ($expert_query->have_posts()) : $expert_query->the_post();
   if($topPosts++ == 3) {
     break;
   }
 ?>	
	<li class="topPost">
		<div class="wrapper">
			<div>		
				<?php echo expert_display_thumbnail('150','150'); ?>
			</div>	
			<div class="toppostentry">	
				<div id="top_post_title">
				   <h3>
					<a href="<?php the_permalink(); ?>">
					   <?php the_title(); ?>
					</a>
				   </h3>	
				</div>	
				<?php echo '<p>';expert_the_excerpt_max_charlength(90);echo '</p>'; ?>
		   </div>
		</div>
    </li>
	<?php 
endwhile;
wp_reset_postdata();
?></ul>
</div>
</div>
</div><?php 
}?>
<div id="content">
  <div class="container <?php echo \expert_theme\device; ?>">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    <div id="sidebar1" class="widget-area" role="complementary">
      <?php  dynamic_sidebar( 'sidebar-1' ); 	?>
    </div>
    <!-- #first .widget-area -->
    <?php }

?>
    <div id="blog" >
     <?php 
	
    	$i=0;
    	global $dor_home_page,$post;
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

		if(isset($post))
        $arr = get_post_meta($post->ID,'_arr',TRUE);
		
      while (have_posts()) : the_post();

		if($i==$_n_of_home_post)
			break;
		else
			$i++;  ?>
			
      <div class="<?php if ($i<$_n_of_home_post) echo "contentPost1"; else echo "contentPost2"; ?>">
        <h3>
	      <a href="<?php the_permalink(); ?>">
             <?php the_title(); ?>
          </a>
		</h3>
        <div class="entry">
          <?php
				if($_grab_image){
				  echo expert_display_thumbnail(150,150); 
				}
				else {
				  echo	expert_thumbnail(150,150);
				}				
                if( get_theme_mod('_blog_style','')=="on") {
                     the_excerpt();  ?>
                 <a href="<?php the_permalink(); ?>" class="read_more"><span><?php echo __('More','sp_webBusiness'); ?></span></a>
                <?php   } 
                 else {
                       the_content();
                  } ?>
        </div>
      </div>
      <?php   endwhile;   
	  if( $wp_query->max_num_pages > 2 ){ ?>
       <div class="page-navigation">
		   <?php posts_nav_link(); ?>
	   </div>	   
<?php }
wp_reset_postdata(); ?>

     
    </div>
	    <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
    <div id="sidebar2" class="widget-area" role="complementary">
      <?php  dynamic_sidebar( 'sidebar-2' ); 	?>
    </div>
    <!-- #first .widget-area -->
    <?php }?>
	<div style="clear:both;"></div>
<?php 
 if (get_theme_mod('_integrate_is_baner_enable') == 'on') { ?>
<?php if(get_theme_mod('_integrate_baner_adsens_code') <> '') echo ( get_theme_mod('_integrate_baner_adsens_code') );
else { ?>
<a href="<?php echo esc_url(get_theme_mod('_integrate_baner_click_destination')); ?>"><img src="<?php echo esc_url(get_theme_mod('_integrate_baner_image_url')); ?>" alt="468 ad"  /></a>
<?php } ?>
<?php } 
?>
    
  </div>
   <div class="clear"></div>
  <!-- .container END --> 
</div>
<!-- .content END -->
<?php get_footer(); ?>
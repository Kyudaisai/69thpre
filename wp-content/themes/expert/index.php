<?php 

global $dor_general_settings_page;
$web_business_meta = get_post_meta($post->ID,'_web_business_meta',TRUE);
foreach ($dor_general_settings_page->options_generalsettings as $value) {

    if (get_theme_mod( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_theme_mod( $value['id'] ); }

}
?>
<?php get_header(); ?>
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
	    global $post;
		if(isset($post))
        $arr = get_post_meta($post->ID,'_arr',TRUE);
        $cats = get_categories('hide_empty=0');
        $cat_query="";
		$cat_checked="";
        foreach ($cats as $categs) {
        	$str = "content_cat".$categs->cat_ID;
            if ($$str) {
                $cat_query.=$categs->cat_ID.",";
				$cat_checked=1;
            }                         
        }
		$expert_wp_query = new WP_Query('showposts='.($_n_of_home_post).'&paged='.$paged.'&cat='.$cat_query.'&order=ASC');
    	 while ($expert_wp_query->have_posts()) : $expert_wp_query->the_post();

		if($i==$_n_of_home_post)
			break;
		else
			$i++;
		if($cat_checked){
		 ?>
      <div class="<?php if ($i<$_n_of_home_post) echo "contentPost1"; else echo "contentPost2"; ?>">
        <h3><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a></h3>
        <div class="entry">
          <?php
				if($_grab_image){
				  echo expert_display_thumbnail(150,150); 
				}
				else {
				  echo	expert_thumbnail(150,150);
				}				
          if( get_theme_mod('_blog_style','')=="on") 
                        {
                            the_excerpt();
                        ?>
                        
               		 <a href="<?php the_permalink(); ?>" class="read_more"><span><?php echo __('More','sp_webBusiness'); ?></span></a>
                	<?php   } 
                        else 
                        {
                             the_content();
                        } ?>
        </div>
      </div>
      <?php 
	  }
       endwhile; 
	   
	   if($cat_query){ ?>
       <div class="page-navigation">
		<?php posts_nav_link(); ?>
	   </div>	   
  <?php }wp_reset_postdata();  ?>
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

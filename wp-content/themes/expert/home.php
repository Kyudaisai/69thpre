<?php
get_header();
?>
<div id="content">
  <div class="container <?php echo \expert_theme\device; ?>">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    <div id="sidebar1" class="widget-area" role="complementary">
      <?php  dynamic_sidebar( 'sidebar-1' ); 	?>
    </div>
    <!-- #first .widget-area -->
    <?php } ?>
    <div id="blog" >
	<?php global $dor_general_settings_page, $wp_query;;
	
		foreach ( $dor_general_settings_page->options_generalsettings as $value ) {
			if(isset($value['id'])){		
				if ( get_theme_mod( $value['id'] ) === FALSE ) {
				   $$value['id'] = $value['std']; 
				} 
				else {
				   $$value['id'] = get_theme_mod( $value['id'] ); 
				}				
	     }
		} ?>
	<?php if ( have_posts() ) { ?>

			<?php /* The loop */  ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="contentPost-in-home">
					<h3>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
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
					<?php } 
						else 
						{
							the_content();
						} ?>
						</div>
					</div>
			<?php endwhile;
            if ( $wp_query->max_num_pages > 2 )  { ?>
			<div class="page-navigation">
		       <?php posts_nav_link(); ?>
	       </div>
         <?php }  ?>
		<?php }  ?>
       	   
  <?php //wp_reset_postdata();  ?>
    </div>
	    <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
    <div id="sidebar2" class="widget-area" role="complementary">
      <?php  dynamic_sidebar( 'sidebar-2' ); 	?>
    </div>
    <!-- #first .widget-area -->
    <?php }?>
	<div style="clear:both;"></div>
    
  </div>
   <div class="clear"></div>
  <!-- .container END --> 
</div>
<!-- .content END -->
<?php get_footer(); ?>
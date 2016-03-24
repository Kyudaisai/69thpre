<?php 

//for update general_settings
global $dor_general_settings_page;
foreach ( $dor_general_settings_page->options_generalsettings as $value ) {
    if ( get_theme_mod( $value['id'] ) === FALSE ) { 
	   $$value['id'] = $value['std']; 
	} else {
   	   $$value['id'] = get_theme_mod( $value['id'] ); 
	}
}

get_header();
expert_update_page_layout_meta_settings();
?><div class="container"><?php
if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
        <div id="sidebar1" class="widget-area" role="complementary">
                <ul class="xoxo">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                 </ul>
      </div>
<?php } 
?>	

   <div id="blog">
     <?php 
		
if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="single-post">
	 <h3>
	    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	 </h3>
     <div class="entry">
  <?php the_content(); ?>

     </div>
  </div>
		
<?php endwhile; ?>

   <div class="navigation">
		<?php posts_nav_link(); ?>
   </div>

<?php endif; 

            global $post;
			$withcomments = true;
			wp_reset_query();
				if(comments_open()){	?>
					<div class="comments-template">
						<?php echo comments_template();	?>
					</div>
			<?php
				}		
			?>


   </div>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div id="sidebar2" class="widget-area" role="complementary">         
            <ul class="xoxo">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </ul>
     </div>
<?php } ?>
  <div class="clear"></div>
</div>
<?php get_footer(); ?>
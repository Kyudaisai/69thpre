<?php 

//for update general_settings
global $dor_general_settings_page;

foreach ($dor_general_settings_page->options_generalsettings as $value) {

    if (get_theme_mod( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_theme_mod( $value['id'] ); }

}
?>
<?php get_header(); 
expert_update_page_layout_meta_settings(); ?>
<?php 
/*update page layout*/
global $post;



/*update page layout end*/
?>
<div class="container">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
        <div id="sidebar1" class="widget-area" role="complementary">
                <ul class="xoxo">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                 </ul>
      </div>
<?php } 
?>	
	<div id="blog">
    <?php expert_update_top_of_post_integration(); ?>
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div <?php post_class('single-post'); ?>>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
		 <div class="entry-meta">
         <?php if($_date_enable){ ?>	     
				<?php expert_posted_on(); ?>			
         <?php } 
		 expert_entry_meta();  ?>
		  </div>
		  
			<div class="entry">				
				<?php the_post_thumbnail(); ?>
			    <?php  the_content(); ?>			
			</div>			
           <?php expert_update_bottom_of_post_integration();
            wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Page', 'sp_webBusiness' ) . '</span>', 'after' => '</div>', 'link_before' => '<span class="page-links-number">', 'link_after' => '</span>' ) ); 
			expert_post_nav();
			
            global $post;
			$withcomments = true;
			wp_reset_query();
				if(comments_open()){	
			?>
					<div class="comments-template">
						<?php echo comments_template();	?>
					</div>
			<?php
				}		
			?>
		<div class="clear"></div>	
	</div>

<?php endwhile; ?>
<?php endif; ?>


				<?php if (get_theme_mod('_integrate_is_baner_enable') == 'on') { ?>
<?php if(get_theme_mod('_integrate_baner_adsens_code') <> '') echo ( get_theme_mod('_integrate_baner_adsens_code') );
else { ?>
<a href="<?php echo esc_url(get_theme_mod('_integrate_baner_click_destination')); ?>"><img src="<?php echo esc_url(get_theme_mod('_integrate_baner_image_url')); ?>" alt="468 ad"  /></a>
<?php } ?>
<?php } 
?>
</div>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div id="sidebar2" class="widget-area" role="complementary">
                <ul class="xoxo">
                        <?php dynamic_sidebar( 'sidebar-2' );  ?>
                </ul>
       </div><!-- #first .widget-area -->

<?php }?>
  <div class="clear"></div>
</div>
<?php get_footer(); ?>
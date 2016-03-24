<?php 

//for update general_settings
global $dor_general_settings_page;

foreach ($dor_general_settings_page->options_generalsettings as $value) {

    if (get_theme_mod( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_theme_mod( $value['id'] ); }

}
?>

<?php get_header(); ?>
<div class="container">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    
        <div id="sidebar1" class="widget-area" role="complementary">
           
           <ul class="xoxo">
              <?php dynamic_sidebar( 'sidebar-1' );  
                    ?>
                    </ul>
                </div><!-- #first .widget-area -->
			<?php } ?>

	<div id="blog">

	<?php if (have_posts()) : ?>
	<?php $post = $posts[0]; ?>
		
		<?php  if (is_category()) { ?>
		<h3><?php _e('Archive For The ', 'sp_webBusiness'); ?>&ldquo;<?php single_cat_title(); ?>&rdquo; <?php _e('Category', 'sp_webBusiness'); ?></h3>
	 	<?php  } elseif( is_tag() ) { ?>
		<h3><?php _e('Posts Tagged ', 'sp_webBusiness'); ?>&ldquo;<?php single_tag_title(); ?>&rdquo;</h3>
		<?php  } elseif (is_day()) { ?>
		<h3><?php _e('Archive For ', 'sp_webBusiness'); ?><?php the_time(get_option( 'date_format' )); ?></h3>
		<?php  } elseif (is_month()) { ?>
		<h3><?php _e('Archive For ', 'sp_webBusiness'); ?><?php the_time(get_option( 'date_format' )); ?></h3>
		<?php  } elseif (is_year()) { ?>
		<h3><?php _e('Archive For ', 'sp_webBusiness'); ?><?php the_time(get_option( 'date_format' )); ?></h3>
		<?php  } elseif (is_author()) { ?>
		<h3><?php _e('Author Archive', 'sp_webBusiness'); ?></h3>
		<?php  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h3><?php _e('Blog Archives', 'sp_webBusiness'); ?></h3>
	 	<?php } ?>
			
		<?php  while (have_posts()) : the_post(); ?>
			
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
				 <?php if($_date_enable){ ?>
				 <?php expert_posted_on(); ?>
		        <?php } 
				  expert_entry_meta(); ?>
                </div>		 
			</div>
			
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( ); ?>" rel="bookmark">
			<?php
				            if($_grab_image && !has_post_thumbnail()) 
                            {
                               echo expert_display_thumbnail(150,150); 
                            }
                            else 
                            {
                               echo expert_thumbnail(150,150);
                            }
				
				
			?>
			</a>
			<?php  if($_blog_style){the_excerpt();}else{the_content();}  ?>
			
			<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( ); ?>" rel="bookmark"><?php _e('Read more', 'sp_webBusiness'); ?> &raquo;</a></p>

		</div>

		<?php endwhile;?>
		<div class="page-navigation">
		   <?php posts_nav_link(); ?>
	    </div>
	<?php else : ?>

		<h2 ><?php _e('Not Found', 'sp_webBusiness'); ?></h2>
		<p><?php _e('There are not posts belonging to this category or tag. Try searching below:', 'sp_webBusiness'); ?></p>
		<?php get_search_form(); ?>
	
	<?php endif; ?>
	


	</div>
	
	 <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div id="sidebar2" class="widget-area" role="complementary">
            <ul class="xoxo">
                 <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </ul>
        </div><?php } ?><!-- #first .widget-area -->
                
	<div class="clear"></div>
</div>

	
<?php get_footer(); ?>

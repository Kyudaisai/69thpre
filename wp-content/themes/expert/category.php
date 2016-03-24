<?php 

//for update general_settings
global $dor_general_settings_page;

foreach ($dor_general_settings_page->options_generalsettings as $value) {

    if (get_theme_mod( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_theme_mod( $value['id'] ); }

}
?>
<?php get_header(); ?>
<div class="container"><?php

	 if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    
        <div id="sidebar1" class="widget-area" role="complementary">
           <ul class="xoxo">
              <?php dynamic_sidebar( 'sidebar-1' );  ?>
           </ul>
        </div><!-- #first .widget-area -->
			<?php }
           
//using meta-box values
/*
global $post;
$web_business_meta = get_post_meta($post->ID,'_web_business_meta',TRUE);
echo "<h1>".$web_business_meta['name']."</h1>";
*/
//echo "<script language=javascript>alert('".$web_business_meta['categor']."');";

        global $post;
        $web_business_meta = get_post_meta($post->ID,'_web_business_meta',TRUE);
        $cats = get_categories('hide_empty=0');
        $site_cats = array();
        $cat_query="";
			foreach ($cats as $categs) {
				if (isset($web_business_meta["categor-".$categs->cat_ID]) && $web_business_meta["categor-".$categs->cat_ID]=="on") {
					$cat_query.=$categs->cat_ID.",";
				}                         
			}

    ?>
		<div id="blog">
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php echo __('Archive for the','sp_webBusiness'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php echo __('Category','sp_webBusiness'); ?>:</h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><?php echo __('Posts Tagged','sp_webBusiness'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><?php echo __('Archive for','sp_webBusiness'); ?> <?php the_time(get_option( 'date_format' )); ?>:</h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2><?php echo __('Archive for','sp_webBusiness'); ?> <?php the_time(get_option( 'date_format' )); ?>:</h2>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2><?php echo __('Archive for','sp_webBusiness'); ?> <?php the_time(get_option( 'date_format' )); ?>:</h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2><?php echo __('Author Archive','sp_webBusiness'); ?></h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2><?php echo __('Blog Archives','sp_webBusiness'); ?></h2>
		<?php } ?>
	
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div <?php post_class('post'); ?>>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
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
			<?php  if($_blog_style){the_excerpt();}else{the_content('More');}  ?>

			</div>
			<div class="entry-meta">
			<?php if($_date_enable){ ?>         
				  <?php expert_posted_on(); ?>			
			<?php } 
			 expert_entry_meta(); ?>
			</div>
		</div>
		
<?php endwhile; ?>

	<div class="page-navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>


</div>

    <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div id="sidebar2" class="widget-area" role="complementary">
             <ul class="xoxo">
                 <?php dynamic_sidebar( 'sidebar-2' ); ?>
             </ul>
        </div><!-- #first .widget-area -->
                
			<?php } ?>		
   <div class="clear"></div>
</div>
</div>
	

<?php get_footer(); ?>
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

expert_update_page_layout_meta_settings(); ?>	
<div class="container">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    
        <div id="sidebar1" class="widget-area" role="complementary">
           <ul class="xoxo">
              <?php dynamic_sidebar( 'sidebar-1' ); ?>
           </ul>
        </div><!-- #first .widget-area -->
			<?php } ?>
		<div id="blog">
		   <img class="imgBox" src="<?php  echo get_template_directory_uri('template_url'); ?>/images/404.png">
		   <p><?php _e('You are trying to reach a page that does not exist here. Either it has been moved or you typed a wrong address. Try searching:', 'sp_webBusiness'); ?></p>
		   <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">
								<div id="searchbox">
									<div class="searchback">
										<input  type="text" value="" name="s" id="s" class="searchbox_search" placeholder="<?php echo __('Type here','sp_webBusiness'); ?>"/> 
										<input type="submit" id="searchsubmit" value="<?php echo __('Search','sp_webBusiness'); ?>" class="read_more" style="border:none; width: 15%;height: 29px;font-family: Segoe UI;font-size: 17px !important;color: white;" />
									</div>
									
									<div class="search-settings-block">
										<label  id="inc-posts" style="margin-right: 14px;"><input type="checkbox" name="inc-posts" /><?php echo __('Posts','sp_webBusiness'); ?></label>
										<label  id="inc-pages"  style="margin-right: 14px;"><input type="checkbox" name="inc-pages" /><?php echo __('Pages','sp_webBusiness'); ?></label>
										<script>
											$("#inc-posts input").click(function(){
												if($(this).parent().hasClass("active")){$(this).parent().removeClass("active");}
												else{$(this).parent().addClass("active");}
											});
											$("#inc-pages input").click(function(){
												if($(this).parent().hasClass("active")){$(this).parent().removeClass("active");}
												else{$(this).parent().addClass("active");}
											});
										</script>
										<div class="styled-select"><?php wp_dropdown_categories( 'show_option_all='.__('All Categories','sp_webBusiness').'' ); ?> </div>
										<div class="styled-select">
										<select style="margin-left:14px; font-family: Segoe UI;color: rgb(111, 111, 111);" id="inc-month" name="month">
												<option value="no"><?php echo __('Select a month','sp_webBusiness'); ?></option>
												 <?php   global $wpdb, $wp_locale;
													$selected = '';
													$query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC";
													$arcresults = $wpdb->get_results($query);
														foreach ( (array) $arcresults as $arcresult ) {
															if ( isset($_POST['month']) && ( $_POST['month'] == ($arcresult->year . $arcresult->month) ) ) {
																$selected = ' selected="selected"';
															}
													echo "<option value='{$arcresult->year}{$arcresult->month}'{$selected}>{$wp_locale->get_month($arcresult->month)}" . ", {$arcresult->year}</option>";
														if ( $selected <> '' ) $selected = '';
														} ?>
										</select>
										</div>
								 </div>
								 </div>
							</form>
		</div>

    <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div id="sidebar2" class="widget-area" role="complementary"> 
             <ul class="xoxo">
                 <?php dynamic_sidebar( 'sidebar-2' );  ?>
             </ul>
        </div><!-- #first .widget-area -->             
			<?php	} ?>		
    <div class="clear"></div>
</div>

<?php get_footer(); ?>
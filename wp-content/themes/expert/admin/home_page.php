<?php

class expert_home_page_class{
	
	public $homepage;
	public $shorthomepage;
	public $options_homepage;
	
	function __construct(){
		$this->homepage = "Homepage";
		$this->shorthomepage = "";
		
		$this->options_homepage = array(
			
			array(
				"name" => "Homepage",
				
				"type" => "title"
			),

			array(
			
				"name" => "numbers of home page",

				"id" => "_n_of_home_post",

				"std" => ""
			
			),

			array(
			
				"name" => "hide top posts",

				"id" => "_hide_top_posts",

				"std" => ""
			
			),

			array(
			
				"name" => "hide slider",

				"id" => "_hide_slider",

				"std" => ""
			
			)
		);
		$cats = get_categories('hide_empty=0');
		$site_cats = array();
		foreach ($cats as $cat) {
		
			array_push($this->options_homepage, array(
				"name" => "top_cat" . $cat->cat_ID,
				"id" => "top_cat" . $cat->cat_ID,
				"std" => "")
			);
			
			array_push($this->options_homepage, array(
				"name" => "content_cat" . $cat->cat_ID,
				"id" => "content_cat" . $cat->cat_ID,
				"std" => "")
			);
			
		}
		
	}


	/// save changes or reset options
	public function web_dorado_theme_update_and_get_options_home(){
		
		 
		if (isset($_GET['page']) &&  $_GET['page'] == "web_dorado_theme" && isset($_GET['controller']) && $_GET['controller'] == "home_page") {
			if (isset($_REQUEST['action']) && $_REQUEST['action']=='save' ) {
				foreach ($this->options_homepage as $value) {
					set_theme_mod($value['id'], $_REQUEST[$value['id']]);
				}
				foreach ($this->options_homepage as $value) {
					if (isset($_REQUEST[$value['id']])) {
						set_theme_mod($value['id'], $_REQUEST[$value['id']]);
					} else {
						remove_theme_mod($value['id']);
					}
				}
				header("Location: themes.php?page=web_dorado_theme&controller=home_page&saved=true");
				die;
			} 
			else {
				
				if (isset($_REQUEST['action']) && $_REQUEST['action']=='reset') {
					
					foreach ($this->options_homepage as $value) {
						remove_theme_mod($value['id']);
					}
					
					header("Location: themes.php?page=web_dorado_theme&controller=home_page&reset=true");
					die;
				}
								
			}
		}

	
	}
	
	public function web_dorado_home_page_admin_scripts(){
		
		wp_enqueue_style('home_page_main_style',get_template_directory_uri().'/admin/css/home_page.css');	
		

	}
	
	public function dorado_theme_admin_home(){
		
	   if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='home_page'){		
		if (isset($_REQUEST['saved']) && $_REQUEST['saved'] ) 
		
			echo '<div id="message" class="updated"><p><strong>Home settings are saved.</strong></p></div>';
			
		if (isset($_REQUEST['reset']) && $_REQUEST['reset'] ) 
		
			echo '<div id="message" class="updated"><p><strong>Home settings are reset.</strong></p></div>';
	   }
		?>
	
	
		
			<script>
				
			function open_or_hide_param_top(cur_element){
				if(cur_element.checked){
					jQuery(cur_element).parent().parent().parent().find('.open_hide_top').hide();
				}
				else
				{
					jQuery(cur_element).parent().parent().parent().find('.open_hide_top').show();
				}
				
			}
			jQuery(document).ready(function ($) {
				jQuery('.with_input').each(function(){open_or_hide_param_top(this)})
				
				});
			
			</script>
			<?php  global $web_dor; ?>
	        <div id="main_home_page">
			<table align="center" width="90%" style="margin-top: 0px; margin-bottom: 20px;border-bottom: rgb(111, 111, 111) solid 2px;">
			    <tr>   
                      <td style="font-size:14px; font-weight:bold">
					     <a href="<?php echo $web_dor.'/wordpress-themes-guide-step-1.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">User Manual</a><br />This section allows you to customize the homepage. 
                         <a href="<?php echo $web_dor.'/wordpress-theme-options/3-4.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">More...</a>
					  </td>   
                      <td  align="right" style="font-size:16px;">
                           <a href="<?php echo $web_dor.'/wordpress-themes/business-responsive.html'; ?>" target="_blank" style="color:red; text-decoration:none;">
                              <img src="<?php echo get_template_directory_uri() ?>/images/header.png" border="0" alt="" width="215">
                           </a>
                        </td>
                </tr>
				<tr>
					<td colspan="2"><h3  style="margin: 0px;font-family:Segoe UI;padding-bottom: 15px;color: rgb(111, 111, 111); font-size:18pt;">Home</h3>
					</td>
				</tr>
			</table>
			<form method="post" action="themes.php?page=web_dorado_theme&controller=home_page">
				<table align="center" width="90%" style=" padding-bottom:0px; padding-top:0px;">
					<tr>
						<td>
						  <div>
							<div class="optiontitle first">
								<h3>Number of Posts</h3>
							</div>
							<div class="block">
							<div class="optiondescreption">
								<p>Specify the number of content posts to be displayed on the homepage.</p>
							</div>
							<div class="optioninput">
								<input style="width: 30px;text-align: center;" name="_n_of_home_post" id="_n_of_home_post"   type="text" value="<?php if (get_theme_mod("_n_of_home_post") != "") {  echo get_theme_mod("_n_of_home_post"); } else echo "3"; ?>">
							</div>
							</div>
						  </div>	
						  <div>
							<div class="optiontitle">
								<h3>Hide Slider</h3>
							</div>
							<div class="block margin">
							<div class="optiondescreption">
								<p>Using this option, you can hide the homepage slider.</p>
							</div>
							<div class="optioninput checkbox">
								<input type="checkbox" name="_hide_slider"    id="_hide_slider" <?php checked( get_theme_mod("_hide_slider"), "on" ); ?> />
							</div>
							</div>
						  </div>	
						  <div>
							<div class="optiontitle">
								<h3>Hide Top Posts</h3>
							</div>
							<div class="block margin">
								<div class="optiondescreption">
									<p>Using this option, you can hide the top posts from the homepage.</p>
								</div>								
								<div class="optioninput checkbox">
									<input type="checkbox" onclick="open_or_hide_param_top(this)" class="checkbox with_input" name="_hide_top_posts"  id="_hide_top_posts" <?php checked( get_theme_mod("_hide_top_posts"), "on" ); ?> />
								</div>
							</div>
							<div class="open_hide_top">
														
								<div class="optiondescreption">
									<p>Select the categories from which you want the homepage top posts to be selected (the
										posts are selected automatically).</p>
								</div>
								<div class="block">
								
									<?php $cats = get_categories('hide_empty=0');
									foreach ($cats as $categs) {
										?>	<div class="optioninput checkbox_for_posts">								
											<input type="checkbox" name="<?php echo "top_cat" . $categs->cat_ID; ?>" class="checkbox" id="<?php echo "top_cat" . $categs->cat_ID; ?>" <?php checked( get_theme_mod("top_cat" . $categs->cat_ID), "on" ); ?> /></div><label for="<?php echo "top_cat" . $categs->cat_ID; ?>"> <?php echo $categs->cat_name; ?></label>
										
										<br><br>
									<?php } ?>
								
								</div>
						  	</div>
							
						  </div>
						  	
							<div class="optiontitle">
								<h3>Select Categories for Content Posts</h3>
							</div>
							<div class="optiondescreption" style="width:99% !important">
								<p>Select the categories from which you want the homepage content posts to be selected (the
									posts are selected automatically).</p>
							</div>
							
								<?php $cats = get_categories('hide_empty=0');
								foreach ($cats as $categs) {
									?>
									<div class="optioninput checkbox_for_posts">
										<input type="checkbox" name="<?php echo "content_cat" . $categs->cat_ID; ?>"   id="<?php echo "content_cat" . $categs->cat_ID; ?>" <?php checked( get_theme_mod("content_cat" . $categs->cat_ID), "on" ); ?> /></div><label for="<?php echo "content_cat" . $categs->cat_ID; ?>">  <?php echo $categs->cat_name; ?>  </label>
									<br><br>
								<?php } ?>
							
						</td>
					</tr>
				</table><br/>
				<p class="submit" style="float: left; margin-left: 63px; margin-right: 8px;">
					<input class="button" name="save" type="submit" value="Save changes"/>
					<input type="hidden" name="action" value="save"/>
				</p>
			</form>
			<form method="post" action="themes.php?page=web_dorado_theme&controller=home_page">
				<p class="submit">
					<input class="button" name="reset" type="submit" value="Reset"/>
					<input type="hidden" name="action" value="reset"/>
				</p>
			</form>
		</div>
	<?php

	
	
	}	

}
 
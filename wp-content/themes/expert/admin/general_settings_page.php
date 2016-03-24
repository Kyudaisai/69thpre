<?php

class expert_general_settings_page_class{
	
	public $generalsettings;
	
	public $shortgeneralsettings;

	public $options_generalsettings;
	
	function __construct(){
		
		
		/// initial params
		$this->generalsettings = "General Settings";
		$this->shortgeneralsettings = "";
		global $web_dor;
		
		/// get options from data base
		
		$value_of_std[0] = get_theme_mod($this->shortgeneralsettings."_logo_img", get_template_directory_uri().'/images/logo1.png');
		$value_of_std[1] = get_theme_mod($this->shortgeneralsettings."_body_back", '');
		$value_of_std[2] = get_theme_mod($this->shortgeneralsettings."_custom_css", '');
		$value_of_std[3] = get_theme_mod($this->shortgeneralsettings."_favicon_img", '');
		$value_of_std[4] = get_theme_mod($this->shortgeneralsettings."_blog_style", '');
		$value_of_std[5] = get_theme_mod($this->shortgeneralsettings."_grab_image", '');
		$value_of_std[6] = get_theme_mod($this->shortgeneralsettings."_show_twitter_icon", '');
		$value_of_std[7] = get_theme_mod($this->shortgeneralsettings."_show_rss_icon", '');
		$value_of_std[8] = get_theme_mod($this->shortgeneralsettings."_show_facebook_icon", '');
		$value_of_std[9] = get_theme_mod($this->shortgeneralsettings."_twitter_url", '#');
		$value_of_std[10] = get_theme_mod($this->shortgeneralsettings."_rss_url", '#');
		$value_of_std[11] = get_theme_mod($this->shortgeneralsettings."_facebook_url", '#');
		$value_of_std[12] = get_theme_mod($this->shortgeneralsettings."_date_format1", '');
		$value_of_std[13] = get_theme_mod($this->shortgeneralsettings."_date_format2", '');
		$value_of_std[14] = get_theme_mod($this->shortgeneralsettings."_date_format3", '');
		$value_of_std[15] = get_theme_mod($this->shortgeneralsettings."_date_format4", '');
		$value_of_std[16] = get_theme_mod($this->shortgeneralsettings."_our_style", '');
		$value_of_std[17] = get_theme_mod($this->shortgeneralsettings."_menu_search_form", '');
		$value_of_std[18] = get_theme_mod($this->shortgeneralsettings."_post_header", '');
		$value_of_std[19] = get_theme_mod($this->shortgeneralsettings."_favicon_enable", '');
		$value_of_std[20] = get_theme_mod($this->shortgeneralsettings."_date_enable", '');
        $value_of_std[21] = get_theme_mod($this->shortgeneralsettings."_footer_text", '<span id="copyright">WordPress Themes by <a href="'.$web_dor.'/wordpress-themes"  target="_blank" title="Web-Dorado">Web-Dorado</a></span>');
		
		$this->options_generalsettings = array(
			
			array(
			
				"name" => "Logo",
				
				"id" => "_logo_img",
				
				"std" => $value_of_std[0]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_body_back",
				
				"std" => $value_of_std[1]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_custom_css",
				
				"std" => $value_of_std[2]
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_favicon_img",
				
				"std" => $value_of_std[3]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_blog_style",
				
				"std" => $value_of_std[4]
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_grab_image",
				
				"std" => $value_of_std[5]
			),
			
			array(
				
				"name" => "General Settings",
				
				"id" => "_show_twitter_icon",
				
				"std" => $value_of_std[6]
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_show_rss_icon",
				
				"std" => $value_of_std[7]
				
			),
			
			array(
				
				"name" => "General Settings",
				
				"id" => "_show_facebook_icon",
				
				"std" => $value_of_std[8]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_twitter_url",
				
				"std" => $value_of_std[9]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_rss_url",
				
				"std" => $value_of_std[10]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_facebook_url",
				
				"std" => $value_of_std[11]
				
			),
		
			array(
			
				"name" => "General Settings",
				
				"id" => "_date_format1",
				
				"std" => $value_of_std[12]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_date_format2",
				
				"std" => $value_of_std[13]
				
			),
			
			array(
				"name" => "General Settings",
				
				"id" => "_date_format3",
				
				"std" => $value_of_std[14]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_date_format4",
				
				"std" => $value_of_std[15]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_our_style",
				
				"std" => $value_of_std[16]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_menu_search_form",
				
				"std" => $value_of_std[17]
				
			),
			
			array(
			
				"name" => "General Settings",
				
				"id" => "_post_header",
				
				"std" => $value_of_std[18]
				
			),
			array(
			
				"name" => "General Settings",
				
				"id" => "_favicon_enable",
				
				"std" => $value_of_std[19]
				
			),
			array(
			
				"name" => "General Settings",
				
				"id" => "_date_enable",
				
				"std" => $value_of_std[20]
				
			),
			array(
			
				"name" => "Footer text",
				
				"id" => "_footer_text",
				
				"std" => $value_of_std[21]
				
			)
		);
		
		
	}


	public function web_dorado_theme_update_and_get_options_general_settings(){	
	
		if ( isset($_GET['page']) && $_GET['page'] ==  "web_dorado_theme" && isset($_GET['controller']) && $_GET['controller'] == "general_page") {
			
			if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'save') {
				
				foreach ($this->options_generalsettings as $value) {
					
					set_theme_mod($value['id'], $_REQUEST[$value['id']]);
					
				}
				
				foreach ($this->options_generalsettings as $value) {
					
					if (isset($_REQUEST[$value['id']])) {
						
						set_theme_mod($value['id'], $_REQUEST[$value['id']]);
						
					} else {
						
						remove_theme_mod($value['id']);
						
					}
				}
				
				header("Location: admin.php?page=web_dorado_theme&controller=general_page&saved=true");
				die;
				
			} 
			else {
				
				if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'reset' ) {
					
					foreach ($this->options_generalsettings as $value) {
						remove_theme_mod($value['id']);
					}
					
					header("Location: admin.php?page=web_dorado_theme&controller=general_page&reset=true");
					die;
				
				}
			}			
		}	
	}
	
	public function web_dorado_general_settings_page_admin_scripts(){	
		
		wp_enqueue_style('general_settings_page_main_style',get_template_directory_uri().'/admin/css/general_settings_page.css');	
		wp_enqueue_script('jquery');
		wp_enqueue_script('common');
		wp_enqueue_script('jquery-color');
		wp_print_scripts('editor');
		if (function_exists('add_thickbox')) add_thickbox();
		wp_print_scripts('media-upload');
		//if (function_exists('wp_tiny_mce')) wp_tiny_mce();
		wp_admin_css();
		wp_enqueue_script('utils');
		do_action("admin_print_styles-post-php");
		do_action('admin_print_styles');
	
	}
	
	public function dorado_theme_admin_general_settings(){
	   if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='general_page'){	
		if (isset($_REQUEST['saved']) && $_REQUEST['saved'] ) 
		
			echo '<div id="message" class="updated"><p><strong>' . $this->generalsettings . ' settings are saved.</strong></p></div>';
			
		if (isset($_REQUEST['reset']) && $_REQUEST['reset'] ) 
		
			echo '<div id="message" class="updated"><p><strong>' . $this->generalsettings . ' settings are reset.</strong></p></div>';
	   }	   
		?>
		
			<script type="text/javascript">
			function open_or_hide_param(cur_element){
				if(cur_element.checked){
					jQuery(cur_element).parent().parent().parent().find('.open_hide').show();
				}
				else
				{
					jQuery(cur_element).parent().parent().parent().find('.open_hide').hide();
				}
				
			}
				//<![CDATA[
				jQuery(document).ready(function ($) {
					
					
					
					/*setup the var*/
		
					jQuery('#main_general_page .upload-button').click(function () {
						window.parent.uploadID = jQuery(this).prev('input');
						/*grab the specific input*/
						formfield = jQuery('.upload').attr('name');
						tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
						return false;
					});
		
					window.send_to_editor = function (html) {
						imgurl = jQuery('img', html).attr('src');
						window.parent.uploadID.val(imgurl);
						/*assign the value to the input*/
						tb_remove();
					};
				});
				//]]>
				

					
			</script>
		<?php  global $web_dor; ?>	
		<div id="main_general_page">
			<table align="center" width="90%" style="margin-top: 0px;border-bottom: rgb(111, 111, 111) solid 2px;">
			    <tr>   
                     <td style="font-size:14px; font-weight:bold">
					     <a href="<?php echo $web_dor.'/wordpress-themes-guide-step-1.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">User Manual</a><br />This section allows you to make changes in overall content of the site.
                         <a href="<?php echo $web_dor.'/wordpress-theme-options/3-3.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">More...</a>
					 </td>  
                      <td  align="right" style="font-size:16px;">
                           <a href="<?php echo $web_dor.'/wordpress-themes/business-responsive.html'; ?>" target="_blank" style="color:red; text-decoration:none;">
                              <img src="<?php echo get_template_directory_uri() ?>/images/header.png" border="0" alt="" width="215">
                           </a>
                        </td>
                </tr>
				<tr>
					<td>
						<h3 style="margin: 0px;font-family:Segoe UI;padding-bottom: 15px;color: rgb(111, 111, 111); font-size:18pt;">General</h3>
					</td>
				</tr>
			</table>	
			<form method="post" action="themes.php?page=web_dorado_theme&controller=general_page">
					
				<table align="center" width="90%" style=" padding-bottom:0px; padding-top:0px;">
					<tr>
						<td>
							<div id="wrap-general"  class="content-div ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs ui-widget ui-corner-all">
								
								
								
								<div>
									<div class="optiontitle first">
										<h3>Custom CSS</h3>
									</div>
									<div class="block">
										<div class="optiondescreption">
											<p>Custom CSS will change the visual style of the site. This CSS code will be inserted in the &lt;head&gt; tag of your site. You can provide custom CSS code to be applied to specific elements.</p>
										</div>
										<div class="optioninput">
											<textarea name="_custom_css" id="_custom_css"  style="width:440px; height:200px;"><?php if (get_theme_mod('_custom_css') != "") {  echo stripslashes(esc_html(get_theme_mod('_custom_css')));  } else { } ?></textarea>
										</div>
									</div>
								</div>
								<div>
									<div class="optiontitle">
										<h3>Logo</h3>
									</div>		
									<div class="optiondescreption">
										<p>You can apply a custom logo image by clicking on the Upload Image button and uploading your image.</p>
									</div>
									<div class="optioninput" id="upload_images">
										<input class="upload" id="_logo_img" type="text" size="36" name="_logo_img"   value="<?php if (get_theme_mod("_logo_img") != "") {  echo stripslashes(esc_url(get_theme_mod("_logo_img"))); } ?>"/>
										<input class="upload-button" type="button" value="Upload Image"/>
									</div>
								</div>
                                <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
								<div>		
									<div class="optiontitle">
										<h3>Show Favicon</h3>
									</div>
									<div class="block margin">
										<div class="optiondescreption">
											<p>Check the box to show favicon on the site. You can add custom favicon to your homepage. Press &#34;Upload image&#34; button and choose the corresponding file if the box is checked. By default favicon is a 16 x 16 pixel file saved in favicon.ico format in root directory of the server.</p>
										</div>
										<div class="optioninput checkbox">
											<input type="checkbox" onclick="open_or_hide_param(this)" class="checkbox with_input" value="on"  id="_favicon_enable" type="text" size="36" name="_favicon_enable" <?php checked( get_theme_mod("_favicon_enable"), "on" ); ?>/>
										</div>
									</div>
										
								   <div  class="open_hide">
                                   
								   <div class="optiondescreption">
										<p>You can apply a custom favicon image by clicking on the Upload Image button and uploading your image.</p>
									</div>
									<div class="optioninput open_cheched" id="upload_images">
										<input class="upload" id="_favicon_img" type="text" size="36" name="_favicon_img"  value="<?php if (get_theme_mod("_favicon_img") != "") {   echo stripslashes(esc_url(get_theme_mod("_favicon_img")));  } ?>"/>
										<input class="upload-button" type="button" value="Upload Image"/>
									</div>
                                    
								   </div>
								</div>	
								<?php } ?>
								<div>
									<div class="optiontitle">
										<h3>Blog Style Post Format</h3>
									</div>
									<div class="block margin">
										<div class="optiondescreption">
											<p>Here you can choose to change the format of your index/homepage posts and view them as short post
												previews.</p>
										</div>
										<div class="optioninput checkbox">
											<input type="checkbox" class="checkbox" name="_blog_style"   id="_blog_style" <?php checked( get_theme_mod("_blog_style"), "on" ); ?>>
										</div>
									</div>
								</div>
								<div>
									<div class="optiontitle">
										<h3>Grab the First Post Image</h3>
									</div>
									<div class="block margin">
									<div class="optiondescreption">
										<p>Enable this option if you want to use the images that are already in your post to create a thumbnail
											without using custom fields. In this case thumbnail images will be generated automatically using the
											first image of the post. Note that the image needs to be hosted on your own server.</p>
									</div>
									<div class="optioninput checkbox">
										<input type="checkbox" class="checkbox" name="_grab_image"  id="_grab_image" <?php checked( get_theme_mod("_grab_image"), "on" ); ?>>
									</div>
								    </div>
								</div>
								<div>
									<div class="optiontitle">
										<h3>Show Twitter Icon</h3>
									</div>
									<div class="block margin">
										<div class="optiondescreption">
											<p>Here you can choose to show the Twitter Icon.</p>
										</div>
										<div class="optioninput checkbox">									
											<input type="checkbox"  onclick="open_or_hide_param(this)" class="checkbox with_input" name="_show_twitter_icon"  id="_show_twitter_icon" <?php checked(( get_theme_mod("_show_twitter_icon") || get_theme_mod("_twitter_url") == ""), true ); ?>>
										</div>
									</div>
									<div class="open_hide">
										<div class="optiondescreption">
											<p>Enter your Twitter Profile URL below.</p>
										</div>
								
										<div class="optioninput">
											<input name="_twitter_url" id="_twitter_url" type="text"  value="<?php if (get_theme_mod("_twitter_url") != "") {   echo stripslashes(esc_url(get_theme_mod("_twitter_url")));  }  ?>"></div>
									</div>
								</div>
								<div>
									<div class="optiontitle">
										<h3>Show RSS Icon</h3>
									</div>
									<div class="block margin">
									<div class="optiondescreption">
										<p>Here you can choose to show the RSS Icon.</p>
									</div>									
									<div class="optioninput checkbox">
										<input type="checkbox"  onclick="open_or_hide_param(this)"  class="checkbox with_input" name="_show_rss_icon"  id="_show_rss_icon" <?php checked(( get_theme_mod("_show_rss_icon") || get_theme_mod("_rss_url") == ""), true ); ?>>
									</div>
									</div>
									<div class="open_hide">
									
										<div class="optiondescreption">
											<p>Enter your RSS URL below.</p>
										</div>
								
										<div class="optioninput">
											<input name="_rss_url" id="_rss_url" type="text" value="<?php if (get_theme_mod("_rss_url") != "") {  echo stripslashes(esc_url(get_theme_mod("_rss_url")));  }  ?>">
										</div>
									</div>
								</div>
								<div>
									<div class="optiontitle">
										<h3>Show Facebook Icon</h3>
									</div>
									<div class="block margin">
									<div class="optiondescreption">
										<p>Here you can choose to show the Facebook Icon.</p>
									</div>
									<div class="optioninput checkbox">
										<input type="checkbox"  onclick="open_or_hide_param(this)"  class="checkbox with_input" name="_show_facebook_icon" id="_show_facebook_icon" <?php checked(( get_theme_mod("_show_facebook_icon") || get_theme_mod("_facebook_url") == ""), true ); ?>>
									</div>
									</div>
									<div class="open_hide">
										<div class="optiondescreption">
											<p>Enter your Facebook Profile URL below.</p>
										</div>
								
										<div class="optioninput">		
											<input name="_facebook_url" id="_facebook_url" type="text"  value="<?php if (get_theme_mod("_facebook_url") != "") {  echo stripslashes(esc_url(get_theme_mod("_facebook_url")));  }  ?>">
										</div>
									</div>
								
								</div>		
									
								<div>
									<div class="optiontitle first">
										<h3>Display Date to the Posts</h3>
									</div>
									<div class="block margin">
										<div class="optioninput checkbox">
											<input type="checkbox" class="checkbox" name="_date_enable"   id="_date_enable" <?php checked( get_theme_mod("_date_enable"), "on" ); ?>>
										</div>
										
										<div class="optiondescreption">
											<p>Choose to display date in posts whether or not.</p>
										</div>
									</div>							
								</div>
								<div>
									<div class="optiontitle first">
										<h3>Information in the Footer</h3>
									</div>
									<div class="">
									    <div class="optiondescreption">
											<p>Here you can provide the HTML code to be inserted in the footer of your web site.</p>
										</div>
										<div class="optioninput">
											<textarea name="_footer_text" id="_footer_text" style="width:440px; height:200px;"><?php if ($this->options_generalsettings[21]['std'] != "") {  echo stripslashes(esc_html($this->options_generalsettings[21]['std']));   } ?></textarea>
										</div>
										
										
									</div>							
								</div>
							</div>		
						</td>
					</tr>
				</table>
					<br/>
	

		<p class="submit" style="float: left; margin-left: 63px; margin-right: 8px;">
			<input class="button" name="save" type="submit" value="Save changes"/>
			<input type="hidden" name="action" value="save"/>
		</p>
		</form>
		<form method="post" action="themes.php?page=web_dorado_theme&controller=general_page">
			<p class="submit">
				<input class="button" name="reset" type="submit" value="Reset"/>
				<input type="hidden" name="action" value="reset"/>
			</p>
		</form>
		</div>
		<?php

	
	}	

}
 
<?php

class expert_integration_page_class{
	
	public $integration;
	
	public $shortintegration;

	public $options_integration;

	
	function __construct(){
		
		$this->integration = "Integration";
		$this->shortintegration = "int";
		
		$this->options_integration = array(			

			array(
			
				"name" => "Integration",

				"id" => "_integrate_header_enable",

				"std" => ""
				
			),

			array(
			
				"name" => "Integration",

				"id" => "_integrate_body_enable",

				"std" => ""
				
			),

			array(
			
				"name" => "Integration",

				"id" => "_integrate_singletop_enable",

				"std" => ""
				
			),

			array(
			
				"name" => "Integration",

				"id" => "_integrate_singlebottom_enable",

				"std" => ""
				
			),

			array(
			
				"name" => "Integration",

				"id" => "_integration_head",

				"std" => ""
			
			),

			array(
			
				"name" => "Integration",

				"id" => "_integration_body",

				"std" => ""
			),

			array(
				"name" => "Integration",
	
				"id" => "_integration_single_top",
	
				"std" => ""
			),

			array(
			
				"name" => "Integration",

				"id" => "_integration_single_bottom",

				"std" => ""
			),
			
			array(
				"name" => "Integration",
	
				"id" => "_integration_single_top",
	
				"std" => ""
			),
			
			array(
				"name" => "Integration",
	
				"id" => "_integrate_is_baner_enable",
	
				"std" => ""
			),

			array(
				"name" => "Integration",
	
				"id" => "_integrate_baner_image_url",
	
				"std" => ""
			),
		
			array(
				"name" => "Integration",
	
				"id" => "_integrate_baner_click_destination",
	
				"std" => ""
			),
		
			array(
				"name" => "Integration",
	
				"id" => "_integrate_baner_adsens_code",
	
				"std" => ""
			),
	
			
		);
		
		
	}


	/// save changes or reset options
	public function web_dorado_theme_update_and_get_options_integration(){
		
		if ( isset($_GET['page']) && $_GET['page'] == "web_dorado_theme" && isset($_GET['controller']) && $_GET['controller'] == "integration_page") {
			if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'save') {
				foreach ($this->options_integration as $value) {
					set_theme_mod($value['id'], $_REQUEST[$value['id']]);
				}
				foreach ($this->options_integration as $value) {
					if (isset($_REQUEST[$value['id']])) {
						set_theme_mod($value['id'], $_REQUEST[$value['id']]);
					} else {
						remove_theme_mod($value['id']);
					}
				}
				header("Location: themes.php?page=web_dorado_theme&controller=integration_page&saved=true");
				die;
			} else if (isset($_REQUEST['action']) && $_REQUEST['action'] =='reset') {
				foreach ($this->options_integration as $value) {
					remove_theme_mod($value['id']);
				}
				header("Location: themes.php?page=web_dorado_theme&controller=integration_page&reset=true");
				die;
			}
		}
	
	}
	
	public function web_dorado_integration_page_admin_scripts(){
		
		wp_enqueue_style('integration_page_main_style',get_template_directory_uri().'/admin/css/integration_page.css');	
		if (function_exists('add_thickbox')) add_thickbox();
		wp_print_scripts('media-upload');
		

	}
	
	public function dorado_theme_admin_integration(){
	
	if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='integration_page'){
	if (isset($_REQUEST['saved']) && $_REQUEST['saved'] ) 
	
		echo '<div id="message" class="updated"><p><strong>Integration settings are saved.</strong></p></div>';
		
	if (isset($_REQUEST['reset']) && $_REQUEST['reset'] ) 
	
		echo '<div id="message" class="updated"><p><strong>Integration settings are reset.</strong></p></div>';
	}
	?>
	<script>
	function open_or_hide_param(cur_element){
				if(cur_element.checked){
					jQuery(cur_element).parent().parent().parent().find('.open_hide').show();
				}
				else
				{
					jQuery(cur_element).parent().parent().parent().find('.open_hide').hide();
				}
	}
	
	jQuery(document).ready(function() {
		jQuery('.with_input').each(function(){open_or_hide_param(this)})
	
	jQuery("#change-integration-1").click(function(){
				jQuery("#integration_2").hide(100);
				jQuery("#integration_1").show(100);
				jQuery("#button-1").addClass("active_button");
				jQuery("#button-2").removeClass("active_button");

		
			});
		  
	jQuery("#change-integration-2").click(function(){
		
				jQuery("#integration_1").hide(100);
				jQuery("#integration_2").show(100);
				jQuery("#button-2").addClass("active_button");
				jQuery("#button-1").removeClass("active_button");

	});
	
					/*setup the var*/
		
	jQuery('#main_integration_page .upload-button').click(function () {
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

	</script>
<?php  global $web_dor; ?>
<div id="main_integration_page">
	<table align="center" width="90%" style="margin-top: 0px; margin-bottom: 20px;border-bottom: rgb(111, 111, 111) solid 2px;">
	    <tr>   
			 <td style="font-size:14px; font-weight:bold">
				 <a href="<?php echo $web_dor.'/wordpress-themes-guide-step-1.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">User Manual</a><br />This section allows you to integrate the website with social media and analytical tools.
				 <a href="<?php echo $web_dor.'/wordpress-theme-options/3-5.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">More...</a>
			  </td>   
			  <td  align="right" style="font-size:16px;">
				   <a href="<?php echo $web_dor.'/wordpress-themes/business-responsive.html'; ?>" target="_blank" style="color:red; text-decoration:none;">
					  <img src="<?php echo get_template_directory_uri() ?>/images/header.png" border="0" alt="" width="215">
				   </a>
			   </td>
        </tr>
		<tr>
			<td>
				<h3  style="margin: 0px;font-family:Segoe UI;padding-bottom: 15px;color: rgb(111, 111, 111); font-size:18pt;"><?php echo $this->integration; ?></h3>
			</td>
		</tr>
	</table>
		<form method="post" action="themes.php?page=web_dorado_theme&controller=integration_page">
			<table align="center" width="90%" style=" padding-bottom:0px; padding-top:0px;">
				<tr>
					<td>
							<a href="javascript:;" id="change-integration-1" style="text-decoration:none; color:black; font-family:Segoe UI;color: rgb(111, 111, 111); font-size:10p;"><span class="button active_button" id="button-1" style="background: url(<?php echo get_template_directory_uri(); ?>/images/button.png) center; background-size: 100% 100%;">Main Integration</span></a>
							<a href="javascript:;" id="change-integration-2" style="text-decoration:none; background-color:silver; color:black; font-family:Segoe UI;color: rgb(111, 111, 111); font-size:10p;"><span class="button" id="button-2" style="background: url(<?php echo get_template_directory_uri(); ?>/images/button.png) center; background-size: 100% 100%;">AdSense and Advertisement Integration</span></a>
<br />
<br />

<div id="integration_1">
                      <div>
						<div class="optiontitle first">
							<h3>Enable header code</h3>
						</div>
						
						<div class="block margin">
							<div class="optiondescreption">
								<p>Enable this option to add the header code specified below. Disabling this option removes the
									header code from your blog (the code is saved and can be used later on).</p>
							</div>
							<div class="optioninput checkbox">
								<input type="checkbox" onclick="open_or_hide_param(this)" class="checkbox with_input" name="_integrate_header_enable"  id="_integrate_header_enable" <?php checked( get_theme_mod("_integrate_header_enable"), "on" ); ?>>
							</div>
	                    </div>
						<div class="open_hide">	
							<div class="optiondescreption">
								<p>Here you can add code to appear in the head section of every page of your blog (useful adding
									javascript or css to all pages).</p>
							</div>
		
							<div class="optioninput">
								<textarea name="_integration_head" id="_integration_head" style="width:440px; height:200px;"><?php if (get_theme_mod('_integration_head') != "") {  echo stripslashes(esc_html(get_theme_mod('_integration_head')));   } ?></textarea>
		
							</div>
						</div>
					  </div>	
					  <div>
						<div class="optiontitle">
							<h3>Enable body code</h3>
						</div>
						<div class="block margin">
							<div class="optiondescreption">
								<p>Enable this option to add the body code specified below. Disabling this option removes the
									body code from your blog (the code is saved and can be used later on).</p>
							</div>
							<div class="optioninput checkbox">
								<input type="checkbox"  onclick="open_or_hide_param(this)" class="checkbox with_input" name="_integrate_body_enable" id="_integrate_body_enable" <?php checked( get_theme_mod("_integrate_body_enable"), "on" ); ?>>
							</div>
						</div>
						<div class="open_hide">
							<div class="optiondescreption">
								<p>Here you can add code to appear in body section of all pages of your blog. Can be used
									to enter a tracking pixel for a state counter such as Google Analytics.</p>
							</div>
		
							<div class="optioninput">
								<textarea name="_integration_body" id="_integration_body" style="width:440px; height:200px;"><?php if (get_theme_mod('_integration_body') != "") {  echo stripslashes(esc_html(get_theme_mod('_integration_body')));  }  ?></textarea>	
							</div>	
						</div>
					  </div>
                      <div>					  
						<div class="optiontitle">
							<h3>Enable single top code</h3>
						</div>
						<div class="block margin">
							<div class="optiondescreption">
								<p>Enable this option to add the single top code specified below. Disabling this option removes
									the single top code from your blog (the code is saved and can be used later on).</p>
							</div>
							<div class="optioninput checkbox">
								<input type="checkbox" onclick="open_or_hide_param(this)" class="checkbox with_input" name="_integrate_singletop_enable" id="_integrate_singletop_enable" <?php checked( get_theme_mod("_integrate_singletop_enable"), "on" ); ?>>
							</div>
						</div>
						<div class="open_hide">
							<div class="optiondescreption">
								<p>Here you can add code to be palcedat the top of all single posts (useful for integrating social bookmarking
									links for instance).</p>
							</div>
						
							<div class="optioninput">
								<textarea name="_integration_single_top" id="_integration_single_top" style="width:440px; height:200px;"><?php if (get_theme_mod('_integration_single_top') != "") {  echo stripslashes(esc_html(get_theme_mod('_integration_single_top')));   }?></textarea>
							</div>
						</div>
	                   </div>
					   <div>
						<div class="optiontitle">
							<h3>Enable single bottom code</h3>
						</div>
						<div class="block margin">
							<div class="optiondescreption">
								<p>Enable this option to add the single bottom code specified below. Disabling this option
									removes the single bottom code from your blog (the code is saved and can be used later
									on).</p>
							</div>
							<div class="optioninput checkbox">
								<input type="checkbox" onclick="open_or_hide_param(this)" class="checkbox with_input" name="_integrate_singlebottom_enable"  id="_integrate_singlebottom_enable" <?php checked( get_theme_mod("_integrate_singlebottom_enable"), "on" ); ?>>
							</div>
						</div>
						<div class="open_hide">
							<div class="optiondescreption">
								<p>Here you can add code to be placed at the bottom of all single posts. </p>
							</div>
							<div class="optioninput">
								<textarea name="_integration_single_bottom" id="_integration_single_bottom" style="width:440px; height:200px;"><?php if (get_theme_mod('_integration_single_bottom') != "") {  echo stripslashes(esc_html(get_theme_mod('_integration_single_bottom' )));  }?></textarea>
							</div>
						</div>	
	                   </div>
						
	
	

						</div>
						<div id="integration_2"  style="display:none;">
							<div class="optiontitle">
								<h3>Enable advertisement banner</h3>
							</div>		
							<div class="block margin">					
								<div class="optiondescreption">
									<p>Enable this option to add advertisement banner (size 468x60) on the bottom of your post pages below the single post content. If enabled you must upload the banner image and fill in the destination URL below.</p>
								</div>							
								<div class="optioninput checkbox">
									<input type="checkbox" class="checkbox" name="_integrate_is_baner_enable"  id="_integrate_is_baner_enable" <?php checked( get_theme_mod("_integrate_is_baner_enable"), "on" ); ?>>
								</div>
							</div>
							
							<div class="optiontitle">
								<h3>Upload advertisement banner image</h3>
							</div>
							<div class="optiondescreption">
								<p>You can upload the advertisement banner (size 468x60) by clicking the Upload banner button.</p>
							</div>
							<div class="optioninput">
								
								<input class="upload" id="_integrate_baner_image_url" type="text" size="85" name="_integrate_baner_image_url"   value="<?php if (get_theme_mod("_integrate_baner_image_url") != "") {  echo stripslashes(esc_url(get_theme_mod("_integrate_baner_image_url"))); } ?>"/>
								<input class="upload-button" type="button" value="Upload Image"/>
							</div>
							
							<div class="optiontitle">
								<h3>The URL of advertisement banner when clicked</h3>
							</div>
							<div class="optiondescreption">
								<p>You can provide the value of the destination URL when advertisement banner is clicked.</p>
							</div>
							<div class="optioninput">
								<input type="text" size="100" class="text" name="_integrate_baner_click_destination"  id="_integrate_baner_click_destination" value="<?php echo stripslashes(get_theme_mod("_integrate_baner_click_destination",'')); ?>">
							</div>
							
							<div class="optiontitle">
								<h3>AdSense Code</h3>
							</div>
							<div class="optiondescreption">
								<p>Please insert the AdSense code provided by Google. </p>
							</div>
							<div class="optioninput">
								<input type="text" size="100" class="text" name="_integrate_baner_adsens_code"  id="_integrate_baner_adsens_code" value="<?php echo stripslashes(esc_attr(get_theme_mod("_integrate_baner_adsens_code",''))); ?>">
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
		<form method="post" action="themes.php?page=web_dorado_theme&controller=integration_page">
			<p class="submit">
				<input class="button" name="reset" type="submit" value="Reset"/>
				<input type="hidden" name="action" value="reset"/>
			</p>
		</form>
	</div>
	<?php	
	}	

}
 
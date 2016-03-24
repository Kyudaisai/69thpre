<?php

class expert_color_control_page_class{
	
	public $colorcontrol;
	public $shortcolorcontrol;
	public $options_colorcontrol;
	
	function __construct(){
		$this->colorcontrol = "Color Control";
		$this->shortcolorcontrol = "cc";
		
		$value_of_std[0]=get_theme_mod($this->shortcolorcontrol."_head_elem_back_color",'#e8e8e8');
		$value_of_std[1]=get_theme_mod($this->shortcolorcontrol."_content_back_color",'#ececec');
		$value_of_std[2]=get_theme_mod($this->shortcolorcontrol."_shadow_background_color",'#ffffff');
		$value_of_std[3]=get_theme_mod($this->shortcolorcontrol."_footer_back_color",'#ececec');
		$value_of_std[4]=get_theme_mod($this->shortcolorcontrol."_text_headers_color",'#1f1f1f');
		$value_of_std[5]=get_theme_mod($this->shortcolorcontrol."_primary_text_color",'#1f1f1f');
		$value_of_std[6]=get_theme_mod($this->shortcolorcontrol."_footer_text_color",'#1f1f1f');
		$value_of_std[7]=get_theme_mod($this->shortcolorcontrol."_primary_links_color",'#575757');
		$value_of_std[8]=get_theme_mod($this->shortcolorcontrol."_primary_links_hover_color",'#000000');
		$value_of_std[9]=get_theme_mod($this->shortcolorcontrol."_menu_color",'#dd9100');
		$value_of_std[10]=get_theme_mod($this->shortcolorcontrol."_selected_menu_color",'#dd9100');
		$value_of_std[11]=get_theme_mod($this->shortcolorcontrol."_color_scheme",'#E0E0E0');		

		
		$this->options_colorcontrol = array(
		    array(
			
				"name" => "Header Element Backround ",
				
				"desc" => "",

				"id" => $this->shortcolorcontrol . "_head_elem_back_color",
				
				"type" => "picker",
				
				"std" => $value_of_std[0]
			), 	
			
			/*array(

				"name" => "Body Background",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_content_back_color",

				"type" => "picker",

				"std" => $value_of_std[1]
				
			),	*/
			
			array(
			
				"name" => "Slider Background",
				
				"desc" => "",

				"id" => $this->shortcolorcontrol . "_shadow_background_color",
				
				"type" => "picker",
				
				"std" => $value_of_std[2]
			),	

			array(

				"name" => "Footer Background",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_footer_back_color",

				"type" => "picker",

				"std" => $value_of_std[3]
				),
				
			array(

				"name" => "Header Text",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_text_headers_color",

				"type" => "picker",

				"std" => $value_of_std[4]
			),	

			

			array(

				"name" => "Primary Text",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_primary_text_color",

				"type" => "picker",

				"std" => $value_of_std[5]
			),
			
			array(

				"name" => "Footer Text",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_footer_text_color",

				"type" => "picker",

				"std" => $value_of_std[6]
			),

			

			array(

				"name" => "Primary Links",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_primary_links_color",

				"type" => "picker",

				"std" => $value_of_std[7]
			),

			array(

				"name" => "Primary Links Hover",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_primary_links_hover_color",

				"type" => "picker",

				"std" => $value_of_std[8]
			),

			

			array(

				"name" => "Hover Menu Item",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_menu_color",

				"type" => "picker",

				"std" => $value_of_std[9]
			),
			
			array(

				"name" => "Selected Menu Item",

				"desc" => "",

				"id" => $this->shortcolorcontrol . "_selected_menu_color",

				"type" => "picker",

				"std" => $value_of_std[10]
			),

			array(
			
				"name" => " ",

				"id" => $this->shortcolorcontrol . "_color_scheme",
				
				"std" => $value_of_std[11]
			),
			
					

		);
		
	
	
	}


	/// save changes or reset options
	public function web_dorado_theme_update_and_get_options_color_control(){
		
		if ( isset($_GET['page']) && $_GET['page'] == "web_dorado_theme" && isset($_GET['controller']) && $_GET['controller'] == "color_control_page") {

			if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'save' ) {
				foreach ($this->options_colorcontrol as $value) {
					set_theme_mod($value['id'], $_REQUEST[$value['id']]);

				}
				foreach ($this->options_colorcontrol as $value) {
					if (isset($_REQUEST[$value['id']])) {
						set_theme_mod($value['id'], $_REQUEST[$value['id']]);
					} else {
						remove_theme_mod($value['id']);
					}
				}
				header("Location: themes.php?page=web_dorado_theme&controller=color_control_page&saved=true");
				die;
			} else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'reset' ) {
				foreach ($this->options_colorcontrol as $value) {
					remove_theme_mod($value['id']);
				}
				header("Location: themes.php?page=web_dorado_theme&controller=color_control_page&reset=true");
				die;
			}
		}	
	}
	
	public function web_dorado_color_control_page_admin_scripts(){
		wp_enqueue_script('wp-color-picker');
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_style('color_control_main_style',get_template_directory_uri().'/admin/css/color_control.css');	
	}
	
	public function dorado_theme_admin_color_control(){
		if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='color_control_page'){
			if (isset($_REQUEST['saved']) && $_REQUEST['saved'] ) 
		
			echo '<div id="message" class="updated"><p><strong>' . $this->colorcontrol . ' settings saved.</strong></p></div>';
			
		if (isset($_REQUEST['reset']) && $_REQUEST['reset'] ) 
		
			echo '<div id="message" class="updated"><p><strong>' . $this->colorcontrol . ' settings reset.</strong></p></div>';
		}
		$pickers=$this->get_option_type('picker');
		$count_picker=count( $pickers );
		?>
		<script>
		jQuery(function () {
			jQuery("#cc_color_scheme").change(function () {
				var bkg = jQuery("#cc_color_scheme option:selected").val();
				if (bkg == "Theme-2") {					
					jQuery("#cc_footer_back_color").iris('color',"#ececec");
					jQuery("#cc_content_back_color").iris('color',"#ececec");
					jQuery("#cc_primary_text_color").iris('color',"#1f1f1f");
					jQuery("#cc_text_headers_color").iris('color',"#1f1f1f");
					jQuery("#cc_primary_links_color").iris('color',"#575757");
					jQuery("#cc_primary_links_hover_color").iris('color',"#000000");
					jQuery("#cc_footer_text_color").iris('color',"#1f1f1f");
					jQuery("#cc_menu_color").iris('color',"#029ee1");
					jQuery("#cc_selected_menu_color").iris('color',"#029ee1");
					jQuery("#cc_shadow_background_color").iris('color',"#ffffff");
					jQuery("#cc_head_elem_back_color").iris('color',"#e8e8e8");
				}
				if (bkg == "Theme-1") {					
					jQuery("#cc_footer_back_color").iris('color',"#ececec");
					jQuery("#cc_content_back_color").iris('color',"#ececec");
					jQuery("#cc_primary_text_color").iris('color',"#1f1f1f");
					jQuery("#cc_text_headers_color").iris('color',"#1f1f1f");
					jQuery("#cc_primary_links_color").iris('color',"#575757");
					jQuery("#cc_primary_links_hover_color").iris('color',"#000000");
					jQuery("#cc_footer_text_color").iris('color',"#1f1f1f");
					jQuery("#cc_menu_color").iris('color',"#dd9100");
					jQuery("#cc_selected_menu_color").iris('color',"#dd9100");
					jQuery("#cc_shadow_background_color").iris('color',"#ffffff");
					jQuery("#cc_head_elem_back_color").iris('color',"#e8e8e8");
				}
				if (bkg == "Theme-3") {
					jQuery('#cc_head_elem_back_color').iris('color', '#000000');
					jQuery("#cc_footer_back_color").iris('color',"#ececec");
					jQuery("#cc_content_back_color").iris('color',"#ececec");
					jQuery("#cc_primary_text_color").iris('color',"#1f1f1f");
					jQuery("#cc_text_headers_color").iris('color',"#1f1f1f");
					jQuery("#cc_primary_links_color").iris('color',"#575757");
					jQuery("#cc_primary_links_hover_color").iris('color',"#000000");
					jQuery("#cc_footer_text_color").iris('color',"#1f1f1f");
					jQuery("#cc_menu_color").iris('color',"#018a24");
					jQuery("#cc_selected_menu_color").iris('color',"#018a24");
					jQuery("#cc_shadow_background_color").iris('color',"#ffffff");
					jQuery("#cc_head_elem_back_color").iris('color',"#e8e8e8");
				}
			});
		});
	</script>
    <?php  global $web_dor; ?>
		<div id="main_color_control_page">			
			<table align="center" width="90%" style="margin-top: 0px;border-bottom: rgb(111, 111, 111) solid 2px;">
			    <tr>   
                      <td style="font-size:14px; font-weight:bold">
					     <a href="<?php echo $web_dor.'/wordpress-themes-guide-step-1.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">User Manual</a><br />This section allows you customize the color features.
                         <a href="<?php echo $web_dor.'/wordpress-theme-options/3-6.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">More...</a>
					 </td>    
                      <td  align="right" style="font-size:16px;">
                           <a href="<?php echo $web_dor.'/wordpress-themes/business-responsive.html'; ?>" target="_blank" style="color:red; text-decoration:none;">
                              <img src="<?php echo get_template_directory_uri() ?>/images/header.png" border="0" alt="" width="215">
                           </a>
                       </td>
                </tr>
				<tr>
					<td style="height: 70px;"><h3 style="margin: 0px;font-family:Segoe UI;color: rgb(111, 111, 111); font-size:18pt;">Color Control</h3></td>
				</tr>
			</table>
		  <div style="margin: 0 auto;width:90%;padding-bottom:0px; padding-top:0px;">		
			<div class="optiontitle" style="">
				  <p style="font-size:15px;font-weight:bold;color: #333;">The color customization parameters are disabled in free version. Please buy the commercial version in order to enable this functionality.</p>
				  <img src="<?php echo get_template_directory_uri(); ?>/images/color.jpg" width="100%" style="border-bottom: 1px solid rgb(206, 206, 206);">
			</div>
	</div>
</div>	
		 <?php
	}
	
	private function get_option_type($type=''){
	$cur_type_elements=array();
	$k=0;
	foreach( $this->options_colorcontrol as $option ){
		
		if(isset($type) && isset($option['type']) && $option['type'] == $type ){
		
			$cur_type_elements[$k]=$option;
			$k++;
		}
		
	}
	return $cur_type_elements;
	}

}
 

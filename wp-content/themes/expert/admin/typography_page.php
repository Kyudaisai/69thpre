<?php

class expert_typography_page_class{
	
	public $typography;
	public $shorttypography;	
	public $options_typography;
	
	function __construct(){
		
		$this->typography = "Typography";	
		$value_of_std[0]=get_theme_mod("_type_headers_font",'Segoe UI');
		$value_of_std[1]=get_theme_mod("_type_headers_kern",'0.00em');
		$value_of_std[2]=get_theme_mod("_type_headers_transform",'none');
		$value_of_std[3]=get_theme_mod("_type_headers_variant",'normal');
		$value_of_std[4]=get_theme_mod("_type_headers_weight",'normal');
		$value_of_std[5]=get_theme_mod("_type_headers_style",'normal');
		$value_of_std[6]=get_theme_mod("_type_inputs_font",'Segoe UI');
		$value_of_std[7]=get_theme_mod("_type_inputs_kern",'0.00em');
		$value_of_std[8]=get_theme_mod("_type_inputs_transform",'none');
		$value_of_std[9]=get_theme_mod("_type_inputs_variant",'normal');
		$value_of_std[10]=get_theme_mod("_type_inputs_weight",'normal');
		$value_of_std[11]=get_theme_mod("_type_inputs_style",'normal');
		$value_of_std[12]=get_theme_mod("_type_primary_font",'Segoe UI');
		$value_of_std[13]=get_theme_mod("_type_primary_kern",'0.00em');
		$value_of_std[14]=get_theme_mod("_type_primary_transform",'none');
		$value_of_std[15]=get_theme_mod("_type_primary_variant",'normal');
		$value_of_std[16]=get_theme_mod("_type_primary_weight",'normal');	
		$value_of_std[17]=get_theme_mod("_type_primary_style",'normal');
		$value_of_std[18]=get_theme_mod("_type_secondary_font",'Segoe UI');
		$value_of_std[19]=get_theme_mod("_type_secondary_kern",'0.00em');
		$value_of_std[20]=get_theme_mod("_type_secondary_transform",'none');
		$value_of_std[21]=get_theme_mod("_type_secondary_variant",'normal');
		$value_of_std[22]=get_theme_mod("_type_secondary_weight",'normal');	
		$value_of_std[23]=get_theme_mod("_type_secondary_style",'normal');	
		
		$this->options_typography = array(
		  	array(
		   
		  	"name" => "Typography",

           	"type" => "title"
			
			),

    		array( 
			
				"type" => "open"
			),

			array(

				"name" => "Typography",

				"id" => "_type_headers_font",

				"desc" => "",

				"type" => "select",

				"std" => $value_of_std[0]
			),

			array(

				"name" => "Typography",

				"id" => "_type_headers_kern",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[1]
			),

			array(

				"name" => "Typography",

				"id" => "_type_headers_transform",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[2]
			),

			array(

				"name" => "Typography",

				"id" => "_type_headers_variant",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[3]
			),

			array(

				"name" => "Typography",

				"id" => "_type_headers_weight",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[4]
			),

			array(

				"name" => "Typography",

				"id" => "_type_headers_style",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[5]
			),

		
			array(

				"name" => "Typography",

				"id" => "_type_inputs_font",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[6]
			),

			array(

				"name" => "Typography",

				"id" => "_type_inputs_kern",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[7]
			),

			array(

				"name" => "Typography",

				"id" => "_type_inputs_transform",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[8]
			),

			array(

				"name" => "Typography",

				"id" => "_type_inputs_variant",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[9]
			),

			array(

				"name" => "Typography",

				"id" => "_type_inputs_weight",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[10]
			),

			array(

				"name" => "Typography",

				"id" => "_type_inputs_style",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[11]
			),

		
			array(

				"name" => "Typography",

				"id" => "_type_primary_font",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[12]
				),

			array(

				"name" => "Typography",

				"id" => "_type_primary_kern",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[13]
			),

			array(

				"name" => "Typography",

				"id" => "_type_primary_transform",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[14]
			),

			array(

				"name" => "Typography",

				"id" => "_type_primary_variant",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[15]
			),

			array(

				"name" => "Typography",

				"id" => "_type_primary_weight",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[16]
			),

			array(

				"name" => "Typography",

				"id" => "_type_primary_style",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[17]
			),

		
			array(

				"name" => "Typography",

				"id" => "_type_secondary_font",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[18]
			),

			array(

				"name" => "Typography",

				"id" => "_type_secondary_kern",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[19]
			),

			array(

				"name" => "Typography",

				"id" => "_type_secondary_transform",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[20]
			),

			array(

				"name" => "Typography",

				"id" => "_type_secondary_variant",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[21]
			),

			array(

				"name" => "Typography",

				"id" => "_type_secondary_weight",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[22]
			),

			array(

				"name" => "Typography",

				"id" => "_type_secondary_style",

				"desc" => "",

				"type" => "",

				"std" => $value_of_std[23]
			),
			array(
			 
				"type" => "close"
			)
		);
				
	}


	/// save changes or reset options
	public function web_dorado_theme_update_and_get_options_typography(){
		
		if (isset($_GET['page']) && $_GET['page'] == "web_dorado_theme" && isset($_GET['controller']) && $_GET['controller'] == "typography_page") {
			if (isset($_REQUEST['action']) == 'save' ) {
				foreach ($this->options_typography as $value) {
					set_theme_mod($value['id'], $_REQUEST[$value['id']]);
				}
				foreach ($this->options_typography as $value) {
					if (isset($_REQUEST[$value['id']])) {
						set_theme_mod($value['id'], $_REQUEST[$value['id']]);
					} else {
						remove_theme_mod($value['id']);
					}
				}
				header("Location: themes.php?page=web_dorado_theme&controller=typography_page&saved=true");
				die;
			} else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'reset') {
				foreach ($this->options_typography as $value) {
					remove_theme_mod($value['id']);
				}
				header("Location: themes.php?page=web_dorado_theme&controller=typography_page&reset=true");
				die;
			}
		}

	
	}
	
	public function web_dorado_typography_page_admin_scripts(){

		wp_enqueue_style('typography_page_main_style',get_template_directory_uri().'/admin/css/typography_page.css');	
		wp_enqueue_script('jquery');
	
	}
	
	public function dorado_theme_admin_typography(){
		 if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='typography_page'){
			if (isset($_REQUEST['saved']) && $_REQUEST['saved'] ) 
		
			echo '<div id="message" class="updated"><p><strong>Typography settings saved.</strong></p></div>';
			
		if (isset($_REQUEST['reset']) && $_REQUEST['reset'] ) 
		
			echo '<div id="message" class="updated"><p><strong>Typography settings reset.</strong></p></div>';
		 }
		?>
		
		<script>
			jQuery(document).ready(function () {
		
				jQuery('.graphic_selector .graphic_select_border').click(function () {
					select_graphic(this);
				});
			});
		
			function font_style(element, property) {
		
				var currentSelect = jQuery(element).attr("id");
		
				var selectedOption = '#' + currentSelect + ' option:selected';
		
				var previewProp = jQuery(selectedOption).val();
		
				jQuery(element).parent().parent().parent().find('.optioninput').css(property, previewProp);
		
		
			}
		
			function select_graphic(ClickedLayout) {
		
				if (!jQuery(ClickedLayout).hasClass('disabled_option')) {
		
					jQuery(ClickedLayout).parent().parent().find('.graphic_select_border').removeClass('selectedgraphic');
					jQuery(ClickedLayout).addClass('selectedgraphic');
					jQuery(ClickedLayout).parent().find('.graphic_select_input').attr("checked", "checked");
		
				}
			}
		
			function toggle(showElement, hideElement) {
		
				jQuery(hideElement).hide();
				jQuery(hideElement + '_button').removeClass('active_button');
		
				if (jQuery(showElement).is(':visible')) {
					jQuery(showElement).fadeOut();
					jQuery(showElement + '_button').removeClass('active_button');
				} else {
					jQuery(showElement + '_button').addClass('active_button');
					jQuery(showElement).fadeIn();
		
				}
		
			}
		
		
		</script>
		<?php global $web_dor;?>
		<div id="main_typagrphy_page">
		<form method="post" action="themes.php?page=web_dorado_theme&controller=typography_page">
		
		<?php  foreach ($this->options_typography as $value) {
		
		
		switch ($value['type']) {
		case "open":
		?>

		<table align="center" width="90%" style=" padding-top: 0px; padding-bottom:0px;">
			<tr>
				<?php break;
				case "close":
		
				?>
			</tr>
		</table><br/>
		<?php break;
		case "title":
?>
		<table align="center" width="90%" style="margin-top: 0px;border-bottom: rgb(111, 111, 111) solid 2px;">
		<tr>   
                      <td style="font-size:14px; font-weight:bold">
					     <a href="<?php echo $web_dor.'/wordpress-themes-guide-step-1.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">User Manual</a><br />This section allows you to change the font styles.
                         <a href="<?php echo $web_dor.'/wordpress-theme-options/3-7.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">More...</a>
			          </td>   
                      <td  align="right" style="font-size:16px;">
                           <a href="<?php echo $web_dor.'/wordpress-themes/business-responsive.html'; ?>" target="_blank" style="color:red; text-decoration:none;">
                              <img src="<?php echo get_template_directory_uri() ?>/images/header.png" border="0" alt="" width="215">                           
                           </a>
                       </td>
        </tr>
		<tr>
			<td ><h3  style="border-bottom:0 !important;font-family:Segoe UI;padding-bottom: 15px;color: rgb(111, 111, 111); font-size:18pt; margin:0px;margin-bottom: 15px;"><?php echo $value['name']; ?></h3>
			</td>
		</tr>
		</table>
		
		<?php
		break;
		case 'select':
		?>
		<tr>
		<td>		
		<div>
			<div class="optiontitle first">
				Typography - Text Headers. Select the font style of your site&#39;s header tags (H1, H2, H3...)
			</div>
			<div>
				<div class="optioninput" style=" font-size:13pt;">
					<label class="typagrphy_label" for="_type_headers_font">Select Font</label><select id="_type_headers_font" name="_type_headers_font" class="fontselector"onchange="font_style(this, 'font-family')" size="1">
							<?php $this->fonts_options(get_theme_mod("_type_headers_font",'Segoe UI'));	?>	
						</select>
				</div>
				<div>
					<div class="font_preview_wrap">
						<label class="typagrphy_label" for="" style="font-size:18px;font-size: 20px;font-family: Segoe UI;">Preview</label>
		
						<div class="font_preview">
						
							<div class="optioninput"  style="font-size: 16px; margin-top: 14px;margin-bottom: 23px; font-family: <?php if (get_theme_mod("_type_headers_font") != "") {   echo htmlspecialchars(stripslashes(get_theme_mod("_type_headers_font")));
									  } else {   echo "Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif";  } ?>;font-weight:<?php if (get_theme_mod("_type_headers_weight") != "") {    echo get_theme_mod("_type_headers_weight");   } else {    echo "normal";   } ?>; letter-spacing:<?php if (get_theme_mod("_type_headers_kern") != "") {    echo get_theme_mod("_type_headers_kern");    } else {   echo "0.00em";  } ?>; text-transform:<?php if (get_theme_mod("_type_headers_transform") != "") {  echo get_theme_mod("_type_headers_transform");  } else {   echo "none";   } ?>; font-variant:<?php if (get_theme_mod("_type_headers_variant") != "") {    echo get_theme_mod("_type_headers_variant"); } else {   echo "normal";   } ?>; font-style:<?php if (get_theme_mod("_type_headers_style") != "") {   echo get_theme_mod("_type_headers_style");   } else {   echo "normal";
								 } ?>;">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
								labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
								laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
								voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
								non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
					<a href="javascript:;" style="text-decoration:none;"><span id="type_headers_set_styling_button"  class="button"  onclick="toggle('#type_headers_set_styling', '#type_headers_set_advanced')">Edit Font Styling</span></a>
		
					<div id="type_headers_set_styling" class="font_styling type_inputs optioninputtextarea" style="height: 110px;">
						<div class="type_select">
							<label class="typagrphy_label" for="_type_headers_kern">Letter Spacing</label>
							<select id="_type_headers_kern" name="_type_headers_kern"  onchange="font_style(this, 'letter-spacing')">				
								<option <?php selected( get_theme_mod("_type_headers_kern"), "-0.30em" ); ?> value="-0.30em">-0.30em </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "-0.25em" ); ?> value="-0.25em">-0.25em </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "-0.20em" ); ?> value="-0.20em">-0.20em </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "-0.15em" ); ?> value="-0.15em">-0.15em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "-0.10em" ); ?> value="-0.10em">-0.10em </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "-0.05em" ); ?> value="-0.05em">-0.05em </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.00em" ); ?> value="0.00em" selected="selected">0.00em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.05em" ); ?> value="0.05em">0.05em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.10em" ); ?> value="0.10em">0.10em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.15em" ); ?> value="0.15em">0.15em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.20em" ); ?> value="0.20em">0.20em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.25em" ); ?> value="0.25em">0.25em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.30em" ); ?> value="0.30em">0.30em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.35em" ); ?> value="0.35em">0.35em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.40em" ); ?> value="0.40em">0.40em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.45em" ); ?> value="0.45em">0.45em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.50em" ); ?> value="0.50em">0.50em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.55em" ); ?> value="0.55em">0.55em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.60em" ); ?> value="0.60em">0.60em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.65em" ); ?> value="0.65em">0.65em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.70em" ); ?> value="0.70em">0.70em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.75em" ); ?> value="0.75em">0.75em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.80em" ); ?> value="0.80em">0.80em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.85em" ); ?> value="0.85em">0.85em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.90em" ); ?> value="0.90em">0.90em  </option>
								<option <?php selected( get_theme_mod("_type_headers_kern"), "0.95em" ); ?> value="0.95em">0.95em  </option>
							</select>
						</div>
						<div class="type_select">
							<label class="typagrphy_label" class="typagrphy_label"; for="_type_headers_transform">Text Transform</label>
							<select id="_type_headers_transform" name="_type_headers_transform"   onchange="font_style(this, 'text-transform')">
								<option <?php selected( get_theme_mod("_type_headers_transform"), "none" ); ?> value="none" selected="selected">None </option>
								<option <?php selected( get_theme_mod("_type_headers_transform"), "uppercase" ); ?> value="uppercase">Uppercase </option>
								<option <?php selected( get_theme_mod("_type_headers_transform"), "capitalize" ); ?> value="capitalize">Capitalize </option>
								<option <?php selected( get_theme_mod("_type_headers_transform"), "lowercase" ); ?> value="lowercase">Lowercase  </option>
							</select>
						</div>
						<div class="type_select">
							<label class="typagrphy_label" for="_type_headers_variant">Variant</label>
							<select id="_type_headers_variant" name="_type_headers_variant" onchange="font_style(this, 'font-variant')">
								<option <?php selected( get_theme_mod("_type_headers_variant"), "normal" ); ?> value="normal" selected="selected">Normal </option>
								<option <?php selected( get_theme_mod("_type_headers_variant"), "small-caps" ); ?> value="small-caps">Small-Caps </option>
							</select>
						</div>
						<div class="type_select">
							<label class="typagrphy_label" for="_type_headers_weight">Weight</label>
							<select id="_type_headers_weight" name="_type_headers_weight"  onchange="font_style(this, 'font-weight')">
								<option <?php selected( get_theme_mod("_type_headers_weight"), "normal" ); ?> value="normal">Normal  </option>
								<option <?php selected( get_theme_mod("_type_headers_weight"), "bold" ); ?> value="bold">Bold </option>
								<option <?php selected( get_theme_mod("_type_headers_weight"), "lighter" ); ?> value="lighter">Light  </option>
							</select>
						</div>
						<div class="type_select">
							<label class="typagrphy_label" for="_type_headers_style">Style</label>
							<select id="_type_headers_style" name="_type_headers_style" onchange="font_style(this, 'font-style')">
								<option <?php selected( get_theme_mod("_type_headers_style"), "normal" ); ?> value="normal" selected="selected">Normal </option>
								<option <?php selected( get_theme_mod("_type_headers_style"), "italic" ); ?> value="italic">Italic </option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
		
					<div id="type_headers_set_advanced" class="advanced_type type_inputs">
						<div class="type_advanced">
							<label class="typagrphy_label" for="_type_headers_selectors">Additional Selectors</label>
							 <textarea class=""  name="-settings-two[type_headers][selectors]"   id="_type_headers_selectors"  rows="3"></textarea>
						</div>
						<div class="clear"></div>
					</div>
		
		
				</div>
			</div>
		</div>
		<br/>
		
		<br/>
		
		<div>
			<div class="optiontitle">
				Typography - Primary Font. Select the font style of your site&#39;s primary body text.
			</div>
			<div>
				<div class="optioninput" style=" font-size:13pt;">
					<label class="typagrphy_label" for="_type_primary_font">Select Font</label><select id="_type_primary_font" name="_type_primary_font"   class="fontselector"   onchange="font_style(this, 'font-family')"   size="1">
							<?php $this->fonts_options(get_theme_mod("_type_primary_font",'Segoe UI'));	?>	
						</select></div>
				<div>
				</div>
			</div>
			<div class="font_preview_wrap">
				<label class="typagrphy_label" for="" style="font-size:18px;font-size: 20px;font-family: Segoe UI;">Preview</label>
		
				<div class="font_preview">
					<div class="optioninput" style="font-size: 16px; margin-top: 14px; margin-bottom: 23px;  
					font-family: <?php if (get_theme_mod("_type_primary_font") != "") {
						echo htmlspecialchars(stripslashes(get_theme_mod("_type_primary_font")));
					} 
					else {
						
						echo "Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif";
						
					} ?>;
					font-weight:<?php if (get_theme_mod("_type_primary_weight") != "") {
						echo get_theme_mod("_type_primary_weight");
					} 
					else {
						echo "normal";
					} ?>;
					letter-spacing:<?php if (get_theme_mod("_type_primary_kern") != "") {
						echo get_theme_mod("_type_primary_kern");
					} 
					else {
						echo "0.00em";
					} ?>; 
					text-transform:<?php if (get_theme_mod("_type_primary_transform") != "") {
						echo get_theme_mod("_type_primary_transform");
					} else {
						echo "none";
					} ?>; font-variant:<?php if (get_theme_mod("_type_primary_variant") != "") {
						echo get_theme_mod("_type_primary_variant");
					} else {
						echo "normal";
					} ?>; font-style:<?php if (get_theme_mod("_type_primary_style") != "") {
						echo get_theme_mod("_type_primary_style");
					} else {
						echo "normal";
					} ?>;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
						ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
						fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
						deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			<a href="javascript:;" style="text-decoration:none;"><span id="_type_primary__set_styling_button" class="button"
																	   onclick="toggle('#_type_primary__set_styling', '#_type_primary__set_advanced')">Edit Font Styling</span></a>
		
			<div id="_type_primary__set_styling" class="font_styling type_inputs optioninputtextarea" style="height:110px;">
				<div class="type_select">
					<label class="typagrphy_label" for="_type_primary_kern">Letter Spacing</label>
					<select id="_type_primary_kern" name="_type_primary_kern" onchange="font_style(this, 'letter-spacing')">
						<option <?php selected( get_theme_mod("_type_primary_kern"), "-0.30em" ); ?> value="-0.30em">-0.30em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "-0.25em" ); ?> value="-0.25em">-0.25em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "-0.20em" ); ?> value="-0.20em">-0.20em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "-0.15em" ); ?> value="-0.15em">-0.15em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "-0.10em" ); ?> value="-0.10em">-0.10em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "-0.05em" ); ?> value="-0.05em">-0.05em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.05em" ); ?> value="0.00em" selected="selected">0.00em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.05em" ); ?> value="0.05em">0.05em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.10em" ); ?> value="0.10em">0.10em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.15em" ); ?> value="0.15em">0.15em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.20em" ); ?> value="0.20em">0.20em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.25em" ); ?> value="0.25em">0.25em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.30em" ); ?> value="0.30em">0.30em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.35em" ); ?> value="0.35em">0.35em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.40em" ); ?> value="0.40em">0.40em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.45em" ); ?> value="0.45em">0.45em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.50em" ); ?> value="0.50em">0.50em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.55em" ); ?> value="0.55em">0.55em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.60em" ); ?> value="0.60em">0.60em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.65em" ); ?> value="0.65em">0.65em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.70em" ); ?> value="0.70em">0.70em   </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.75em" ); ?> value="0.75em">0.75em </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.80em" ); ?> value="0.80em">0.80em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.85em" ); ?> value="0.85em">0.85em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.90em" ); ?> value="0.90em">0.90em  </option>
						<option <?php selected( get_theme_mod("_type_primary_kern"), "0.95em" ); ?> value="0.95em">0.95em </option>
					</select>
				</div>
				<div class="type_select">
					<label class="typagrphy_label" class="typagrphy_label" for="_type_primary_transform">Text Transform</label>
					<select id="_type_primary_transform" name="_type_primary_transform"    onchange="font_style(this, 'text-transform')">
						<option <?php selected( get_theme_mod("_type_primary_transform"), "none" ); ?> value="none" selected="selected">None  </option>
						<option <?php selected( get_theme_mod("_type_primary_transform"), "uppercase" ); ?> value="uppercase">Uppercase  </option>
						<option <?php selected( get_theme_mod("_type_primary_transform"), "capitalize" ); ?> value="capitalize">Capitalize  </option>
						<option <?php selected( get_theme_mod("_type_primary_transform"), "lowercase" ); ?> value="lowercase">Lowercase  </option>
					</select>
				</div>
				<div class="type_select">
					<label class="typagrphy_label" for="_type_primary_variant">Variant</label>
					<select id="_type_primary_variant" name="_type_primary_variant" onchange="font_style(this, 'font-variant')">
						<option <?php selected( get_theme_mod("_type_primary_variant"), "normal" ); ?> value="normal" selected="selected">Normal  </option>
						<option <?php selected( get_theme_mod("_type_primary_variant"), "small-caps" ); ?> value="small-caps">Small-Caps </option>
					</select>
				</div>
				<div class="type_select">
					<label class="typagrphy_label" for="_type_primary_weight">Weight</label>
					<select id="_type_primary_weight" name="_type_primary_weight" onchange="font_style(this, 'font-weight')">
						<option <?php selected( get_theme_mod("_type_primary_weight"), "normal" ); ?> value="normal">Normal  </option>
						<option <?php selected( get_theme_mod("_type_primary_weight"), "bold" ); ?> value="bold">Bold  </option>
						<option <?php selected( get_theme_mod("_type_primary_weight"), "lighter" ); ?> value="lighter">Light </option>
					</select>
				</div>
				<div class="type_select">
					<label class="typagrphy_label" for="_type_primary_style">Style</label>
					<select id="_type_primary_style" name="_type_primary_style" onchange="font_style(this, 'font-style')">
						<option <?php selected( get_theme_mod("_type_primary_style"), "normal" ); ?> value="normal">Normal  </option>
						<option <?php selected( get_theme_mod("_type_primary_style"), "italic" ); ?> value="italic">Italic    </option>
					</select>
				</div>
				<div class="clear"></div>
			</div>
		
			<div id="_type_primary__set_advanced" class="advanced_type type_inputs">
				<div class="type_advanced">
					<label class="typagrphy_label" for="_type_primary_selectors">Additional Selectors</label>
					<textarea class="" name="-settings-two[type_primary][selectors]" id="_type_primary_selectors"   rows="3"></textarea>
				</div>
				<div class="clear"></div>
			</div>
		
		
		</div>
		<br/>
		
		
		
		
		
		<br/>
			<div>
				<div class="optiontitle">Typography - Secondary Font. Select the font style of your site&#39;s secondary or subtitle
					text (Metabar, Subtitles, etc.).
				</div>
				<div>
					<div class="optioninput" style=" font-size:13pt;"><label class="typagrphy_label" for="_type_secondary_font">Select
							Font</label><select id="_type_secondary_font" name="_type_secondary_font" class="fontselector"  onchange="font_style(this, 'font-family')" size="1">
							<?php $this->fonts_options(get_theme_mod("_type_secondary_font",'Segoe UI'));	?>	
							
						</select></div>
					<div>
						<div class="font_preview_wrap">
							<label class="typagrphy_label" for="" style="font-size:18px;font-size: 20px;font-family: Segoe UI;">Preview</label>
		
							<div class="font_preview">
								<div class="optioninput" style="font-size: 16px;  margin-top: 14px; margin-bottom: 23px;  
									font-family: <?php if (get_theme_mod("_type_secondary_font") != "") {
									echo  htmlspecialchars(stripslashes(get_theme_mod("_type_secondary_font")));
								} else {
									echo "Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif";
								} ?>;font-weight:<?php if (get_theme_mod("_type_secondary_weight") != "") {
									echo get_theme_mod("_type_secondary_weight");
								} else {
									echo "normal";
								} ?>; letter-spacing:<?php if (get_theme_mod("_type_secondary_kern") != "") {
									echo get_theme_mod("_type_secondary_kern");
								} else {
									echo "0.00em";
								} ?>; text-transform:<?php if (get_theme_mod("_type_secondary_transform") != "") {
									echo get_theme_mod("_type_secondary_transform");
								} else {
									echo "none";
								} ?>; font-variant:<?php if (get_theme_mod("_type_secondary_variant") != "") {
									echo get_theme_mod("_type_secondary_variant");
								} else {
									echo "normal";
								} ?>; font-style:<?php if (get_theme_mod("_type_secondary_style") != "") {
									echo get_theme_mod("_type_secondary_style");
								} else {
									echo "normal";
								} ?>;">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
									voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
									cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
						<a href="javascript:;" style="text-decoration:none;"><span id="_type_secondary__set_styling_button"
																				   class="button"
																				   onclick="toggle('#_type_secondary__set_styling', '#_type_secondary__set_advanced')">Edit Font Styling</span></a>
		
		
						<div id="_type_secondary__set_styling" class="font_styling type_inputs optioninputtextarea"   style="height:110px;">
							<div class="type_select">
								<label class="typagrphy_label" for="_type_secondary_kern">Letter Spacing</label> 
									<select id="_type_secondary_kern"  name="_type_secondary_kern"  onchange="font_style(this, 'letter-spacing')">
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "-0.30em" ); ?> value="-0.30em">-0.30em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "-0.25em" ); ?> value="-0.25em">-0.25em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "-0.20em" ); ?> value="-0.20em">-0.20em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "-0.15em" ); ?> value="-0.15em">-0.15em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "-0.10em" ); ?> value="-0.10em">-0.10em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "-0.05em" ); ?> value="-0.05em">-0.05em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.00em" ); ?> value="0.00em" selected="selected">0.00em  </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.05em" ); ?> value="0.05em">0.05em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.10em" ); ?> value="0.10em">0.10em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.15em" ); ?> value="0.15em">0.15em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.20em" ); ?> value="0.20em">0.20em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.25em" ); ?> value="0.25em">0.25em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.30em" ); ?> value="0.30em">0.30em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.35em" ); ?> value="0.35em">0.35em  </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.40em" ); ?> value="0.40em">0.40em  </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.45em" ); ?> value="0.45em">0.45em   </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.50em" ); ?> value="0.50em">0.50em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.55em" ); ?> value="0.55em">0.55em  </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.60em" ); ?> value="0.60em">0.60em  </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.65em" ); ?> value="0.65em">0.65em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.70em" ); ?> value="0.70em">0.70em  </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.75em" ); ?> value="0.75em">0.75em   </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.80em" ); ?> value="0.80em">0.80em </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.85em" ); ?> value="0.85em">0.85em   </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.90em" ); ?> value="0.90em">0.90em   </option>
									<option <?php selected( get_theme_mod("_type_secondary_kern"), "0.95em" ); ?> value="0.95em">0.95em </option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_secondary_transform">Text Transform</label> 
								<select id="_type_secondary_transform" name="_type_secondary_transform"   onchange="font_style(this, 'text-transform')">
									<option <?php selected( get_theme_mod("_type_secondary_transform"), "none" ); ?> value="none" selected="selected">None   </option>
									<option <?php selected( get_theme_mod("_type_secondary_transform"), "uppercase" ); ?> value="uppercase">Uppercase  </option>
									<option <?php selected( get_theme_mod("_type_secondary_transform"), "capitalize" ); ?> value="capitalize">Capitalize </option>
									<option <?php selected( get_theme_mod("_type_secondary_transform"), "lowercase" ); ?> value="lowercase">Lowercase </option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_secondary_variant">Variant</label>
								 <select id="_type_secondary_variant"    name="_type_secondary_variant"   onchange="font_style(this, 'font-variant')">
									<option <?php selected( get_theme_mod("_type_secondary_variant"), "normal" ); ?> value="normal" selected="selected">Normal  </option>
									<option <?php selected( get_theme_mod("_type_secondary_variant"), "small-caps" ); ?> value="small-caps">Small-Caps </option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_secondary_weight">Weight</label>
								 <select id="_type_secondary_weight"  name="_type_secondary_weight" onchange="font_style(this, 'font-weight')">
									<option <?php selected( get_theme_mod("_type_secondary_weight"), "normal" ); ?> value="normal">Normal  </option>
									<option <?php selected( get_theme_mod("_type_secondary_weight"), "bold" ); ?> value="bold">Bold  </option>
									<option <?php selected( get_theme_mod("_type_secondary_weight"), "lighter" ); ?> value="lighter">Light  </option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_secondary_style">Style</label>
								 <select id="_type_secondary_style"  name="_type_secondary_style" onchange="font_style(this, 'font-style')">
									<option <?php selected( get_theme_mod("_type_secondary_style"), "normal" ); ?> value="normal">Normal </option>
									<option <?php selected( get_theme_mod("_type_secondary_style"), "italic" ); ?> value="italic">Italic  </option>
								</select>
							</div>
							<div class="clear"></div>
						</div>
		
						<div id="_type_secondary__set_advanced" class="advanced_type type_inputs">
							<div class="type_advanced">
								<label class="typagrphy_label" for="_type_secondary_selectors">Additional Selectors</label>
								 <textarea class=""   name="-settings-two[type_secondary][selectors]"  id="_type_secondary_selectors"  rows="3"></textarea>
							</div>
							<div class="clear"></div>
						</div>
		
		
					</div>
				</div>
			</div><br/>
		
		
		
		<br/>
			<div>
				<div class="optiontitle">Typography - Inputs and Text Areas. Select the font style of your site&#39;s Text Inputs
					and Text Areas.
				</div>
				<div>
					<div class="optioninput" style=" font-size:13pt;"><label class="typagrphy_label" for="_type_inputs_font">Select Font</label>
					<select id="_type_inputs_font" name="_type_inputs_font" class="fontselector"  onchange="font_style(this, 'font-family')" size="1">
						<?php $this->fonts_options(get_theme_mod("_type_inputs_font",'Segoe UI'));	?>	
					</select></div>
					<div>
						<div class="font_preview_wrap">
							<label class="typagrphy_label" for="" style="font-size:18px;font-size: 20px;font-family: Segoe UI;">Preview</label>
		
							<div class="font_preview">
								<div class="optioninput" style="font-size: 16px;
									margin-top: 14px; margin-bottom: 23px;  font-family: <?php if (get_theme_mod("_type_inputs_font") != "") {
									echo htmlspecialchars(stripslashes(get_theme_mod("_type_inputs_font")));
								} else {
									echo "Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif";
								} ?>;font-weight:<?php if (get_theme_mod("_type_inputs_weight") != "") {
									echo get_theme_mod("_type_inputs_weight");
								} else {
									echo "normal";
								} ?>; letter-spacing:<?php if (get_theme_mod("_type_inputs_kern") != "") {
									echo get_theme_mod("_type_inputs_kern");
								} else {
									echo "0.00em";
								} ?>; text-transform:<?php if (get_theme_mod("_type_inputs_transform") != "") {
									echo get_theme_mod("_type_inputs_transform");
								} else {
									echo "none";
								} ?>; font-variant:<?php if (get_theme_mod("_type_inputs_variant") != "") {
									echo get_theme_mod("_type_inputs_variant");
								} else {
									echo "normal";
								} ?>; font-style:<?php if (get_theme_mod("_type_inputs_style") != "") {
									echo get_theme_mod("_type_inputs_style");
								} else {
									echo "normal";
								} ?>;">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
									laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
									voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
									cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
						<a href="javascript:;" style="text-decoration:none;"><span id="_type_inputs__set_styling_button"
																				   class="button"
																				   onclick="toggle('#_type_inputs__set_styling', '#_type_inputs__set_advanced')">Edit Font Styling</span></a>
		
						<div id="_type_inputs__set_styling" class="font_styling type_inputs optioninputtextarea"
							 style="height:110px;">
							<div class="type_select">
								<label class="typagrphy_label" for="_type_inputs_kern">Letter Spacing</label> <select id="_type_inputs_kern"  name="_type_inputs_kern"  onchange="font_style(this, 'letter-spacing')">
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "-0.30em" ); ?> value="-0.30em">-0.30em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "-0.25em" ); ?> value="-0.25em">-0.25em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "-0.20em" ); ?> value="-0.20em">-0.20em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "-0.15em" ); ?> value="-0.15em">-0.15em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "-0.10em" ); ?> value="-0.10em">-0.10em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "-0.05em" ); ?> value="-0.05em">-0.05em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.00em" ); ?> value="0.00em" selected="selected">0.00em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.05em" ); ?> value="0.05em">0.05em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.10em" ); ?> value="0.10em">0.10em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.15em" ); ?> value="0.15em">0.15em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.20em" ); ?> value="0.20em">0.20em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.25em" ); ?> value="0.25em">0.25em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.30em" ); ?> value="0.30em">0.30em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.35em" ); ?> value="0.35em">0.35em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.40em" ); ?> value="0.40em">0.40em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.45em" ); ?> value="0.45em">0.45em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.50em" ); ?> value="0.50em">0.50em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.55em" ); ?> value="0.55em">0.55em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.60em" ); ?> value="0.60em">0.60em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.65em" ); ?> value="0.65em">0.65em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.70em" ); ?> value="0.70em">0.70em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.75em" ); ?> value="0.75em">0.75em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.80em" ); ?> value="0.80em">0.80em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.85em" ); ?> value="0.85em">0.85em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.90em" ); ?> value="0.90em">0.90em
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_kern"), "0.95em" ); ?> value="0.95em">0.95em
									</option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_inputs_transform">Text Transform</label> <select id="_type_inputs_transform" name="_type_inputs_transform"   onchange="font_style(this, 'text-transform')">
									<option <?php selected( get_theme_mod("_type_inputs_transform"), "none" ); ?> value="none" selected="selected">None
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_transform"), "uppercase" ); ?> value="uppercase">Uppercase
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_transform"), "capitalize" ); ?> value="capitalize">Capitalize
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_transform"), "lowercase" ); ?> value="lowercase">Lowercase
									</option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_inputs_variant">Variant</label> <select id="_type_inputs_variant"  name="_type_inputs_variant" onchange="font_style(this, 'font-variant')">
									<option <?php selected( get_theme_mod("_type_inputs_variant"), "normal" ); ?> value="normal" selected="selected">Normal
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_variant"), "small-caps" ); ?> value="small-caps">Small-Caps
									</option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_inputs_weight">Weight</label>
								 <select id="_type_inputs_weight" name="_type_inputs_weight" onchange="font_style(this, 'font-weight')">
									<option <?php selected( get_theme_mod("_type_inputs_weight"), "normal" ); ?> value="normal">Normal
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_weight"), "bold" ); ?> value="bold">Bold
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_weight"), "lighter" ); ?> value="lighter">Light
									</option>
								</select>
							</div>
							<div class="type_select">
								<label class="typagrphy_label" for="_type_inputs_style">Style</label> 
								<select id="_type_inputs_style"	name="_type_inputs_style" onchange="font_style(this, 'font-style')">
									<option <?php selected( get_theme_mod("_type_inputs_style"), "normal" ); ?> value="normal">Normal
									</option>
									<option <?php selected( get_theme_mod("_type_inputs_style"), "italic" ); ?> value="italic">Italic
									</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>
		
						<div id="_type_inputs__set_advanced" class="advanced_type type_inputs">
							<div class="type_advanced">
								<label class="typagrphy_label" for="_type_inputs_selectors">Additional Selectors</label> <textarea class="" name="-settings-two[type_inputs][selectors]"  id="_type_inputs_selectors"  rows="3"></textarea>
							</div>
							<div class="clear"></div>
						</div>
		
		
					</div>
				</div>
			</div><br/>
		
		
		
		
		
		
			</td></tr>
		
		<?php
		break;
		}
		}
		?>
			</table>
		<p class="submit" style="float: left; margin-left: 63px; margin-right: 8px;">
			<input class="button" name="save" type="submit" value="Save changes"/>
			<input type="hidden" name="action" value="save"/>
		</p>
		</form>
		<form method="post" action="themes.php?page=web_dorado_theme&controller=typography_page">
		<p class="submit">
			<input class="button" name="reset" type="submit" value="Reset"/>
			<input type="hidden"  name="action" value="reset"/>
		</p>
		</form>
		</div > <?php

		
		
	
	}
	public function fonts_options($gteted_option){
		  $font_choices[ 'Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial *';
		  $font_choices[ 'Arial Black,Arial Bold,Arial,sans-serif' ] = 'Arial Black *';
		  $font_choices[ 'Arial Narrow,Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial Narrow *';
		  $font_choices[ 'Courier,Verdana,sans-serif' ] = 'Courier *';
		  $font_choices[ 'Georgia,Times New Roman,Times,serif' ] = 'Georgia *';
		  $font_choices[ 'Times New Roman,Times,Georgia,serif' ] = 'Times New Roman *';
		  $font_choices[ 'Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Arial,sans-serif' ] = 'Trebuchet MS *';
		  $font_choices[ 'Verdana,sans-serif' ] = 'Verdana *';
		  $font_choices[ 'American Typewriter,Georgia,serif' ] = 'American Typewriter';
		  $font_choices[ 'Andale Mono,Consolas,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Andale Mono';
		  $font_choices[ 'Baskerville,Times New Roman,Times,serif' ] = 'Baskerville';
		  $font_choices[ 'Bookman Old Style,Georgia,Times New Roman,Times,serif' ] = 'Bookman Old Style';
		  $font_choices[ 'Calibri,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif' ] = 'Calibri';
		  $font_choices[ 'Cambria,Georgia,Times New Roman,Times,serif' ] = 'Cambria';
		  $font_choices[ 'Candara,Verdana,sans-serif' ] = 'Candara';
		  $font_choices[ 'Century Gothic,Apple Gothic,Verdana,sans-serif' ] = 'Century Gothic';
		  $font_choices[ 'Century Schoolbook,Georgia,Times New Roman,Times,serif' ] = 'Century Schoolbook';
		  $font_choices[ 'Consolas,Andale Mono,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Consolas';
		  $font_choices[ 'Constantia,Georgia,Times New Roman,Times,serif' ] = 'Constantia';
		  $font_choices[ 'Corbel,Lucida Grande,Lucida Sans Unicode,Arial,sans-serif' ] = 'Corbel';
		  $font_choices[ 'Franklin Gothic Medium,Arial,sans-serif' ] = 'Franklin Gothic Medium';
		  $font_choices[ 'Garamond,Hoefler Text,Times New Roman,Times,serif' ] = 'Garamond';
		  $font_choices[ 'Gill Sans MT,Gill Sans,Calibri,Trebuchet MS,sans-serif' ] = 'Gill Sans MT';
		  $font_choices[ 'Helvetica Neue,Helvetica,Arial,sans-serif' ] = 'Helvetica Neue';
		  $font_choices[ 'Hoefler Text,Garamond,Times New Roman,Times,sans-serif' ] = 'Hoefler Text';
		  $font_choices[ 'Lucida Bright,Cambria,Georgia,Times New Roman,Times,serif' ] = 'Lucida Bright';
		  $font_choices[ 'Lucida Grande,Lucida Sans,Lucida Sans Unicode,sans-serif' ] = 'Lucida Grande';
		  $font_choices[ 'Palatino Linotype,Palatino,Georgia,Times New Roman,Times,serif' ] = 'Palatino Linotype';
		  $font_choices[ 'Tahoma,Geneva,Verdana,sans-serif' ] = 'Tahoma';
		  $font_choices[ 'Rockwell, Arial Black, Arial Bold, Arial, sans-serif' ] = 'Rockwell';
		  $font_choices[ 'Segoe UI' ] = 'Segoe UI';
		  foreach($font_choices as $key=>$option_value){
		  ?><option <?php if ($gteted_option == $key) {  echo ' selected="selected"';   } ?>  value="<?php echo $key ?>" title="Arial+Black"><?php echo  $option_value?></option><?php

		  
		  }
	}


}
 

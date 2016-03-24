<?php

class expert_layout_page_class{
	
	public $themeoptions;
	
	public $shortthemeoptions;
	
	public $layout;
	
	public $options_themeoptions;
	
	function __construct(){
		
		$this->themeoptions = "Layout Editor";
		
		$this->shortthemeoptions = "gs";
		
		$this->layout = array(
		
			"1" => "No Sidebar",
			
			"2" => "one right",
			
			"3" => "one left",
			
			"4" => "two right",
			
			"5" => "two left",
			
			"6"=>"one right and one left"
		
		);
		
		$value_of_std[0]=get_theme_mod($this->shortthemeoptions."_default_layout",2);
		$value_of_std[1]=get_theme_mod($this->shortthemeoptions."_full_width","off");
		$value_of_std[2]=get_theme_mod($this->shortthemeoptions."_content_area","1024");
		$value_of_std[3]=get_theme_mod($this->shortthemeoptions."_main_column","67");
		$value_of_std[4]=get_theme_mod($this->shortthemeoptions."_pwa_width","16");		
		$this->options_themeoptions = array (
		
			array( 
			
				"name" => "Choose Default Layout",
		
				"desc" => "Here you can select the default layout for pages and posts on the website.",
		
				"id" => $this->shortthemeoptions."_default_layout",
		
				"type" => "radio",
		
				"options" => $this->layout,
		
				"std" => $value_of_std[0]
			),	  
			 
			array( 
			
				"name" => "Full Width",
		
				"desc" => "",
		
				"id" => $this->shortthemeoptions."_full_width",
		
				"type" => "checkbox",
		
				"std" => $value_of_std[1]
			),	  
		
			array( 
			
				"name" => "Content Area Width",
		
				"desc" => "Specify the width of the Content Area",
				
				"id" => $this->shortthemeoptions."_content_area",
				
				"type" => "text",
				
				"std" => $value_of_std[2]
			),		   
		
			array( 
			
				"name" => "Main Column Width",
		
				"desc" => "Specify the width of the Main Column",
				
				"id" => $this->shortthemeoptions."_main_column",
				
				"type" => "text",
				
				"std" => $value_of_std[3]
			),	 
		
			array( 
			
				"name" => "Primary Widget Area Width",
		
				"desc" => "Specify the width of the Primary Widget Area",
				
				"id" => $this->shortthemeoptions."_pwa_width",
				
				"type" => "text",
				
				"std" => $value_of_std[4]
			),	   
		);
	
	
	}


	/// save changes or reset options
	public function web_dorado_theme_update_and_get_options_layout(){
	
		if (isset($_GET['page']) && $_GET['page'] =="web_dorado_theme" && isset($_GET['controller']) && $_GET['controller'] == "layout_page") {
	
			if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'save') {
	
				foreach ($this->options_themeoptions as $value) {
	
					set_theme_mod($value['id'], $_REQUEST[$value['id']]);
	
				}
	
				foreach ($this->options_themeoptions as $value) {
	
					if (isset($_REQUEST[$value['id']])) {
	
						set_theme_mod($value['id'], $_REQUEST[$value['id']]);
	
					} else {
	
						remove_theme_mod($value['id']);
	
					}
				}
	
				header("Location: themes.php?page=web_dorado_theme&controller=layout_page&saved=true");
				die;
	
			} elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == 'reset') {
	
				foreach ($this->options_themeoptions as $value) {
	
					remove_theme_mod($value['id']);
				}
				header("Location: themes.php?page=web_dorado_theme&controller=layout_page&reset=true");
				die;
	
			}
		}
	
	
	
	}
	
	public function web_dorado_layout_page_admin_scripts(){
		
		wp_enqueue_style('layout_page_main_style',get_template_directory_uri().'/admin/css/layout_page.css');	
		

	}
	
	public function dorado_theme_admin_layout(){
		
		// get radio variables
		$radio = $this->get_option_type( 'radio' );
		$radio_options = $radio[0]['options'];
		$count_radio_options = count( $radio_options );
		
		// get checkbox variables
		$checkbox=$this->get_option_type( 'checkbox' );
		
		// get text variables
		$text=$this->get_option_type( 'text' );
		$count_text = count( $text );
	   if(isset($_REQUEST['controller']) && $_REQUEST['controller']=='layout_page'){
		if (isset($_REQUEST['saved']) && $_REQUEST['saved'] ) 
		
			echo '<div id="message" class="updated"><p><strong>Layout settings are saved.</strong></p></div>';
			
		if (isset($_REQUEST['reset']) && $_REQUEST['reset'] ) 
		
			echo '<div id="message" class="updated"><p><strong>Layout settings are reset.</strong></p></div>';
	   }
	   global $web_dor;
	?>

	<div id="main_layout_page">
		<form method="post" action="themes.php?page=web_dorado_theme&controller=layout_page">
			<table align="center" width="90%" style="margin-top: 0px;border-bottom: rgb(111, 111, 111) solid 2px;">
				<tbody>
				    <tr>   
                      <td style="font-size:14px; font-weight:bold">
					     <a href="<?php echo $web_dor.'/wordpress-themes-guide-step-1.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">User Manual</a><br />This section allows you to make changes in default layout of the theme.
                         <a href="<?php echo $web_dor.'/wordpress-theme-options/3-2.html'; ?>" target="_blank" style="color:#126094; text-decoration:none;">More...</a>
					    </td>   
                      <td  align="right" style="font-size:16px;">
                           <a href="<?php echo $web_dor.'/wordpress-themes/business-responsive.html'; ?>" target="_blank" style="color:red; text-decoration:none;">
                              <img src="<?php echo get_template_directory_uri() ?>/images/header.png" border="0" alt="" width="215">
                           </a>
                       </td>
                    </tr>
					<tr>
						<td>
							<h3 style="margin: 0px;font-family:Segoe UI;padding-bottom: 15px;color: rgb(111, 111, 111); font-size:18pt;">Layout Editor</h3>
						</td>						
					</tr>
				</tbody>
			</table>
			<table align="center" width="90%" style=" padding-bottom:0px;padding-top:0px;">
				<tbody>
					<tr>
						<td>
							<div class="optiontitle first"><h3><?php echo $radio[0]['name']; ?></h3></div>
							<div class="optiondescreption"><p><?php echo $radio[0]['desc']; ?></p></div>
							<div class="options_input options_select"></div>
							<table width="100%">
								<tbody>
									<tr>
									<?php for($i=0;$i<$count_radio_options;$i++) { ?>
										<td>
											<div style="width:50px; height:49px; background:url(<?php echo get_template_directory_uri(); ?>/images/sprite-layouts.png) no-repeat 0 <?php echo -$i*48; ?>px;"></div>
											<input type="radio" <?php echo $this->echo_cheched_option($radio[0]['std'],$i+1);  ?> name="<?php echo $radio[0]['id'] ?>" value="<?php echo $i+1; ?>" >
											<br>
										</td>
									<?php } ?>
									</tr>
								</tbody>
							</table>
							<div>
								<div class="optiontitle" style=""><h3><?php echo $checkbox[0]['name']; ?></h3></div>
									<div class="block margin">
										<div class="optioninput checkbox">
											<input style="font-size: medium;" <?php echo $this->echo_cheched_option($checkbox[0]['std'],'on');  ?> name="gs_full_width" id="gs_full_width" type="checkbox">
										</div>
										<div class="optiondescription"></div>
								</div>
								<?php for($i=0;$i<$count_text;$i++) {?>
								<div id="tr<?php echo $i+1; ?>" style="display: block;">
									<div class="optiontitle" style=""><h3><?php echo $text[$i]['name']; ?></h3></div>
										<div class="block">
											<div class="optiondescreption"><p><?php echo $text[$i]['desc']; ?></p></div>
											<div class="optioninput">
												<input  style="width: 49px; float:left; height: 30px;font-size: medium;" name="<?php echo $text[$i]['id']; ?>" id="<?php echo $text[$i]['id']; ?>" type="text" value="<?php echo $text[$i]['std']; ?>">
												<strong class="strong_label"><?php if($i==0) echo 'px'; else echo '%'; ?></strong>
											</div>
										</div>
								</div>
								<?php } ?>				
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<br>
			<p class="submit" style="float:left; margin-left: 63px; margin-right: 8px;">
				<input class="button" name="save" type="submit" value="Save changes">
				<input type="hidden" name="action" value="save">
			</p>
		</form>
		<form method="post" action="themes.php?page=web_dorado_theme&controller=layout_page">
			<p class="submit"  style="float:left">
				<input class="button" name="reset" type="submit" value="Reset">
				<input type="hidden" name="action" value="reset">
			</p>
		</form>
	</div>
	
	<?php
	}
	
	/// get one type elements
	
	private function get_option_type($type){
		$cur_type_elements=array();
		$k=0;
		foreach( $this->options_themeoptions as $option ){
			
			if( $option['type'] == $type ){
			
				$cur_type_elements[$k]=$option;
				$k++;
			}
			
		}
		return $cur_type_elements;
	}
	
	private function echo_cheched_option($value_base,$value){
		
		
		checked( $value_base, $value );	
		
		return '';
		
	}
	

}
 
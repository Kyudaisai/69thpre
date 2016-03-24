<?php

class expert_slider_page_class{
		
	function __construct(){}


	/// save changes or reset options
	private function web_dorado_theme_update_slider(){
		
		$image_list='';
		$image_href='';
		$image_textarea='';
		$image_link='';
		$ct_pause_on_hover='';
		if ( isset($_GET['saved']) && $_GET['saved']=='saved' ) {	
			if(isset($_POST['ct_pause_on_hover'])){
					$ct_pause_on_hover=$_POST['ct_pause_on_hover'];
				}			
			
			for($i=0;$i<200;$i++){
				if(isset($_POST['ct_image_link_'.$i])){
					$image_link .=$_POST['ct_image_link_'.$i].';;;;';
				}
				
				if(isset($_POST['ct_image_href_'.$i])){
					$image_href .=$_POST['ct_image_href_'.$i].';;;;';
				}
				
				if(isset($_POST['ct_image_textarea_'.$i])){
					$image_textarea .=$_POST['ct_image_textarea_'.$i].';;;;';
				}
			}
			set_theme_mod('web_busines_image_link',$image_link);
			set_theme_mod('web_busines_image_href',$image_href);
			set_theme_mod('web_busines_image_textarea',$image_textarea);
			set_theme_mod('ct_slider_height',$_POST['ct_slider_height']);
			set_theme_mod('ct_pause_time',$_POST['ct_pause_time']);
			set_theme_mod('ct_anim_speed',$_POST['ct_anim_speed']);
			set_theme_mod('ct_effect',$_POST['ct_effect']);
			set_theme_mod('ct_pause_on_hover',$ct_pause_on_hover);
			
		}
		if(isset($_GET['reset']) && $_GET['reset']=='reset'){
		
		remove_theme_mod('web_busines_image_link');
		remove_theme_mod('web_busines_image_href');
		remove_theme_mod('web_busines_image_textarea');
		remove_theme_mod('ct_slider_height');
		remove_theme_mod('ct_pause_time');
		remove_theme_mod('ct_anim_speed');	
		remove_theme_mod('ct_effect');
		remove_theme_mod('ct_pause_on_hover');
			
		}	
	
	}
	/// print massage after save
	private function expert_print_massage(){
		
		if (isset($_GET['saved']) && $_GET['saved'] =='saved'  ) 
		
			echo '<div id="message" class="updated"><p><strong>Slider settings are saved.</strong></p></div>';
			
		if (isset($_GET['reset']) && $_GET['reset'] == 'reset' ) 
		
			echo '<div id="message" class="updated"><p><strong>Slider settings are reset.</strong></p></div>';
	
	}
	
	/// include style and scripts for slider page
	public function web_dorado_slider_page_admin_scripts(){

		wp_enqueue_style('slider_page_main_style',get_template_directory_uri().'/admin/css/slider_page.css');	
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'common' );
		wp_enqueue_script( 'jquery-color' );
		wp_print_scripts('editor');
		if (function_exists('add_thickbox')) add_thickbox();
		wp_print_scripts('media-upload');
		wp_admin_css();
		wp_enqueue_script('utils');
		do_action("admin_print_styles-post-php");
		do_action('admin_print_styles');
	
	}
	
	private function get_slider_parametrs(){
				
		$image_link=get_theme_mod('web_busines_image_link','');
		if($image_link){
			$link_array=explode(';;;;',$image_link);
			array_pop($link_array);
		}
		else {$link_array=array();}	
		$param['link_array']=$link_array;
		
		
		$image_href=get_theme_mod('web_busines_image_href','');
		if($image_href){
			$href_array=explode(';;;;',$image_href);
			array_pop($href_array);
		}
		else {$href_array=array();}	
		$param['href_array']=$href_array;
		
		$image_textarea=get_theme_mod('web_busines_image_textarea','');
		if($image_textarea){
			$textarea_array=explode(';;;;',$image_textarea);
			array_pop($textarea_array);
		}
		else {$textarea_array=array();}	
		$param['textarea_array']=$textarea_array;
		return $param;
	}
	
	//// back end style
	public function dorado_theme_admin_slider(){
				
		$LIST='';
		$this->web_dorado_theme_update_slider();
		$this->expert_print_massage();
		$param=$this->get_slider_parametrs();
		$link_array=$param['link_array'];
		$href_array=$param['href_array'];
		$textarea_array=$param['textarea_array'];
		global $web_dor; ?>	
		
		<div id="main_slider_page">
			<div class="wrap" style="margin-right:76px; margin-left: 82px;">
	
			<table align="center" width="100%" style="margin-top: 0px;border-bottom: rgb(111, 111, 111) solid 2px;">
					<tbody>
						<tr>   
						  <td style="font-size:14px; font-weight:bold;color: #333;">
							 <a href="<?php echo $web_dor.'/wordpress-themes-guide-step-1.html'; ?>" target="_blank" style="outline-style: none !important;color:#126094; text-decoration:none;">User Manual</a><br />This section allows you customize the slider.
							 <a href="<?php echo $web_dor.'/wordpress-theme-options/3-8.html'; ?>" target="_blank" style="outline-style: none !important;color:#126094; text-decoration:none;">More...</a>
						 </td>   
						  <td  align="right" style="font-size:16px;">
							   <a href="<?php echo $web_dor.'/wordpress-themes/business-responsive.html'; ?>" target="_blank" style="outline-style: none !important; text-decoration:none;">
								  <img src="<?php echo get_template_directory_uri() ?>/images/header.png" border="0" alt="" width="215" style="width:215px !important;">
							   </a>
						   </td>
						</tr>
						<tr>
							<td>
								<h3 style="margin: 0px;font-family:Segoe UI;padding-bottom: 15px;color: rgb(111, 111, 111); font-size:18pt;font-weight: bold;">Slider</h3>
							</td>
						</tr>
					</tbody>
				</table>
	
		<?php	
			//Style and js included in $template html file
			$templat=wp_remote_get(get_template_directory_uri().'/nivo_files/templates/settings.slides.htm');
			$lists=wp_remote_get(get_template_directory_uri().'/nivo_files/templates/slides.image.add.list.htm');
			$template=wp_remote_retrieve_body($templat);
			$list=wp_remote_retrieve_body($lists);
		
			for($i=0;$i<count($link_array);$i++){
				$str=$list;
				$str=str_replace("{LINK}",stripslashes(esc_url($link_array[$i])),$str);
				if(!isset($href_array[$i]))
				$href_array[$i]='';
				$str=str_replace("{HREF}",stripslashes(esc_url($href_array[$i])),$str);
				$str=str_replace("{TEXTAREA}",stripslashes(esc_html($textarea_array[$i])),$str);
				$str=str_replace("{ID}",$i,$str);
				$LIST.=$str;
			}
			
			$template=str_replace("{LIST}",$LIST,$template);			
			$template=str_replace("{HEIGHT}",get_theme_mod('ct_slider_height','500'),$template);
			$template=str_replace("{SPEED}",get_theme_mod('ct_anim_speed','500'),$template);
			$template=str_replace("{PAUSE}",get_theme_mod('ct_pause_time','4000'),$template);
			$template=str_replace("{THEME_URL}",get_template_directory_uri(),$template);
			
			if(get_theme_mod('ct_pause_on_hover')){$template=str_replace("{CHECKED}",'checked="checked"',$template);}
			if(get_theme_mod('ct_effect')){$template=str_replace('value="'.get_theme_mod('ct_effect').'"','value="'.get_theme_mod('ct_effect').'"'.' selected="selected"',$template);}
			else{$template=str_replace("{CHECKED}",'',$template);}
		
			echo $template;
			?> <div style="clear:both; width:100%"></div></div> <?php 
		
	}
	


}
 

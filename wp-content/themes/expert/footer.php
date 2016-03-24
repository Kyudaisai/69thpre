<?php 
global $dor_general_settings_page;

foreach ($dor_general_settings_page->options_generalsettings as $value) {

    if (get_theme_mod( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_theme_mod( $value['id'] ); }

}
	
?>
<div id="footer">

<div class="container <?php echo \expert_theme\device; ?>" > 
<?php 
if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>	
 <span   class="footer-list-button-left"><span>&laquo;Left</span></span>
 <span   class="footer-list-button-right"><span>Right&raquo;</span></span>
	
	<div class="footer-list">
		<div class="footer-list-block">				
				<?php	dynamic_sidebar( 'footer-sidebar' );  ?>				
		</div>
	</div>
<?php	} else { ?>
<style>
  #footer .container{
    background:none !important;
	padding-top:0 !important;
  } 
</style>
<?php }?>	
	
	<div id="footer-bottom">
	<?php
	if($_footer_text != "")	{?>
	   <div id="footer-text">
		<?php echo stripslashes($_footer_text); ?>		
	   </div>	
	<?php } ?>   
	</div>
    

</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
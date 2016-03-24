( function( jQuery ){
  wp.customize( 'web_bussines[color_schema]', function( value ) {
		value.bind( function( to ) {
      switch (to) {
        case 'Theme-1': {
          var footer_background_color = '#ececec';
          var content_background_color = '#ffffff';
          var wrapper_color = '#1f1f1f';
          var h3_color = '#1f1f1f';
          var a_link_color = '#575757';
          var a_hover_color = '#ffffff';
          var footer_color = '#1f1f1f';
          break;

        }
        case 'Theme-2': {
          var footer_background_color = '#ececec';
          var content_background_color = '#ffffff';
          var wrapper_color = '#1f1f1f';
          var h3_color = '#1f1f1f';
          var a_link_color = '#029ee1';
          var a_hover_color = '#ffffff';
          var footer_color = '#1f1f1f';
          break;

        }
        case 'Theme-3': {
          var footer_background_color = '#ececec';
          var content_background_color = '#ffffff';
          var wrapper_color = '#1f1f1f';
          var h3_color = '#1f1f1f';
          var a_link_color = '#018a24';
          var a_hover_color = '#ffffff';
          var footer_color = '#1f1f1f';
          break;
        }
      }
      jQuery( '#footer' ).attr('style', 'background-color:' + footer_background_color + ' !important;' );
      jQuery( '#wrapper' ).attr('style', 'background-color:' + content_background_color + ' !important;' );
      jQuery( 'body' ).attr('style', 'color:' + wrapper_color + ' !important;' );
      jQuery( 'h3' ).attr('style', 'color:' + h3_color + ' !important;' );
      jQuery( 'a:link, a:visited' ).attr('style', 'color:' + a_link_color + ' !important;' );
      jQuery( 'a:hover' ).attr('style', 'color:' + a_hover_color + ' !important;' );
      jQuery( '#footer' ).attr('style', 'color:' + footer_color + ' !important;' );
		} );
	} );
	wp.customize( 'theme_mods_expert[cc_head_elem_back_color]', function( value ) {
		value.bind( function( to ) {
				jQuery( '#header-block' ).css('background-color',  to );
				jQuery( '.web_buisnes_menu, .sub-menu, .nav ul' ).css('background-color',  to );
				jQuery( 'container.phone' ).css('background-color',  to );
				jQuery( '#menu-web-business>li>ul' ).css('background-color',  to );
				jQuery('.web_buisnes_menu li:not(.web_buisnes_menu .nav li li):not(.current_page_item):not(.current_page_parent):not(.current_page_ancestor)').css('background-color', to );
				window.web_biss_menu_static_color=to;
		} );
	  } );

    wp.customize( 'theme_mods_expert[cc_footer_back_color]', function( value ) {
		value.bind( function( to ) {
			jQuery( '#footer' ).css('background-color', to  );
			
			  window.footer_back_color=to;
      
		} );
	} ); 
  wp.customize( 'theme_mods_expert[cc_shadow_background_color]', function( value ) {
   	value.bind( function( to ) {
			jQuery( '.shadow' ).css('background-color',  to  );
    } );
  } );

  wp.customize( 'theme_mods_expert[cc_selected_menu_color]', function( value ) {
    value.bind( function( to ) {
     jQuery( '.nav .current-menu-item' ).css('background-color',to );
	 jQuery( '.nav .current_page_item' ).css('background-color',to );
	 jQuery( ' #menu-button-block' ).css('background-color',  to );
	 jQuery( '.get_title, .read_more' ).css('background-color',  to );	
	 jQuery( '.sep' ).css('color',  to );
	  	window.selected_menu_color=to;
    } );
  } );
  
  wp.customize( 'theme_mods_expert[cc_menu_color]', function( value ) {
    value.bind( function( to ) {
	 jQuery( '.get_title' ).css('background-color',  to );
	 
	  	window.web_biss_menu_hover_color=to;
    } );
  } );
  
  /*wp.customize( 'theme_mods_expert[cc_content_back_color]', function( value ) {
		value.bind( function( to ) {
			jQuery( '.content' ).css('background-color',  to );
			jQuery( '#content' ).css('background-color', to );
			jQuery( '#site-title' ).css('background-color',  to );
			jQuery( '#wrapper' ).css('background-color',  to );
			jQuery( '#header' ).css('background-color',  to );
			
			 window.content_back_color=to;
		} );
	} );*/
  wp.customize( 'theme_mods_expert[cc_primary_text_color]', function( value ) {
		value.bind( function( to ) {
			jQuery( '#wrapper' ).css('color', to );
			jQuery( '#content' ).css('color', to );
			jQuery( '.container' ).css('color', to ); 
			 
			 window.primary_text_color=to;
		} );
	} );
  wp.customize( 'theme_mods_expert[cc_text_headers_color]', function( value ) {
		value.bind( function( to ) {
			jQuery( 'h1' ).css('color', to );
			jQuery( 'h2' ).css('color', to );
			jQuery( 'h3' ).css('color', to );
			jQuery( 'h4' ).css('color', to );
			jQuery( 'h5' ).css('color', to );
			jQuery( 'h6' ).css('color', to );
			  
			  window.text_headers_color=to;
		} );
	} );
  wp.customize( 'theme_mods_expert[cc_primary_links_color]', function( value ) {
		value.bind( function( to ) {
			jQuery( 'a:not(.nav .current-menu-item a):not(.nav .current_page_item a)' ).css('color', to );
			
			  window.link_color_stop=to;			
		} );
	} );

  wp.customize( 'theme_mods_expert[cc_footer_text_color]', function( value ) {
		value.bind( function( to ) {
			jQuery( '#footer' ).css('color', to );
			   
			  window.footer_text_color=to; 
		} );
	} );
	 wp.customize( 'theme_mods_expert[cc_menu_color]', function( value ) {
		value.bind( function( to ) {

			jQuery(".web_buisnes_menu a").hover(function(){
				jQuery(this).attr("style","background-color:"+to);				
				},function(){
				jQuery(this).attr("style","background-color:none");
				if(link_color_stop == "")
				  jQuery(this).attr("style","color:none" );
				else				
				  jQuery(this).attr("style","color:"+link_color_stop);
			  });
		
			window.web_biss_menu_hover_color=to;
		} );
	} );
	wp.customize( 'theme_mods_expert[cc_primary_links_hover_color]', function( value ) {
		value.bind( function( to ) {
		    jQuery( '.nav .current-menu-item a' ).css('color',to );
	        jQuery( '.nav .current_page_item a' ).css('color',to );
			jQuery( ' .more-link, .read_more, .read_more span, #loginform input[type="submit"], #logout, input.contact_send, .comment-reply-link, .form-submit #submit' ).css('color',to );
		} );
	} );
	 wp.customize( 'theme_mods_expert[cc_primary_links_hover_color]', function( value ) {
		value.bind( function( to ) {

			jQuery(".web_buisnes_menu a, a, #top_post_title a").hover(function(){
				jQuery(this).attr("style","color:"+to);				
				},function(){
				
				  jQuery(this).attr("style","color:"+link_color_stop);
			  });
			window.link_color_hover=to;
		} );
	} );

	
  wp.customize( 'theme_mods_expert[_type_headers_font]', function( value ) {
		value.bind( function( to ) {
      jQuery( 'h1:not(.site-title),h2,h3,h4,h5,h6,.nav a' ).css('font-family', to );
		} );
	} );
  wp.customize( 'theme_mods_expert[_type_primary_font]', function( value ) {
		value.bind( function( to ) {
			jQuery( 'body:not(.ftricons)' ).css('font-family',  to  );
		} );
	} );
  wp.customize( 'theme_mods_expert[_type_secondary_font]', function( value ) {
		value.bind( function( to ) {
			jQuery( 'textarea' ).css('font-family',  to );
		} );
	} );
  wp.customize( 'theme_mods_expert[_type_inputs_font]', function( value ) {
		value.bind( function( to ) {
			jQuery( 'textarea,input[type="text"]' ).css('font-family', to );
		} );
	} );
} )( jQuery );

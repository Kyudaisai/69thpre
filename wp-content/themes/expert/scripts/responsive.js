var window_cur_size = 'web';
var conect_one_time=1;

jQuery('document').ready(function(){
	askofen=1;
if(document.getElementById('top_posts_web'))
var previus_view=document.getElementById('top_posts_web').innerHTML;
	screenSize=jQuery(".container").width();
	
	if(screenSize<768){screenSize=768;}
	
	sliderHeight=parseInt(jQuery("#slider-block").height());
	sliderWidth=parseInt(jQuery("#slider-block").width());
	sliderIndex=sliderHeight/sliderWidth;
	
	
	$.globalVar = { 
		contentNavigator : "" 
	}; 
	
	function load(){
		$("body").removeClass("load")
	}
	
	if($(".container").hasClass("phone")){
		phone();		
	}
	else if($(".container").hasClass("tablet")){
		tablet();
	}
	else{checkMedia();}
	
	
	
	jQuery(window).resize(function(){checkMedia();});
	
	

	
	function checkMedia(){
		if(jQuery('div.nav.container').length>0){
			menu_div=jQuery('div.nav.container');
			menu_frst_ul=jQuery('div.nav.container').children('ul');
			jQuery(menu_div).removeClass('container');
			jQuery(menu_div).removeClass('nav');
			
			jQuery(menu_frst_ul).addClass('container');
			jQuery(menu_frst_ul).addClass('nav');
		}
		//###############################SCREEN
		if(jQuery('body').width()>=1054){screen();}
		//###############################TABLET
		if(jQuery('body').width()<1054 && jQuery('body').width()>=768){tablet();}
		//################################PHONE
		if(jQuery('body').width()<768){phone();}
	}
	
	

	
	function screen(){
		
		
		jQuery('.nav.phone  li  a').height('')
		jQuery('.nav.phone  li  a').css('padding','');
		
		jQuery("#blog").removeAttr('style');
		jQuery("#sidebar1").removeAttr('style');
		jQuery("#sidebar2").removeAttr('style');
		jQuery("#header-block > .container").css('height','54px'); 
		jQuery("#header-block").removeAttr('style');
	
		///reomve tablete and phone classes
		//////	
		if(window_cur_size=='phone'){
			jQuery('#site-title').after(jQuery('.get_title'));
			jQuery('#site-title').after(jQuery('.web_buisnes_menu'));
		}
		if((window_cur_size=='phone' || window_cur_size=='tablet') && $("#sidebar1").length > 0)
		jQuery('#blog').before(jQuery('#sidebar1'));
		window_cur_size	= 'web';
		jQuery(".container").width(screenSize-40);
		jQuery("#pre_slider_container").width(screenSize-40);
		jQuery(".container").removeClass("tablet");
		jQuery(".container").removeClass("phone");
		jQuery("#site-title").removeClass("phone");
		sHeight=sliderIndex*parseInt(jQuery("#slider").width());
		sliderSize(sHeight);
		jQuery("#slider-block .shadow").removeClass("none");	
		
		jQuery(".get_title").removeClass("visible");
		$("#menu-button-block").remove();
		$("#header-block>.container").prepend($(".ftricons"));
		
		height=0;

			local_hegt_for_posts=0;
	
			
		var element_count=jQuery('.contentPost1').length;
		if(!jQuery('#blog > div.clear_both').length)			
		for(iii=0;iii<element_count;iii=iii+2){
			

			if(jQuery('.contentPost1').eq(iii+1).length){
				
				jQuery('.contentPost1').eq(iii+1).after('<div class="clear_both"></div>')
			}
			else
			{
				if(jQuery('.contentPost1').eq(iii).length)
				{
					jQuery('.contentPost1').eq(iii).width('100%')
				}
			}
			
		}
		
		$("input[type='password']").attr("autocomplete","off");
		/// destroy previus karuse
		jQuery(".container").removeClass("roundabout");
		if(document.getElementById('top_posts_web'))
		document.getElementById('top_posts_web').innerHTML=previus_view;
		jQuery('li.topPost').height(jQuery('li.topPost').width()*0.8383);
				
		if($.globalVar.contentNavigator!=""){jQuery("#blog").insertAfter($.globalVar.contentNavigator);}
	}
	
	function tablet(){	
	/// remove classes phone
	
			jQuery('.nav.phone  li  a').height('')
		jQuery('.nav.phone  li  a').css('padding','');
	
	////
	if(window_cur_size=='web' && $("#sidebar1").length > 0)
		jQuery('#blog').after(jQuery('#sidebar1'));
	
		/// remove phone class
		
		if(window_cur_size=='phone'){
		jQuery('#site-title').after(jQuery('.get_title'));
		jQuery('#site-title').after(jQuery('.web_buisnes_menu'));
		}
		window_cur_size	= 'tablet';
		jQuery(".container").removeClass("phone");
		jQuery("#slider-block").removeClass("none");
		jQuery("#site-title").removeClass("phone");
		jQuery("#sample-roundabout").removeClass("roundabout");
		jQuery("#top_posts_web").removeClass("top-post-phone")
		//////
		jQuery('#wrapper').css('min-width',640)
		window_cur_size	= 'tablet'
		
		jQuery(".container").addClass("tablet");
		jQuery(".container").width(728);
		sHeight=sliderIndex*parseInt(jQuery("#slider").width());
		sliderSize(sHeight);
		
		jQuery(".get_title").removeClass("visible");
		$("#menu-button-block").remove();
		$("#header-block>.container.tablet").prepend($(".ftricons"));
		
		jQuery(".get_title").removeClass("visible");

		/// destroy previus karuse
		jQuery(".container").removeClass("roundabout");
		if(document.getElementById('top_posts_web'))
		document.getElementById('top_posts_web').innerHTML=previus_view;
		if(jQuery("#blog").prev().length>0){$.globalVar.contentNavigator=jQuery("#blog").prev();}
		//alert("tablet"+$.globalVar.contentNavigator.html());
		jQuery("#content .container").prepend(jQuery("#blog"));
		load();
	}
	
	function phone(){
		///remove classes tablet
		var web_dor_page_width=jQuery('body').width();
		////
		if(window_cur_size=='web' && jQuery("#sidebar1").length > 0)
			jQuery('#blog').after(jQuery('#sidebar1'));
			
		jQuery('.container.phone #nav-search').width(jQuery('body').width()-jQuery('#menu-button-block').width());
		
		if(window_cur_size == 'web' || window_cur_size == 'tablet')	{
			
			jQuery('#site-title').before(jQuery('.get_title'))
			jQuery('#site-title').before(jQuery('.web_buisnes_menu'))
			if(conect_one_time){
				$("#header-block").on("click",'#menu-button-block a',function(){
				   jQuery(".web_buisnes_menu .nav").slideToggle("slow");
				   return false;
				  });		  
				conect_one_time=0;
			}
			jQuery(".container").addClass("phone");
			jQuery(".container").removeClass("tablet");
			jQuery("#slider-block .shadow").addClass("none");
			jQuery("#sample-roundabout").addClass("roundabout");
			jQuery("#header-block").css("background", "none");
			jQuery(".get_title").addClass("visible");
			jQuery("#footer-bottom").append($(".ftricons"));
			jQuery("#header-block>.container.phone").prepend('<div id="menu-button-block"><a href="#">open</a></div>');
			jQuery('.nav.phone li:has(ul)').addClass("has-sub");
			jQuery("#site-title").addClass("phone");
			jQuery('#wrapper').css('min-width',0);
			
		}
		heigth_of_pntik=jQuery('body').width()/5.33333333333333
		jQuery('#header-block .container.phone').height(heigth_of_pntik);
		jQuery('#header-block #menu-button-block').height(heigth_of_pntik);
		jQuery('#header-block #menu-button-block').width(heigth_of_pntik);
		jQuery('#menu-button-block a').height(heigth_of_pntik);
		jQuery('#menu-button-block a').width(heigth_of_pntik);
		
		var menu_elem_heght=(60/640)*jQuery('body').width();
		var padding=menu_elem_heght-33;
		if(menu_elem_heght<=33){
			menu_elem_heght=33;
			padding=0;
		}
		
		jQuery('.nav.phone  li  a').height(menu_elem_heght)
		jQuery('.nav.phone  li  a').css('padding',padding+'px 0px 0px 22px');
		jQuery('.container.phone #nav-search').width(jQuery('body').width()-jQuery('#menu-button-block').width()-40);
		
		
		//jQuery('#blog').html(jQuery('body').width());
		
		
		
		
		jQuery(".container").width(jQuery('body').width());
		jQuery(".container.phone > #blog,.container.phone > #sidebar2,.container.phone > #sidebar1").width(jQuery('body').width()-10);
		
		sHeight=0.42*parseInt(jQuery(".container").width());
		sliderSize(sHeight);		
		//jQuery('#top_posts_web').css('height',jQuery("#sample-roundabout").height());
		//jQuery(".container.top-posts").width('css','30%')
		var kaificent_scaling=(jQuery('body').width()/640)
		web_dor_maxScale=1.5*kaificent_scaling;
		web_dor_minScale=1.3*kaificent_scaling;
		jQuery('.container.top-posts.phone').css('width',jQuery('body').width());
		jQuery('.container.top-posts.phone').height((260/640)*jQuery("body").width()*1.0);
		if(jQuery('body').width()>450){
			jQuery('.container.top-posts.phone').css('margin-top',(50/640)*jQuery('body').width());
			jQuery('.roundabout .wrapper p').css('font-size','12px');
			jQuery('#top_post_title a').css('font-size','18px');
		}
		if(jQuery('body').width()>350 && jQuery('body').width()<=450){
			jQuery('.container.top-posts.phone').height((260/640)*jQuery("body").width()*1.3);
			jQuery('.container.top-posts.phone').css('margin-top',(50/640)*jQuery('body').width()*-0.2);
			jQuery('.roundabout .wrapper p').css('font-size','10px');
			jQuery('#top_post_title a').css('font-size','14px');
		}
		if(jQuery('body').width()>0 && jQuery('body').width()<350){
			jQuery('.container.top-posts.phone').height((260/640)*jQuery("body").width()*1.5);
			jQuery('.container.top-posts.phone').css('margin-top',(50/640)*jQuery('body').width()*-1.5);
			jQuery('.roundabout .wrapper p').css('font-size','8px');
			jQuery('#top_post_title a').css('font-size','12px');
			
		}
		if(jQuery(".roundabout").length > 0)
		if(window_cur_size == 'web' || window_cur_size == 'tablet' )
		jQuery(".roundabout").roundabout({
		bearing: 0.0,
		tilt: 0.0,
		minZ: 100,
		maxZ: 280,
		minOpacity: 0.4,
		maxOpacity: 1.0,
		minScale: 0.4,
		maxScale: 0.6,
		duration: 500,
		btnNext: null,
		btnNextCallback: function() {},
		btnPrev: null,
		btnPrevCallback: function() {},
		btnToggleAutoplay: null,
		btnStartAutoplay: null,
		btnStopAutoplay: null,
		easing: "swing",
		clickToFocus: true,
		clickToFocusCallback: function() {},
		focusBearing: 0.0,
		shape: "lazySusan",
		debug: false,
		childSelector: "li",
		startingChild: null,
		reflect: false,
		floatComparisonThreshold: 0.001,
		autoplay: false,
		autoplayDuration: 1000,
		autoplayPauseOnHover: false,
		autoplayCallback: function() {},
		autoplayInitialDelay: 0,
		enableDrag: false,
		dropDuration: 600,
		dropEasing: "swing",
		dropAnimateTo: "nearest",
		dropCallback: function() {},
		dragAxis: "x",
		dragFactor: 4,
		triggerFocusEvents: false,
		triggerBlurEvents: false,
		responsive: true
	}, function() {
		jQuery(this).fadeTo(500, 1);
	});
	
	 jQuery(document).ready(function() {
      jQuery(".roundabout").roundabout("relayoutChildren");
    });
	
	load();
	
	
	jQuery(".roundabout").roundabout.updateChildren
	window_cur_size	= 'phone';
	}
	
	
	function sliderSize(sHeight) {

		jQuery("#slider-block").css('height',sHeight);
		jQuery("#pre_slider").css('height',sHeight);
		
		
	}		
});


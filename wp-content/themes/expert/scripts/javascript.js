(function($) {})(jQuery);
jQuery("document").ready(function(){
	$(".web_buisnes_menu li").hover(function(){
		/*if($(this).find(".container").hasClass("phone") || $(this).parents(".container").hasClass("tablet")){return false;}*/
		$(this).parent("ul").find("ul").slideUp(70).stop();
		$(this).parent("ul").children().removeClass("active");
		$(this).addClass("active");
		if($(this).find("ul").length){$(this).children("ul").slideDown("slow").addClass("opensub")}
	},function(){
		/*if($(this).find(".container").hasClass("phone") || $(this).parents(".container").hasClass("tablet")){return false;}*/
		$(this).parent("ul").children().removeClass("active");
		jQuery(this).parent("ul").children().children("ul").css('display','none');
		$(this).parent("ul").find("ul").slideUp(70).stop();
		$(".opensub").removeClass("opensub");
	});
	
	$('li:has(> ul)').addClass('haschild');
});
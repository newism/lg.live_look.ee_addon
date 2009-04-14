(function($) {

	h = $.cookie("lg_live_look_h") || 200;
	var $iframe = $("#llp_frame").attr({"height": h+"px"});

	$(".publishTabWidth a").click(function(){
		if($(this).text() == "Live Look" || $(this).text() == "Show All"){
			$iframe.attr({"src": lg_live_look_url});
		}
	});
	
	$('.enlarge-iframe').click(function() {
		h = $iframe.height() + 100;
		$iframe.height(h);
		$.cookie("lg_live_look_h", h);
		return false;
	});

	$('.shrink-iframe').click(function() {
		if($iframe.height() > 200)
		{
			h = $iframe.height() - 100;
			$iframe.height(h);
			$.cookie("lg_live_look_h", h);
		}
		return false;
	});

})(jQuery);

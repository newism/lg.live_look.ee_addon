h = $.cookie("lg_live_look_h");
$iframe = $("#llp_frame").attr({"height": h+"px"});
$iframe.scrollTop(s);
$(".publishTabWidth a").click(function(){
	if($(this).text() == "Live Look" || $(this).text() == "Show All"){
		$iframe.attr({"src": lg_live_look_url});
	}
});
function enlarge_iframe(){
	h = $iframe.height() + 100;
	$iframe.height(h);
	$.cookie("lg_live_look_h", h);
	return false;
}
function shrink_iframe(){
	if($iframe.height() > 200)
	{
		h = $iframe.height() - 100;
		$iframe.height(h);
		$.cookie("lg_live_look_h", h);
	}
	return false;
}
jQuery(document).ready(function($) {
	
	$(".gfield_select").chosen({disable_search_threshold: 10});
	
	// Enable chosen after validation
	jQuery(document).bind('gform_post_render', function(){
		$(".gfield_select").chosen({disable_search_threshold: 10});
	});
	
}); /* end of as page load scripts */

$(document).ready(function() {
	$('.snav-list-dep-dropdown').click(function() {
		if($(this).next().height() <= 0) {
			$('.snav-list-dep-dropdown').each(function() {
				$(this).children('img').css('transform', 'rotate(0deg)');
				$(this).next().height(0);
			}); 
			$(this).children('img').css('transform', 'rotate(90deg)');
		 	$(this).next().height('fit-content');
		} else {
			$(this).children('img').css('transform', 'rotate(0deg)');
			$(this).next().height(0);
		}
	});  
});
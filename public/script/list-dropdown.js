
$(document).ready(function() {
	$('.std-srv-list-li-dropdown').click(function() {
		if($(this).next().height() <= 0) {
			$('.std-srv-list-li-dropdown').each(function() {
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
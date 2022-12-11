
$('document').ready(function() {
	$('#add-form-toggler').click(function() {
		$('.add-user-modal-con').css('display', 'flex');
	});

	$('.details-modal-hide-btn').click(function() {
		$('.add-user-modal-con').css('display', 'none');
	});
});
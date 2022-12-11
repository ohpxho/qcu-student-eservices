
$(document).ready(function() {
	//OSAS - id reissuance
	$('select[name="id-type-req"]').change(function() {
		if($(this).val() == 2) {
			$('.form-group.reissuance').css('display', 'block');
		} else {
			$('.form-group.reissuance').css('display', 'none');
		}
	});


	//REGISTRAR - academic documents
	$('input[name="documents"]').change(function() {
		const val = $(this).val();
		switch(val) {
			case 'tor':
				if($(this).is(':checked')) $('.form-group.tor').css('display', 'block');
				else $('.form-group.tor').css('display', 'none');	
				break;
			case 'gslip':
				if($(this).is(':checked')) $('.two-form-group.gslip').css('display', 'block');
				else $('.two-form-group.gslip').css('display', 'none');
				break;
			case 'others':
				if($(this).is(':checked')) $('.form-group.other').css('display', 'block');
				else $('.form-group.other').css('display', 'none');
				break;
		}
	});

	$('select[name="benificiary"]').change(function() {
		if($(this).val() == 1) $('.form-group.beneficiary').css('display', 'block');
		else $('.form-group.beneficiary').css('display', 'none');
	}); 

	//Set Appointment
	$('#set-app-btn').click(function() {
		$('.appointment-modal-con').css('display', 'flex');
	});

	$('#appointment-cancel-btn').click(function() {
		$('.appointment-modal-con').css('display', 'none');
	});
});
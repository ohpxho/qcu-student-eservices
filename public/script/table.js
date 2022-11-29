
$(document).ready(function() {
	$('#filter-form-toggler').click(function() {
		const form = document.querySelector('.filter-form-con');
		if(form.style.display) {
			form.style.display = (form.style.display != 'none')? 'none' : 'block'; 
		} else {
			form.style.display = 'block'
		}
	})
});
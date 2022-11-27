const modal = document.querySelector('.alumni-id-modal-con');
const warningPane = document.querySelector('.wrpane-con');

$(document).ready(function (){
	(function() {
		if(localStorage.getItem('id') !== null || localStorage.getItem('section') !== null) {
			modal.style.display = 'none';
		}
	})();

	$('#alumni-modal-btn').click(function() {
		const id = $('input[name="id"]').val();
		const section = $('input[name="section"]').val();


		const valid = validate({id, section});

		valid.done(function(result) {
			if(result.length > 0) {
				warningPane.innerHTML = result;
				warningPane.style.display = 'block';
			} else {
				localStorage.setItem('id', id);
				localStorage.setItem('section', section);
				modal.style.display = 'none';
				warningPane.style.display = 'block';
			}	
		});

		valid.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		}); 
		
	});

	function validate(data) {
		return $.ajax({
		    url: "/qcu-eservice/alumni",
		    type: "POST",
		    dataType: "json",
		    data: {
		        id: data.id,
		        section: data.section, 
		    }
		});
	}

});
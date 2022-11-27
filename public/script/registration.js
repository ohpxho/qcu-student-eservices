
const nextToStdBtn = document.querySelector('#next-to-std-det'); //
const nextToTermsBtn = document.querySelector('#next-to-terms-cond');//
const backToStdBtn = document.querySelector('#back-to-std-det');
const backToAccBtn = document.querySelector('#back-to-acc-det');
const regSubmitBtn = document.querySelector('input[type="submit"]');

const accStepArr = document.querySelector('#step1');
const studStepArr = document.querySelector('#step2');
const termsStepArr = document.querySelector('#step3');

const accForm = document.querySelector('#account-details-form');
const studForm = document.querySelector('#student-details-form');
const termsForm = document.querySelector('#terms-condition-form');

const warningPane = document.querySelector('.registration-con > .wrpane-con.error');


$(document).ready(function() {
	$('#next-to-std-det').click(function() {
		const id = $('input[name="id"]').val();
		const email = $('input[name="email"]').val();
		const pass = $('input[name="pass"]').val();
		const cpass= $('input[name="cpass"]').val();
		
		const validate = validateAccountDetails({id, email, pass, cpass});
		validate.done(function(result) {
			if(result.length == 0) {
				accStepArr.classList.remove('active');
				studStepArr.classList.add('active');
				termsStepArr.classList.remove('active');
				accForm.style.display = 'none';
				studForm.style.display = 'block';
				termsForm.style.display = 'none';
				warningPane.style.display = 'none';
			} else {
				warningPane.innerHTML = result;
				warningPane.style.display = 'block';
			}
		});

		validate.fail(function(jqXHR, textStatus) {
			 alert( "Request failed: " + textStatus );
		});

	});

	$('#next-to-terms-cond').click(function() {
		const lname = $('input[name="lname"]').val();
		const fname = $('input[name="fname"]').val();
		const mname = $('input[name="mname"]').val();
		const city = $('input[name="city"]').val();
		const state = $('input[name="state"]').val();
		const zip = $('input[name="zip"]').val();
		const street = $('input[name="street"]').val();
		const course = $('select[name="course"]').find(":selected").val();
		const year = $('select[name="year"]').find(":selected").val();
		const section = $('input[name="section"]').val();
		const resident = $('select[name="resident"]').find(":selected").val();
		const type = $('select[name="type"]').find(":selected").val();
		const contact = $('input[name="contact"]').val();

		const data = {lname, fname, mname, city, state, zip, street, course, year, section, resident, type, contact};
		const validate = validateStudentDetails(data);

		validate.done(function(result) {
			if(result.length == 0) {
				accStepArr.classList.remove('active');
				studStepArr.classList.remove('active');
				termsStepArr.classList.add('active');
				accForm.style.display = 'none';
				studForm.style.display = 'none';
				termsForm.style.display = 'block';
				warningPane.style.display = 'none';
			} else {
				warningPane.innerHTML = result;
				warningPane.style.display = 'block';
			}
		});

		validate.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		}); 
	});

	$('#back-to-std-det').click(function() {
		accStepArr.classList.remove('active');
		studStepArr.classList.add('active');
		termsStepArr.classList.remove('active');
		accForm.style.display = 'none';
		studForm.style.display = 'block';
		termsForm.style.display = 'none';
	});
	
	$('#back-to-acc-det').click(function() {
		accStepArr.classList.add('active');
		studStepArr.classList.remove('active');
		termsStepArr.classList.remove('active');
		accForm.style.display = 'block';
		studForm.style.display = 'none';
		termsForm.style.display = 'none';
	});

	$('input[name="consent"]').change(function() {
		if(this.checked) {
			regSubmitBtn.disabled = false;
			regSubmitBtn.style.backgroundColor = 'var(--clr-accent)';
			regSubmitBtn.style.color = 'white';
		} else {
			regSubmitBtn.disabled = true;
			regSubmitBtn.style.backgroundColor = 'var(--clr-light-bland)';
			regSubmitBtn.style.color = '';
		}
	});

	function validateAccountDetails(data) {
		return $.ajax({
		    url: "/qcu-eservice/home/registration",
		    type: "POST",
		    dataType: "json",
		    data: {
		        id: data.id,
		        email: data.email,
		        pass: data.pass,
		        cpass: data.cpass,
		        step: 1 
		    }
		});
	}

	function validateStudentDetails(data) {
		return $.ajax({
		    url: "/qcu-eservice/home/registration",
		    type: "POST",
		    dataType: "json",
		    data: {
		        fname: data.fname,
		        mname: data.mname,
		        lname: data.lname,
		        street: data.street,
		        city: data.city,
		        state: data.state,
		        zip: data.zip,
		        course: data.course,
		        year: data.year,
		        section: data.section,
		        contact: data.contact,
		        resident: data.resident,
		        type: data.type,
		        step: 2 
		    }
		});
	}

});


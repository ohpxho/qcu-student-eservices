
const loader = document.querySelector('.loader-con');
const modal = document.querySelector('.details-modal-con');
const modalHideBtn = document.querySelector('.details-modal-hide-btn');

//inputs


//get table row value
function viewStudentDetail(index) {
	const student = students[index];
	//console.log(student);
	const id = student.id;
	const email = student.email;
	const lname = student.lname;
	const fname = student.fname;
	const mname = student.mname;
	const street = student.street;
	const city = student.city;
	const state = student.state;
	const zip = student.zip;
	const course = student.course;
	const year = student.year;
	const section = student.section;
	const type = student.type;
	const qc_resident = student.qc_resident
	const contact = student.contact;

	document.querySelector('input[name="id"]').value = id;
	document.querySelector('input[name="email"]').value = email;
	document.querySelector('input[name="lname"]').value = lname;
	document.querySelector('input[name="fname"]').value = fname;
	document.querySelector('input[name="mname"]').value = mname;
	document.querySelector('input[name="street"]').value = street;
	document.querySelector('input[name="city"]').value = city;
	document.querySelector('input[name="state"]').value = state;
	document.querySelector('input[name="zip"]').value = zip;
	document.querySelector('select[name="course"]').value = course;
	document.querySelector('select[name="year"]').value = year;
	document.querySelector('input[name="section"]').value = section;
	document.querySelector('select[name="type"]').value = type;
	document.querySelector('select[name="resident"]').value = qc_resident;
	document.querySelector('input[name="contact"]').value = contact;

	modal.style.display = 'flex';
}

$(document).ready(function() {

	$('#std-acc-app-btn').click(function() {
		const id = $('input[name="id"]').val();

		loader.style.display = 'flex';
		const result = approveStudentAccount();
	});

	$('#std-acc-rej-btn').click(function() {
		
	});	

	$('input[name="search"]').on('keyup', function() {
		const search = searchStudent($(this).val());
		let rowsToAppend = '';

		search.done(function(result) {
			students = result;
			if(result.length == 0) {
				rowsToAppend += `<tr>` +
								`<td>No Data Found</td>` +  
								`</tr>`;
			} else {
				$.each(result, function(index, student) {
				const id = student.id;
				const email = student.email;
				const fname = student.fname;
				const lname = student.lname;
				const course = student.course;
				const year = student.year;
				const section = student.section;
				const type = (student.type == 1)? 'regular' : 'irregular';
				const approve = 'pending';

				rowsToAppend += `<tr>` +
								`<td><input type="checkbox" />${id}</td>` +
								`<td>${email}</td>` +
								`<td>${fname}</td>` +
								`<td>${lname}</td>` +
								`<td>${course.toUpperCase()}</td>` +
								`<td>${year}</td>` +
								`<td>${section.toUpperCase()}</td>` +
								`<td>${type}</td>` +
								`<td style="color: orange">${approve}</td>` +
								`<td><a class="eval-det-action-btn" onclick="viewStudentDetail(${index})">Details</a></td>` +  
								`</tr>`;
				});	
			}
			$('.table-con > table').find('tr:gt(0)').remove();
			$('.table-con > table').append(rowsToAppend);	
		});

		search.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		}); 
		
	});

	$('.details-modal-hide-btn').click(function() {
		modal.style.display = 'none';
	});


	function approveStudentAccount() {
		return $.ajax({
			
		});
	}

	function searchStudent(target) {
		return $.ajax({
			url: '/qcu-eservice/registrar/search' ,
			type: 'POST',
			dataType: "json",
		    data: {
		        target: target
		    }
		});
	}


});
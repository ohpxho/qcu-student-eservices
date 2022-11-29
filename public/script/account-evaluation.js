
const loader = document.querySelector('.loader-con');
const modal = document.querySelector('.details-modal-con');
const modalHideBtn = document.querySelector('.details-modal-hide-btn');
const refusalModal = document.querySelector('.rej-stud-acc-modal-con');
let order = ['id', 'asc'];
let students = [];
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
	//init table
	loader.style.display = 'flex';	
	initTable();

	//approve student account event
	$('#std-acc-app-btn').click(function() {
		const id = $('input[name="id"]').val();
		const email = $('input[name="email"]').val();
		const action = 1;
		const reason = '';

		if (window.confirm("Are you sure?")) {
			loader.style.display = 'flex';
			const update = updateApproveAttr({id, email, action, reason});

			update.done(function(result) {
				if(result) {

				} else {

				}

				modal.style.display = 'none';
				loader.style.display = 'none';
				initTable();
			});

			update.fail(function(jqXHR, textStatus) {
				loader.style.display = 'none';
				modal.style.display = 'none';
				initTable();
				alert( "Request failed: " + textStatus );
			});
		}

	});

	//reject student account event
	$('#std-acc-rej-btn').click(function() {
		const id = $('input[name="id"]').val();
		const email = $('input[name="email"]').val();
		const action = -1;
		const reason = $('.rej-stud-acc-modal > textarea').val();

		if (window.confirm("Are you sure?")) {
			loader.style.display = 'flex';
			const update = updateApproveAttr({id, email, action, reason});

			update.done(function(result) {
				if(result) {

				} else {

				}

				refusalModal.style.display = 'none';
				modal.style.display = 'none';
				loader.style.display = 'none';
				initTable();
			});

			update.fail(function(jqXHR, textStatus) {
				refusalModal.style.display = 'none';
				modal.style.display = 'none';
				loader.style.display = 'none';
				initTable();
				alert( "Request failed: " + textStatus );
			});
		}
	});	

	$('.std-acc-rej-link').click(function() {
		const textarea = document.querySelector('.rej-stud-acc-modal > textarea');
		refusalModal.style.display = 'flex';
	});

	$('#std-acc-rej-cancel-btn').click(function() {	
		const textarea = document.querySelector('.rej-stud-acc-modal > textarea');
		refusalModal.style.display = 'none';
		textarea.value = '';
	});

	//search on keyup event 
	$('input[name="search"]').on('keyup', function() {
		const filter = filterTable();
		
		filter.done(function(result) {
			appendRowResult(result);	
		});

		filter.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		}); 
		
	});

	//filter 
	$('#filter-btn').click(function() {
		const filter = filterTable();

		filter.done(function(result) {
			appendRowResult(result);
			const form = document.querySelector('.filter-form-con');
			form.style.display = 'none';
		});

		filter.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		}); 

	});

	//hide details modal event
	$('.details-modal-hide-btn').click(function() {
		modal.style.display = 'none';
	});

	$('#all-select-row-checkbox').change(function() {
		$('.table-con > table tr td input[type="checkbox"]').each(function(index) {
			if($('#all-select-row-checkbox').is(':checked')) {
				$(this).prop('checked', true);	
			} else {
				$(this).prop('checked', false);
			}
		});
	});

	function initTable() {
		const init = filterTable();
		init.done(function(result) {
			appendRowResult(result);
			loader.style.display = 'none';
		});

		init.fail(function(jqXHR, textStatus) {
			loader.style.display = 'none';
			alert( "Request failed: " + textStatus );
		});
	}

	function updateApproveAttr(data) {
		return $.ajax({
			url: '/qcu-eservice/registrar/updateApproveAttr' ,
			type: 'POST',
			dataType: "json",
		    data: {
		        id: data.id,
		        email: data.email,
		        action: data.action,
		        reason: data.reason
		    }
		});
	}

	function filterTable() {
		const target = $('input[name="search"]').val();
		let filters = [];
		$('.form-group.checkbox input[type="checkbox"]:checked').each(function(index) {
			filters[index] = [$(this).data('checkdata'), $(this).val()];
		});
		
		return $.ajax({
			url: '/qcu-eservice/registrar/filter' ,
			type: 'POST',
			dataType: "json",
		    data: {
		        target: target,
		        filters: filters,
		        order: order
		    }
		});
	}

	function appendRowResult(result) {
		let rowsToAppend = '';
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
	}


});
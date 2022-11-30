
const modal = document.querySelector('.details-modal-con');
const modalHideBtn = document.querySelector('.details-modal-hide-btn');
const refusalModal = document.querySelector('.rej-stud-acc-modal-con');
const warningPane = document.querySelector('.table-con > .wrpane-con');
let order = ['id', 'asc'];
let students = [];

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

	$('input[name="id"]').attr('value', id);
	$('input[name="email"]').attr('value', email);
	$('input[name="lname"]').attr('value', lname);
	$('input[name="fname"]').attr('value', fname);
	$('input[name="mname"]').attr('value', mname);
	$('input[name="street"]').attr('value', street);
	$('input[name="city"]').attr('value', city);
	$('input[name="state"]').attr('value', state);
	$('input[name="zip"]').attr('value', zip);
	$('select[name="course"]').attr('value', course);
	$('select[name="year"]').attr('value', year);
	$('input[name="section"]').attr('value', section);
	$('select[name="type"]').attr('value', type);
	$('select[name="resident"]').attr('value', qc_resident);
	$('input[name="contact"]').attr('value', contact);

	modal.style.display = 'flex';
}

$(document).ready(function() {
	showLoader(true);
	//initialize table
	initTable();

	//approve student account event
	$('#std-acc-app-btn').click(function() {
		const data = getDataFromStudentDetails('approve');
		
		if (window.confirm("Are you sure?")) {
			showLoader(true);
			const update = updateApproveAttr(data);

			update.done(function(result) {
				showMessagePane();
				hideModals();
				initTable();
			});

			update.fail(function(jqXHR, textStatus) {
				hideModals();
				initTable();
				alert( "Request failed: " + textStatus );
			});
		}

	});

	//approve multiple student account
	$('#mult-std-acc-app-btn').click(function() {
		let data = getDataFromSelectedRows('approve');
	
		if(window.confirm('Are you sure?')) {
			showLoader(true);
			const update = updateMultipleApproveAttr(data);

			update.done(function(result) {
				showMessagePane()
				hideModals();
				initTable();
			});

			update.fail(function(jqXHR, textStatus) {
				hideModals();
				initTable();
				alert( "Request failed: " + textStatus );
			});
		}

	});

	//if the clicked reject link is from the selected rows or not 
	let isFromSelectedRows = false;

	//reject student account event
	$('#std-acc-rej-btn').click(function() {
		if(isFromSelectedRows) {
			let data = getDataFromSelectedRows('reject');

			if(window.confirm('Are you sure?')) {
				showLoader(true);
				const update = updateMultipleApproveAttr(data);

				update.done(function(result) {
					showMessagePane();
					hideModals();
					initTable();
				});

				update.fail(function(jqXHR, textStatus) {
					hideModals();
					initTable();
					alert( "Request failed: " + textStatus );
				});
			}
		} else {
			const data = getDataFromStudentDetails('reject')

			if (window.confirm('Are you sure?')) {
				showLoader(true);
				const update = updateApproveAttr(data);

				update.done(function(result) {
					showMessagePane();
					hideModals();
					initTable();
				});

				update.fail(function(jqXHR, textStatus) {
					hideModals();
					initTable();
					alert( "Request failed: " + textStatus );
				});
			}
		}
	});	

	$('.std-acc-rej-link').click(function() {
		isFromSelectedRows = false;
		refusalModal.style.display = 'flex';
	});

	$('.selected-row-btn-con > a').click(function() {
		if($('.row-checkbox:checked').length > 0) {
			isFromSelectedRows = true;
			refusalModal.style.display = 'flex';
		}
	});

	//cancel reject modal
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

	//sort
	$('.tbl-order-btn').click(function() {
		order[0] = $(this).data('orderby');
		order[1] = (order[1] == 'asc')? 'desc' : 'asc';

		const sort = filterTable();
		
		sort.done(function(result) {
			appendRowResult(result);
		});

		sort.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		});

	}); 

	const multSelApproveBtn = document.querySelector('#mult-std-acc-app-btn');
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

		if($('#all-select-row-checkbox').is(':checked')) {
			multSelApproveBtn.disabled = false;
		} else {
			multSelApproveBtn.disabled = true;
		}			
	});

	$('.row-checkbox').change(function() {
		alert('miming');
	});

	function initTable() {
		const init = filterTable();
		init.done(function(result) {
			appendRowResult(result);
			showLoader(false);
		});

		init.fail(function(jqXHR, textStatus) {
			showLoader(false);
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

	function updateMultipleApproveAttr(data) {
		return $.ajax({
			url: '/qcu-eservice/registrar/updateMultApproveAttr' ,
			type: 'POST',
			dataType: "json",
		    data: {
		        data: data
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
							`<td class="td-no-result" style="text-align: center">No Data Found</td>` +  
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
							`<td><input type="checkbox" class="row-checkbox"/><span class="tbl-col-id">${id}</span></td>` +
							`<td class="tbl-col-email">${email}</td>` +
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
		$('.td-no-result').attr('colspan', 100);
	}

	function getDataFromSelectedRows(act) {
		const data = [];
		const action = (act == 'approve')? 1 : -1;
		$('.row-checkbox:checked').each(function(index) {
			data[index] = {
				id: $(this).closest('tr').find('.tbl-col-id').html(),
				email: $(this).closest('tr').find('.tbl-col-email').html(),
				action: action,
				reason: $('.rej-stud-acc-modal > textarea').val()	
			}; 
			
		});

		return data;
	}

	function getDataFromStudentDetails(act) {
		const action = (act == 'approve')? 1 : -1;
		const id = $('input[name="id"]').val();
		const email = $('input[name="email"]').val();
		const reason = $('.rej-stud-acc-modal > textarea').val();
		
		return {id, email, action, reason};
	}

	function showMessagePane() {
		warningPane.style.display = 'flex';
		setTimeout(() => warningPane.style.display = 'none', 3000);
	}

	function hideModals() {
		refusalModal.style.display = 'none';
		modal.style.display = 'none';
		loader.style.display = 'none';
	}

	function showLoader(show) {
		const loader = document.querySelector('.loader-con');
		if(show) {
			loader.style.display = 'flex';
		} else {
			loader.style.display = 'none';
		}
	}	 
});
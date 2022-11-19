//toggle hidden profile modal in the navigation
const profilebtn = document.querySelector('#prof-md-btn');
profilebtn.addEventListener('click', e => toggleProfileSetting());

function toggleProfileSetting() {
	const menu = document.querySelector('.h-nav-profile-md-con');
	if(menu.style.display == 'none') {
		menu.style.display = 'flex';
	} else {
		menu.style.display = 'none';
	}
}

//toggle change user pass form 
const chngepassbtn = document.querySelector('#change-pass-btn');
if(chngepassbtn) {
	chngepassbtn.addEventListener('click', e => { 
		e.preventDefault();
		toggleChangeUserPass();
		return false;
	});
}

function toggleChangeUserPass() {
	const form = document.querySelector('.change-pass-form');
	const cancleIcon = document.querySelector('.change-pass-btn-con > div > span > img');
	if(form.style.display == 'none') {
		form.style.display = 'block';
		cancleIcon.style.display = 'block';
	} else {
		const oldpass = document.querySelector('input[name="oldpass"]');
		const newpass = document.querySelector('input[name="newpass"]');	
		const confirmpass = document.querySelector('input[name="confirmpass"]');
		oldpass.value = '';
		newpass.value = '';
		confirmpass.value = '';
		form.style.display = 'none';
		cancleIcon.style.display = 'none';
	}
}
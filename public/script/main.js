//toggle hidden profile modal in the navigation
const profilebtn = document.querySelector('#prof-md-btn');
profilebtn.addEventListener('click', e => toggleProfileSetting());

function toggleProfileSetting() {
	const menu = document.querySelector('.h-nav-profile-md-con');
	if(menu.style.display) {
		menu.style.display = ((menu.style.display != 'none')? 'none' : 'flex');
	} else {
		menu.style.display = 'flex';
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
	if(form.style.display) {
		form.style.display = ((form.style.display != 'none') ? 'none' : 'block');
		cancleIcon.style.display = ((cancleIcon.style.display != 'none')? 'none' : 'block');
		if(form.style.display == 'none') {
			const oldpass = document.querySelector('input[name="oldpass"]');
			const newpass = document.querySelector('input[name="newpass"]');	
			const confirmpass = document.querySelector('input[name="confirmpass"]');
			oldpass.value = '';
			newpass.value = '';
			confirmpass.value = '';
				
		}
	} else {
		form.style.display = 'block';
		cancleIcon.style.display = 'block';
	}
}

const hnavhamburger = document.querySelector('#h-nav-hamburger-btn');
hnavhamburger.addEventListener('click', e => {
	toggleNavigationOption();
});

function toggleNavigationOption() {
	const container = document.querySelector('.h-nav-options-con');
	if(container.style.display) {
		container.style.display = ((container.style.display != 'none') ? 'none' : 'flex');
	} else {
		container.style.display = 'flex';
	}
}

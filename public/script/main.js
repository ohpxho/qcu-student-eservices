
const profilebtn = document.querySelector('#prof-md-btn');
profilebtn.onclick =  (e) => toggleProfileSetting();

function toggleProfileSetting() {
	const menu = document.querySelector('.h-nav-profile-md-con');
	if(menu.style.display == 'none') {
		menu.style.display = 'flex';
	} else {
		menu.style.display = 'none';
	}
}
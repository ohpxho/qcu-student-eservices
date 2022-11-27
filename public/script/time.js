
function timeDisplay() {
	const time = document.querySelector('#s-nav-time');
	const now = new Date();
	let seconds = formatSeconds(now.getSeconds());
	let minutes = formatMinutes(now.getMinutes());
	let hour = formatHour(now.getHours());
	let merediem = getMerediem(now.getHours());
	time.innerHTML = `${hour} : ${minutes} : ${seconds} ${merediem}`;
}

function getMerediem(hour) {
	if(hour < 12) return 'AM';
	return 'PM';
}

function formatSeconds(seconds) {
	if(seconds < 10) return `0${seconds}`;
	return seconds;
}

function formatMinutes(minutes) {
	if(minutes < 10) return `0${minutes}`;
	return minutes;
}

function formatHour(hour) {
	if(hour > 12)  hour = hour - 12;
	if(hour < 10) return `0${hour}`
	return hour;
}

setInterval(timeDisplay, 1000);


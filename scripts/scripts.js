// Current time code

function updateClock() {
	var currentTime = new Date();
	// Operating System Clock Hours for 24h clock
	var currentHours = currentTime.getHours();
	// Operating System Clock Minutes
	var currentMinutes = currentTime.getMinutes();
	// Operating System Clock Seconds
	var currentSeconds = currentTime.getSeconds();
	// Adding 0 if Minutes & Seconds is More or Less than 10
	currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
	currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
	// display first 24h clock and after line break 12h version
	var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;
	// print clock js in div #clock.
	document.getElementById("clock").innerHTML = "<strong>Time: </strong>" + currentTimeString;
}
$(document).ready(function () {
	setInterval(updateClock, 1);
});

// Flickering light code



// Detect resolution

window.onresize = displayWindowSize;
window.onload = displayWindowSize;

function displayWindowSize() {
	myWidth = window.innerWidth;
	myHeight = window.innerHeight;
	// Calculating the resolution and displaying it
	document.getElementById("dimensions").innerHTML = "<strong>Viewport resolution: </strong>" + myWidth + " by " + myHeight;
};

// Browser info
document.getElementById("browserversion").innerHTML = "<strong>Version: </strong>" + navigator.appVersion;
document.getElementById("browserplatform").innerHTML = "<strong>Platform: </strong>" + navigator.platform;
document.getElementById("browserlanguage").innerHTML = "<strong>Language: </strong>" + navigator.language;
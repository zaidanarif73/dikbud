const calculateHourHandAngle = (h, m) => {
	return 0.5 * (60 * h + m);
};

const calculateMinuteHandAngle = (m) => {
	return 6 * m;
};

const calculateSecondHandAngle = (s) => {
	return s * 6;
};

const calculateSeconds = (angle) => {
	return angle / 6;
}

const setClock = () => {
	let date = new Date(Date.now());
	let hours = date.getHours() % 12;
	let minutes = date.getMinutes();
	let seconds = date.getSeconds();
	let hourHandAngle = calculateHourHandAngle(hours, minutes);
	let minuteHandAngle = calculateMinuteHandAngle(minutes);
	let secondHandAngle = calculateSecondHandAngle(seconds);
	$(".hour-hand").css("transform", "rotate(" + hourHandAngle + "deg)");
	$(".minute-hand").css(
		"transform",
		"rotate(" + minuteHandAngle + "deg)"
	);
	$(".second-hand").css(
		"transform",
		"rotate(" + secondHandAngle + "deg)"
	);
};

setClock();

setInterval(() => {
	setClock();
}, 1000);
const nav = document.querySelector('#navigation');
const header = document.querySelector('#header');
const lane1 = document.querySelector('.container1');
const lane2 = document.querySelector('.lane.l2');
const footer = document.querySelector('.footer');
const hcontrol = document.querySelector('.hcontrol');
const slider2 = document.querySelector('.lane.l2').children;
const images = document.querySelector('.hcontainer').children;
const content = document.querySelector('.hcontent').children;
const control = document.querySelector('.hcontrol').children;
window.addEventListener('click', close_nav);
window.addEventListener('scroll', transition_slide, false);
nav.querySelector('img').addEventListener('click', open_nav);
var selected = 0;
var autoslide = false;
var pausetime;
var flag = true;
var yloc;
var nav_extend = false;
transition_slide();
function open_nav() {
	if (!nav_extend) {
		nav.querySelector('.ncontent').style.height = '40vh';
		nav.querySelector('.ncontent').style.top = '-55vh';
		setTimeout(() => {
			nav_extend = true;
		}, 200);
	}
}
function close_nav(e) {
	if (
		e.target != nav.querySelector('.ncontent') &&
		e.target != nav.querySelector('ul') &&
		e.target != nav.querySelector('ul :nth-child(1)') &&
		e.target != nav.querySelector('ul :nth-child(2)') &&
		e.target != nav.querySelector('ul :nth-child(3)') &&
		e.target != nav.querySelector('ul :nth-child(4)') &&
		nav_extend
	) {
		nav.querySelector('.ncontent').style.height = '0vh';
		nav.querySelector('.ncontent').style.top = '-15vh';
		nav_extend = false;
	}
}
function navigation() {
	nav.style.top = window.pageYOffset + 0.87 * window.innerHeight + 'px';
}
function transition_header() {
	header.children[1].style.transform = 'translate(0)';
}
function transition_lane1() {
	lane1.style.height = '100%';
	lane1.style.top = '0';
	lane1.children[0].style.transform = 'translateX(0)';
	lane1.children[1].style.opacity = '1';
}
function transition_lane2() {
	lane2.children[1].children[0].style.transform = 'translate(0)';
	lane2.children[1].children[1].style.opacity = '1';
}
function transition_footer1() {
	footer.style.background = 'white';
	if (flag) {
		control_panel('auto');
		hcontrol.style.opacity = '1';
	}
	flag = false;
}
function transition_footer2() {
	footer.lastElementChild.style.width = '110vw';
	footer.lastElementChild.style.left = '-5vw';
	setTimeout(() => {
		footer.lastElementChild.firstElementChild.style.opacity = '1';
	}, 1000);
}
function transition_slide() {
	yloc = (100 * window.pageYOffset) / window.innerHeight;
	console.log('yloc: ' + yloc);
	navigation();
	if (yloc > 530) {
		transition_footer2();
	} else if (yloc > 410) {
		transition_footer1();
	} else if (yloc > 270) {
		transition_lane2();
	} else if (yloc > 130) {
		transition_lane1();
	} else if (yloc >= 0) {
		transition_header();
	}
}
for (var i = 0; i < control.length; i++) {
	control[i].style.left = 23 + i * 3 + 'vw';
	control[i].addEventListener('click', control_panel);
	control[i].id = i;
}
function control_panel(e) {
	var range = 120;
	images[selected].style.transform = 'translate(120%)';
	control[selected].style.background = 'rgb(255, 255, 255)';
	content[selected].style.opacity = '0';
	console.log(e);
	if (e != 'auto') {
		selected = e.target.id;
		slide_stop();
	} else {
		autoslide = true;
		selected++;
		if (selected > 4) {
			selected = 0;
		}
	}
	images[selected].style.transform = 'translate(0)';
	control[selected].style.background = 'rgb(0, 40, 46)';
	setTimeout(() => {
		content[selected].style.opacity = '1';
	}, 500);
}
function slide_stop() {
	autoslide = false;
	clearTimeout(pausetime);
	pausetime = setTimeout(function () {
		autoslide = true;
	}, 10000);
}
setInterval(() => {
	if (autoslide) {
		control_panel('auto');
	}
}, 4000);

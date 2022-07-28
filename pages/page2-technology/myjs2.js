const nav = document.querySelector('#navigation');
const hvid = document.querySelector('#hvideo');
const label1 = document.querySelector('.label1').children;
const ironman = document.querySelector('#ironman');
const lane2 = document.querySelectorAll('.lane2>div');
nav.querySelector('img').addEventListener('click', open_nav);
window.addEventListener('click', close_nav);
window.addEventListener('scroll', transition_slide, false);
var yloc;
var flag1 = true;
var nav_extend = false;
transition_slide();
hvid.play();
setInterval(() => {
	hvid.style.opacity = '0';
	setTimeout(() => {
		hvid.currentTime = 0;
		hvid.style.opacity = '1';
	}, 300);
}, 19000);
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
function ironman_transition() {
	flag1 = false;
	ironman.style.right = '0';
	for (var i = 0; i < label1.length; i++) {
		label1[i].style.transitionDelay = i * 0.5 + 1 + 's';
		label1[i].style.transform = 'translateX(60vw)';
	}
	setInterval(() => {
		ironman.style.opacity = '0.5';
		setTimeout(() => {
			ironman.style.opacity = '1';
		}, 500);
	}, 5000);
}
function lane2_transition() {
	lane2[0].style.left = '15vw';
	lane2[1].style.right = '15vw';
	setTimeout(() => {
		lane2[0].querySelector('img').style.transform = 'rotateY(0deg)';
		lane2[1].querySelector('img').style.transform = 'rotateY(0deg)';
		setTimeout(() => {
			lane2[0].querySelector('p').style.opacity = '1';
			lane2[1].querySelector('p').style.opacity = '1';
		}, 300);
	}, 700);
}
function transition_slide() {
	yloc = (100 * window.pageYOffset) / window.innerHeight;
	console.log('yloc: ' + yloc);
	navigation();
	if (yloc > 350) {
		lane2_transition();
	} else if (yloc > 120) {
		if (flag1) {
			ironman_transition();
		}
	}
}

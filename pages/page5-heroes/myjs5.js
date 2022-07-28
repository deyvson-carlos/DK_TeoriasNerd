const nav = document.querySelector('#navigation');
const slider1 = document.querySelector('.hslider').children;
const banner = document.querySelector('.banner');
const body1 = document.querySelector('.header');
const lanes = document.querySelectorAll('.lane');
nav.querySelector('img').addEventListener('click', open_nav);
window.addEventListener('scroll', transition_slide, false);
window.addEventListener('click', close_nav);
var yloc;
var selected;
var bannerx = 10;
var bannery = 10;
var nav_extend = false;

banner_move();
transition_slide();
setInterval(() => {
	banner_move();
}, 1200000);
function open_nav() {
	if (!nav_extend) {
		nav.querySelector('.ncontent').style.height = '27vh';
		nav.querySelector('.ncontent').style.top = '-42vh';
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
function banner_move() {
	banner.style.backgroundPosition = '100% 100%';
	setTimeout(() => {
		banner.style.backgroundPosition = '100% 0%';
		setTimeout(() => {
			banner.style.backgroundPosition = '0% 100%';
			setTimeout(() => {
				banner.style.backgroundPosition = '0% 0%';
			}, 30000);
		}, 30000);
	}, 30000);
}
for (var i = 0; i < slider1.length; i++) {
	slider1[i].id = i;
	slider1[i].addEventListener('mouseover', slider1_mouseover);
	slider1[i].addEventListener('mouseout', slider1_mouseout);
}
function slider1_mouseover(e) {
	slider1[e.target.id].style.width = '17%';
	slider1[e.target.id].style.height = '80%';
}
function slider1_mouseout(e) {
	slider1[e.target.id].style.width = '10%';
	slider1[e.target.id].style.height = '50%';
}
function transition_slide() {
	yloc = (100 * window.pageYOffset) / window.innerHeight;
	navigation();
	if (yloc > 380) {
		lanes_translate(5);
	} else if (yloc > 320) {
		lanes_translate(4);
	} else if (yloc > 260) {
		lanes_translate(3);
	} else if (yloc > 190) {
		lanes_translate(2);
	} else if (yloc > 130) {
		lanes_translate(1);
	} else if (yloc > 60) {
		lanes_translate(0);
	}
}
function lanes_translate(i) {
	lanes[i].querySelector('img').style.transform = 'rotateY(360deg)';
	if (i % 2 == 0) {
		lanes[i].querySelector('.container').style.left = '20vw';
		lanes[i].querySelector('img').style.right = '10vw';
	} else {
		lanes[i].querySelector('.container').style.right = '20vw';
		lanes[i].querySelector('img').style.left = '10vw';
	}
}

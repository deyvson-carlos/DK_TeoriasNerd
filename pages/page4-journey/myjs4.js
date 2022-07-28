const nav = document.querySelector('#navigation');
const lane1 = document.querySelector('.lane.l1').children;
const main = document.querySelector('.main');
const timeline = document.querySelector('.timeline');
const base1 = document.querySelector('#tbase');
const base2 = document.querySelector('#tline');
const leaf = document.querySelector('#leaf').children;
const branch = document.querySelector('#branch').children;
const tcontent = document.querySelector('#tcontent').children;
const timeline_title = document.querySelector('.timeline_title').children;
const htitle = document.querySelector('#htitle');
nav.querySelector('img').addEventListener('click', open_nav);
window.addEventListener('click', close_nav);
window.addEventListener('scroll', transition_slide, false);
var yloc;
var flag1 = true;
var flag2 = true;
var xdelay;
nav.querySelector('img').addEventListener('click', open_nav);
window.addEventListener('click', close_nav);

transition_slide();
title_intro();
var nav_extend = false;
function open_nav() {
	if (!nav_extend) {
		nav.querySelector('.ncontent').style.height = '29vh';
		nav.querySelector('.ncontent').style.top = '-44vh';
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
for (var i = 0; i < leaf.length; i++) {
	leaf[i].id = i;
}
function title_intro() {
	htitle.style.height = '26vh';
	htitle.style.top = '37vh';
	htitle.querySelector('p').style.top = '-6vh';
}
function lane1_transition() {
	lane1[0].style.transform = 'translateX(-25vw) rotate(360deg)';
	lane1[1].style.transform = 'translateX(-26vw)';
	lane1[1].style.width = '65vw';
	setTimeout(() => {
		lane1[1].children[0].style.transform = 'translateX(0)';
		lane1[1].children[1].style.transform = 'translateX(0)';
	}, 1000);
}
function change_bgcolor() {
	main.style.background = 'linear-gradient(90deg, #200000, #000000)';
	timeline.style.background = 'linear-gradient(90deg, #200000, #000000)';
}
function timeline_transition_title() {
	timeline_title[0].style.width = '40vw';
	timeline_title[0].style.top = '0vh';
	timeline_title[0].style.left = '10vw';
	timeline_title[1].style.left = '35vw';
}
function timeline_transition_base() {
	base1.style.opacity = '1';
	setTimeout(() => {
		base2.style.height = '300vh';
	}, 1000);
}
function timeline_transition_leaf() {
	for (var i = 0; i < branch.length; i++) {
		branch[i].style.width = '7vw';
	}
	for (var i = 0; i < leaf.length; i++) {
		leaf[i].style.left = 38 + 'vw';
		leaf[i].style.backgroundSize = 'cover';
		tcontent[i].style.opacity = '1';
	}
}
function leaf_transition_expand(e) {
	e.target.style.opacity = '0.3';
}
function leaf_transition_contract(e) {
	e.target.style.opacity = '1';
}
function remove_delay() {
	flag2 = false;
	for (var i = 0; i < leaf.length; i++) {
		if (leaf[i].offsetLeft < 0.4 * window.innerWidth) {
			leaf[i].style.transitionDelay = '0s';
		}
	}
	if (leaf[leaf.length - 1].offsetLeft < 0.4 * window.innerWidth) {
		clearInterval(xdelay);
	}
	console.log('x');
}
function transition_slide() {
	yloc = (100 * window.pageYOffset) / window.innerHeight;
	navigation();
	if (yloc > 200) {
		if (flag2) {
			main.style.background = 'linear-gradient(90deg, #200000, black)';
			timeline.style.background = 'linear-gradient(90deg, #200000, black)';
			xdelay = setInterval(remove_delay, 100);
			timeline_transition_title();
			setTimeout(() => {
				timeline_transition_base();
				setTimeout(() => {
					timeline_transition_leaf();
				}, 1500);
			}, 1000);
		}
	} else if (yloc > 100) {
		lane1_transition();
	}
}
for (var i = 0; i < leaf.length; i++) {
	leaf[i].style.transition = '0.3s ease-in';
	leaf[i].style.top = 25 + i * 50 + 'vh';
	leaf[i].style.transitionDelay = 0.7 * i + 's';
	leaf[i].addEventListener('mouseover', leaf_transition_expand);
	leaf[i].addEventListener('mouseout', leaf_transition_contract);
	tcontent[i].style.transition = '0.3s';
	tcontent[i].style.top = 28 + i * 49.3 + 'vh';
	tcontent[i].style.transitionDelay = 1 * i + 's';
}
tcontent[0].style.transitionDelay = '0.5s';
for (var i = 0; i < branch.length; i++) {
	branch[i].style.top = 39 + i * 50 + 'vh';
	branch[i].style.transitionDelay = i * 0.5 + 's';
}

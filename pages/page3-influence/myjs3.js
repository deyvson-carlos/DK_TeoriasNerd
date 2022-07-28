const nav = document.querySelector('#navigation');
const slider1 = document.querySelector('.hslider');
const imageset1 = slider1.children;
const slider2 = document.querySelector('.slider.l2');
const slider3 = document.querySelector('.slider.l3');
const slider4 = document.querySelector('.slider.l4');
const slider5 = document.querySelectorAll('.pagenext');
const ptitle = document.querySelectorAll('.ptitle');
const pcontent = document.querySelectorAll('.pcontent');
nav.querySelector('img').addEventListener('click', open_nav);
window.addEventListener('click', close_nav);
window.addEventListener('scroll', transition_slide, false);
var yloc, temp;
var temp1, temp2;
var sstop, sprev, snext;
var autoslide = true;
var event1;
var pausetime;
var nav_extend = false;
transition_slide();
change_slide_pos();
setInterval(function () {
	if (autoslide) {
		slider1_next('auto');
	}
}, 3000);
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
function change_slide_pos() {
	sprev = slider1.children[1];
	sstop = slider1.children[2];
	snext = slider1.children[3];
	sstop.addEventListener('click', slider1_stop);
	snext.addEventListener('click', slider1_next);
	sprev.addEventListener('click', slider1_prev);
}

function slider1_next(e) {
	slider1.style.transition = '1.3s';
	slider1.style.transform = 'translate(-330%)';
	sstop.removeEventListener('click', slider1_stop);
	snext.removeEventListener('click', slider1_next);
	sprev.removeEventListener('click', slider1_prev);
	event1 = 'next';
	slider1_switch(event1, e);
}
function slider1_prev(e) {
	slider1.style.transition = '1.3s';
	slider1.style.transform = 'translate(-110%)';
	sstop.removeEventListener('click', slider1_stop);
	snext.removeEventListener('click', slider1_next);
	sprev.removeEventListener('click', slider1_prev);
	event1 = 'prev';
	slider1_switch(event1, e);
}
function slider1_switch(event1, e) {
	slider1_stop(e);
	setTimeout(() => {
		if (event1 == 'next') {
			slider1.append(slider1.firstElementChild);
		} else {
			slider1.prepend(slider1.lastElementChild);
		}
		slider1.style.transition = 'none';
		slider1.style.transform = 'translate(-220%)';
		change_slide_pos();
	}, 1400);
}
function slider1_stop(e) {
	if (e != 'auto') {
		autoslide = false;
		clearTimeout(pausetime);
		pausetime = setTimeout(function () {
			autoslide = true;
		}, 5000);
	}
}
function transition_slide() {
	yloc = (100 * window.pageYOffset) / window.innerHeight;
	console.log(yloc);
	navigation();
	if (yloc > 187) {
		temp = 100;
	} else if (yloc < 87) {
		temp = 100;
	} else {
		temp = 0;
	}
	if (temp == 100) {
		temp2 = -110;
	} else {
		temp2 = 0;
	}
	slider2.style.transform = 'translate(' + temp + '%)';
	temp1 = (100 - temp).toString();
	ptitle[0].style.opacity = temp1;
	pcontent[0].style.transform = 'translate(' + temp2 + '%)';

	if (yloc > 320) {
		temp = 100;
	} else if (yloc < 220) {
		temp = 100;
	} else {
		temp = 0;
	}
	if (temp == 100) {
		temp2 = 110;
	} else {
		temp2 = 0;
	}
	slider3.style.transform = 'translate(-' + temp + '%)';
	temp1 = (100 - temp).toString();
	ptitle[1].style.opacity = temp1;
	pcontent[1].style.transform = 'translate(' + temp2 + '%)';

	if (yloc > 440) {
		temp = 100;
	} else if (yloc < 370) {
		temp = 100;
	} else {
		temp = 0;
	}
	if (temp == 100) {
		temp2 = -110;
	} else {
		temp2 = 0;
	}
	slider4.style.transform = 'translate(' + temp + '%)';
	temp1 = (100 - temp).toString();
	ptitle[2].style.opacity = temp1;
	pcontent[2].style.transform = 'translate(' + temp2 + '%)';

	if (yloc < 520) {
		temp = 100;
	} else {
		temp = 0;
	}
	var range2 = 'translate(-' + temp + '%)';
	slider5[0].style.transform = range2;
	setTimeout(() => {
		slider5[1].style.transform = range2;
	}, 300);
	setTimeout(() => {
		slider5[2].style.transform = range2;
	}, 600);
}
for (var i = 0; i < slider5.length; i++) {
	slider5[i].querySelector('img').id = i;
	slider5[i].addEventListener('mouseover', slider5_mouseover);
	slider5[i].addEventListener('mouseout', slider5_mouseout);
}
function slider5_mouseover(e) {
	slider5[e.target.id].style.transition = '0.3s';
	slider5[e.target.id].style.transform = 'translate(5%)';
}
function slider5_mouseout(e) {
	slider5[e.target.id].style.transform = 'translate(0%)';
	slider5[e.target.id].style.transition = '1s';
}

const loading = document.querySelector('.loading');
const loader_bar = document.querySelector('.loader_bar');
const loader_menu = document.querySelector('.loader_menu');
const loader_element = loader_menu.children;
const bg_star = document.querySelector('#bg_star');
const title1 = document.querySelector('.title1');
const loc_content = document.querySelector('.loc_content');
const loc_circle = document.querySelector('.loc_circle');
const loc_line = document.querySelector('.loc_line');
const loc_title = document.querySelector('.loc_title');
var update = 0;
var emote_type;

loading_p0();
setInterval(() => {
	if (update == 1) {
		loading_p1();
	} else if (update == 2) {
		loading_p2();
	} else if (update == 3) {
		loading_p3();
	} else if (update == 4) {
		loading_p4();
	} else if (update == 5) {
	}
}, 100);

function loading_p0() {
	loader_bar.style.transition = '1s';
	loader_bar.style.transitionTimingFunction = 'linear';
	loader_bar.style.width = '0';
	setTimeout(() => {
		update = 1;
	}, 1000);
}
function loading_p1() {
	loader_bar.style.display = 'none';
	loading.style.transition = '1s';
	loading.style.background = 'black';
	setTimeout(() => {
		update = 2;
		loading.style.transition = '0s';
	}, 1000);
}
function loading_p2() {
	loader_bar.style.display = 'none';
	loader_menu.style.display = 'block';
	if (loader_menu.style.display == 'block') {
		for (var i = 0; i < loader_element.length; i++) {
			loader_element[i].style.transition = '2s';
		}
		move_earth(40, 40);
		move_spaceship(10, 1, 35);
		move_satellite(25, 65, 35);
		bg_star.style.transition = '2s linear';
		bg_star.style.opacity = '1';
		update = 3;
	}
}
function loading_p3() {
	add_events();
	loader_element[0].style.transition = '1s';
	loader_element[1].style.transition = '1s';
	title1.style.transition = '0.5s';
	loader_element[2].style.transition = '1s';
	bg_star.style.transition = '0';
	update = 4;
}
function loading_p4() {
	if (loader_element[1].width > 0.5 * window.innerWidth) {
		title1.style.display = 'block';
		if (loader_element[1].width > 0.5 * window.innerWidth) {
			title1.style.opacity = '1';
		}
	} else {
		title1.style.opacity = '0';
		if (loader_element[1].width < 0.4 * window.innerWidth) {
			title1.style.display = 'none';
		}
	}
}
function focus_earth(e) {
	move_earth(20, 30, 100, 100);
	move_satellite(-10, 70, 45);
}
function unfocus_earth(e) {
	move_earth(40, 40, 100, 100);
	move_satellite(28, 65, 35);
}
function focus_spaceship(e) {
	move_spaceship(10, 1, 55);
}
function unfocus_spaceship(e) {
	setTimeout(() => {
		move_spaceship(10, 1, 35);
	}, 100);
}
function focus_satellite() {
	loader_element[3].style.transition = '0.5s';
	if (emote_type == 'return') {
		loader_element[3].src = 'img/image_a5.png';
	} else {
		loader_element[3].src = 'img/image_a4.png';
	}
	if (loader_element[2].width < 0.36 * window.innerWidth) {
		move_emote(0.3, 0.5, 0, 0);
	}
}
function unfocus_satellite() {
	move_emote(0, 0, 0.5, 1);
}
function lunch_satellite() {
	hide_mission();
	loader_element[2].removeEventListener('click', lunch_satellite);
	loader_element[2].removeEventListener('mouseover', focus_satellite);
	loader_element[2].style.zIndex = '2';
	loader_element[0].style.zIndex = '1';
	emote_type = 'home';
	setTimeout(() => {
		unfocus_earth();
		unfocus_satellite();
		unfocus_spaceship();
		update = 4;
		setTimeout(() => {
			unfocus_satellite();
			add_events();
			loader_element[2].addEventListener('mouseover', focus_satellite);
		}, 1000);
	}, 1000);
}
function lunch_spaceship() {
	update = 7;
	remove_events();
	title1.style.opacity = '0';
	move_spaceship(30, 1, 65);
	move_earth(100, 100);
	move_satellite(100, 100);
	setTimeout(() => {
		move_spaceship(-40, 100, 150);
		bg_star.style.animation = 'stars 5s linear infinite';
		setTimeout(() => {
			window.location.href = 'pages/page4-journey/page4.html';
		}, 2000);
	}, 1000);
}
function lunch_earth() {
	update = 5;
	show_mission();
	remove_events();
	move_spaceship(-20, 100, 7);
	move_earth(-100, -150);
	move_satellite(110, 0, 80);
	setTimeout(() => {
		loader_element[2].style.transition = '0s';
		loader_element[2].style.zIndex = '1';
		move_satellite(40, 45, 1);
		move_earth(16, 32, 40, 40);
		loader_element[0].style.zIndex = '2';
		loader_element[0].style.animation = 'none';
		setTimeout(() => {
			loader_element[2].style.transition = '1s';
			move_satellite(10, 60, 15);
			setTimeout(() => {
				loader_element[2].addEventListener('click', lunch_satellite);
				unfocus_satellite();
				emote_type = 'return';
				setTimeout(() => {
					focus_satellite();
				}, 1000);
			}, 1000);
		}, 500);
	}, 500);
}
function add_events() {
	loader_element[0].addEventListener('mouseover', focus_earth);
	loader_element[0].addEventListener('mouseout', unfocus_earth);
	loader_element[0].addEventListener('click', lunch_earth);
	loader_element[1].addEventListener('mouseover', focus_spaceship);
	loader_element[1].addEventListener('mouseout', unfocus_spaceship);
	loader_element[1].addEventListener('click', lunch_spaceship);
	loader_element[2].addEventListener('mouseover', focus_satellite);
	loader_element[2].addEventListener('mouseout', unfocus_satellite);
}
function remove_events() {
	loader_element[1].removeEventListener('mouseout', unfocus_spaceship);
	loader_element[1].removeEventListener('mouseover', focus_spaceship);
	loader_element[1].removeEventListener('click', lunch_spaceship);
	loader_element[0].removeEventListener('click', lunch_earth);
	loader_element[0].removeEventListener('mouseover', focus_earth);
	loader_element[0].removeEventListener('mouseout', unfocus_earth);
}
function show_mission() {
	loc_circle.style.display = 'block';
	loc_line.style.display = 'block';
	setTimeout(() => {
		loc_circle.style.opacity = '1';
		loc_line.style.opacity = '1';
		loc_content.children[0].style.left = '13vw';
		loc_content.children[1].style.top = '65vh';
		loc_content.children[2].style.left = '70vw';
		loc_title.children[0].style.left = '18vw';
		loc_title.children[1].style.top = '72vh';
		loc_title.children[2].style.left = '74vw';
	}, 2000);
}
function hide_mission() {
	loc_circle.style.opacity = '0';
	loc_line.style.opacity = '0';
	loc_content.children[0].style.left = '-30vw';
	loc_content.children[1].style.top = '105vh';
	loc_content.children[2].style.left = '105vw';
	loc_title.children[0].style.left = '-30vw';
	loc_title.children[1].style.top = '105vh';
	loc_title.children[2].style.left = '105vw';
	setTimeout(() => {
		loc_circle.style.display = 'none';
		loc_line.style.display = 'none';
	}, 2000);
}
function move_earth(top, left, width, height) {
	loader_element[0].style.top = top + 'vh';
	loader_element[0].style.left = left + 'vw';
	loader_element[0].style.width = width + 'vw';
	loader_element[0].style.height = height + 'vw';
}
function move_spaceship(top, left, width) {
	loader_element[1].style.top = top + 'vh';
	loader_element[1].style.left = left + 'vw';
	loader_element[1].style.width = width + 'vw';
}
function move_satellite(top, left, width) {
	loader_element[2].style.top = top + 'vh';
	loader_element[2].style.left = left + 'vw';
	loader_element[2].style.width = width + 'vw';
}
function move_emote(width, height, left, top) {
	loader_element[3].style.width = width * loader_element[2].width + 'px';
	loader_element[3].style.height = height * loader_element[2].height + 'px';
	loader_element[3].style.left =
		loader_element[2].offsetLeft +
		0.4 * loader_element[2].width +
		left * loader_element[3].width +
		'px';
	loader_element[3].style.top =
		loader_element[2].offsetTop -
		0.25 * loader_element[2].height +
		top * loader_element[3].height +
		'px';
}

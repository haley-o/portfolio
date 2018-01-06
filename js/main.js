// JavaScript Document

var menuToggler = document.querySelector('#main-nav');
var menu = document.querySelector('.navigation-menu');
var hamAnimation = document.querySelector('#menuToggle');
var navText = document.querySelectorAll('.navText');

function toggleMenu() {
	// console.log(menuToggler);
	menu.classList.toggle('active-nav');
	hamAnimation.classList.toggle('open-menu');
}

navText.forEach(function(e, i) {
	navText[i].addEventListener('click', function(e) {
		e.preventDefault();
		smoothScroll(navText[i]);
		toggleMenu();
	}, false);
});

menuToggler.addEventListener('click', toggleMenu, false);

function smoothScroll(e) {
	console.log(e);
	var elementToScroll = e.getAttribute("href");
	console.log(elementToScroll);
	document.querySelector(elementToScroll).scrollIntoView({ 
	  behavior: 'smooth' 
	});

}
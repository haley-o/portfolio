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

 var scrollpos = window.scrollY;
 var about = document.getElementById("aboutCon");

  function add_class_on_scroll() {
  	// console.log("hey");
      about.classList.add("animated", "fadeInUp");
      about.style.opacity = "1";
  }
  // function remove_class_on_scroll() {
  //     header.classList.remove("fade-in");
  // }
  window.addEventListener('scroll', function(){ 
      scrollpos = window.scrollY;
      if(scrollpos > 1111){
          add_class_on_scroll();
      }
      // else {
      //     remove_class_on_scroll();
      // }
      // console.log(scrollpos);
  });

  	var resumeToggler = document.querySelector('#video-link');
	var resume = document.querySelector('#videoToggleCon');

	function toggleResume() {
		resume.classList.toggle('active-resume');
	}

	function closeResume() {
		resume.classList.remove('active-resume');
	}

	resumeToggler.addEventListener('click', toggleResume, false);
	resume.addEventListener('click', closeResume, false);
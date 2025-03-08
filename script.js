const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close'),
      arrow = document.getElementById('arrow'); 

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
  navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu');
    gsap.from('.show-menu', { 
      duration: 0.5, 
      x: '-100%', 
      opacity: 0, 
      ease: 'power4.out' 
    });
  });
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
  navClose.addEventListener('click', () => {
    gsap.to('.show-menu', { 
      duration: 0.5, 
      x: '-100%', 
      opacity: 0, 
      ease: 'power4.in', 
      onComplete: () => {
        navMenu.classList.remove('show-menu');
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const cursor = document.getElementById('cursor');
  const cursorBlur = document.getElementById('cursor-blur');

  // Cursor effect
  document.addEventListener('mousemove', (e) => {
    const cursorSize = cursor.offsetWidth / 2;
    const cursorBlurSize = cursorBlur.offsetWidth / 2;
    cursor.style.transform = `translate3d(${e.clientX - cursorSize}px, ${e.clientY - cursorSize}px, 0)`;
    cursorBlur.style.transform = `translate3d(${e.clientX - cursorBlurSize}px, ${e.clientY - cursorBlurSize}px, 0)`;
  });

  gsap.registerPlugin(ScrollTrigger);

  // GSAP animations for #page1
  gsap.from('#page1 h1', {
    opacity: 0,
    y: -100,
    duration: 1,
    ease: 'power1.out'
  });

  gsap.from('#page1 h2', {
    opacity: 0,
    y: -100,
    duration: 1,
    ease: 'power1.out',
    delay: 0.5
  });

  gsap.from('#page1 p', {
    opacity: 0,
    y: 100,
    duration: 1,
    ease: 'power1.out',
    delay: 1
  });

  // ScrollTrigger for pinning #page2
  ScrollTrigger.create({
    trigger: '#page2',
    start: 'top top',
    end: 'bottom bottom',
    scrub: true,
    pin: true,
    markers: false // Set to true if you want to see scroll trigger markers
  });

  // Smooth scrolling for internal anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

  // Arrow functionality for scrolling
  if (arrow) {
    arrow.addEventListener('click', () => {
      const targetSection = document.querySelector('#target-section'); // Change this selector to the ID of the section you want to scroll to
      if (targetSection) {
        targetSection.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  }
});
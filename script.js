let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
}

ScrollReveal({ 
    //reset: true,
    distance:'60px',
    duration: 2500,
    delay: 400
 });

 ScrollReveal().reveal('.text ',{delay: 200, origin: 'top' });
 ScrollReveal().reveal('.form-container form', {delay: 800, origin: 'left' });
 ScrollReveal().reveal('.heading', {delay: 800, origin: 'left' });
 ScrollReveal().reveal('.ride-container .box',{delay: 600, origin: 'top' });
 ScrollReveal().reveal('.services-container .box',{delay: 600, origin: 'top' });
 ScrollReveal().reveal('.about-container ',{delay: 600, origin: 'top' });
 ScrollReveal().reveal('.reviews-container ',{delay: 600, origin: 'top' });
 ScrollReveal().reveal('.news .box',{delay: 400, origin: 'bottom' });
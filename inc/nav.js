document.addEventListener('DOMContentLoaded', function() {
const sections = document.querySelectorAll('section'); // Ganti dengan elemen yang sesuai
const navLinks = document.querySelectorAll('.nav-menu ul li a');

function changeNavOnScroll() {
    let index = sections.length;

    while(--index && window.scrollY + 50 < sections[index].offsetTop) {}
    
    navLinks.forEach((link) => link.classList.remove('active'));
    navLinks[index].classList.add('active');
}

window.addEventListener('scroll', changeNavOnScroll);
});


document.querySelector('.toggle-button').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
});

const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

// Toggle the navigation menu and hamburger icon
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
    hamburger.classList.toggle('active');
});

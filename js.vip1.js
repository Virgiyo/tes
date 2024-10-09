const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');
const overlay = document.getElementById('overlay');

// Add click event for hamburger
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');  // Trigger animation
    navMenu.classList.toggle('show');  // Show/Hide menu
    overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';  // Toggle overlay
});

// Close menu and hamburger when clicking on the overlay
overlay.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('show');
    overlay.style.display = 'none';
});





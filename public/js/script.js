// Sidebar toggle (3 dots)
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.querySelector('.sidebar');
const main = document.querySelector('main');

if (sidebarToggle && sidebar && main) {
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        main.classList.toggle('with-sidebar');
    });
}

// Mobile top-nav toggle (hamburger)
const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');

if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

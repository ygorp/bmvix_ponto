// Get the menu element
const menu = document.querySelector('.menu');

// Toggle the menu when the menu button is clicked
document.querySelector('.menu-button').addEventListener('click', () => {
    menu.classList.toggle('active');
});

// Close the menu when a menu item is clicked
menu.addEventListener('click', () => {
    menu.classList.remove('active');
});

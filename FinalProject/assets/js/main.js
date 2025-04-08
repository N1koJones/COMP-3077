// ============================================
// Theme Toggle Logic
// ============================================

// Theme toggle button and available themes
const themeToggle = document.getElementById('theme-toggle'); // Button to toggle themes
const themes = ['light', 'dark', 'contrast']; // Available themes
const themeIcons = {
    light: 'wb_sunny', // Sun icon for light theme
    dark: 'cloud', // Cloud icon for dark theme
    contrast: 'remove_red_eye', // Eye icon for contrast theme
};

// Retrieve the saved theme from localStorage or default to 'light'
let currentTheme = localStorage.getItem('theme') || 'light';

// Apply the saved theme on page load
document.documentElement.setAttribute('data-theme', currentTheme); // Set the theme attribute on the root element
updateThemeIcon(currentTheme); // Update the theme icon to match the current theme

// Toggle theme on button click
themeToggle.addEventListener('click', () => {
    currentTheme = getNextTheme(currentTheme); // Get the next theme in the cycle
    document.documentElement.setAttribute('data-theme', currentTheme); // Apply the new theme
    localStorage.setItem('theme', currentTheme); // Save the new theme to localStorage
    updateThemeIcon(currentTheme); // Update the theme icon
});

// Helper function to get the next theme in the cycle
function getNextTheme(current) {
    const currentIndex = themes.indexOf(current); // Find the index of the current theme
    const nextIndex = (currentIndex + 1) % themes.length; // Cycle to the next theme
    return themes[nextIndex]; // Return the next theme
}

// Helper function to update the theme icon
function updateThemeIcon(theme) {
    const icon = themeToggle.querySelector('.material-icons'); // Find the icon element inside the toggle button
    icon.textContent = themeIcons[theme]; // Update the icon based on the current theme
}

// ============================================
// Menu Toggle Logic
// ============================================

// Menu toggle button and menu element
const menuToggle = document.getElementById('menu-toggle'); // Button to toggle the menu
const menu = document.querySelector('.menu'); // The menu element

// Toggle the menu's visibility on button click
menuToggle.addEventListener('click', () => {
    menu.classList.toggle('active'); // Add or remove the 'active' class to show/hide the menu
});
// Theme Toggle Logic
const themeToggle = document.getElementById('theme-toggle');
const themes = ['light', 'dark', 'high-visibility']; // Available themes
let currentTheme = localStorage.getItem('theme') || 'light';

// Apply the saved theme on page load
document.documentElement.setAttribute('data-theme', currentTheme);
themeToggle.textContent = `Switch to ${getNextTheme(currentTheme)} Theme`;

// Toggle theme on button click
themeToggle.addEventListener('click', () => {
    currentTheme = getNextTheme(currentTheme);
    document.documentElement.setAttribute('data-theme', currentTheme);
    localStorage.setItem('theme', currentTheme);
    themeToggle.textContent = `Switch to ${getNextTheme(currentTheme)} Theme`;
});

// Helper function to get the next theme
function getNextTheme(current) {
    const currentIndex = themes.indexOf(current);
    const nextIndex = (currentIndex + 1) % themes.length; // Cycle through themes
    return themes[nextIndex];
}
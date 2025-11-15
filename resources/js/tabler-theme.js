// Initialize theme from localStorage or default to light
const getStoredTheme = () => localStorage.getItem('tabler-theme') || 'light';
const setStoredTheme = (theme) => localStorage.setItem('tabler-theme', theme);

const setTheme = (theme) => {
    document.documentElement.setAttribute('data-bs-theme', theme);
    setStoredTheme(theme);
};

// Initialize theme on page load
setTheme(getStoredTheme());

// Listen for theme toggle clicks
document.addEventListener('click', (e) => {
    // Check if clicked element or parent is a theme toggle
    const toggle = e.target.closest('.hide-theme-dark, .hide-theme-light');
    if (!toggle) return;

    e.preventDefault();

    // Toggle theme
    const currentTheme = getStoredTheme();
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    setTheme(newTheme);
});

const darkIcon = "http://localhost/GedungSekolahPNUP/images/icon/mygs.png";
const lightIcon = "http://localhost/GedungSekolahPNUP/images/icon/mygs-black.png";

const setIcon = () => {
    const icon = document.querySelector('link[rel="icon"]');
    const darkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (darkMode) {
        icon.href = darkIcon;
    } else {
        icon.href = lightIcon;
    }
};

setIcon();
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setIcon);
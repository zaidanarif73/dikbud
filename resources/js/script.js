const banner = document.querySelector(".banner");
const bannerWidth = banner.offsetWidth;
const screenWidth = window.innerWidth;

let position = -bannerWidth;
const speed = 2; // Kecepatan pergerakan banner

function moveBanner() {
    position += speed;
    if (position > screenWidth) {
        position = -bannerWidth;
    }
    banner.style.transform = `translateX(${position}px)`;
    requestAnimationFrame(moveBanner);
}

moveBanner();

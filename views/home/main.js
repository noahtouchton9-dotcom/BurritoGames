const title = document.getElementById("title");
const bgMusic = document.getElementById("bgMusic");

let musicMuted = true;

bgMusic.volume = 0;

title.addEventListener("click", function () {
    window.location.href = "https://noahtouchton.com/index.html";
});

jumpScareBtn.addEventListener('click', () => {
    jumpScare.classList.add('show');
});

document.getElementById("bgMusicToggle").addEventListener('click', () => {
    if (musicMuted) {
        bgMusic.volume = 0.05;
        musicMuted = false;
    }

    else {
        bgMusic.volume = 0;
        musicMuted = true;
    }
});

/*========== ARTICLES PAGE ARROWS ==========*/
let upArrow = document.getElementById('a-up');
let downArrow = document.getElementById('a-down');

upArrow.addEventListener('click', e => {
    window.scrollBy({
        top: -window.innerHeight,
        left: 0,
        behavior: "smooth"
    });
});

downArrow.addEventListener('click', e => {
    window.scrollBy({
        top: window.innerHeight,
        left: 0,
        behavior: "smooth"
    });
});


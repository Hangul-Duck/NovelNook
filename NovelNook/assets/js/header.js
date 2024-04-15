let prevScrollPos = window.pageYOffset;
let header = document.getElementById('header');

window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        header.style.top = '0'; // Прокрутка вверх - показать шапку
    } else {
        header.style.top = '-100px'; // Прокрутка вниз - скрыть шапку
    }
    prevScrollPos = currentScrollPos;
};

document.addEventListener('click', function(event) {
    if (!header.contains(event.target)) {
        header.classList.add('hidden'); // Скрыть шапку при клике вне нее
    }
});

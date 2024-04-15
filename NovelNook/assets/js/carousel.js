document.querySelectorAll(".recommendations").forEach(function(scroll) {
    let isDown = false;
    let startX;
    let scrollLeft;
    let isLinkPressed = false;
    let clickX, clickY;
    let isScrolling = false; // Флаг для отслеживания прокрутки блока

    scroll.addEventListener("mousedown", function(e) {
        isDown = true;
        startX = e.pageX - scroll.offsetLeft;
        scrollLeft = scroll.scrollLeft;

        // Проверяем, является ли элемент, на который произведено нажатие, ссылкой
        if (e.target.tagName.toLowerCase() === 'a') {
            isLinkPressed = true;
        }

        // Сбрасываем флаг прокрутки блока при нажатии мыши
        isScrolling = false;
    });

    scroll.addEventListener("mouseleave", function() {
        isDown = false;
        isLinkPressed = false;
    });

    scroll.addEventListener("mouseup", function(e) {
        isDown = false;

        if (isLinkPressed && clickX === e.pageX && clickY === e.pageY) {
            e.preventDefault(); // отмена действия по умолчанию (например, переход по ссылке)
        }

        isLinkPressed = false;
    });

    scroll.addEventListener("mousemove", function(e) {
        if (!isDown) return;
        e.preventDefault();

        const x = e.pageX - scroll.offsetLeft;
        const walk = (x - startX) * 0.9; // уменьшенный коэффициент для медленной прокрутки
        const scrollDistance = scrollLeft - walk;
        scroll.scrollTo({
            left: scrollDistance,
            block: "nearest",
            inline: "start"
        });
    });

    // Обработчик события прокрутки для отслеживания движения блока
    scroll.addEventListener("scroll", function() {
        isScrolling = true;
    });

    scroll.addEventListener("click", function(e) {
        clickX = e.pageX;
        clickY = e.pageY;

        // Проверяем, было ли движение блока
        if (!isScrolling) {
            // Если блок не прокручивался, считаем ссылку активной и разрешаем переход
            return true;
        } else {
            // Если блок прокручивался, отменяем переход по ссылке
            e.preventDefault();
        }
    });
});

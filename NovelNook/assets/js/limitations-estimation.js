function validateInput(input) {
    // Заменяем все нецифровые символы на пустую строку
    input.value = input.value.replace(/\D/g, '');
    
    // Парсим введенное значение в число
    var number = parseInt(input.value);

    // Проверяем, чтобы число было от 0 до 10
    if (number > 10) {
        input.value = 10; // Устанавливаем максимальное число 10, если введено больше
    }
}
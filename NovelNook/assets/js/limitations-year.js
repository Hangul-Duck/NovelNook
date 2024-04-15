function validateYear(input) {
    // Заменяем все нецифровые символы на пустую строку
    input.value = input.value.replace(/\D/g, '');
    
    // Парсим введенное значение в число
    var year = parseInt(input.value);

    // Получаем текущий год
    var currentYear = new Date().getFullYear();

    // Проверяем, чтобы год был от 0 до текущего года
    if (year < 0 || year > currentYear) {
        input.value = currentYear; // Устанавливаем текущий год, если введено неправильное значение
    }
}
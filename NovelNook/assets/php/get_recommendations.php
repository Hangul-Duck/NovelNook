<?php
// Подключаем файл с соединением к базе данных
require_once 'assets/php/db.php';

// Выполняем запрос к базе данных
$result = $mysqli->query("SELECT * FROM Books");

// Проверяем, есть ли результаты
if ($result) {
    // Создаем пустой массив для хранения данных
    $data = array();

    // Обработка результатов запроса
    while ($row = $result->fetch_assoc()) {
        // Добавляем данные к массиву
        $data[] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'author' => $row['author'],
            'year' => $row['year'],
            // Добавьте другие поля по необходимости
        );
    }

    // Освобождаем результаты запроса
    $result->free();

    // Возвращаем данные в формате JSON
    echo json_encode($data);
} else {
    // Если произошла ошибка при выполнении запроса
    echo json_encode(array('error' => 'Ошибка при выполнении запроса: ' . $mysqli->error));
}

// Закрываем соединение с базой данных
$mysqli->close();
?>

<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'NN_DB';

// Создаем подключение к базе данных
$mysqli = new mysqli($host, $username, $password, $dbname);

// Проверяем подключение на наличие ошибок
if ($mysqli->connect_error) {
    die('Ошибка подключения к базе данных: ' . $mysqli->connect_error);
}
?>

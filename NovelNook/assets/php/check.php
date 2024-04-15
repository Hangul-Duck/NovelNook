<?php
date_default_timezone_set('Europe/Moscow');


$nickname = filter_var(trim($_POST['nickname']),
FILTER_DEFAULT);
$login = filter_var(trim($_POST['login']),
FILTER_DEFAULT);
$email = filter_var(trim($_POST['email']),
FILTER_DEFAULT);
$password = filter_var(trim($_POST['password']),
FILTER_DEFAULT);
$date_registered = date('Y-m-d');
$repeatPassword = filter_var(trim($_POST['repeatPassword']),
FILTER_DEFAULT);





if(mb_strlen($login) < 4 || mb_strlen($login) > 50) {
    echo "Недопустимая длина логина";
    exit();  
} else if(mb_strlen($nickname) < 3 || mb_strlen($nickname) > 50) {
    echo "Недопустимая длина имяни";
    exit();
} else if(mb_strlen($email) > 100) {
    echo "Недопустимая длина почты";
    exit(); 
} else if(mb_strlen($password) < 2 || mb_strlen($password) > 100) {
    echo "Недопустимая длина пароля (0т 2 до 100 символов)";
    exit(); 
}else if ($_POST['password'] != $_POST['repeatPassword']) {
    echo "Пароли не совпадают";
    exit();
}


$password = md5($password."4ISiXAdddT");

$mysql = new mysqli('localhost', 'root', '', 'NN_DB');
$mysql->query("INSERT INTO `Users` (`login`, `username`, `email`, `password`, `registration_date`) 
    VALUES('$login', '$nickname', '$email', '$password','$date_registered')");


    $mysql -> close();
    header('Location:/');
?>
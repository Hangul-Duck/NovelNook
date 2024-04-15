<?php
$login = filter_var(trim($_POST['login']),
FILTER_DEFAULT);
$email = filter_var(trim($_POST['email']),
FILTER_DEFAULT);
$password = filter_var(trim($_POST['password']),
FILTER_DEFAULT);


$password = md5($password."4ISiXAdddT");

$mysql = new mysqli('localhost', 'root', '', 'NN_DB');

$result = $mysql->query("SELECT * FROM `Users` WHERE `login` = '$login' AND 
`password` = '$password'");
$user = $result->fetch_assoc();

if(count($user) == 0){
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['username'], time() + 3600 * 24, "/");





    $mysql -> close();
    header('Location:/');
?>
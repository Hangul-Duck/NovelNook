<?php
session_start();
require_once('connect.php');
$nickname = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];

if($password == $repeatPassword){
    //con...
}else{
    $_SESSION ['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}

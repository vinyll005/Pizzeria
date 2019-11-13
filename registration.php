<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$login = urldecode(htmlspecialchars(trim($login)));
$password = urldecode(htmlspecialchars(trim($password)));

include_once("db_connect.php");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$checkLogin = $mysqli->prepare("SELECT * FROM users WHERE login LIKE ?");
$checkLogin->bind_param("s", $login);
$checkLogin->execute();
$result = $checkLogin->get_result();
$row = $result->fetch_assoc();
if ($row['login'] == $login) {
    echo "Login already taken";
    exit;
}
$hash = password_hash($password, PASSWORD_BCRYPT);

$addUser = $mysqli->prepare("INSERT INTO users (login, password) VALUES (?, ?)");
if( ! $addUser ){ //если ошибка - убиваем процесс и выводим сообщение об ошибке.
    die( "SQL Error: {$addUser->errno} - {$addUser->error}" );
}
$addUser->bind_param('ss', $login, $hash);
$addUser->execute();

$user = 0;
if($addUser == true) {
    $user = 1;
    echo "Your register done";
}


<?php
session_start();

include_once("db_connect.php");

$login = $_POST['login_in'];
$password = $_POST['password_in'];

$login = urldecode(htmlspecialchars(trim($login)));
$password = urldecode(htmlspecialchars(trim($password)));

if(empty($login) or empty($password)) {
    exit;
}

$addSession = $mysqli->prepare("SELECT * FROM users WHERE login LIKE ?");
$addSession->bind_param("s", $login);
$addSession->execute();
$result = $addSession->get_result();
$row = $result->fetch_assoc();

$verify = password_verify($password, $row['password']);


if ($verify !== true) {
    echo "Login or password invalid! Try again!";
    exit;
   }   elseif ($verify == true) {
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['login'] = $row['login'];
    echo "You're successfully login";
}
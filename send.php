<?php

$name = $_POST['fullname'];
$name = urldecode(htmlspecialchars(trim($name)));

$email = $_POST['email'];
$email = urldecode(htmlspecialchars(trim($email)));

$message = $_POST['message'];
$message = urldecode(htmlspecialchars(trim($message)));

mail($email, "Thanks for message","We will try to answer as soon as possible dear $name");
if(mail($email, "Thanks for message","We will try to answer as soon as possible dear $name")) {
    echo "Message sent";
} else {
    echo "Error";
}

print_r($_POST);
<?
session_start();

if (isset($_POST)) {
    $adress = $_POST['adress'];
    $adress = htmlspecialchars(stripslashes($adress));
    $adress = trim($adress);

    $phone = $_POST['phone'];
    $phone = htmlspecialchars(stripslashes($phone));
    $phone = trim($phone);

    $email = $_POST['email'];
    $email = htmlspecialchars(stripslashes($email));
    $email = trim($email);
} else {
    echo "Error: try again";
}

include_once("db_connect.php");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

for ($i = 0; $i<=20; $i++) {
    if(isset($_SESSION['cart_item'][$i]))    {
        $addRequest = $mysqli->prepare("INSERT INTO purchase (adress, phone, email, pizzaid, client_id, quantity) VALUES (?, ?, ?, ?, ?, ?)");
        $addRequest->bind_Param("ssssss", $adress, $phone, $email, $_SESSION['cart_item'][$i]['id'], $_SESSION['user_id'], $_SESSION['cart_item'][$i]['quantity']);
        $addRequest->execute();
    };
};
echo "Your request is successful! Wait for call!";
unset($_SESSION['cart_item']);


/*$addRequest = $mysqli->prepare("INSERT INTO purchase (adress, phone, email, pizzaid) VALUES (?, ?, ?, ?)");
$addRequest->bind_Param("ssss", $adress, $phone, $email, $_SESSION['id']);
$addRequest->execute();
*/


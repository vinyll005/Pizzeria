<?
session_start();

if(empty($_SESSION['login'])) {
    echo "Login first";
    exit;
}   


if (!empty($_POST['pizzaid'])) {
    include_once("db_connect.php");
    $findPizza = $mysqli->prepare("SELECT * FROM pizza WHERE id LIKE ?");
    $findPizza->bind_param("s", $_POST['pizzaid']);
    $findPizza->execute();
    $result = $findPizza->get_result();
    $row = $result->fetch_assoc();
    $pizzaname = $row['name']; 
        $itemArray = array($row["id"]=>array('name'=>$row["name"], 'id'=>$row["id"], 'quantity'=>1, 'price'=>$row["cost"], 'image'=>$row["img"]));

        if(!empty($_SESSION["cart_item"])) {
            if(in_array($row["id"],array_keys($_SESSION["cart_item"]))) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                        if($row["id"] == $k) {
                            $_SESSION["cart_item"][$k]["quantity"] += 1;
                            echo "$pizzaname was successfully added to your cart";
                        }
                }
            } else {
                $_SESSION["cart_item"] = $_SESSION["cart_item"] + $itemArray;
                echo "$pizzaname was successfully added to your cart";
            }
        } else {
            $_SESSION["cart_item"] = $itemArray;
           echo "$pizzaname was successfully added to your cart";
        }
        
    }

<?
session_start();

	if(!empty($_SESSION["cart_item"])) {
		foreach($_SESSION["cart_item"] as $k => $v) {
			if($_POST["pizzaid"] == $k) {
				$pizzaname = $_SESSION["cart_item"][$k]['name'];
				echo "$pizzaname was deleted from your cart";	
				unset($_SESSION["cart_item"][$k]);	
			};			
			if(empty($_SESSION["cart_item"]))
				unset($_SESSION["cart_item"]);
		}
	};



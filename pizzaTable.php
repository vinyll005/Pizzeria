<?
session_start();
function pizzasTable() {
    include_once("db_connect.php");
    for($i=1; $i<=7; $i++) {
      settype($i, 'string');
      
          $findPizza = $mysqli->prepare("SELECT * FROM pizza WHERE id LIKE ?");
          $findPizza->bind_param("s", $i);
          $findPizza->execute();
          $result = $findPizza->get_result();
          $row = $result->fetch_assoc();
          
          $productArray = $row;
              ?>

<div class="product-item">
		<form method="post" action="index.php?action=add&id=<?php echo $productArray["id"]; ?>">
		<div class="product-image"><img src="/images/<?php echo $productArray["img"]; ?>"></div>
		<div class="product-tile-footer">
		<div class="product-title"><?php echo $productArray["name"]; ?></div>
		<div class="product-price"><?php echo "$".$productArray["cost"]; ?></div>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div>
		</form>
	</div>

              <?
          };
          
          };




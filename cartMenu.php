<?php
session_start();
?>
<div id="shopping-cart">
	<? if(isset($_SESSION['cart_item'])) {
		?>
		<form action="" ajax-to="deleteCart.php" method="POST">
<button type="submit" class="btn btn-primary">Clean cart</button>
</form>
<?
	};
?>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="images/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<form action="" ajax-to="removeFromCart.php" method="POST">
				<td style="text-align:center;"><button type="submit" class="btn btn-primary">Remove pizza</button></td>
				<input type="hidden" name="pizzaid" value="<? echo $item['id']?>">
				</form>	
			</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="1" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>	
<? if(isset($_SESSION['cart_item'])) {
		?>
<form action="" ajax-to="request.php" method="POST" id="ajax_form">
    <section class="page-section" id="services">
      <div class="container">
        <h2 class="text-center mt-0" id="request" style="margin-top: 20px;" >Send request</h2>
        <hr class="divider my-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Adress</label>
            <input type="adress" name="adress" id="adress" class="form-control" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Phone number</label>
            <input type="phone" name="phone" id="phone" class="form-control" aria-describedby="emailHelp" placeholder="+1 234 56 78" required>
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="example@yandex.ru" required>
          </div>
          <button type="submit" class="btn btn-primary px-4 py-3" id="btn_submit" >Purchase</button>
      </div>
    </section>
  </form>	
  <?
	};
	?>
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
<?php
	$arrBeverages = array('Coke' => 15,'Sprite' => 20,'Royal' => 20,'Pepsi' => 15, 'Mountain Dew' => 20, );
	$arrSizes = array('Regular' => 'Regular', 'Up-Size (add &#8369 5)' => 'Up-Size', 'Jumbo (add &#8369 10)' => 'Jumbo');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vendo Machine</title>
</head>
<body>

	<h2>Vendo Machine</h2>
	<form method="post">
		<fieldset style="width: 27%;">
			<legend><b>Products:</b></legend> 
			<?php 

				if (isset($arrBeverages)) { /* vendo machine products/beverages */

					foreach ($arrBeverages as $key => $value) {
						echo "<input type='checkbox' name='checkBox[".$key."]' value='".$value."' id = 'checkBox[".$key."]'><label for = 'checkBox[".$key."]'>".$key." -&#8369; ".$value." </label><br>\n";
					}
				}
			  ?>
		</fieldset>

		<fieldset style="width: 27%;">
			<legend><b>Options:</b></legend>
			<label><b>Size</b></label> 
			<select name="option"> <!-- $arrSizes = array('Regular' => 'Regular', 'Up-Size (add &#8369 5)' => 'Up-Size', 'Jumbo (add &#8369 10)' => 'Jumbo'); -->
			<?php
				if (isset($arrSizes)) {
					foreach ($arrSizes as $Sizekey => $Sizevalue) {
						echo "<option value='".$Sizevalue."'>".$Sizekey."</option>";
					} 
				} 
			  ?>
			</select>

			<label><b>Quantity</b></label>
			<input type="number" name="quantity" min="0" value="0">
			<button type="submit" name="checkbtn">Check Out</button>
		</fieldset>
		<hr>

		<?php
			if (isset($_POST['checkbtn'])) :
				if (isset($_POST['quantity']) && isset($_POST['checkBox'])) {
					$arrSelect = $_POST['checkBox'];
					$quantity = $_POST['quantity'];
					$option = $_POST['option'];

					if ($quantity == 1 ) {
						$word = " piece ";
					}else{
						$word = " pieces ";
					}

					if ($option == 'Regular') { /*$arrSizes = array('Regular' => 'Regular', 'Up-Size (add &#8369 5)' => 'Up-Size', 'Jumbo (add &#8369 10)' => 'Jumbo');*/
						$ups = 0;
					}elseif ($option == 'Up-Size') {
						$ups = 5;
					}elseif ($option == 'Jumbo') {
						$ups = 10;
					}
					echo "<h3>Purchased Summary: </h3>";
					foreach ($arrSelect as $keySelect => $selectValue) {
						echo "<div><ul><li>".$quantity." ".$word."of ".$option." ".$keySelect." amounting to &#8369; ".$total = intval($selectValue) * intval($quantity) + ($ups * intval($quantity)) ."</li></ul></div>";
					}
					$sum = (array_sum($arrSelect)+$ups*$quantity)*$quantity;
					echo "<b>Total Number of Items:</b> ". $totalquantity = ($quantity * sizeof($arrSelect))  ;
					echo "<br><b>Total Amount:</b> " . $sum;
				}
				else{
					echo "<b>No Selected Product. Try Again</b>";
				}
			
		  ?>
		<?php endif; ?>
	</form>

</body>
</html>
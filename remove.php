<?php

?>

<html>
	<head>
		<title>Reaching hands</title>
	</head>

<body>
	<form method="POST" action="deleteItems.php">
	<h1>
		<label>Enter product to remove</label>
		<input type="text" id="item-id" name="item-name" placeholder="Item to be deleted" /><br><br>
		<label>Enter product quantity</label>
		<select name="quantity" id="qty">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select><br><br>
		<input type="submit" value="Remove items" onsubmit="remove()" />
	</h1>
	</form>		
</body>

</html>
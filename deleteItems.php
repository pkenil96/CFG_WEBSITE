<?php
	if(isset($_POST)){
		$name = $_POST['item-name'];
		$qty = $_POST['quantity'];

		$con=mysqli_connect('localhost','root') or die("Couldn't connect to the database");
		if($con){
			mysqli_select_db($con,"reaching_hands") or die(mysqli_error($con));
			$q='UPDATE inventory set current_count=current_count - ' .$qty. ' where item_name="' .$name. '" && current_count-' .$qty. '>=0;';
			echo $q;
			mysqli_query($con,$q) or die(mysqli_error($con));
			header('Location: homepage_skp.php');
		}
	}
?>
<?php
	$con=mysqli_connect('localhost','root') or die("Couldn't connect to the database");
	if($con){
		mysqli_select_db($con,"reaching_hands") or die(mysqli_error($con));
		$q = 'SELECT * FROM inventory;';
		$result = mysqli_query($con,$q) or die(mysqli_error($con));
		$num=mysqli_num_rows($result);

		echo "<table class='table table-striped table-inverse'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Item_Id</th>";
		echo "<th>Item_Name</th>";
		echo "<th>Item_Type</th>";
		echo "<th>Current_Count</th>";
		echo "<th>Threshold_Count</th>";
		echo "<tr>";
		echo "</thead>";
		echo "<tbody>";

		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row['item_id']."</td>";
			echo "<td>".$row['item_name']."</td>";
			echo "<td>".$row['item_type']."</td>";
			echo "<td>".$row['current_count']."</td>";	
			echo "<td>".$row['threshold_count']."</td>";
			echo "<td><a class='btn btn-danger' target='#'>Remove Item</a></td>";		
			echo "</tr>";
		}
		echo "</table>";
	}
?>
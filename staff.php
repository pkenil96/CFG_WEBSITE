<?php
	$con=mysqli_connect('localhost','root') or die("Couldn't connect to the database");
	if($con){
		mysqli_select_db($con,"reaching_hands") or die(mysqli_error($con));
		$q = 'SELECT * FROM staff;';
		$result = mysqli_query($con,$q) or die(mysqli_error($con));
		$num=mysqli_num_rows($result);

		echo "<table class='table table-striped table-inverse'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Staff Id</th>";
		echo "<th>Name</th>";
		echo "<th>Date of join</th>";
		echo "<th>Role</th>";
		echo "<tr>";
		echo "</thead>";
		echo "<tbody>";

		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row['staff_id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['dateofjoin']."</td>";
			echo "<td>".$row['role']."</td>";	
			echo "</tr>";
		}
		echo "</table>";
	}
?>
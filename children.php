<?php
	$con=mysqli_connect('localhost','root') or die("Couldn't connect to the database");
	if($con){
		mysqli_select_db($con,"reaching_hands") or die(mysqli_error($con));
		$q = 'SELECT * FROM children;';
		$result = mysqli_query($con,$q) or die(mysqli_error($con));
		$num=mysqli_num_rows($result);

		echo "<table class='table table-striped table-inverse'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Name</th>";
		echo "<th>Age</th>";
		echo "<th>Gender</th>";
		echo "<th>Date of joining</th>";
		echo "<th>School type</th>";
		echo "<th>School name</th>";
		echo "<th>Standard</th>";
		echo "<th>Grade</th>";
		echo "<tr>";
		echo "</thead>";
		echo "<tbody>";

		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row['children_id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['age']."</td>";
			echo "<td>".$row['gender']."</td>";	
			echo "<td>".$row['dateofjoin']."</td>";
			echo "<td>".$row['school_type']."</td>";
			echo "<td>".$row['school_name']."</td>";
			echo "<td>".$row['standard']."</td>";
			echo "<td>".$row['grade']."</td>";	
			echo "</tr>";
		}
		echo "</table>";
	}
?>
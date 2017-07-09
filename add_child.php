<?php
	if(isset($_POST)){

		$con=mysqli_connect('localhost','root') or die("Couldn't connect to the database");
		mysqli_select_db($con,"reaching_hands") or die("Couldn't select to the databse");

		$name=$_POST['name'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$school_type=$_POST['school_type'];
		$school_name=$_POST['school_name'];
		$standard=$_POST['standard'];
		$grade=$_POST['grade'];

		$q = 'INSERT INTO children(name,age,gender,dateofjoin,school_type,school_name,standard,grade) VALUES ("' . $name . '","' . $age . '","' . $gender . '","2017-07-09",' . $school_type . '","' . $school_name . '","' . $standard . '","' . $grade . '";';
		mysqli_query($con,$q) or die(mysql_error($con));
		mysqli_close($con);	
	}
?>

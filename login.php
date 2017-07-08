<?php
	if(isset($_POST)){
		ob_start();
		session_start();

		$uname=$_POST['username'];
		$pass=$_POST['password'];
		$_SESSION['unm']=$uname;

		$con = mysqli_connect('localhost',"root") or die("Couldn't connect to the database");
		if($con){
			mysqli_select_db($con,"reaching_hands") or die("Couldn't select the database");
			$q = 'SELECT * FROM login WHERE login_id="'.$uname. '" and password="'.$pass.'";';
			echo $q;
			$result=mysqli_query($con,$q) or die(mysqli_error($con));
			$num=mysqli_num_rows($result);

			if($num==0){
				header("Location: index.php");
			} else {
				if($uname=="staff1"){
					header("Location: homepage_staff.php");
				} else if($uname=="admin"){
					header("Location: homepage_admin.php");
				} else if($uname=="skp"){
					header("Location: homepage_skp.php");
				}
			}
		}
		
	}
	
?>
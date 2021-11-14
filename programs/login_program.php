<?php include ".../include/database.php";
	if(isset($_POST['s1']))
	{
		extract($_POST);
		$result=mysql_query("select * from register where email='$email' && password='$pwd' ");
		
		$n=mysql_num_rows($result);
		if($n==1)
		{
			session_start();
			$row=mysql_fetch_array($result);
			$_SESSION['$id']=$row['$id'];
			
			header("location:http://localhost/dream%20destination%20project/home.php");
		}
		else
		{
			echo "<script> alert('Invalid login')</script>";
		}
	}
		
		
?>
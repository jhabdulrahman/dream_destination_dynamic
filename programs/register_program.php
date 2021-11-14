<?php include ".../include/database.php";
	if(isset($_POST['register1']))
	{
		extract($_POST);
		$insert=mysql_query("insert into register(name,email,phone,password)values('$name','$email','$number','$pwd')") or die (mysql_error());
         		
		if($insert)
		{
			header("location:http://localhost/dream%20destination%20project/home.php");
		}
		else
		{
			mysql_error();
			echo "failure";
		}
	}
?>
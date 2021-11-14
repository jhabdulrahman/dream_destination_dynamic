<?php
	if(!isset($_POST['register1']))
		extract['$_POST']
		{
			$insert=mysql_query("insert into register (name,email,moblie,password)values('$name','$email','$moblie','$password')") or die (mysql_error());
			if 
			{
				echo "Success";
			}
			else
			{
				 mysql_error();
				echo "failure";
			}
		}
?>
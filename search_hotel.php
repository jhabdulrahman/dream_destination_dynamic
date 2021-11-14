    <?php
      if(isset($_POST['search']))
	{
		extract($_POST);
		header("location:trip_details.php?id={$ss}");
		 
	}                             

    ?>
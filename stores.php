<?php
	session_start();
	include("config.php");
	
	$no_of_stores="";
	$no_of_storesErr="";
	if($_SERVER["REQUEST_METHOD"]== "POST")
	{
		if(isset($_POST["count"]))
		{
			if(empty($_POST["no_of_stores"]))
			{
				$no_of_storesErr = "Number of stores is Required";

			}
			else
			{
				/*$event_name = test_input($_POST["no_of_stores"]);
		      // check if name only contains letters and whitespace
		      if (!preg_match("/^[a-zA-Z]*$/",$event_name))
		        {
		          $event_nameErr = "Only letters and white space allowed"; 
		        }*/
		        $no_of_stores=$_POST["no_of_stores"];
		    }

		}
		$sql="INSERT INTO sign_in(no_of_stores) VALUES('$no_of_stores')";
		mysqli_query($db,$sql);

	}
	
?>
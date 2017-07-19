<?php

	session_start();
	$name=$email=$phone=$gender=$age="";
	$nameErr=$emailErr=$phoneErr="";
	include("config.php");  

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {echo "hello";
       //username and password sent from form
      if(isset($_POST['add_manager']))
      { echo "hello";
         $dob = $_POST['dob'];
	    $gender=$_POST['gender'];
	    $name =$_POST['name'];
	    $email =$_POST['email'];
	    $phone =$_POST['phone'];
	

		$username = $_SESSION["username"];
	    //$password = $_SESSION["password"];

		if($name!="" && $email!="")				//validation
	    {
		  	
				$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         $org_name = $row["org_name"];

		  		$query = "INSERT INTO store_managers (org_id , name , email , isadmin , phone , gender , dob) VALUES('$org_id','$name','$email','0' , '$phone' , '$gender' , '$dob')";
		  		mysqli_query($db,$query);
                echo"<script> alert('manager added successfully');</script>";
		  		header('Location: headProfile.php');


		  		

		  		
		}
		else
		{
			echo "Name and Email are required";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
}
?>
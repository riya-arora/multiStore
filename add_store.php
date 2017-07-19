<?php

	 session_start();
	$city=$address=$phone="";
	$cityErr=$addressErr=$phoneErr="";
	include("config.php"); 

		 


   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {echo "hello";
       //username and password sent from form
      if(isset($_POST['add_store']))
      { echo "hello";


         $city = $_POST['city'];
	    $address=$_POST['address'];    
	    $phone =$_POST['phone'];
	    $username=$_SESSION['username'];
		
	    //$password = $_SESSION["password"];

		if($city!=""&& $address!="")				//validation
	    {

		  	   echo "pglet";
				$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         $org_name = $row["org_name"];

		  		$query = "INSERT INTO stores(org_id , name , email , isadmin , phone , gender , dob) VALUES('$org_id','$name','$email','0' , '$phone' , '$gender' , '$dob')";
		  		mysqli_query($db,$query);

		  		

		  		
		}
		else
		{
			echo "Name and Email are required";
		}
	}
}
?>
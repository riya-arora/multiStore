<?php

require_once("config.php");
$name=$organisation=$username=$password=$email="";
$nameErr=$organisationErr=$usernameErr=$passwordErr=$emailErr=$type="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['sign_up_button']))
    {
    	
	    $name = $_POST['name'];
	    $email =$_POST['email'];
	    $organisation=$_POST['organisation'];
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	
		if($username !="" && $name != "" && $email != "" && $password!= "" )				//validation
	    {
		  	$query = "Select * from sign_in WHERE username='".$username."'";
		  	$res = mysqli_query($db,$query); 
		  	if(mysqli_num_rows($res))
		  	{
		  		echo "username taken";

		  	}
		  	else
		  	{
		  		echo "username successfull";
		  		$query = "INSERT INTO sign_in(org_name,name,username,email,password) VALUES('$organisation','$name','$username','$email','$password')";
		  		mysqli_query($db,$query);

		  		$sql = "SELECT * FROM sign_in WHERE username = '".$username."' and password = '".$password."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		  		

		  		$query = "INSERT INTO store_managers (org_id , name , email , isadmin) VALUES('$org_id','$name','$email','1')";
		  		mysqli_query($db,$query);
		  		header("Location: headProfile.php")
		  		;
		  	}
		}
	}
}
?>
<?php

	session_start();
	$drop=$radio=$text=$form_name="";
	$dropErr=$radioErr=$textErr="";
	require_once("config.php");

   		$username = $_SESSION['username'];
		$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];

 
		 if(isset($_POST['form_name_make'])|| isset($_POST['type']))
		{
			echo "i m";
         	if(isset($_POST['form_name_make']))
         	{
         		$form_name = $_POST['form_name'];
         	}
         	if(isset($_POST['type']))
         	{
         		$form_name = $_SESSION['form_name'];
         	}

			$sql = "INSERT INTO form(org_id,form_name)VALUES ('$org_id' , '$form_name')";
			       mysqli_query($db,$sql);
		
			$_SESSION['form_name'] = $form_name;
		echo "<table align='center'>";
		echo "<form method = 'post' id='store_manager' action = 'texth.php'>";
		echo "<tr><td>Text Question</td><td><input type='submit' id='Calltext' name = 'text_que' value='ADD'></td></tr>";
		echo "</form>";

		
		echo "<form method = 'post' id='store_manager' action = 'radioh.php'>";
		echo "<tr><td>Radio Button Question</td><td><input type='submit' id='Calltext' name = 'radio' value='ADD'></td></tr>";
		echo "</form>";
		

		echo "<form method = 'post' id='store_manager' action = 'mcqh.php'>";
		echo "<tr><td>Multiple Choice Question</td><td><input type='submit' id='Calltext' name = 'mcq' value='ADD'></td></tr>";
		echo "</form>";
		//echo "<tr><td colspan=2><input type='submit' name = 'next' value='nextn'></td></tr>";
		echo "<form>";
		echo "<tr><td colspan=2><input type='submit' name = 'form_make' value='submit'></td></tr>";
		echo "</form>";

		echo "<form method = 'post' action = 'preview.php'>";
		echo "<tr><td colspan=2><input type='submit' name = 'preview' value='Preview Your Form'></td></tr>";
		echo "</form>";

		
      	}	
		
		echo $form_name;
		
		
		//fnameget($form_name);
		if(isset($_POST['form_make']))
		{
			unset($_POST['next']);
			include "head_profile.php";
			
		}
		
?>



<?php

	session_start();
	$drop=$radio=$text=$form_name="";	
	$dropErr=$radioErr=$textErr="";
	require_once("config.php");

   		$username = $_SESSION["username"];
		$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];

 
		 $form_name = $_SESSION['form_name'];
		 echo $form_name;
		 echo "reg";
		 $sql = "SELECT * FROM form WHERE form_name = '".$form_name."' and org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $form_id = $row["form_id"];


		$sql = "SELECT * FROM form_que WHERE form_id = '".$form_id."' and org_id = '".$org_id."'";
			         $result = mysqli_query($db,$sql);
			         
			         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			         echo $form_id;
		  while($row)
		  {
		  	echo $row["question"];
		  	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  }
		  
	  		 $sql = "SELECT * FROM store_managers WHERE org_id = '".$org_id."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		      echo " <form action='form_assign.php' method='post' enctype='multipart/form-data' name='colorform'>";
	         while($row)
	         {
	         	echo $row['name'];

				echo "<tr><td><input type='checkbox' name='color[] value='black'></td></tr>";
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
	         }
	         echo "<tr><td><input name='submit' type='submit' value='Send Forms'></td></tr>";
			echo "</form>";
		/*echo "<table align='center'>";
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
		echo "<tr><td colspan=2><input type='submit' name = 'form_make' value='submit'></td></tr>";
		echo "</form>";
      	}	
		
		echo $form_name;
		
		
		//fnameget($form_name);
		if(isset($_POST['form_make']))
		{
			unset($_POST['next']);
			include "head_profile.php";
			
		}*/
		
?>



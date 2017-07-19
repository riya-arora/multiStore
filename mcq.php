
 	<?php

			session_start();
			$drop=$radio=$text="";
			$dropErr=$radioErr=$textErr="";
			require_once("config.php");
			$form_name="";
		   /*if($_SERVER["REQUEST_METHOD"] == "POST") 
		   {echo "hello";*/
		   if(isset($_POST['que1'])){
		   		//echo "i m here";
		   	$form_name = $_SESSION['form_name'];
		   	$username = $_SESSION['username'];
				//unset($_POST['que']);

				//include "fname.php";
				//$form_name = fnameput();

				echo $_SESSION['form_name'];

				$sql = "SELECT * FROM form WHERE form_name = '".$form_name."'";
					         $result = mysqli_query($db,$sql);

					         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

					         $form_id = $row["form_id"];
					         echo $form_id;

				$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
					         $result = mysqli_query($db,$sql);
					         
					         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

					         $org_id = $row["org_id"];
		       
		       $question = $_POST['question'];
		       $option1 = $_POST['option1'];
		       $option2 = $_POST['option2'];
		       $option3 = $_POST['option3'];
		       $option4 = $_POST['option4'];



		         $sql = "INSERT INTO form_que(org_id,form_id,question,ques_type,option1,option2,option3,option4)VALUES ('$org_id' , '$form_id' , '$question' , '2' , '$option1' , '$option2' , '$option3' , '$option4')";
					       mysqli_query($db,$sql);


				}	       

				
		?>
	

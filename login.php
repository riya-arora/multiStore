<?php
  
   $error = "";
   include("config.php");   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form
      if(isset($_POST['login']))
      { 
         $username = mysqli_real_escape_string($db,$_POST['username']);
         $password = mysqli_real_escape_string($db,$_POST['password']); 
      
         $sql = "SELECT * FROM sign_in WHERE username = '".$username."' and password = '".$password."'";
         $result = mysqli_query($db,$sql);
         
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         
      
         $count = mysqli_num_rows($result);
      
         // If result matched $myusername and $mypassword, table row must be 1 row
      
         if($count == 1) 
         {
            echo "yeah yeah";
            $_SESSION['username'] = $username;
            header("Location: headProfile.php");
            /*$sql1= "SELECT * FROM sign_in WHERE username = '".$username."'";
            $result1 =  mysqli_query($db,$sql1);
            $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
            $_SESSION['profession'] = $row1['profession'];
            $_SESSION['interest'] = $row1['interest'];*/

            //header("Location: my_account.php");
         }
         else 
         {
           
            $error = "Your Login Name or Password is invalid";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
         }
      }
   }
?>
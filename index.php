<!DOCTYPE html>
<html>
<head>
  <title>bussiness</title>
  <style>
      @import url(http://weloveiconfonts.com/api/?family=fontawesome);
 
.fa {
 width: 60px;
 display: block;
 text-align: center;
 color:#FFF;
 font:normal 45px 'FontAwesome';
 line-height:60px;
 text-rendering: auto;
 -webkit-font-smoothing: antialiased;
}
.fa-angle-double-down:before {content: "\f103";}
 
.bounce {
 position: absolute;
 bottom: 30px;
 left: 50% ;
 width: 60px;
 height: 60px ;
 margin-left:-30px;
 border: 2px solid #FFF;
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 -ms-border-radius:50%;
 border-radius:50%;
 animation: bounce 2s infinite;
 -webkit-animation: bounce 2s infinite;
 -moz-animation: bounce 2s infinite;
 -o-animation: bounce 2s infinite;
}
 
@-webkit-keyframes bounce {
 0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);} 
 40% {-webkit-transform: translateY(-30px);}
 60% {-webkit-transform: translateY(-15px);}
}
 
@-moz-keyframes bounce {
 0%, 20%, 50%, 80%, 100% {-moz-transform: translateY(0);}
 40% {-moz-transform: translateY(-30px);}
 60% {-moz-transform: translateY(-15px);}
}
 
@-o-keyframes bounce {
 0%, 20%, 50%, 80%, 100% {-o-transform: translateY(0);}
 40% {-o-transform: translateY(-30px);}
 60% {-o-transform: translateY(-15px);}
}
@keyframes bounce {
 0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
 40% {transform: translateY(-30px);}
 60% {transform: translateY(-15px);}
}

.error
{
  color:red;
}
td
{
  padding:10px;
  
}

    </style>  
</head>
<body bgcolor="#000">


<img src="start2.jpg" style="opacity:0.5;height:650px;width:1335px;">
<img src="login.jpeg" style="opacity:0.1;height:650px;position:absolute;width:1335px;top:650px">  

<div class="bounce"><a href="#login_register"><i class="fa fa-angle-double-down"></i></a></div>
<div id="login_register">

</div>

  <?php include 'sign_in.php';?>
<?php include 'login.php';?>

<div id="login" style="position:absolute;top:650px;left:550px;font-size:20px;">
 
<h2 style="color: #FFF">login</h2>
  
<form method="post" style="color:#FFF" onsubmit="return validate_signin()" action="login.php">
<table align="center">

    <tr><td>
  Username: </td><td><input type="text" id="l_username" name="username" value="<?php echo $username;?>">
  <span class="error">*</span></td></tr>
 <tr><td> Password:</td><td><input type="password" id="l_password" name="password"  value="<?php echo $password;?>" >
  <span class="error">*</span><br><br></td></tr><tr><td colspan="2">
  <input type="submit" name="login"  value="Sign in"></td></tr>

</table>
  </form>

</div>  
<script>

    

  //client side validation
    function validate_signin(){
      //access username, password
      var l_username = document.getElementById("l_username").value;
      //var name = document.getElementById("name").value;
      //var email = document.getElementById("email").value;
      var l_password = document.getElementById("l_password").value;

      if(l_username == "" || l_password == ""){
        alert('All fields are required!');


        return false;
      }

      return true;
    }
  </script>


  
<div id="Register" style=" position:absolute;color:#FFF;font-size:20px;top:910px;left:550px;">
  <h2>Register with us!</h2>
   
  
  
  <form method="post" onsubmit="return validate_sign_up()" action="sign_in.php">
  <table>
   <tr>
   <td>What's your name? </td>
   <td><input type="text" name="name" id = "name" value="<?php echo $name;?>"></td>
   <td style="text-align:left"><span class="error">* </span></td>
   </tr>
   
   <tr>
   <td>Name of your Organisation:</td>
   <td><input type="text" name="organisation" id = "organisation" value = "<?php echo $organisation;?>"></td>
   <td style="text-align:left"><span class="error">* </span></td>
   </tr>

  <tr>
  <td>Your email id:</td>
  <td><input type="email" name="email"  id = "email" value="<?php echo $email;?>"></td>
  <td><span class="error">* </span></td>
  </tr>
  
  <tr>
  <td>Set a username:</td>
  <td><input type="text" id = "username" name="username" value="<?php echo $username;?>"></td>
  <td><span class="error">* </span></td>
  </tr>
  <tr>
  <td>Set a password:</td>
  <td><input type="password" name="password" id="password" value="<?php echo $password;?>"></td>
  <td><span class="error">*</span></td>
  </tr>
  
    <tr>
  <td><input type="submit" name="sign_up_button" value="Sign Up"></input></td>
  </tr>
  </table>
   
    </form>
    

  <script>

  //client side validation
    function validate_sign_up(){
      //access username, password
      var username = document.getElementById("username").value;
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      if(username == "" || name == "" || email == "" || password == ""){
        alert('All fields are required!');


        return false;
      }

      return true;
    }
  </script>
  </div>

 </div>
 


</body>
</html>
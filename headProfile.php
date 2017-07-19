<?php
session_start() ;
?>
<DOCTYPE html>
<html>
<head>
<title>
head_profile
</title>
<style>
a:link{
	color: #4d004d;

}
a:visited{
	color: #4d004d;
}

</style>
</script>
</head>
<body>
<div align="right" style="font-size:25px;font-family:Berlin Sans FB;color:#FFF;">
Hey
<?php 
  echo $_SESSION['username'];
?>!
<br>
<a href = "logout.php">Logout</a>
</div>
<img src="headProfile.jpg" width="100%" height="45%">
<div align="center"style="font-family: Rockwell; font-size: 28px">
<a href="addManager.html">Add a New Manager</a>
<br><br>
<a href="addStore.php">Add a New Store</a>
<br><br>
<a href="form_name.html">Create a new Form</a>
</div>
</body>
</html>
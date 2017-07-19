<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111111;
}
</style>
</head>
<body> 


<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<table align="center">
<form method = "post" id="store_manager">
<tr><td>dropdowns:</td><td><input type="number" name="drop"></td></tr>
<tr><td>radio buttons</td><td><input type="number" name="radio"></td></tr>
<tr><td>text</td><td><input type="number" name="text"></td></tr>
<tr><td colspan=2><input type="submit" name = "form_make" value="submit"></td></tr>
<?php include 'form_make.php';
echo "successful";
?>

</body>
</html>

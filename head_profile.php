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
<table align="center" bgcolor="#e6ffe6">
<form id="store_manager" >
<tr><td>Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Date of birth</td><td><input type="date" name="dob"></td></tr>
<tr><td>gender</td><td><input type="radio" name="gender" value="male">male</td><td><input type="radio" name="gender" value="female">female</td></tr>
<tr><td>email:</td><td><input name="email" type="email"></td></tr>
<tr><td>contact number</td><td><input name="phone" type="text"></td></tr>
<tr><td>address</td><td><input name="address" type="textarea"></td></tr>
<tr><td colspan=2><input type="submit" value="submit"></td></tr>

</body>
</html>

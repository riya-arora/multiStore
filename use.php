<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Add a store manager</h2>

<form action="action_page.php">

    <br>
    <label><b>Manager's Name</b></label>
    <input type="text" placeholder="enter manager's name" name="name" required>
    <br><br>

    <label><b>Gender</b></label><br>
    <input type="radio" value="male" name="gender">Male
    <input type="radio" value="female" name="gender"> Female
    <br><br>

    <label><b>Date of Birth</b></label><br>
    <input type="date" placeholder="Enter date of birth" name="dob" required>
    <br><br>
    
     <label><b>Email:</b></label><br>
    <input type="email" placeholder="email id" name="email" required>
    <br><br>
    
    <label><b>Contact Number</b></label><br>
    <input type="text" placeholder="mobile number" name="dob" required>
    <br><br>
    
    <label><b>Address</b></label>
    <input type="textarea" columns="50" rows="4" placeholder="address" name="address" required>
    <br>
  
       
    <button type="submit" name="add_manager">Submit form</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>
</form>

</body>
</html>

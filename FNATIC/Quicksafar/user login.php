
<!DOCTYPE html>
<html>
<head>
	<title>user login</title>
	<link rel="stylesheet" type="text/css" href="stylish.css">
</head>
<body>
     <div class="container">
         
     <img src="_pic/car.jpg" alt="car" style="width:100%;height:50%";>
         
    <div class="content">
	<h1><b>Registration Page</b></h1>
<form method="POST" action="login.php">
	<table border="1">
	

	    <tr>
	         <td>FirstName</td>
	         <td><input type="text" name="fname" required></td>
	         </tr>

	    <tr>
	         <td>LastName</td>
	         <td><input type="text" name="lname" required></td>
	    </tr>

	<tr>
	<td>Email</td>
	<td><input type="email" name="email" required></td>
	</tr>

	<tr>
	<td>Password</td>
	<td><input type="password" name="pwd" required></td>
	</tr>
				
	<tr>
	<td>Gender</td>
	<td>M<input type="radio" name="gender" value="M">
	         F<input type="radio" name="gender" value="F"></td>
	</tr>

	<tr>
	<td>Age</td>
	<td><input type="number" name="age"></td>
	</tr>


	<tr>
	<td>Address</td>
	<td>
	<textarea name="address" required></textarea>
	</td>
	</tr>

<tr><td colspan="2">
	<input type="checkbox" name="instruction" value="" required><a href="C:\Users\Asish Kumar Gouda\Desktop\my php/Terms_and_Conditions" >Terms and Conditions</a>
	</td></tr>

	<tr>
	<td colspan="2"><input type="submit" name="submitBtn" value="Register"></td>
	</tr>



	</table>
</form>

  </div>
  </div>

</body>
</html>

<?php
	
	include('footer.php');
?>
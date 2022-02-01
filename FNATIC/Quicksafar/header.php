
<?php
	include('connect.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>
	<div id="wrapper">
		<div id="head"> <!-- header -start -->
			
			<div id="logo">
				<img src="_pic/quick.png" width="300" height="168"/>
			</div>

			<div><pre><h1><big> 		Quick Safar </big></h1></pre></div>

			<div id="login">
				<form method="POST" action="Detail.php">
					<table>
						<tr>
							<td>Email</td>
							<td><input type="email" name="userEmail" required></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="userPwd" required></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="loginBtn" value="Login"></td>
						</tr>
						
					</table>
				</form>
			</div>
		</div> 		<!-- header end -->
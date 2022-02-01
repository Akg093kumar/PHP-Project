<?php
include('header.php');
include('right.php');

if(!isset($_SESSION['userId']))
header('Location:user-login.php');
$userId = $_SESSION['userId'];
$sql = "SELECT * FROM login WHERE user_id='$userId';";
$result = mysqli_query($dbConn,$sql);
$rws = mysqli_fetch_array($result);
?>		
	<div id="content"> <!-- content start -->
	<div id="regForm">
		<h2>Welcome <?php echo $rws[1];?></h2>
		<form method="POST" action="user-update.php">
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" value="<?php echo $rws[1];?>"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" value="<?php echo $rws[2];?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" disabled="true" value="<?php echo $rws[3];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="updateBtn" value="Update"></td>
			</tr>
		</table>
	</form>	
	</div>
	</div> <!-- content end -->
<?php
include('footer.php');
?>		
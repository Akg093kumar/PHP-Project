
<? php
include('connect.php');

$Email = $_SESSION['email']; // Session variable is used to update the data in the database
$FirstName = $_REQUEST['fname'];
$LastName = $_REQUEST['lname'];
$sql = "UPDATE login SET fname ='$FirstName', lname = '$LastName' WHERE email = '$Email';";
mysqli_query($dbConn,$sql);
header('Location:user-profile.php');

//echo "First Name:.$fname";
//echo "Last Name:.$lname";
//echo "Email:.$email";

?>
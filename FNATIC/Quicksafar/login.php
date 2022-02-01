<?php

  
$conn=mysqli_connect('localhost','root','','cardb');
if(!$conn)
{
    die("connection failled :".mysqli_connect_error());
}
    if(isset($_POST['submitBtn']))
    {
       $FirstName=$_POST['fname'];
       $LastName=$_POST['lname'];
       $Email=$_POST['email'];
       $Password=$_POST['pwd'];
       $Gender=$_POST['gender'];
       $Age=$_POST['age'];
       $Address=$_POST['address'];

 $sql_query="INSERT INTO Login (FirstName,LastName,Email,Password,Gender,Age,Address)VALUES('$FirstName','$LastName','$Email','$Password','$Gender','$Age','$Address')";

if(mysqli_query($conn,$sql_query))
{
   echo " Your registartion is successfull";
}
else{
 
echo "error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}

?>













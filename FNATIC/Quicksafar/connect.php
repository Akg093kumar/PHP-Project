<?php

  
$conn=mysqli_connect('localhost','root','','cardb');
if(!$conn)
{
    die("connection failled :".mysqli_connect_error());
}
    if(isset($_POST['submitBtn']))
    {
       $Name=$_POST['name'];
       $JourneyDate=$_POST['jDate'];
       $JourneyTime=$_POST['jtime'];
       $Passenger=$_POST['Passengers'];
       $Source=$_POST['pPoint'];
       $Destination=$_POST['dPoint'];

 $sql_query="INSERT INTO people (Name,JourneyDate,JourneyTime,Passenger,Source,Destination)VALUES('$Name','$JourneyDate','$JourneyTime','$Passenger','$Source','$Destination')";

if(mysqli_query($conn,$sql_query))
{
   echo "Bravo!! Booking is Completed.";
}
else{
 
echo "error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}

?>













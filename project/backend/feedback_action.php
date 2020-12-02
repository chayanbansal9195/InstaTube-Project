<?php 
include "../db/dbconfig.php";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$sugg=$_POST["sugg"];

$sql="INSERT INTO `feedback`(`fname`, `lname`, `suggestion`) VALUES ('$fname','$lname','$sugg')";

if (mysqli_query($conn, $sql)) {
    header("Location:../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>
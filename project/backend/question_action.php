<?php 
include "../db/dbconfig.php";

$qname=$_POST["qname"];
$qtext=$_POST["qtext"];

$sql="INSERT INTO `Question`(`question_title`, `question_text`) VALUES ('$qname','$qtext')";

if (mysqli_query($conn, $sql)) {
    header("Location:../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>
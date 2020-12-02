<?php 
include "../db/dbconfig.php";

extract($_POST);

$hobbies_arr = implode( ',' , $_POST['hobbies'] );

$sql="INSERT INTO `user_details`(`name`, `email`, `mobile`, `country`, `gender`, `hobbies`) VALUES ('$name','$email','$mobile','$country','$gender','$hobbies_arr')";

if (mysqli_query($conn, $sql)) {
    header("Location:../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>
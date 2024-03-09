<?php
  
  $conn=mysqli_connect("localhost","root","","pdd_db");
  if($conn)
  {
    //echo "Database connection successfully";

  }
  else{
    echo "Database is not connect!";
  }
   
?>
<?php
  include("../db.php");
  $h_id=$_GET['hid'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM historical_event WHERE h_id ='$h_id'";
  if ($conn->query($sql) === TRUE) {
    
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewHistoricalEvent"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
<?php
  include("../db.php");
  $f_id=$_GET['fid'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM famous_places WHERE f_id ='$f_id'";
  if ($conn->query($sql) === TRUE) {
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewFamous"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
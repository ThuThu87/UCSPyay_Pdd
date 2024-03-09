<?php
  include("../db.php");
  $p_id=$_GET['pid'];

  $sql = "DELETE FROM pagoda where p_id='$p_id'";
  if ($conn->query($sql) === TRUE) {
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewPagoda"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
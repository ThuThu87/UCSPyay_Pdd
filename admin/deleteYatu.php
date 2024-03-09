<?php
  include("../db.php");
  $y_id=$_GET['yid'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM yatu WHERE y_id ='$y_id' and p_id='$p_id'";
  if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success">Record deleted successfully</div>';
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewYatu"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
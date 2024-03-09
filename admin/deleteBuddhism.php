<?php
  include("../db.php");
  $b_id=$_GET['bid'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM buddhism WHERE b_id ='$b_id' and p_id='$p_id'";
  if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success">Record deleted successfully</div>';
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewBuddhism"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
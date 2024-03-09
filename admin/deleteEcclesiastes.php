<?php
  include("../db.php");
  $e_id=$_GET['eid'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM ecclesiastes WHERE e_id ='$e_id' and p_id='$p_id'";
  if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success">Record deleted successfully</div>';
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewEcclesiastes"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
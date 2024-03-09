<?php
  include("../db.php");
  $n_id=$_GET['nid'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM national WHERE n_id ='$n_id' and p_id='$p_id'";
  if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success">Record deleted successfully</div>';
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewNational"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
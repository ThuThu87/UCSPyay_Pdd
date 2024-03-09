<?php
  include("../db.php");
  $id=$_GET['id'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM information WHERE id ='$id' and p_id='$p_id'";
  if ($conn->query($sql) === TRUE) {
    // echo '<div class="alert alert-success">Record deleted successfully</div>';
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewInformation"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
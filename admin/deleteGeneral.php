<?php
  include("../db.php");
  $g_id=$_GET['gid'];
  $p_id=$_GET['pid'];
  $sql = "DELETE FROM general WHERE g_id ='$g_id' and p_id='$p_id'";
  if ($conn->query($sql) === TRUE) {
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewGeneral"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
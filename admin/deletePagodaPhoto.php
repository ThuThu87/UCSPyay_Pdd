<?php
  include("../db.php");
  session_start();
  $pgdName=$_SESSION['pgdName'];
  $id=$_GET['id'];
  $p_id=$_GET['pid'];
  $query="select * from images where id='$id'";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    if($row=mysqli_fetch_array($result)){
      $photoPath = $row['file_name'];
      if(file_exists($photoPath))
       {
        unlink($photoPath);
       }
    }
  
  }
  $sql = "DELETE FROM images WHERE id ='$id'";
  if ($conn->query($sql) === TRUE) {
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewPagodaPhoto"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
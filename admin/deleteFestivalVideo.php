<?php
  include("../db.php");
  session_start();
  $pgdName=$_SESSION['pgdName'];
  $fid=$_GET['fid'];
  $p_id=$_GET['pid'];
  $query="select * from festival where f_id='$fid'";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    if($row=mysqli_fetch_array($result)){
      $videoPath = $row['video'];
      if(file_exists($videoPath))
       {
        unlink($videoPath);
       }
    }
  
  }
  $sql = "DELETE FROM festival WHERE f_id ='$fid'";
  if ($conn->query($sql) === TRUE) {
    echo '<script>
    window.alert("Record deleted successfully");
    </script>';
          header("Refresh:1; URL=viewFestivalVideo"); 
    
  }
   else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
   

   
?>
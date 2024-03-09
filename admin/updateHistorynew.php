 <?php
 include('../db.php');
 $pgdId=$_POST['pid'];
        echo $pgdId;
        $result = mysqli_query($conn,"SELECT * FROM pagoda where p_id=$pgdId");
        if($row=mysqli_fetch_array($result)){
          $pgdName=$row['pgdName'];
        }
        $catName=$_POST['catName'];
        $subCatName=$_POST['subCatName'];
        $detail=$_POST['detail'];
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         $fileType=strtolower($fileType);

         $fileName1 = basename($_FILES["image1"]["name"]); 
         $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION); 
          $fileType1=strtolower($fileType1);
       // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
          $image = $_FILES['image']['tmp_name']; 
          $image1 = $_FILES['image1']['tmp_name']; 
          // $imgContent = addslashes(file_get_contents($image));
          // $imgContent1 = addslashes(file_get_contents($image1));
          
        }
      
            //logo
            $final_save_dir = 'upload/history/';
            move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
            $image_full_path = $final_save_dir . $_FILES['image']['name'];  
            //image
            move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
            $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
            if(($image_full_path=='upload/history/') ||($image_full_path1=='upload/history/') || ( empty($detail))){
              $result = mysqli_query($conn,"SELECT * FROM history where h_id='$subCatName' and p_id='$pgdId'");
              if($result->num_rows>0){        
                if($row=mysqli_fetch_array($result)){
                    if($image_full_path=='upload/history/')
                        $image_full_path=$row['icon'];
                    if($image_full_path1=='upload/history/')
                        $image_full_path1= $row['photo'];
                    if(empty($detail))
                    $detail= $row['detail_info'];
                    
                    }
               }
            }
           
           $qry="Update history set icon='$image_full_path', photo='$image_full_path1',detail_info='$detail' where h_id='$subCatName' and catName='$catName' and p_id='$pgdId'"; 
           $res=mysqli_query($conn,$qry);            
          if($res)     
         { 
          echo '<div class="alert alert-success">Your updated data successfully </div>';
          header("Refresh:1; URL=viewHistory"); 
         }  
          else
            echo "<p>Not</p>";
        ?>
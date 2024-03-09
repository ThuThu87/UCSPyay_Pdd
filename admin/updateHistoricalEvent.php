</div>
<?php
    include("../db.php");
    session_start();
    $p_id=$_SESSION['p_id'];
    $pgdName=$_SESSION['pgdName'];
    $role=$_SESSION['role'];
    $division=$_SESSION['division'];
    $n= $_SESSION['name'];
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <base href="./">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     
      <title>Pagoda Digital Directory</title>
      <!--  -->
      <link rel="icon" type="image/x-icon" href="../Directory/asset/images/brand.png">
      <link rel="manifest" href="assets/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <!-- Vendors styles-->
      <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
      <link rel="stylesheet" href="css/vendors/simplebar.css">
      <!-- Main styles for this application-->
      <link href="css/style.css" rel="stylesheet">
      <!-- We use those styles to show code examples, you should remove them in your application.-->
      <link href="css/examples.css" rel="stylesheet">
      <!-- <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet"> -->
      <style>
        .button-container {
      display: flex;
      justify-content: space-between; /* This will create space between the buttons */
    }

    .button {
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {background-color: #f2f2f2;}
        div:rcorners3 {
                      border-radius: 15px 50px;
                      background: #73AD21;
                      padding: 20px; 
                      width: 200px;
                      height: 150px; 
                    } 
        </style>
    </head>
    <body>
    <?php  
      if(!(isset($_POST['btnCreate']))){
        if($role=='1')
        {
         include('slider.html');
         $result = mysqli_query($conn,"SELECT * FROM admin  where admin.name='$n'");
        }
       if($role=='2')
        {
        $result = mysqli_query($conn,"SELECT * FROM admin join pagoda on admin.p_id=pagoda.p_id  where admin.name='$n' and admin.pgdName='$pgdName'");
        }
        if($row=(mysqli_fetch_array($result))){
          if($role=='2'){
          
                if(empty($row['website']) && $role=='2')
                {
                  include('slider2.html');
                }
                if(($row['website']!=null) && $role=='2')
                {
                  include('slider1.html');
                }
              }
    ?>


<div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>UpdateHistoricalEvent</span></li>
            </ol>
          </nav>
          <div align="right">
            <?php echo "အမည် -".$pgdName;?>
          </div>
        </div>
          <!-- <div class="header-divider"></div> -->
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
               
              </ol>
            </nav>
          </div>
        </header>
       
        <div class="bg-light mt-3 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card mb-4 mx-4">
              <div class="card-title"><h3><b>သမိုင်းဝင်အလှုဒါနများပြင်ရန်</b></h3></div>
              <div class="card-body p-7">
           <form action="updateHistoricalEvent" method="post" enctype="multipart/form-data">
          
                      
                  <?php
                  $h_id=$_GET['hid'];
                  $p_id=$_GET['pid']; 
                  $result = mysqli_query($conn,"SELECT * FROM historical_event where p_id='$p_id' and h_id='$h_id'");
                   if($row=mysqli_fetch_array($result)){
                  ?>                         
                  <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  
                  <input type="text" class="form-control" name="pgdName" id="" rows="5" value="<?php echo $row['pgdName'];?>">
                  <input type="hidden" class="form-control" name="pid" id="" rows="5" value="<?php echo $row['p_id'];?>">
                </div>
                    
                <?php } 
                
                ?>
                 
               
                
                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span> 
                 
                  <input type="text" class="form-control" name="cat" id="" rows="5" value="<?php echo $row['catName']?>" disabled>
                  <input type="hidden" class="form-control" name="catName" id="" rows="5" value="<?php echo $row['catName']?>">
                </div>
                <div class="input-group mb-3 mt-4" style="font-size:.5rem;">
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <select class="form-select form-select-md  form-control" aria-label=".form-select-lg example" name="subCatName" required>
                    <option  value=<?php echo $row[0];?> selected><?php echo $row['subCatName'];?></option>    
                  <?php                  
                  $result = mysqli_query($conn,"SELECT * FROM historical_event");
                   while($row1=mysqli_fetch_array($result)){
                    if($row['subCatName'] != $row1['subCatName']){
                      $subName=$row1['subCatName'];
                      echo $subName.'\n';
                      $value=$row1[0];
                  ?>                 
                      <option value="<?php $value;?>"><?php echo $subName;?></option>
                     
                
                  <?php }} ?>
                  </select>
                </div>
                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/gallery.png" alt="" width="30px" height="20px"></span>                
                  <input class="form-control" name="image" type="file" value="<?php echo $row['icon'];?>" placeholder="iconပေါ်တွင့်ထားရန်ပုံရွေးပါ">
                </div>


                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span>  
                  <input class="form-control" name="image1" type="file" value="<?php echo $row['photo'];?>" placeholder="အသေးစိတ်အကြောင်းတွင်ပြရန်ပုံရွေးပါ">
                  
                </div>
                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/info.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="detail" id="" rows="10" placeholder="အသေးစိတ်အကြောင်းအရာ" required>
                  <?php echo $row['detail_info']; ?> </textarea>
                    
                </div>
                
                <div class="btn-container" style="padding: 10px 20px;" >
                <button class="btn btn-success" name="btnCreate" type="submit">Update</button>
                  <!-- <a href="viewFamous"><button class="btn btn-success" name="btnCancel" >Cancel</button></a> -->
               <!-- <input type="submit" value="Update" class="btn mt-2" name="btnCreate"> -->
               <!-- <input type="submit" value="Cancel" class="btn mt-2" name="btnCancel" width="50" onclick="viewFamous"> -->
                    </div>
                    
             
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
  }
}
  else
  {
        $pgdId=$_POST['pid'];
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
            $final_save_dir = 'upload/historical_event/';
            move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
            $image_full_path = $final_save_dir . $_FILES['image']['name'];  
            //image
            move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
            $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
            if(($image_full_path=='upload/historical_event/') ||($image_full_path1=='upload/historical_event/') || ( empty($detail))){
              $result = mysqli_query($conn,"SELECT * FROM historical_event where h_id='$subCatName' and p_id='$pgdId'");
              
              if($result->num_rows>0){        
                if($row=mysqli_fetch_array($result)){
                    if($image_full_path=='upload/historical_event/')
                        $image_full_path=$row['icon'];
                    if($image_full_path1=='upload/historical_event/')
                        $image_full_path1= $row['photo'];
                    if(empty($detail))
                    $detail= $row['detail_info'];
                    
                    }
                  }
          
           
           $qry="Update historical_event set icon='$image_full_path', photo='$image_full_path1',detail_info='$detail' where h_id='$subCatName'  and pgdName='$pgdName'"; 
           $res=mysqli_query($conn,$qry);            
          if($res)     
         { 
          echo '<script>
          window.alert("Your Updated Data successfully");
          window.location.href = "viewHistoricalEvent";
          </script>'; 
         }  
          else
            {
              echo '<script>
              window.alert("Not Successful!!!");
              window.location.href = "viewHistoricalEvent";
              </script>';
            }
   mysqli_close($conn);
        }
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
          <div>Pagoda Digital Directory Admin </a> © 2023 creativeLabs.</div>
          <div class="ms-auto">Developed by&nbsp;University of Computer Studies, Pyay</div>
        </footer>
      </div>
      
      <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
      <script src="vendors/simplebar/js/simplebar.min.js"></script>
      <!-- Plugins and scripts required by this view-->
      <script src="vendors/chart.js/js/chart.min.js"></script>
      <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
      <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
      <script src="js/main.js"></script>
      <script>
      </script>
  
    </body>
  </html>
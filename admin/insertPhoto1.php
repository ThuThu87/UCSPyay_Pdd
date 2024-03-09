<?php
    include("../db.php");
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
      <link rel="icon" type="image/x-icon" href="../Directory/assets/images/brand.png">
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
    ?>

      <?php include('slider.html');?>
          <!-- <div class="header-divider"></div> -->
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
            
            </nav>
          </div>
        </header>
       
        <div class="bg-light mt-5 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">
              <div class="card-body p-4">
                <h3>ဘုရားပုံတော်များထည့်ရန်</h3>
     
           <form action="insertPhoto1" method="post" enctype="multipart/form-data">
           <div class="input-group mb-3  mt-4">
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <select class="form-select form-select-lg  form-control" aria-label=".form-select-lg example" name="pgdName" required>
                    <option selected>ဘုရားအမည်</option>    
                  <?php  
                  $result = mysqli_query($conn,"SELECT * FROM pagoda");
                   while($row=mysqli_fetch_array($result)){
                  ?>                         
                  
                    <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                   <?php } ?>
                  </select>
                </div>
                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                   
                <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="file" name="files[]" multiple placeholder="ပုံရွေးရန်">
                </div>
                
               <input type="submit" value="ထည့်ရန်" class="btn mt-2"name="btnCreate">
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
  }
  else
  {
    $pgdName=$_POST['pgdName'];
    if($pgdName=='ဘုရားအမည်'){
      echo '<script>
        window.alert("Please Select Pagoda Name");
        window.location.href = "insertPhoto";
        </script>';
    }
    // File upload configuration 
    $targetDir = "upload/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$targetFilePath."','".$pgdName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
          $insertValuesSQL = trim($insertValuesSQL, ','); 
          // Insert image file name into database 
          $insert = $conn->query("INSERT INTO images (file_name,pgdName, uploaded_on) VALUES $insertValuesSQL"); 
           
            if($insert){ 
              echo '<script>
              window.alert(Your inserted data successfully");
              window.location.href = "viewPagodaPhoto";
              </script>';  
            }else{ 
              echo '<script>
              window.alert("Not successful");
              window.location.href = "insertPhoto1";
              </script>';  
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- <footer class="footer">
          <div>Shwe San Daw Pagoda Admin </a> © 2023 creativeLabs.</div>
          <div class="ms-auto">Developed by&nbsp;University of Computer Studies, Pyay</div>
        </footer> -->
      </div>
      <!-- CoreUI and necessary plugins-->
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
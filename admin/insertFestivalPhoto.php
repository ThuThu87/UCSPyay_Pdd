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
              <li class="breadcrumb-item active"><span>Insert Festival Photo</span></li>
            </ol>
          </nav>
          <div align="right" class="mb-2">
            <?php echo "အမည် -".$pgdName;?>
          </div>
        </div>
              <!-- <div class="header-divider"></div> -->
              <!-- <div class="container-fluid">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                      <span>Home</span>
                    </li>
                    <li class="breadcrumb-item active"><span>Dashboard</span></li>
                  </ol>
                </nav>
              </div> -->
            </header>
        <body>   
            <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card mb-4 mx-4">
                <div class="card-title" >
                  <h3><b>မှတ်တမ်းဓါတ်ပုံများထည့်ရန်<b></h3>
              </div>
                  <div class="card-body p-7">
                  <form action="insertFestivalPhoto.php" method="post" enctype="multipart/form-data">
               <div class="input-group mb-3  mt-4">
                      <span class="input-group-text px-2">
                      <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                      <select class="form-select form-select-md  form-control" aria-label=".form-select-md example" name="pgdName">
                        <option selected>ဘုရားအမည်</option>    
                      <?php  
                      if($role==1){
                        $result = mysqli_query($conn,"SELECT * FROM pagoda");
                      }
                      else{
                        $result = mysqli_query($conn,"SELECT * FROM pagoda where pgdName='$pgdName'");
                      }
                      
                       while($row=mysqli_fetch_array($result)){
                      ?>                         
                      
                        <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                       <?php } ?>
                      </select>
                    </div>
                    <div class="input-group mb-3  mt-4">
                      <span class="input-group-text px-2">
                      <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                      <select class="form-select form-select-md  form-control" aria-label=".form-select-md example" name="monName">
                       <option selected>ကျင်းပသည့်လအမည်</option>                                  
                       <option value="တန်ခူး">တန်ခူး</option>
                       <option value="ကဆုန်">ကဆုန်</option>
                       <option value="နယုန်">နယုန်</option>
                       <option value="ဝါဆို">ဝါဆို</option>
                       <option value="ဝါခေါင်">ဝါခေါင်</option>
                       <option value="တော်သလင်း">တော်သလင်း</option>
                       <option value="သီတင်းကျွတ်">သီတင်းကျွတ်</option>
                       <option value="တန်ဆောင်မုန်း">တန်ဆောင်မုန်း</option>
                       <option value="နတ်တော်">နတ်တော်</option>
                       <option value="ပြာသို">ပြာသို</option>
                       <option value="တပို့ပွဲ">တပို့ပွဲ</option>
                       <option value="တပေါင်း">တပေါင်း</option>                
                      </select>
                    </div>
                    <div class="input-group mb-3"><span class="input-group-text">
                    <img src="assets/img/icon1/write.png" alt="" width="20px" height="20px">
                                         </span></span>
                      <input class="form-control" type="text" name="festName" placeholder="ပြုလုပ်သည့်ပွဲအမည်" required>
                    </div>
                    <div class="input-group mb-3 mt-4"><span class="input-group-text">
                   
                     <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span> 
                     <input class="form-control" type="file" name="files[]" multiple placeholder="ပုံရွေးရန်" required>
                     </div>
                     <div class="input-group mb-3"><span class="input-group-text">
                  <img src="assets/img/icon1/write.png" alt="" width="20px" height="20px">
                                     </span>
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="detail" id="" rows="5" placeholder="အသေးစိတ်အကြောင်းအရာ" required></textarea>
                </div>
                    <button class="btn btn-success mt-3 mb-4 " name="btnCreate" type="submit">ထည့်ရန်</button>
    </form>
    <?php 
      }
    }
      else
      {
        $detail=$_POST['detail'];
        $pgdName=$_POST['pgdName'];
        if($pgdName=='ဘုရားအမည်'){
          echo '<script>
            window.alert("Please Select Pagoda Name");
            window.location.href = "insertFestivalPhoto";
            </script>';
        }
        $result = mysqli_query($conn,"SELECT p_id FROM pagoda where pgdName='$pgdName'");  
        if($row =( mysqli_fetch_array($result))) {
            $id=$row['p_id'];
        }
            $fName=$_POST['festName'];
            $monName=$_POST['monName'];
            if($monName=='ကျင်းပသည့်လအမည်'){
              echo '<script>
                window.alert("Please Select Month Name");
                window.location.href = "insertFestivalPhoto";
                </script>';
            }
           
            // $detail=$_POST['detail'];
            $targetDir = "upload/festival/"; 
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
                    $insertValuesSQL .= "('".$targetFilePath."','".$pgdName."','".$fName."','".$monName."','".$detail."', NOW()),"; 
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
          $insert = $conn->query("INSERT INTO allimages (file_name,pgdName,fName,monthName,detail_info,uploaded_on) VALUES $insertValuesSQL"); 
           
          if($res)     
          {
            echo '<script>
            window.alert("Your inserted data successfully");
            window.location.href = "viewFestivalPhoto";
            </script>';
          }

           else
           {
            echo '<script>
            window.alert("Not Successful");
            window.location.href = "viewFestivalPhoto";
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
    
            <footer class="footer">
              <div>Pagoda Digital Directory Admin </a> © 2023 creativeLabs.</div>
              <div class="ms-auto">Developed by&nbsp;University of Computer Studies, Pyay</div>
            </footer>
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
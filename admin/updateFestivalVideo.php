<?php
    include("../db.php");
    session_start();
    $p_id=$_SESSION['p_id'];
    $pgdName=$_SESSION['pgdName'];
    $role=$_SESSION['role'];
    $division=$_SESSION['division'];
    $n= $_SESSION['name'];
    
   // $p_id=$_GET['pid'];
  
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
              <li class="breadcrumb-item active"><span>Update Festival</span></li>
            </ol>
          </nav>
          <div align="right">
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
              <h3><b>မှတ်တမ်းဗီဒီယိုများပြင်ရန်<b></h3>
              </div>
              <div class="card-body p-7">
           <form action="updateFestivalVideo.php" method="post" enctype="multipart/form-data">
           <div class="input-group mb-3  mt-4">
                 
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                    <?php   $pName=$_GET['pName'];?>
                    <input class="form-control" type="hidden" name="pName"  value="<?php echo $pName;?>">
                    <input class="form-control" type="text" name="pgdName"  value="<?php echo $pName;?>" disabled>
                 
                </div>
                <?php 
                  $f_id=$_GET['fid'];
                  $qry = "SELECT *  FROM festival where f_id='$f_id'";
                  $result=mysqli_query($conn,$qry);
                  if($result)
                  {
                    {
                      if($row=mysqli_fetch_array($result))
                      {
                     
                   
                ?>
              <div class="input-group mb-3  mt-4"><span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <input class="form-control" style="boder-radius:10px 10px 10px 10px" type="hidden" name="fid" value="<?php echo $row['f_id'];?>">
                  <input class="form-control" type="text" name="fName" value="<?php echo $row['f_name']; ?>" style="boder-radius:10px 10px 10px 10px" disabled>
                  
                </div>
               
                <div class="input-group mb-3"><span class="input-group-text">
                <img src="assets/img/icon1/write.png" alt="" width="20px" height="20px">
                </span>
                <input type="hidden" name="monName" value="<?php echo $row['monthName'];?>">
                  <input class="form-control" type="text" name="mName"  value="<?php echo $row['monthName']; ?>" disabled>
                  
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-video"></use>
                    </svg></span>
                    <input type="hidden" name="oldvd" value="<?php echo $row['video'];?>">
                  <input class="form-control" name="video" type="file"  value="<?php echo $row['video'];?>">
                 
                </div>

                <div class="input-group mb-3"><span class="input-group-text">
                  <img src="assets/img/icon1/write.png" alt="" width="20px" height="20px">
                </span>
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="detail" id="" rows="5" placeholder="အသေးစိတ်အကြောင်းအရာ"><?php echo $row['detail_info']?></textarea>
                </div>
                <input type="submit" value="ပြင်ရန်" class="btn mt-2" name="btnCreate">
               
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
  } 
}    
    }
    }
    }
  else
  {
  
        $f_id=$_POST['fid'];
        // $qry="select f_id from festival where fName='$fName'";
        // $result=mysqli_query($conn,$result);
        // if($row=mysqli_fetch_array($result))
        // {
        //   $f_id=$row['f_id'];
        // }
        $pName=$_POST['pName'];
        $monName=$_POST['monName'];
        $detail=$_POST['detail'];
        $oldVd=$_POST['oldvd'];
       // $vname=$_POST['video'];
        $final_dir = 'upload/video/';
        
        $video_full_path = $final_dir . $_FILES['video']['name'];   
        if($video_full_path==$final_dir)
        {
          $video_full_path=$oldVd;
          
        }

        // check video file type
   if (isset($video_full_path) && $_FILES["video"]["error"] == UPLOAD_ERR_OK) {
          $tempFilePath = $_FILES["video"]["tmp_name"];
          $mime = mime_content_type($tempFilePath);  
          $allowedMimeTypes = ['video/mp4'];
          if (in_array($mime, $allowedMimeTypes)) {
              //echo "File is a valid video!";
              move_uploaded_file($_FILES['video']['tmp_name'], $video_full_path);
              $qry="update festival set video='$video_full_path',detail_info='$detail' where f_id='$f_id'  ";     
              $res=mysqli_query($conn,$qry);
              if($res)     
              {
                if( $video_full_path!=$oldVd){
                  if(file_exists($oldVd)){
                    unlink($oldVd);
                  } 
                }           
          echo '<script>
             window.alert("Your updated data successfully");
             window.location.href = "viewFestivalVideo";
             </script>';
              }        
           else
            echo "<p>Not</p>";
              // Further processing or move the file to the desired location
          } else {
             // echo " <div class='alert alert-alarm'> file type. Allowed video types: " . implode(", ", $allowedMimeTypes)."</div>";
             echo '<script>
             window.alert("file type. Allowed video types:[mp4]");
             window.location.href = "viewFestivalVideo";
             </script>';
             // header("Refresh:1;URL=viewFestivalVideo"); 
          }
      } else {
          echo "Error uploading file.";
      }

        
    mysqli_close($conn);
 
}
?>
              </div>
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
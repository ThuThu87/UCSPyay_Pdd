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
                      .button-container {
      display: flex;
      justify-content: space-between; /* This will create space between the buttons */
    }

    /* .button {
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    } */
        </style>
    </head>
    <body>
    <?php  
    if(!(isset($_POST['btnUpdate']))){

        // $n= $_SESSION['name'];
        // $result = mysqli_query($conn,"SELECT admin.*,pagoda.* FROM admin,pagoda where admin.name='$n' and admin.division=pagoda.division");
        //$result=mysqli_query($conn,"select * from pagoda where p_id='$p_id'");
        //if($row=(mysqli_fetch_array($result))){
          $p_id=$_GET['pid'];   
        
    ?>
<?php include('slider.html');?>
      <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Update</span></li>
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
                <li class="breadcrumb-item"> 
                <!-- if breadcrumb is single<span>Home</span> -->
                </li>
                <!-- <li class="breadcrumb-item active"><span>Dashboard</span></li> -->
              </ol> 
            </nav>
          </div>
        </header>
       
        <div class="bg-light d-flex flex-row align-items-center mt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card mb-4 mx-4">
              <div class="card-body p-7">
                <h3>ဘုရားထည့်သွင်းမှု့အားပြင်ဆင်ရန်</h3>
     <br>
           <form action="updatePagoda" method="post" enctype="multipart/form-data">
           <?php  
                  $result = mysqli_query($conn,"SELECT * FROM pagoda where p_id='$p_id'");
                   if($row=mysqli_fetch_array($result)){
                    $img=$row['photo'];
                  ?>   
                 <div class="input-group mb-3  mt-4">            
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <input class="form-control" type="hidden" name="pId" value="<?php echo $row['p_id'];?>">
                  <input class="form-control" type="text" name="pname" value="<?php echo $row['pgdName'];?>" disabled>
                  
                  </div>
                   <?php } ?>
                <div class="input-group mb-3 mt-2"><span class="input-group-text">
                    
                <img  src="assets/img/icon1/park.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="division" value="<?php echo $row['division'];?>">
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                <img  src="assets/img/icon1/distinct.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="district" value="<?php echo $row['district'];?>">
                </div>
                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                    
                <img  src="assets/img/icon1/City1.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="township" value="<?php echo $row['township'];?>">
                </div>


                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                <input type="hidden" name='img' value="<?php echo $row['photo'];?>" >
                <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" name="image" type="file" value="<?php echo $row['photo'];?>">                  
                </div>


                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                   
                <img  src="assets/img/icon1/web.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="url" value="<?php echo $row['website'];?>" plceholder="website လိပ်စာ">
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">                   
                <img  src="assets/img/icon1/distinct.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="map_link" placeholder="Google Map Link" required>
                </div>


                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                  
                <img  src="assets/img/icon1/home.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="address" id="" rows="5" placeholder=""><?php echo $row['address'];?></textarea>
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                  
                <img  src="assets/img/icon1/home.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="history" id="" rows="5" placeholder=""><?php echo $row['history'];?></textarea>
                </div>
               <div class="col-12">
               <input type="submit" value="ပြင်ရန်" class="btn" align="center" name="btnUpdate">
               </div>
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
//   }
 }
 else
  {
        // $pgdName=$_POST['pname'];
         $p_id=$_POST['pId'];
        $division=$_POST['division'];
        $district=$_POST['district'];
        $township=$_POST['township'];
        $address=$_POST['address'];
        $history=$_POST['history'];
        $url=$_POST['url'];
        $map_link=$_POST['map_link'];
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         $fileType=strtolower($fileType);

         
       // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        //if(in_array($fileType, $allowTypes)){ 
          $final_save_dir = 'upload/pagoda/';
          move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
          $image_full_path = $final_save_dir . $_FILES['image']['name'];
       // }            
          if(($image_full_path=='upload/pagoda/'))
          {
            $image_full_path=$_POST['img'];
          }
          
       
        
        $qry="Update pagoda set division='$division',district='$district',township='$township',photo='$image_full_path',website='$url',map_link='$map_link',address='$address',history='$history' where p_id='$p_id' ";
         $res=mysqli_query($conn,$qry);
         if($res)     
         { 
          echo '<script>
          window.alert("Your Updated Data successfully");
          window.location.href = "viewPagoda";
          </script>'; 
         }  
          else
            {
              echo '<script>
              window.alert("Not Successful!!!");
              window.location.href = "viewPagoda";
              </script>';
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
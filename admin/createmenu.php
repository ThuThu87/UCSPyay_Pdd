<?php
    include("../db.php");
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
      <!-- <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png"> -->
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

      <?php include('slider.html'); ?>
          <!-- <div class="header-divider"></div> -->
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <!-- <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                  if breadcrumb is single<span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>Dashboard</span></li>
              </ol> -->
            </nav>
          </div>
        </header>
       
      <div class="bg-light mt-4 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">
              <div class="card-body p-4">
                <h3>အမျိုးအစားများပြုလုပ်ခြင်း</h3>
     
           <form action="insertmenu" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3  mt-3"><span class="input-group-text">
                <img  src="assets/img/icon1/C2.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control " type="text" name="title" placeholder="အကြောင်းအရာ">
                </div>
                
               <input type="submit" class="btn mt-3" value="ထည့်ရန်" name="btnCreate">
               
</form>
<?php 
  }
  else
  {
        $pgdName=$_POST['pgdName'];
        $catName=$_POST['catName'];
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         $fileType=strtolower($fileType);
        // Allow certain file formats 
        // $allowTypes = array('jpg','png','jpeg','gif'); 
        // if(in_array($fileType, $allowTypes)){ 
        //     $image = $_FILES['image']['tmp_name']; 
        //     $imgContent = addslashes(file_get_contents($image)); 
        // }
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 
        $qry="Insert into mainmenu(id,pgdName,catName,photo) values('','$pgdName','$catName','$imgContent')";
       
        
        $res=mysqli_query($conn,$qry);
        if($res)     
            echo "<p> successfully </p>"; 
           // include('self');        
           else
            echo "<p>Not</p>";
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
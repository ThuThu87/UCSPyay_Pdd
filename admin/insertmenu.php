
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
      <link rel="icon" type="image/x-icon" href="assets/img/icon1/domain.png">
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
        .footer {
  --cui-footer-max-height: 1rem;
  --cui-footer-padding-x: 1rem;
  --cui-footer-padding-y: 0.5rem;
  --cui-footer-color: rgba(44, 56, 74, 0.95);
  --cui-footer-bg: #ebedef;
  --cui-footer-border-color: #d8dbe0;
  --cui-footer-border: 1px solid var(--cui-footer-border-color);
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
              <li class="breadcrumb-item active"><span>InsertMenu</span></li>
            </ol>
          </nav>
        </div>
          <!-- <div class="header-divider"></div> -->
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                  <!-- if breadcrumb is single-->
                  <!-- <span>Home</span> -->
                </li>
                <!-- <li class="breadcrumb-item active"><span>Dashboard</span></li> -->
              </ol>
            </nav>
          </div>
        </header>
       
        <div class="bg-light  d-flex flex-row align-items-center mt-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">
              <div class="card-body p-4">
              <h3>အမျိုးအစားများထည့်ရန်</h3>
     
           <form action="insertmenu" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3  mt-4">
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <select class="form-select form-select-lg  form-control" aria-label=".form-select-lg example" name="pgdName">
                    <option selected>ဘုရားအမည်</option>    
                  <?php  
                  $result = mysqli_query($conn,"SELECT * FROM pagoda");
                   while($row=mysqli_fetch_array($result)){
                  ?>                         
                  
                    <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                   <?php } ?>
                  </select>
                </div>
                <div class="input-group mb-3  mt-4">
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <select class="form-select form-select-lg  form-control" aria-label=".form-select-lg example" name="catName">
                    <option selected><h6>အမျိုးအစား</h6></option>    
                  <?php  
                  $result = mysqli_query($conn,"SELECT * FROM category");
                   while($row=mysqli_fetch_array($result)){
                  ?>                         
                  
                    <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                   <?php } ?>
                  </select>
                </div>
               
                <div class="input-group mb-3  mt-4">                    
                    <span class="input-group-text px-2">                             
                      <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span>
                  <input class="form-control" name="image" type="file" placeholder="ဓါတ်ပုံ"> 
                </div>
               <input type="submit" class="btn mt-3" value="ထည့်ရန်" name="btnCreate">
              
</form>
<?php 
  }
  else
  {
        $pgdName=$_POST['pgdName'];
        $catName=$_POST['catName'];
        $final_save_dir = 'upload/menu/';
         move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
         $image_full_path = $final_save_dir . $_FILES['image']['name'];
        $qry="Insert into mainmenu(id,pgdName,catName,photo) values('','$pgdName','$catName','$image_full_path')";
       
        
        $res=mysqli_query($conn,$qry);
        if($res)     
        { //echo "<p> successfully </p>"; 
         echo '<div class="alert alert-success">Your inserted data successfully </div>';
         header("Refresh:1; URL=insertmenu"); 
        }        
           else
            echo "<p>Not</p>";
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
          <div class="d-flex justify-content-center col-12">
            Pagoda Digital Directory</a> © 2023 creativeLabs. by&nbsp;University of Computer Studies, Pyay
       
        </footer>
       </div>
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
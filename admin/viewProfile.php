<?php
    include("../db.php");
    session_start();
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
</head>
<body>
<?php  
      if(!(isset($_POST['btnCreate']))){
        echo $role;
        if($role=='1')
        {
         include('slider.html');
         $result = mysqli_query($conn,"SELECT * FROM admin  where admin.name='$n'");
        }
       if($role=='2')
        {
        $result = mysqli_query($conn,"SELECT * FROM admin join pagoda on admin.pgdName=pagoda.pgdName where admin.name='$n'  and admin.division=pagoda.division");
        }
        if($row=(mysqli_fetch_array($result))){
          // echo $row['website'];
          if(isset($row['website']) && $role=='2' )
           {
            include('slider1.html');
           }
           else if(empty($row['website']) && $role=='2' )
           {
            include('slider2.html');
           }
          
         // } 
    ?>
     
     <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>View Profile</span></li>
            </ol>
          </nav>
        </div>
        </header>
       
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8  offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">User Profile</h3>
                </div>
                <div class="card-body">
                    <!-- Profile Picture -->
                    <img src="profile-picture.jpg" alt="Profile Picture" class="img-fluid rounded-circle mx-auto d-block mb-3">

                    <!-- User Details -->
                    <div class="form-group">
                        <label for="fullName">Full Name:</label>
                        <input type="text" id="fullName" class="form-control" value="John Doe" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" value="john.doe@example.com" readonly>
                    </div>

                    <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea id="bio" class="form-control" rows="3" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
                    </div>
                    <div aling="center">
                    <!-- Edit Profile Button -->
                    <a href="edit-profile.html" class="btn btn-primary btn-block mt-2 mb-5 justify-content-center">Edit Profile</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php }}?> 
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
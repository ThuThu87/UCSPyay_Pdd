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
                      height: 100px; 
                    } 
        </style>
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
              <li class="breadcrumb-item active"><span>Update Profile</span></li>
            </ol>
          </nav>
          <div align="right" class="mb-3">
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
                <h3>Update Profile </h3>
     <br>
           <form action="changeProfile" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3"><span class="input-group-text">
                <img  src="assets/img/icon1/user.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="name" value="<?php echo $row['name'];?>" placeholder="<?php echo $row['name'];?>">
                </div>

                <div class="input-group mb-3"><span class="input-group-text">
                <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="pgdName" placeholder="<?php echo $row['pgdName'];?>" disabled>
                </div>



                <div class="input-group mb-3 mt-2"><span class="input-group-text">
                    
                <img  src="assets/img/icon1/park.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="division" placeholder="<?php echo $row['division'];?>" disabled>
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                <img  src="assets/img/icon1/distinct.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="district" placeholder="<?php echo $row['district'];?>" disabled>
                </div>
                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                <img  src="assets/img/icon1/City1.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="township" placeholder="<?php echo $row['township'];?>" disabled>
                </div>
                
                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                <img  src="assets/img/icon1/phone.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="phno" value="<?php echo $row['phone'];?>" placeholder="<?php echo $row['phone'];?>">
                </div>
                
                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                  
                <img  src="assets/img/icon1/padlock.png" alt="" width="30px" height="20px"></span> 
                <input class="form-control" type="password" value="<?php echo $row['password'];?>" name="password" placeholder="<?php echo $row['password'];?>">
                </div>


            
                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                  
                <img  src="assets/img/icon1/padlock.png" alt="" width="30px" height="20px"></span> 
                <input class="form-control" type="password" value="<?php echo $row['cfm_password'];?>" name="cpassword" placeholder="<?php echo $row['cfm_password'];?>">
                </div>


                <!-- <div class="input-group mb-3 mt-3"><span class="input-group-text">
                   
                   <img  src="assets/img/icon1/role.png" alt="" width="30px" height="20px"></span> 
                     <input class="form-control" type="text" name="role" placeholder="role">
                   </div> -->


               <input type="submit" value="ပြုပြင်ရန်" class="btn mt-2" name="btnCreate">
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
        }
  }
  else
  {
    $name=$_POST['name'];
    // if(empty($name)){$name=$n;}
    $phone=$_POST['phno'];
    // if(empty($phone)){$phone=$row['phone'];}
    $pwd=$_POST['password'];
    $cpwd=$_POST['cpassword'];
    if($pwd == $cpwd)
    {
    $qry="update admin set name='$name',phone='$phone',password='$pwd',cfm_password='$cpwd' where pgdName='$pgdName'";
    $res=mysqli_query($conn,$qry);
        if($res)     
          {
            echo '<div class="alert alert-success">Your updated data successfully </div>';
            header("Refresh:1; URL=index"); 
           }  
            else
            { //echo "<p> successfully </p>"; 
              echo '<div class="alert alert-success">Register Fail </div>';
              header("Refresh:1; URL=changeProfile"); 
             }
    }
    else
    {
      ?>
      <script>
        window.alert("Password not Match");
        header("Refresh:1; URL=viewProfile1");
      </script>
      <?php
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
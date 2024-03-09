<!DOCTYPE html>
<html lang="en">
    <?php
    include("../db.php");
    session_start();
?>
    <!-- <head class="header"> -->
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
  <link href="css/index.css" rel="stylesheet">
  <link href="login.css" rel="stylesheet">
  <link href="assets/fontawesome-free-6.4.2-web/css/all.min.css" rel="stylesheet">
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
      if(!(isset($_POST['btnLogin']))){
       
    ?>
    <!-- <div>
      <img src="../img/pdd.JPG" >
    </div> -->
    <div class="Rwrapper card rounded shadow shadow" >
        <form action="index" method="post">
            <h4 class="mt-3" align="center"><b>LOGIN</h4>
            <div class="input-box">
                <span>
                    <i class="fa fa-user"></i>
                                        
                <input type="text" name="userName" placeholder="UserName" required>
            </span>
            
            </div>
            <div class="input-box">
                <span>
                    <i class="fa fa-lock"></i>
                <input type="password" name="pwd" placeholder="password" required>
            </span>
            </div>

            <!-- <div class="register_now">
               <label for="">Not a member?</label> 
                <a href="./register.php" class="text px-3 signup-link" id="register_now">Register Now</a>
                 
                
              </div> -->
              <div>
                <input type="submit" class="btn"  name="btnLogin" value="Login">
              </div>

              <div class="register_link">
                  <p align="center" >Don't have an account?  <a href="AdminRegister" class="ms-5">Register</a></p>
              </div>
        </form>
        <?php 
  }
  else
  {
    $name=$_POST['userName'];
    $pwd=$_POST['pwd'];

    $result = mysqli_query($conn,"SELECT * FROM admin where name='$name' and password='$pwd'");
    if($row=(mysqli_fetch_array($result))){
      $_SESSION['p_id']=$row['p_id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['role']=$row['role'];
        $_SESSION['pgdName']=$row['pgdName'];
        $_SESSION['division']=$row['division'];
    echo '<div class="alert alert-success">Your login successfully </div>';
    header("Refresh:2; URL=viewProfile1"); 
    }
    else{
        echo '<div class="alert alert-success">Login Fail </div>';
          header("Refresh:2; URL=index"); 
    }
  }
  ?>
    </div
</body>
</html>
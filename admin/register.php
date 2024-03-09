<!DOCTYPE html>
<html lang="en">
    <?php
    include("../db.php");
?>
    <!-- <head class="header"> -->
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
      if(!(isset($_POST['btnRegister']))){
    ?>
    <div class="Rwrapper">        
        <form action="register" method="post" enctype="multipart/form-data">
            <h1 class="mt-2">Register</h1>
            <div class="input-box">
                <span>
                    <!-- <i class="fa-solid fa-user"></i>  -->
                    <img  src="assets/img/icon1/user1.png" alt="" width="25px" height="25px"></span> 
                    <input type="text" name="uName" placeholder="အမည်" required> 
                <!-- <input type="text" name="userName" placeholder="" required> -->
            </span>
            
            </div>

            <!-- <div class="input-box">
                <span> -->
                <div class="input-group mb-3  mt-4">
                  <span class="input-group-text px-2">
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <!-- <img  src="assets/img/icon1/pp.png" alt="" width="25px" height="25px"></span>  -->
                <!-- <input type="text" name="pgdName" placeholder="ဘုရားအမည်" required> -->
                            <select class="form-select form-select-lg  form-control" aria-label=".form-select-lg example" name="pgdName">
                                <option selected>ဘုရားအမည်</option>    
                            <?php  
                            $result = mysqli_query($conn,"SELECT * FROM pagoda");
                            while($row=mysqli_fetch_array($result)){
                            ?>                         
                            
                                <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                            <?php } ?>
                            </select>
                    </span>
            </div>

            <div class="input-box">
                <span>
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <img  src="assets/img/icon1/museum.png" alt="" width="25px" height="25px">
                </span> 
                <!-- <input type="text" name="pgdName" placeholder="Pagoda Name" required> -->
                <!-- <input type="text" name="division" placeholder="တိုင်းဒေသကြီး/ပြည်နယ်" required> -->
                <select class="form-select form-select-md  form-control" aria-label=".form-select-md example" name="division">
                    <option selected><b>တိုင်းဒေသကြီး/ပြည်နယ်</b></option>    
                 
                    <option value="ရန်ကုန်တိုင်းဒေသကြီး">ရန်ကုန်တိုင်းဒေသကြီး</option>
                    <option value="မန္တလေးတိုင်းဒေသကြီး">မန္တလေးတိုင်းဒေသကြီး</option>
                    <option value="ပဲခူးတိုင်းဒေသကြီး">ပဲခူးတိုင်းဒေသကြီး</option>
                    <option value="စစ်ကိုင်းတိုင်းဒေသကြီး">စစ်ကိုင်းတိုင်းဒေသကြီး</option>
                    <option value="ဧရာဝတီတိုင်းဒေသကြီး">ဧရာဝတီတိုင်းဒေသကြီး</option>
                    <option value="တနင်္သာရီတိုင်းဒေသကြီး">တနင်္သာရီတိုင်းဒေသကြီး</option>
                    <option value="မကွေးတိုင်းဒေသကြီး">မကွေးတိုင်းဒေသကြီး</option>
                    <option value="ကယားပြည်နယ်">ကယားပြည်နယ်</option>
                    <option value="ကရင်ပြည်နယ်">ကရင်ပြည်နယ်</option>
                    <option value="မွန်ပြည်နယ်">မွန်ပြည်နယ်</option>
                    <option value="ရခိုင်ပြည်နယ်">ရခိုင်ပြည်နယ်</option>
                    <option value="ကချင်ပြည်နယ်">ကချင်ပြည်နယ်</option>
                    <option value="ရှမ်းပြည်နယ်">ရှမ်းပြည်နယ်</option>
                    <option value="ချင်းပြည်နယ်">ချင်းပြည်နယ်</option>
                    
                  </select>
            </span>
            </div>

            <div class="input-box">
                <span>
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <img  src="assets/img/icon1/placeholder.png" alt="" width="25px" height="25px">
                <input type="text" name="district" placeholder="ခရိုင်" required>
            </span>
            </div>
            <div class="input-box">
                 <span>
                    <!-- <i class="fa-solid fa-user"></i>  -->
                    <img  src="assets/img/icon1/CCC.png" alt="" width="25px" height="25px">
                </span> 
                <input type="text" name="township" placeholder="မြို့နယ်" required>
            </span>
            </div>
            <div class="input-box">
                <span>
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <img  src="assets/img/icon1/password.png" alt="" width="25px" height="25px">
                <input type="password" name="pwd" placeholder="Password" required>
            </span>
            </div>
            <div class="input-box">
                <span>
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <img  src="assets/img/icon1/password.png" alt="" width="25px" height="25px">
                <input type="password" name="cpwd" placeholder="Confirm Password" required>
            </span>
            </div>

              <div class="mb-5">
                <input type="submit" class="btn" name="btnRegister" value="Register">
              </div>

          
        </form>
    </div>
    <?php 
    }
    else
  {     
        $name=$_POST['uName'];
        $pgdName=$_POST['pgdName'];
        $division=$_POST['division'];
        $district=$_POST['district'];
        $township=$_POST['township'];
        $pwd=$_POST['pwd'];
        $cpwd=$_POST['cpwd'];
        $qry="Insert into admin(id,name,pgdName,division,district,township,password,cfm_password,role) values('','$name','$pgdName','$division','$district','$township','$pwd','$cpwd','2')";
         $res=mysqli_query($conn,$qry);
         if($res)     
         { //echo "<p> successfully </p>"; 
          echo '<div class="alert alert-success">Your inserted data successfully </div>';
          header("Refresh:1; URL=index"); 
         }  
          else
          { //echo "<p> successfully </p>"; 
            echo '<div class="alert alert-success">Register Fail </div>';
            header("Refresh:1; URL=register"); 
           }
  }
  ?>

</body>
</html>
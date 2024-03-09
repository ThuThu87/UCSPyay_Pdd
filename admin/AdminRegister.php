<!DOCTYPE html>
<html lang="en">
    <?php
    include("../db.php");
?>

<?php
if (isset($_POST['btnRegister']))
{         

    $name=$_POST['uName'];
    $pgdName=$_POST['pgdName'];
    $result=mysqli_query($conn,"select * from pagoda where pgdName='$pgdName'");
    if($result->num_rows>0)
    {
        if($row=mysqli_fetch_array($result))
        {
            $p_id=$row['p_id'];
        }
        else
        {
            $p_id=0;
        }
    }
    $division=$_POST['division'];
    $district=$_POST['district'];
    $township=$_POST['township'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
    $phno=$_POST['phno'];


    if(empty($name) || empty($pgdName) || empty($division) || empty($district) || empty($township)|| empty($pwd)|| empty($cpwd) || empty($phno))
{
    //  $_SESSION['status']="The data fill";
  

     echo '<div class="alert alert-success">The data fill</div>';

}


else{


    $query = "SELECT id FROM admin WHERE name = '$name' OR phone='$phno'  LIMIT 1" ;
    $check_query = mysqli_query( $conn, $query);
    $count_email = mysqli_num_rows($check_query);
    if($count_email == 1){
        // echo "<script>alert('This admin is already available,Try again');</script>";
        // $_SESSION['status']='Already available.Please Try Again';
        echo '<div class="alert alert-success">This admin account is already exit,Try again! </div>';
    } 

    elseif((strlen($phno) >= 9) && (strlen($phno) <= 11)){
        //  $_SESSION['status']="The number of phone number is between 9 to 11";
       
         echo '<div class="alert alert-success">The number of phone number is between 9 to 11</div>';
    
    }
    
     elseif($_POST['pwd']!=$_POST['cpwd']){
        // elseif(strcmp($_POST['$pwd'],$_POST['$cpwd'])){
            //  $_SESSION['status']="The number of phone number is between 9 to 11";
           
             echo '<div class="alert alert-success">Password and Confirm Password are not the same</div>';
        
        } 
    else{


    $qry="Insert into admin(id,p_id,name,pgdName,division,district,township,phone,password,cfm_password,role) values('','$p_id','$name','$pgdName','$division','$district','$township','$phno','$pwd','$cpwd','2')";
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

}
}


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

    <div class="Rwrapper col-10 shadow shadow">        
        <form action="AdminRegister" method="post" enctype="multipart/form-data">
            <h1 class="mt-2">Register</h1>
            <div class="input-box" >
                <span>
                    <!-- <i class="fa-solid fa-user"></i>  -->
                    <img  src="assets/img/icon1/user1.png" alt="" width="25px" height="25px"></span> 
                    <input type="text"  name="uName" class="shadow shadow" style="background-color:gainsboro;color:navy; border-radius:10px 10px 10px 10px" placeholder="အမည်" > 
                <!-- <input type="text" name="userName" placeholder="" required> -->
            </span>
            
            </div>

            <div class="input-box" style="color:navy;">
                <span>
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <img  src="assets/img/icon1/pp.png" alt="" width="25px" height="25px"></span> 
                <!-- <input type="text" name="pgdName" placeholder="ဘုရားအမည်"> -->
                <select  style="background-color:gainsboro;color:navy;" class="form-select form-select-md  form-control" aria-label=".form-select-md example" name="pgdName">
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
                <!-- <input type="text" name="division" placeholder="တိုင်းဒေသကြီး/ပြည်နယ်" > -->
                <select class="form-select form-select-md  form-control"  style="background-color:gainsboro;color:navy;" aria-label=".form-select-md example" name="division">
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
                <input type="text" name="district" placeholder="ခရိုင်" style="background-color:gainsboro;color:navy;border-radius:10px 10px 10px 10px;" >
            </span>
            </div>
            <div class="input-box">
                 <span>
                    <!-- <i class="fa-solid fa-user"></i>  -->
                    <img  src="assets/img/icon1/CCC.png" alt="" width="25px" height="25px">
                </span> 
                <input type="text" name="township" placeholder="မြို့နယ်" style="background-color:gainsboro;color:navy;border-radius:10px 10px 10px 10px;">
            </span>
            </div>
            <div class="input-box">
                
                <input type="text" name="phno" placeholder="ဖုန်းနံပါတ်" style="background-color:gainsboro;color:navy;border-radius:10px 10px 10px 10px;">
                 <span>
                    <!-- <i class="fa-solid fa-user"></i>  -->

                  <img  src="assets/img/icon1/phone.png" alt="" width="25px" height="25px">
                </span> 

            </span>
            </div>
            <div class="input-box">
                <span>
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <img  src="assets/img/icon1/password.png" alt="" width="25px" height="25px">
                <input type="password" name="pwd" placeholder="Password" style="background-color:gainsboro;color:navy;border-radius:10px 10px 10px 10px;">
            </span>
            </div>
            <div class="input-box">
                <span>
                    <!-- <i class="fa-solid fa-lock"></i> -->
                    <img  src="assets/img/icon1/password.png" alt="" width="25px" height="25px">
                <input type="password" name="cpwd" placeholder="Confirm Password" style="background-color:gainsboro;color:navy;border-radius:10px 10px 10px 10px;">
            </span>
            </div>

              <div>
                <input type="submit" class="btn btn-success mb-5" name="btnRegister" value="Register" style="background-color:skyblue;">
              </div>





        </form>
    </div>
   
</body>
</html>

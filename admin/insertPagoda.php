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
                      height: 150px; 
                    } 
        </style>
    </head>
    <body>
    <?php  
      if(!(isset($_POST['btnCreate']))){
    ?>

      <?php include('slider.html');?>
      <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Insert Pagoda</span></li>
            </ol>
          </nav>
          <div align="right">
            <?php echo "အမည် -".$pgdName;?>
          </div>
        </div>
          <!-- <div class="header-divider"></div> -->
          
          <!-- ############################### -->
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
          <div class="col-md-10">
            <div class="card mb-4 mx-4">
              <div class="card-title"><h3><b>ဘုရားနှင့်သက်ဆိုင်သောအကြောင်းအရာများထည့်ရန်</b></h3></div>
              <div class="card-body p-10">                
             <form action="insertPagoda" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                  <span class="input-group-text">
                <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="pgdName" placeholder="ဘုရားအမည်" required>
                </div>


                <div class="input-group mb-3 mt-2"><span class="input-group-text">
                    
                <img  src="assets/img/icon1/park.png" alt="" width="30px" height="20px"></span> 
                <select class="form-select form-select-md  form-control" aria-label=".form-select-md example" name="division" required>
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
                  <!-- <input class="form-control" type="text" name="division" placeholder="တိုင်းဒေသကြီး/ပြည်နယ်" required> -->
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                <img  src="assets/img/icon1/distinct.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="district" placeholder="ခရိုင်" required>
                </div>
                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                    
                <img  src="assets/img/icon1/City1.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="township" placeholder="မြို့နယ်" required>
                </div>


                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                  
                <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" name="image" type="file" placeholder="Image" required>
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                  
                <img  src="assets/img/icon1/web.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" name="map" type="text" placeholder="Google Map Link" required>
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">
                   
                <img  src="assets/img/icon1/web.png" alt="" width="30px" height="20px"></span> 
                  <input class="form-control" type="text" name="url" placeholder="webiste လိပ်စာ">
                </div>

                <div class="input-group mb-3 mt-3"><span class="input-group-text">                  
                <img  src="assets/img/icon1/home.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="address" id="" rows="5" placeholder="တည်နေရာ" required></textarea>
                </div>
                <div class="input-group mb-3 mt-3"><span class="input-group-text">                  
                <img  src="assets/img/icon1/home.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="history" id="" rows="5" placeholder="သမိုင်းအကျဉ်း" required></textarea>
                </div>


               <input type="submit" value="ထည့်ရန်" class="btn mt-2" name="btnCreate">
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
  }
  else
  {
        $pgdName=$_POST['pgdName'];
        $division=$_POST['division'];
        if($division=='တိုင်းဒေသကြီး/ပြည်နယ်'){
          echo '<script>
            window.alert("Please Select division Name");
            window.location.href = "insertPagoda";
            </script>';
        }
        $district=$_POST['district'];
        $township=$_POST['township'];
        $address=$_POST['address'];
        $url=$_POST['url'];
        $history=$_POST['history'];
        $map_link=$_POST['map'];
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         $fileType=strtolower($fileType);

         
       // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
        
          $final_save_dir = 'upload/pagoda/';
          move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
          $image_full_path = $final_save_dir . $_FILES['image']['name'];
        }
        else{
          echo '<script>
        window.alert("File type is not allowed.Allowed type[jpg,jpeg,JPG,JPEG,PNG,GIF]");
        window.location.href = "insertPagoda";
        </script>';
        }
        if(empty($pgdName) || empty($division) || empty($district) || empty($township) || empty($address) || empty($history) || ($image_full_path=='upload/pagoda/'))
        {
          echo '<script>
          window.alert("Please Fill Data!!");
          window.location.href = "insertPagoda";
          </script>';; 
        }
        else{
        $qry="Insert into pagoda(p_id,pgdName,division,district,township,photo,map_link,website,address,history) values('','$pgdName','$division','$district','$township','$image_full_path','$map_link','$url','$address','$history')";
        }
        $res=mysqli_query($conn,$qry);
        if($res)     
          {
            echo '<script>
            window.alert("Your inserted data successfully");
            window.location.href = "viewPagoda";
            </script>';
          }

           else
           {
            echo '<script>
            window.alert("Not Successful");
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
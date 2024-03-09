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
              <li class="breadcrumb-item active"><span>Insert Festival</span></li>
            </ol>
          </nav>
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
          <div class="col-md-6">
            <div class="card mb-4 mx-4">
              <div class="card-body p-7">
                <h3>ပွဲတော်များထည့်ရန်</h3>
     <br>
           <form action="insertFestival.php" method="post" enctype="multipart/form-data">
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
                  <select class="form-select form-select-lg  form-control" aria-label=".form-select-lg example" name="monName">
                   <option selected>ကျင်းပသည့်လအမည်</option>                                  
                   <option value="တန်ခူး">တန်ခူး</option>
                   <option value="ကဆုန်">ကဆုန်</option>
                   <option value="နယုန်">နယုန်</option>
                   <option value="ဝါဆို">ဝါဆို</option>
                   <option value="ဝါခေါင်">ဝါခေါင်</option>
                   <option value="တော်သလင်း">တော်သလင်း</option>
                   <option value="သီတင်းကျွတ်">သီတင်းကျွတ်</option>
                   <option value="တန်ဆောင်မုန်း">တန်ဆောင်မုန်း</option>
                   <option value="နတ်တော်">နတ်တော်</option>
                   <option value="ပြာသို">ပြာသို</option>
                   <option value="တပို့ပွဲ">တပို့ပွဲ</option>
                   <option value="တပေါင်း">တပေါင်း</option>                
                  </select>
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                <img src="assets/img/icon1/write.png" alt="" width="20px" height="20px">
                                     </span></span>
                  <input class="form-control" type="text" name="festName" placeholder="ပြုလုပ်သည့်ပွဲအမည်">
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-image"></use>
                    </svg></span>
                  <input class="form-control" name="image" type="file" placeholder="Image">
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-video"></use>
                    </svg></span>
                  <input class="form-control" name="video" type="text" placeholder="video">
                  <!-- <input type="submit" name="submit" value="Upload"/> -->
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                <img src="assets/img/icon1/write.png" alt="" width="20px" height="20px">
                                     </span>
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="detail" id="" rows="5" placeholder="အသေးစိတ်အကြောင်းအရာ"></textarea>
                </div>
                <input type="submit" value="ထည့်ရန်" class="btn mt-2" name="btnCreate">
               
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
  }
  else
  {
    $pgdName=$_POST['pgdName'];
    $result = mysqli_query($conn,"SELECT p_id FROM pagoda where pgdName='$pgdName'");  
    if($row =( mysqli_fetch_array($result))) {
        $id=$row['p_id'];
    }
        $fName=$_POST['festName'];
        $monName=$_POST['monName'];
        $detail=$_POST['detail'];
        $vname=$_POST['video'];
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         $fileType=strtolower($fileType);

        
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
          $image = $_FILES['image']['tmp_name']; 
          $imgContent = addslashes(file_get_contents($image));
        }
        

        // $name= $_FILES['file']['name'];

        // $tmp_name= $_FILES['file']['tmp_name'];
        
        // $submitbutton= $_POST['submit'];
        
        // $position= strpos($name, "."); 
        
        // $fileextension= substr($name, $position + 1);
        
        // $fileextension= strtolower($fileextension);
        
        // $description= $_POST['description_entered'];
        
        // $success= -1;
        
        // $descript= 0;
        
        // if (empty($description))
        // {
        // $descript= 1;
        // }
        
        // if (isset($name)) {
        
        // $path= 'Uploads/videos/';
        
        // if (!empty($name)){
        // if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
        // {
        // $success=0;
        // echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
        // }
        
        
        // else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
        // {
        // $success=1;
        // if (move_uploaded_file($tmp_name, $path.$name)) {
        // echo 'Uploaded!';
        // }
        // }
        // }
        // }     

        
     $qry="Insert into festival(f_id,p_id,f_name,pgdName,monthName,video,photo,detail_info) values(' ','$id','$fName','$pgdName','$monName','$vname','$imgContent','$detail')";
         $res=mysqli_query($conn,$qry);
         if($res)     
         { //echo "<p> successfully </p>"; 
          echo '<div class="alert alert-success">Your inserted data successfully </div>';
          header("Refresh:1;URL=insertFestival"); 
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
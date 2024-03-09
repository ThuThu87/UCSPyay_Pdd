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
        .button-container {
      display: flex;
      justify-content: space-between; /* This will create space between the buttons */
    }

    .button {
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
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
              <li class="breadcrumb-item active"><span>Update Yatu</span></li>
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
               
              </ol>
            </nav>
          </div>
        </header>
       
    <div class="bg-light mt-3 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card mb-4 mx-4">
              <div class="card-title"><h3><b>ရတုတေးချိုးများပြင်ရန်</b></h3></div>
              <div class="card-body p-7">
                <form action="updateYatu" method="post" enctype="multipart/form-data">         
                 <?php
                  $y_id=$_GET['yid'];
                  $p_id=$_GET['pid']; 
                  $result = mysqli_query($conn,"SELECT * FROM yatu where p_id='$p_id' and y_id='$y_id'");
                   if($row=mysqli_fetch_array($result)){
                  ?>                         
                 
                 <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <input type="hidden" class="form-control" name="pid" id="" rows="5" value="<?php echo $row['p_id'];?>">
                  <input type="text" class="form-control" name="pgdName" id="" rows="5" value="<?php echo $row['pgdName'];?>" disabled>
                 
                </div>                            
                
                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                     <img  src="assets/img/icon1/subCategory.png" alt="" width="30px" height="20px"></span>
                     <input class="form-control" type="hidden" name="yid" value="<?php echo $row['y_id'];?>">  
                  <input class="form-control" type="text" name="yname" value="<?php echo $row['yName'];?>"  disabled>
                </div>
                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                     <img  src="assets/img/icon1/subCategory.png" alt="" width="30px" height="20px"></span>
                  <input class="form-control" type="text" name="name" value="<?php echo $row['wName'];?>" placeholder="ရေးသားသူအမည်" required>
                </div>

                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                     <img  src="assets/img/icon1/subCategory.png" alt="" width="30px" height="20px"></span>
                  <input class="form-control" type="text" name="type" value="<?php echo $row['type'];?>" placeholder="ရတုအမျိုးအစား" required>
                </div>

                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                     <img  src="assets/img/icon1/subCategory.png" alt="" width="30px" height="20px"></span>
                  <input class="form-control" type="text" value="<?php echo $row['year'];?>" name="year" placeholder="ရေးသားခဲ့သည့်ခေတ်" required>
                </div>
                

                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/info.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="detail" id="" rows="5" placeholder="ရတုအကြောင်းအရာ"><?php echo $row['detail_info'];?></textarea>
                </div>
                <?php } ?>
               <input type="submit" value="ပြင်ဆင်ရန်" class="btn mt-2" name="btnCreate">

             
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>

<?php 
                   }
  }

  else
  {
            $pgdId=$_POST['pid'];
            echo $pgdId;

            $yId=$_POST['yid'];
            echo $yId;

            $wName=$_POST['name'];
           // echo $wName;
            $type=$_POST['type'];
           // echo $type;
            $year=$_POST['year'];
           // echo $year;
            $detail_info=$_POST['detail'];
           // echo $detail_info;
           $qry="Update yatu set wName='$wName',type='$type',year='$year',detail_info='$detail_info' where y_id='$yId' "; 
           $res=mysqli_query($conn,$qry);   
          // echo $res->num_rows;         
          if($res)     
          { 
           echo '<script>
           window.alert("Your Updated Data successfully");
           window.location.href = "viewYatu";
           </script>'; 
          }  
           else
             {
               echo '<script>
               window.alert("Not Successful!!!");
               window.location.href = "viewYatu";
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

    <footer class="footer">
          <div>Pagoda Digital Directory Admin </a> © 2023 creativeLabs.</div>
          <div class="ms-auto">Developed by&nbsp;University of Computer Studies, Pyay</div>
        </footer>
      </div>
      
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
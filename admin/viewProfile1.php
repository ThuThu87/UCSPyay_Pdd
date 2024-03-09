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
          height: 12%;
          text-align: left;
          padding: 8px;
          font-size: large;
        }
        
        /* tr:nth-child(even) {background-color: #f2f2f2;} */
        div:rcorners3 {
                      border-radius: 15px 50px;
                      background: #73AD21;
                      padding: 20px; 
                      width: 200px;
                      height: 150px; 
                    } 
        .container
        {
            width: 100%;
            max-width: 50em;
        }
        /* .card {
    padding: 1.5em 0.5em 0.5em;
    text-align: center;
    border-radius: 2em;
    box-shadow: 10px 10px 5px rgba(201, 200, 200, 0.2);
    /* box-shadow: 10px 10px 5px rgba(0,0,0,.2); */
   /* max-width: 50em;
} */
.card {
            /* width: 300px;
            height: 200px; */
            /* background-image: url('../Directory/img/home.jpg'); */
            background-size: cover; /* Adjust as needed */
            background-position: center; /* Adjust as needed */
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Additional styling for card content */
        .card-content {
            padding: 20px;
            color: #333;
            font-family: Arial, sans-serif;
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
          // echo "website:".$row['website'];
        
    ?>
    
      <?php 
      
       // include('slider.html');
     

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
          <div align="right" class="mb-3">
            <?php echo "အမည် -".$pgdName;?>
          </div>
        </div>
        </header>
       
        <div class="bg-light d-flex flex-row align-items-center mt-5">
      <div class="container">
        <div class="row table-responsive">
          <div class="col-md-10">
            <div class="card  mb-4" >
              <div class="card-body p-7">
              <h3 class="card-title" align="center" style="background-color:none;">User Profile </h3>
            <form action="changeProfile" method="post">
            <table aling="center">
            <tr>
              <th colspan="2"></th>
            </tr>
            <tr>    
             <td>
                       <h6 class="px-4 pt-2">User Name:</h6>
             </td>
              <td>
                            <p class=" pt-2"><?php echo $row['name'];?></p>
              </td>
            </tr>

            <tr>    
            <td>
                       <h6 class="px-4 pt-2">Name:</h6>
            </td>
            
            <td>
                        <p><?php echo $row['pgdName'];?></p>
           </td>
           </tr>

            <tr>    
            <td>
                       <h6 class="px-4 pt-2">Division:</h6>
            </td>
            <td>
                        <p><?php echo $row['division'];?></p>
            </td>
            </tr>

            <tr>    
            <td>
                       <h6 class="px-4 pt-2">District:</h6>
           </td>
          <td>
                        <p><?php echo $row['district'];?></p>
          </td>
            </tr>

            <tr>    
            <td>
                       <h6 class="px-4 pt-2">Township:</h6>
           </td>
           <td>
                        <p><?php echo $row['township'];?></p>
         </td>
          </tr>

          <tr>    
            <td>
                       <h6 class="px-4 pt-2">Phone Number:</h6>
           </td>
           <td>
                        <p><?php echo $row['phone'];?></p>
         </td>
          </tr>
           
   </table>
   <input type="submit" value="ပြုပြင်ရန်"  name="btnUpdate" class="btn mt-5" >
        </form>
        <?php }}?>      
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
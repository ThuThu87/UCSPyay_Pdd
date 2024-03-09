<?php
    include("../db.php");
    session_start();
    $p_id=$_SESSION['p_id'];
    $pgdName=$_SESSION['pgdName'];
    $role=$_SESSION['role'];
    $division=$_SESSION['division'];
    $n= $_SESSION['name'];
    $limit=10;
    if (isset($_GET["page"]))
    {
    $page  = $_GET["page"]; 
    } 
    else
    { 
    $page=1;
    }  
    $start_from = ($page-1) * $limit; 
    if($role==1)
                    {
                      $sql = "SELECT *  FROM historical_event ORDER BY h_id ASC LIMIT $start_from, $limit";
                    }
                    else 
                    {
                      $sql = "SELECT *  FROM historical_event where pgdName='$pgdName' ORDER BY h_id ASC LIMIT $start_from, $limit";
                      } 
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
      <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/css/all.min.css">
      <!-- <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet"> -->
      <style>
        table {
          border-collapse: collapse;
          width: 100%;
          background-color: lightskyblue;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {background-color:aliceblue;}
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
    //  if(!(isset($_POST['btnCreate']))){
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
              <li class="breadcrumb-item active"><span>View Historical Event</span></li>
            </ol>
          </nav>
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
            <div align="right">
            <?php echo "အမည် -".$pgdName;?>
          </div>
          </div>
        </header>
       
    <div class="bg-light d-flex flex-row align-items-center mt-3 mb-5">
      <div class="container">
        <div class="row justify-content-center table-responsive">
          <div class="col-md-12">
            <div class="col d-flex p-2 justify-content-center" style="color:dodgerblue;font-weight:bolder;font-size:large;">သမိုင်းဝင်ဖြစ်ရပ်များ</div>
            <font size="2rem">
            <?php
                 if($role==1)
                 {
                  $sql = "SELECT *  FROM historical_event ";
                 }
                 else
                 {
                  $sql = "SELECT *  FROM historical_event where pgdName='$pgdName' ";
                 }
                  $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table border='1'>
                                 <tr>
                                    <th>No</th>
                                    <th>ဘုရားအမည်</th>
                                    <th>အမျိုးအစား</th>
                                    <th>အမျိုးအစားခွဲများ</th>
                                    <th>logo</th>
                                    <th>Photo</th>
                                    <th>အသေးစိတ်အကြောင်းအရာ</th>
                                </tr>";
                             $i=1;
                        while ($row = $result->fetch_assoc()) {
                            $substr_detail=mb_substr($row['detail_info'],0,200)."......."; 
                            echo "<tr>
                                    <td>$i</td>
                                    <td>{$row['pgdName']}</td>
                                    <td>{$row['catName']}</td>
                                    <td>{$row['subCatName']}</td>                                                           
                                    <td><img src='{$row['icon']}'  width='100' height='100'></td>
                                    <td><img src='{$row['photo']}'  width='100' height='100'></td>
                                    <td >$substr_detail</td>
                                    <td>
                                        <a href='updateHistoricalEvent.php?hid={$row['h_id']}&pid={$row['p_id']}'><i class='fas fa-edit fa-lg'></i></a>                                        
                                    </td>
                                    <td>
                                    <a href='deleteHistoricalEvent.php?hid={$row['h_id']}&pid={$row['p_id']}' onclick='return confirm('Are you sure you want to delete this item?')'><i class='fas fa-trash fa-lg'></i></a>
                                    </td>
                                </tr>";
                                $i++;
                        }

                        echo "</table>";
                    } 
                    else {
                        echo "No records found";
                    }

                   
                  }
                
?>
            </font>
          </div>
        </div>
      </div>
    </div>

    <?php
    if($role==1)
     {
      $result_db = mysqli_query($conn,"SELECT COUNT(h_id) FROM historical_event");

     }
     else
     {
      $result_db = mysqli_query($conn,"SELECT COUNT(h_id) FROM historical_event where pgdName='$pgdName'"); 
     }
      $row_db = mysqli_fetch_row($result_db);  
      $total_records = $row_db[0];  
      // echo $total_records;
      $total_pages = ceil($total_records / $limit); 
      // echo  $total_pages; 
      $pagLink = "<ul class='pagination col-12' align='center'>";  
      for ($i=1; $i<=$total_pages; $i++) {
                    $pagLink .= "<li class='page-item' align='center'><a class='page-link' align='center' href='viewHistoricalEvent?page=".$i."'>".$i."</a></li>";	
      }
      echo $pagLink . "</ul>";
      $conn->close();
      ?>
        <footer class="footer mt-3">
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
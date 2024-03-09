<?php 
 
 session_start();
 $pgdName=$_SESSION['pgdName'];
 include("db.php"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Replease your site name and favicon -->
    <title><?php echo $pgdName;?></title>
    <link
      rel="shortcut icon"
      href="Directory/asset/images/brand.png"
      type="image/x-icon"
    />
   
    <link
      rel="stylesheet"
      href="Directory/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link
      rel="stylesheet"
      href="Directory/css/bootstrap.min.css"
    />
    
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

   
    <style>              
        .rcorner,.rcorner1{
        border-radius: 5px 5px 5px 5px;
        background:blue;
        padding: 20px; 
        width: 250px; 
        /* height: 20px;  */
        }
        .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
        border-radius: 0 0 15px 15px;
        }
        .btn-primary{
          background-color:#87CEEB;
          color:navy;
        }
        /* th, td {
            
            text-align: justify;
            padding: 9px; 
        } */

        table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      /* border: 1px solid #ddd; */
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
    .scrollable-td {
      max-height: 50px; /* Set a maximum height for the table cell */
      overflow-y: auto; /* Enable vertical scrollbar */
    }

    /* Responsive styles */
    @media (max-width:100%) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      th {
        display: none;
      }

      td {
        border: none;
        /* border-bottom: 1px solid #ddd; */
        position: relative;
        padding-left: 50%;
      }

      td:before {
        position: absolute;
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
        content: attr(data-label);
        font-weight: bold;
      }
    }
   </style>
  </head>
  <body>
    <?php 
    include('header2.php');
    
    ?>
    <!-- content -->
    <div class="container-fluid mt-5">
        <div  class="row  mt-5 justify-content-center gap-lg-2 align-items-start w-auto vh-auto" style="background-color:floralwhite;">
            <div class="container mt-3 col-sm-9 mt-2 p-5" id="division" align="center" >
            <?php 
                    $query = "SELECT * FROM yatu WHERE pgdName='$pgdName'";                                 
                    $result = mysqli_query($conn,$query);   
                    if($result)
                    {
                         while ($row =( mysqli_fetch_array($result))) {
                        
                                     ?> 
                        <div class="card mb-3  d-flex shadow shadow gap-5" data-aos="zoom-in" data-aos-delay="50">
                            <div class="row g-4 mt-2">
                            <h5 class="card-title"><?php echo '<b>'.$row['yName'].'</b>';?></h5>
                                <div class="col-md-10 d-flex justify-content-center" >                           

                                    <div class="card-body d-flex" align="center" >   
                                                             
                                        <p class="card-text " align="center">
                                        <table border="0" class="table-responsive mt-5 ms-5" data-aos="zoom-in" data-aos-delay="100" width="100%" height="20%">
                                            <tr >
                                            <td style="color:navy;font-weight:bold;"><b>ရတုအမည်</b></td>                                        
                                            <td><?php echo $row['yName'];?></td>
                                            </tr>
                                            <tr>
                                            <td style="color:navy;font-weight:bold;"><b>ရေးသားသူအမည်</b></td>
                                            <td> <?php echo $row['wName'];?></td>
                                            </tr>
                                            <tr>
                                            <td style="color:navy;font-weight:bold;"><b>ရတုအမျိုးအစား<b></td>
                                            <td><?php echo $row['type'];   ?></td>
                                            </tr>
                                            <tr>
                                            <td style="color:navy;font-weight:bold;">ရေးသားခဲ့သည့်ခေတ်</td>
                                            <td><?php echo $row['year'];?></a></td>
                                            </tr>
                                            <!-- <tr>
                                            <td style="color:navy;font-weight:bold;">ရတု</td>
                                            </tr> -->
                                            <tr>
                                            <td class="scrollable-td" colspan="2"><textarea class="form-control" id="exampleTextarea" rows="8"><?php echo $row['detail_info'];?></textarea></td>
                                            </tr>
                                        </table>                                       
                                        </p>
                                        <p class="card-text "></p>
                                    <!-- <a href="option.html" class="btn btn-primary">SEE MORE</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                    }
                    ?>
                </div>
            </div>
    </div>
       
    <!-- end content -->
    <?php include('pddFooter.html');?>     
 
    <!-- 
        We use js for some interaction for UI design
        This is Bootstrap CDN link, instead of this you can use Bootstrap 
        local download or using npm 
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->
    <!-- Theme -->
    <!-- <script src="Directory/js/thmem.js"></script> -->
    <!-- State and Regions -->
    <!-- <script src="Directory/js/state.js"></script> -->
  </body>
</html>

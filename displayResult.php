<?php 
  include("db.php"); 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Replease your site name and favicon -->
    <title>Pagoda Digital Directory</title>
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
    @media (max-width: 600px) {
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
    include('pddHeader1.php');
    include('db.php');    
    $pgdName=$_GET['title'];
    
    ?>
    <!-- content -->
    <div class="container-fluid mt-5">
        <div  class="row  mt-5 justify-content-center gap-lg-2 align-items-start w-auto vh-auto" style="background-color:floralwhite;">
            <div class="container mt-3 col-sm-9 mt-2 p-5" id="division" align="center">
            <?php 
                    $query = "SELECT * FROM pagoda WHERE pgdName='$pgdName'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                    $result = mysqli_query($conn,$query);   
                    if($result->num_rows>0)
                    {
                         while ($row =( mysqli_fetch_array($result))) {
                         $photo="admin/". $row["photo"];
                                     ?> 
                        <div class="card mb-3 p-3 align-items-center d-flex shadow shadow gap-5" data-aos="zoom-in" data-aos-delay="50">
                            <div class="row g-0 mt-2">
                                <!-- <div class="col-md-6 d-flex justify-content-center"> -->
                                <div class="col-md-6 d-flex p-2  justify-content-between">          
                                        <img src="<?php echo $photo;?>" class="img-fluid  shadow shadow rounded" data-aos="fade-right" data-aos-delay="100" alt="Img" style="height:450px;width:100%;"/>
                                </div>
                                <div class="col-md-6 d-flex justify-content-between" >
                                    <div class="card-body d-flex"  >                            <!-- <h5 class="card-title"></h5> -->
                                        <p class="card-text ">
                                        <table border="0" class="table-responsive justify-content-center mt-0"  data-aos="fade-left" data-aos-delay="100" width="100%" height="20%">
                                            <tr >
                                            <td style="color:navy;font-weight:bold;"><b>ဘုရားအမည်</b></td>                                        
                                            <td><?php echo $row['pgdName'];?></td>
                                            </tr>
                                            <tr>
                                            <td style="color:navy;font-weight:bold;"><b>တိုင်းဒေသကြီး/ပြည်နယ်</b></td>
                                            <td> <?php echo $row['division'];?></td>
                                            </tr>
                                            <tr>
                                            <td style="color:navy;font-weight:bold;"><b>Website Address<b></td>
                                            <td><a href="<?php echo $row['website'];?>" style="text-decoration:none;"><?php 
                                              if(isset($row['website'])){
                                                  echo $row['website'];
                                              }
                                              if(empty($row['website'])){
                                                   $_SESSION['pgdName']=$row['pgdName'];
                                                  // echo "ဘုရားသမိုင်းများကြည့်ရန် အောက်ပါလင့်ကိုနှိပ်ပါ";
                                                  ?>
                                               <a href="pindex?pgdName=<?php echo $row['pgdName'];?>" style="text-decoration:none;">
                                                <?php //echo $row['pgdName'];
                                                 echo "ဘုရားသမိုင်းများကြည့်ရန်";
                                                 ?>
                                               </a>
                                               <?php
                                                }
                                                ?></td>
                                            </tr>
                                            <tr>
                                            <td style="color:navy;font-weight:bold;">တည်နေရာ</td>
                                            <td><?php echo $row['address'];?></a></td>
                                            </tr>
                                            <tr>
                                    <td style="color:navy;font-weight:bold;">သမိုင်းကြောင်းရာ</td>
                                    </tr>
                                    <tr>
                                    <td class="scrollable-td" colspan="2"><textarea class="form-control" id="exampleTextarea" rows="9"><?php echo $row['history'];?></textarea></td>
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
                        else{
                            // famous_places

                            $query = "SELECT pagoda.*,famous_places.* from pagoda,famous_places where subCatName='$pgdName' and pagoda.p_id=famous_places.p_id";
                            // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
            $result = mysqli_query($conn,$query);   
            if($result->num_rows>0)
            {
                 while ($row =( mysqli_fetch_array($result))) {
                 $photo="admin/". $row["photo"];
                             ?> 
                <div class="card mb-3 p-3  d-flex shadow shadow gap-5">
                    <div class="row g-0">
                        <!-- <div class="col-md-6 d-flex justify-content-center"> -->
                        <div class="col-md-6 mt-3">          
                                <img src="<?php echo $photo;?>" class="img-fluid shadow shadow rounded" alt="Img" style="height:450px;width:100%;"/>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="card-body" d-flex align="justify">                            <!-- <h5 class="card-title"></h5> -->
                                <p class="card-text ">
                                <table>
                                    <tr>
                                    <td style="color:navy;font-weight:bold;">အမည်</td>                                        
                                    <td><?php echo $row['subCatName'];?></td>
                                    </tr>
                                    <tr>
                                    <td style="color:navy;font-weight:bold;">တည်ရှိရာဘုရားအမည်</td>                                        
                                    <td><?php echo $row['pgdName'];?></td>
                                    </tr>
                                    <tr>
                                    <td style="color:navy;font-weight:bold;">တိုင်းဒေသကြီး/ပြည်နယ်</td>
                                    <td> <?php echo $row['division'];?></td>
                                    </tr>
                                    <tr>
                                    <td style="color:navy;font-weight:bold;">Website Address</td>
                                    <td><a href="<?php echo $row['website'];?>" style="text-decoration:none;"><?php 
                                              if(isset($row['website'])){
                                                  echo $row['website'];
                                              }
                                              if(empty($row['website'])){
                                                   $url=$row['pgdName'];
                                                   $_SESSION['pgdName']=$row['pgdName'];
                                                  ?>
                                               <a href="pindex?pgdName=<?php echo $row['pgdName'];?>" style="text-decoration:none;">
                                                <?php //echo $row['pgdName'];
                                                 echo "ဘုရားသမိုင်းများကြည့်ရန်<br>";
                                                ?>
                                               </a>
                                               <?php
                                                }
                                                ?>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td style="color:navy;font-weight:bold;">သမိုင်းကြောင်းရာ</td>
                                    </tr>
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

                           //end famous_places
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
    <!-- Theme -->
    <!-- <script src="Directory/js/thmem.js"></script> -->
    <!-- State and Regions -->
    <!-- <script src="Directory/js/state.js"></script> -->
  </body>
</html>

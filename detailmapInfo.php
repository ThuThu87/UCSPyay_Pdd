<?php
 session_start();
 $pgdName=$_SESSION['pgdName'];
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
    include('header2.php');
    include('db.php');
    $title=$_GET['title'];
    
    ?>
    <!-- content -->
    <div class="container-fluid">
        <div  class="row justify-content-center mt-5 gap-lg-2 align-items-start w-auto vh-auto" data-aos="fade-up" data-aos-delay="100" style="background-color:floralwhite;">
            <div class="container  col-sm-7 mt-2  p-5" id="division" align="center" >
            <?php 
                                    $query = "SELECT famous_places.* FROM famous_places JOIN pagoda ON pagoda.p_id=famous_places.p_id WHERE famous_places.subCatName='$title' and famous_places.pgdName='$pgdName'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?> 
                  <div class="card mb-3 col-12 mt-5 p-4 shadow shadow gap-5 align-items-center" align="center" style="background-color:snow;">
                  
                     <div class="row g-0">
                     <h4 class="mt-1 mb-3 justify-content-center" style="font-size:1.2rem;color:navy;"><b><?php echo $row['subCatName']; ?></b></h4><br><br>
                                 
                         <div class="col-md-6 d-flex justify-content-between">          
                                 <img src="<?php echo $photo;?>" class="img-fluid shadow shadow rounded mt-2" alt="Img" style="height:350px;width:100%;"/>
                          </div>
                          <div class="col-md-6 d-flex justify-content-between">
                               <table width="100%" border="0">
                                <tr>
                              <td class="scrollable-td" colspan="4"><textarea class="form-control" id="exampleTextarea" cols="400" rows="14"><?php echo $row['detail_info'];?></textarea></td>
                                    </tr>
                               </table> 
                              <!-- <a href="option.html" class="btn btn-primary">SEE MORE</a> -->
                          <!-- </div> -->
                      </div>
                  </div>
                  <?php }?>
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

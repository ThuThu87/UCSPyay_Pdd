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
    <!-- fonstaweasome for icons, you can use npm instaead of cdn -->
    <link
      rel="stylesheet"
      href="Directory/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- 
        This is Bootstrap CDN link, instead of this you can use Bootstrap 
        local download or using npm 
    -->
    <link
      rel="stylesheet"
      href="Directory/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="css/figure.css"
    />
    <script src="Directory/js/jquery-1.11.3.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- <script>
        $(function () {
        $(".item").hide();
        $(".col-12:first-child a").click(function () {
            $(".item:visible").hide();
            $($(this).attr("href")).show();
            return false;
        });
        });
       
        function automateClick() {
            document.getElementById('rcorner1').click();
        
        }
        window.addEventListener("load", automateClick);
    </script> -->
    <style>   
        .flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}           
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
   </style>
  </head>
  <body>
   
    <?php 
    include('pddHeader1.php');
    include("db.php");
    ?>
    <!-- content -->
    <div class="container mt-5 d-flex p-5" id="division" align="center">
    <div class="card mt-5 col-sm-12 justify-content-center" style="background-color:#f1f1f1;border-radius:15px 15px 15px 15px;">
        <div class="card-title mt-3"><h4 class="mt-5" data-aos="zoom-in" data-aos-delay="100" style="color:navy;font-weight:bold;"><b>ရှာဖွေမှုရလဒ်များ</b></h4></div>
      <div class="row col-sm-12 justify-content-center ms-1">
      <?php 
                                    $prefix=$_POST['search'];
                                    $prefix=explode(" ", trim($prefix));
                                    $queryString = "";
                                    $prefix = array_unique($prefix);
                                        foreach($prefix as $c) {
                                            $queryString .= "`subCatName` LIKE '%{$c}%' OR ";
                                        }
                                        
                                        $queryString = rtrim($queryString, " OR ");
                                        //famous_place table
                                        $query= "SELECT * FROM famous_places WHERE {$queryString}";
                                        $result = mysqli_query($conn,$query);  
                                        $dataTable1 = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                        //pagoda table
                                        $queryString = "";
                                        $prefix = array_unique($prefix);
                                        foreach($prefix as $c) {
                                            $queryString .= "`pgdName` LIKE '%{$c}%' OR ";
                                        }
                                        $queryString = rtrim($queryString, " OR ");
                                        $query1= "SELECT * FROM pagoda WHERE {$queryString}";
                                        $result1 = mysqli_query($conn,$query1);  
                                        $dataTable2 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                                        //combie
                                        $combinedData = array(
                                          'table1' => $dataTable1,
                                          'table2' => $dataTable2
                                      );
                                     
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");                                        
                                   // while ($row =( mysqli_fetch_array($result))) {
                                    
                                    foreach ($combinedData['table2'] as $row) {
                                                                    $photo="admin/". $row["photo"];
                                                                 ?>                           
                                    <div class="col-sm-4">
                                           
                                           
                                                          <!-- <span class="card col-sm-3 justify-content-center d-flex p-3"> -->
                                                         <?php  echo "<a href=displayResult?title=",urlencode($row['pgdName'])," style='text-decoration:none;'>";?>
                                                         <figure>
                                                            <img src="<?php echo $photo;?>" class="img-responsive p-2" alt="img" data-aos="zoom-in" data-aos-delay="100" width="100%" height="300">
                                                            <figcaption> <p><?php echo $row['pgdName'];?></p></figcaption>
                                                        </figure></a>
                                                        <p><?php //echo $row['pgdName'];?></p>
                                    </div> 
                                    <?php }?>    
                                    <?php   
                                    foreach ($combinedData['table1'] as $row) {
                                        $photo="admin/". $row["photo"];
                                     ?>                           
                          <div class="col-sm-4">
               
               
                              <!-- <span class="card col-sm-3 justify-content-center d-flex p-3"> -->
                             <?php  echo "<a href=displayResult?title=",urlencode($row['subCatName'])," style='text-decoration:none;'>";?>
                             <figure>
                                <img src="<?php echo $photo;?>" class="img-responsive d-flex p-1" alt="img" data-aos="zoom-in" data-aos-delay="100" width="100%" height="300">
                                <figcaption> <p><?php echo $row['subCatName'];?></p></figcaption>
                            </figure></a>
                            <p><?php // echo $row['subCatName'];?></p>
                        </div> 
        <?php }?> 
        

      </div>
      </div>
    </div>
    <?php include('pddFooter.html');?>    
      
      <!-- Footer -->
      <!-- <div class="row">
        <div class="col-12 mt-3 p-0">
          <div class="w-100 p-3" style="background-color:#87CEEB;">
            <div class="text-center">
            <font color=" #154360">  &copy; <a class="text-dark font-weight-semi-bold" href="#"><font color=" #154360">Pagoda Digital Directory</a>.<br><br> All Rights Reserved. Designed
                    by
                     <img src="img/cupyay.jpg" with="50" height="50" style="border-radius:5px 5px 5px 5px;"/>
                    <a class="text-dark font-weight-semi-bold" target="_blank" href="https://ucspyay.edu.mm"><font color=" #154360">University of Computer Studies, (Pyay)</a><br>
                </font>
            </div>
          </div>
        </div>
      </div>
    </div> -->

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

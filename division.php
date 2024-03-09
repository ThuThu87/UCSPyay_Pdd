<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Replease your site name and favicon -->
    <title> Pagoda Digital Directory</title>
    <link
      rel="shortcut icon"
      href="Directory/asset/images/brand.png"
      type="image/x-icon"
    />
    <!-- fonstaweasome for icons, you can use npm instaead of cdn -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    /> -->
    <link
      rel="stylesheet"
      href="Directory/css/bootstrap.min.css"
    />
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
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    /> -->
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script>
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
    </script>
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
        a,h1,h2,h3,h4,h5,h6{ 
      color:navy;
      /* text-decoration:double; */
       font-size: 1rem; 
    }
        .img
        {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
   </style>
  </head>
  <body>
    <!-- Nav bar -->
    <!-- <nav class="navbar shadow  text-light sticky-top" style="background-color:#87CEEB;">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
          <img src="Directory/asset/images/brand.png" alt="brand" style="height: 35px;" />
          <h4><b><span>Pagoda Digital Directory</span></b></h4>
        </a>
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Other</a>
          </li>
        </ul>
      </div>
    </nav> -->
    <?php 
    include('pddHeader1.php');
    include('db.php');
    ?>
    <!-- content -->
    <div class="container-fluid mt-5">
      <!-- Hero Section -->
      <div  class="row mt-5 justify-content-center gap-lg-2 align-items-start vh-auto" style="background-color:floralwhite;">      
          <div class="container col-sm-10 mt-2 d-flex" id="division" align="center">
            <div class="col">
                
                <div class="col-12 mt-3" align="center">
                   <h3 align="center" class="mt-5 mb-4" data-aos="zoom-in" data-aos-delay="50"><b>တိုင်းဒေသကြီးနှင့် ပြည်နယ်များအားရွေး၍ တန်ခိုးကြီးဘုရားများအားရှာဖွေကြည့်ရှုနိုင်ပါသည်။</b></h3>
                        <a href="#item-1" id="rcorner1" class="btn btn-primary rcorner ms-3  mb-3 p-4" data-aos="fade-right" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ရန်ကုန်တိုင်းဒေသကြီး</a>
                        <a href="#item-2" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-left" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">မန္တလေးတိုင်းဒေသကြီး</a>
                        <a href="#item-3" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-right" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ပဲခူးတိုင်းဒေသကြီး</a>
                        <a href="#item-4" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-left" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ဧရာဝတီတိုင်းဒေသကြီး</a>
                        <a href="#item-5" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-right" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">တနင်္ဿာရီတိုင်းဒေသကြီး</a>
                        <a href="#item-6" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-left" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">စစ်ကိုင်းတိုင်းဒေသကြီး</a>
                        <a href="#item-7" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-right" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">မကွေးတိုင်းဒေသကြီး</a>  
                        <a href="#item-8" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-left" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ကယားပြည်နယ်</a>
                        <a href="#item-9" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-right" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ကရင်ပြည်နယ်</a>
                        <a href="#item-10" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-left" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">မွန်ပြည်နယ်</a>
                        <a href="#item-11" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-right" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ရခိုင်ပြည်နယ်</a>
                        <a href="#item-12" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-left" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ကချင်ပြည်နယ်</a>
                        <a href="#item-13" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-right" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ရှမ်းပြည်နယ်</a>
                        <a href="#item-14" class="btn btn-primary rcorner ms-3 mb-3 p-4" data-aos="fade-left" data-aos-delay="50" style="background-color:#87CEEB;border-radius: 5px 5px 5px 5px;border:none; color:navy;font-weight:bold;">ချင်းပြည်နယ်</a>                                 
                    </div>

                    <div class="col-sm-11 ">
                      <!-- #item1-->
                        <div class="item" id="item-1">
                          <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                              <div class="card-title mt-3"><h4 style="color:navy;"><b>ရန်ကုန်တိုင်းဒေသကြီးအတွင်းရှိဘုရားများ</b></h4></div>
                              <div class="card-body col-sm-12" align="center"> 
                                <div class="row justify-content-center d-flex">
                                <?php 
                                        $query = "SELECT * FROM pagoda WHERE division='ရန်ကုန်တိုင်းဒေသကြီး'";
                                        // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                        $result = mysqli_query($conn,$query);   
                                        while ($row =( mysqli_fetch_array($result))) {
                                            $photo="admin/". $row["photo"];
                                            $pgdName=$row['pgdName'];
                                            
                                        ?>                               
                                  <span class="col-sm-3">
                                  <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);"></a>
                                  <?php 
                                  echo "<a href=SResult?pgdName=$pgdName class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                                  </span>
                                  <?php }?>
                                </div>
                              </div>
                          </div>
                        </div>
                    <!-- #item2-->
                        <div class="item" id="item-2">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;" data-aos="fade-left" data-aos-delay="50"><b>မန္တလေးတိုင်းဒေသကြီးအတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='မန္တလေးတိုင်းဒေသကြီး'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                        
                                     ?>                               
                              <span class="col-sm-3">
                             <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" data-aos="zoom-in" data-aos-delay="50" width="200px" height="250px" style="border-radius:150%;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;' data-aos='zoom-in' data-aos-delay='50'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }?>
                             </div>
                          </div>
                       </div>
                    </div>

                  <!-- #item3-->
                  <div class="item" id="item-3">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>ပဲခူးတိုင်းဒေသကြီးအတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ပဲခူးတိုင်းဒေသကြီး' or division='ပဲခူးတိုင်းဒေသကြီး(အနောက်ပိုင်း)'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }?>
                             </div>
                          </div>
                       </div>
                    </div>

                    <!-- #item4-->
                    <div class="item" id="item-4">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>ဧရာဝတီတိုင်းဒေသကြီးအတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ဧရာဝတီတိုင်းဒေသကြီး'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>
                  
                     <!-- #item5-->
                     <div class="item" id="item-5">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>တနင်္ဿာရီတိုင်းဒေသကြီးအတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='တနင်္ဿာရီတိုင်းဒေသကြီး'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>
                    
                    <!-- #item6-->
                     <div class="item" id="item-6">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>စစ်ကိုင်းတိုင်းဒေသကြီးအတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='စစ်ကိုင်းတိုင်းဒေသကြီး'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>

                     <!-- #item7-->
                     <div class="item" id="item-7">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>မကွေးတိုင်းဒေသကြီးအတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='မကွေးတိုင်းဒေသကြီး'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>

                     <!-- #item8-->
                     <div class="item" id="item-8">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>ကယားပြည်နယ်အတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ကယားပြည်နယ်'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>
                    
                     <!-- #item9-->
                     <div class="item" id="item-9">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>ကရင်ပြည်နယ်အတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ကရင်ပြည်နယ်'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>

                     <!-- #item10-->
                     <div class="item" id="item-10">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>မွန်ပြည်နယ်အတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='မွန်ပြည်နယ်'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>

                    <!-- #item11-->
                    <div class="item" id="item-11">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>ရခိုင်ပြည်နယ်အတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ရခိုင်ပြည်နယ်'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div> 
                   
                     <!-- #item12-->
                     <div class="item" id="item-12">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4><b>ကချင်ပြည်နယ်အတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ကချင်ပြည်နယ်'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>

                     <!-- #item13-->
                     <div class="item" id="item-13">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>ရှမ်းပြည်နယ်အတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ရှမ်းပြည်နယ်'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>
                   
                     <!-- #item14-->
                     <div class="item" id="item-14">
                       <div class="card mb-5" style="background-color:#87CEEB;" data-aos="zoom-in" data-aos-delay="50">
                          <div class="card-title mt-3"><h4 style="color:navy;"><b>ချင်းပြည်နယ်အတွင်းရှိဘုရားများ</b></h4></div>
                          <div class="card-body col-sm-12" align="center"> 
                             <div class="row justify-content-center d-flex">
                             <?php 
                                    $query = "SELECT * FROM pagoda WHERE division='ချင်းပြည်နယ်'";
                                    // $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName like '%$prefix%'");
                                    $result = mysqli_query($conn,$query);   
                                    if($result->num_rows>0){
                                    while ($row =( mysqli_fetch_array($result))) {
                                        $photo="admin/". $row["photo"];
                                     ?>                               
                              <span class="col-sm-3">
                              <?php echo "<a href=SResult?pgdName={$row['pgdName']}>";?><img  src="<?php echo $photo;?>" alt="" width="200px" height="250px" style="border-radius:150%;box-shadow: 0 8px 10px 0 rgba(0,0,0,0.2);"></a>
                              <?php 
                                  echo "<a href=SResult?pgdName={$row['pgdName']} class='d-flex  justify-content-center' style='text-decoration:none;'>";?><?php echo '<b>'.$row['pgdName'].'</b>'?></a>
                              </span>
                              <?php }}
                              else{
                              echo '<div>No Search Record Found !!!</div>';  
                              }
                              ?>
                             </div>
                          </div>
                       </div>
                    </div>
    <!--  -->
            </div> 
      </div>    
    <!--end division -->
    
     </div> 
      </div>
      <!--start division  -->
      
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

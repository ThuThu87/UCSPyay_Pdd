<?php 
  session_start();
  $pgdName=$_SESSION['pgdName'];
 
  include('db.php');
  $qry="select * from pagoda where pgdName='$pgdName'";
  $result=mysqli_query($conn,$qry);
  if($result)
  {
    if($row=mysqli_fetch_array($result))
    {
      $map= $row['map_link'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title><?php echo $pgdName;?></title>
    <link  rel="shortcut icon"  href="Directory/asset/images/brand.png"  type="image/x-icon" />
</head>
  <body>
  <?php 
 
//  include('header2.php');
?>
 <link rel="icon" type="image/x-icon" href="Directory/asset/images/brand.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">

  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <script src="assets/js/main.js"></script>

 
  <style>
    a,ul,li{
      text-decoration: none;
      font-size: 1rem;
    }
  </style>

<?php include('db.php');

//$pgdName=$_SESSION['pgdName'];
//echo $pgdName;
 //$pgdName=$_GET['pgdName'];

//  $qry="select * from pagoda where pgdName='$pgdName'";
//  $result=mysqli_query($conn,$qry);
//  if($row =( mysqli_fetch_array($result))) {
//     $photo="admin/". $row["photo"];}
?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-scrolled display-4 p-4" style="background-color:#87CEEB;color:navy;">
    <!-- <div class="container d-flex align-items-center" style="background-color:#87CEEB;font-size:larger;color:navy;"> -->
    <!-- <img src="Directory/asset/images/brand.png" alt="brand" style="height: 35px;" /> -->
      <!-- <h4><b><span>Pagoda Digital Directory</span></b></h4> -->
      <!-- <h1 class="logo me-auto display-7" ><a href="index.html"><font style="color:navy;font-weight:bold;"><span><b>Pagoda Digital Directory</b></span></font></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?php // echo $img;}?>" alt="" class="img-fluid"></a> -->
      <div class="container w-100 d-flex align-items-center g-0" style="background-color:#87CEEB;font-size:larger;color:navy;">
    
    <!-- <h4><b><span>Pagoda Digital Directory</span></b></h4> -->
    <h4 class="logo me-auto display-7 g-0" >
      <a href="index.html" class="navbar">
      <img src="Directory/asset/images/brand.png" alt="brand" style="height: 35px;" />
        <font style="color:navy;font-weight:bold;">
               <span><b>Pagoda Digital Directory</b></span>
        </font>
        
      </a></h4>
      <nav id="navbar" class="navbar" style="color:navy;">
        <ul>
          <li><a class="nav-link scrollto active" href="dhome"><font style="color:navy;"><b>မူလစာမျက်နှာ</b></font></a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">အကြောင်းအရာများရွေးချယ်ရန်</a></li>          
          <li><a class="nav-link scrollto" href="#team">အကြောင်းအရာများရွေးချယ်ရန်</a></li> -->
          <li class="dropdown"><a href="#"><font style="color:navy;"><b>အကြောင်းအရာများရွေးချယ်ရန်</b> <i class="bi bi-chevron-down"></i></font></a>
            <ul>
              <li><a href="history"><b>သမိုင်းကြောင်းများ</b></a></li>
              <li><a href="famousplace">ဖူးမြော်လေ့လာနိုင်သောနေရာများ</a></li>
              <li><a href="buddhism">သာသနာထွန်းကားမှု</a></li>
              <li><a href="ecclesiastes">ဒေသနာတော်များ</a></li>
              <li><a href="nationalart">ခေတ်အဆက်ဆက်ပြုပြင်မွမ်းမံထိန်းသိမ်းမှုများ</a></li>
              <li><a href="nativehonor">သမိုင်းဝင်အဖြစ်အပျက်များ</a></li>
              <!-- <li class="dropdown"><a href="#"><span>အထွေထွေ</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">ပွဲတော်များ</a></li>
                  <li><a href="#">ရတု</a></li>
                  <li><a href="#">သတင်းအချက်လက်များ</a></li>
                  
                </ul>
              </li>               -->
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li class="dropdown"><a href="#"><font style="color:navy;"><b>အထွေထွေ</b> <i class="bi bi-chevron-down"></i></font></a>
            <ul>
            <li><a href="displayYatu">ရတု</a></li>
            <li class="dropdown"><a href="#"><span>ပွဲတော်များ</span> <i class="bi bi-chevron-right"></i></a>
               <ul>
                <li><a href="gallery">ဓါတ်ပုံ</a></li>
                <li><a href="detailFestival">ဗီဒီယို</a></li>
               </ul>
            </li>
              
              
              <!-- <li class="dropdown"><a href="#"><span>အထွေထွေ</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">ပွဲတော်များ</a></li>
                  <li><a href="#">ရတု</a></li>
                  <li><a href="#">သတင်းအချက်လက်များ</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li> 
                </ul>
              </li>               -->
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="detailmap"><font style="color:navy;"><b>မြေပုံ</b></font></a></li>         
          <!-- <li><a class="nav-link scrollto" href="#services"><font style="color:navy;font-size:1.2rem"><b>ဓါတ်ပုံ</b></font></a></li> -->
          <!-- <li><a class="nav-link   scrollto" href="#portfolio"><font style="color:navy;"><b>ဗီဒီယို</b></</font></a></li> -->
          <li><a class="nav-link scrollto" href="information"><font style="color:navy;"><b>သတင်းအချက်အလက်များ</b></font></a></li>
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <li><a class="getstarted scrollto" href="pindex#about"><font style="color:navy;">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!--  -->
<section id="faq" class="faq section-bg mt-5" style="background-color:floralwhite;">
      <div class="container" data-aos="fade-up">
        <div class="section-title" >
          <h2 style="color:navy;font-size:1.2rem;"><?php echo $pgdName ?>၏သတင်းအချက်အလက်များ</h2>
        </div>
       
        
        

        <!-- <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-time icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"><b>ဘုရားပိတ်ချိန်</b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
          <p class="ms-5" style="color:navy;font-weight:bold;">
              ည ၈ နာရီ
            </p>
          </div>
        </li> -->
      <?php  ?>
        <div class="faq-list" >
          <ul >
          <?php 
           $qry="select * from information where pgdName='$pgdName'";
           $result=mysqli_query($conn,$qry);
           if($result->num_rows>0)
           {
            $i=4;
            while($row=mysqli_fetch_array($result)){

            ?>
             <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-time icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-<?php echo $i;?>" class="collapsed"><b><?php echo $row['title'];?></b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-<?php echo $i;?>" class="collapse " data-bs-parent=".faq-list">
              <p class="ms-5" style="color:navy;font-weight:bold;">
               <?php echo $row['detail_info']; ?>
             </p>
             </div>
         </li>  
         
       <?php
         $i++;
            }
           }

        ?>
            <!-- #region -->
            <li data-aos="fade-up" data-aos-delay="50">
           <i class="bx bx-phone icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><b>ဆက်သွယ်လှုဒါန်းနိုင်ရန်</b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list" >
                <p align="justify">
                   <?php
                     $qry="select * from admin join pagoda on admin.p_id=pagoda.p_id  where pagoda.pgdName='$pgdName'";
                     $result=mysqli_query($conn,$qry);
                     if($result->num_rows>0)
                     {
                       if($row=mysqli_fetch_array($result)){ 
                   echo '<div class="ms-5" >';
                   echo '<p  style="color:navy;"><b>ဆက်သွယ်ရန်ဖုန်း -'.$row['phone']."</b></p></div>";
                   
                   ?>
                </p>
              </div>
            </li>

            

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-block icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"><b>စည်းကမ်းချက်များ</b> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                <!-- <div class="col"> -->
                       <!-- <div class="card" style="background-color:aliceblue;"> -->
                          <div class="card-title mt-3"><h6 class="ms-5" style="color:navy;"><b>မြန်မာနိုင်ငံရှိ ဘုရားစေတီပုထိုးများတွင် လာရောက်ဖူးမြော် လည်ပတ်သူများလိုက်နာရမည့်အချက်များ</b></h6></div>
                                <div class="card-body col-6 d-flex justify-content-between p-5 gap-2">
                                      <img src="img/d4.jpg" class="img-responsive" width="200" height="150">
                                      <img src="img/d5.jpg" class="img-responsive" width="200" height="150">
                                      <img src="img/d2.jpg" class="img-responsive" width="200" height="150">
                                      <img src="img/d3.jpg"  class="img-responsive" width="200" height="140">                           
                                </div>
                                <div align="justify" class="ms-5" style="font-size:1em;line-height:2rem;">
                                      <b>(၁)ဘလောက်အင်္ကျီလည်ဟိုက်များဝတ်ဆင်ခြင်းမပြုရန်။ <br>
                                      (၂)ဘောင်းဘီတို၊စကပ်တိုများဝတ်ဆင်းခြင်မပြုရန်။<br>
                                      (၃)ဘုရားရင်ပြင်တော်ပေါ်တွင် ဖိနပ်၊ခြေအိတ်များဝတ်ဆင်၍သွားလာခြင်းမပြုရန်။
                                      </b>
                                </div>                             
                         <!-- </div> -->
                </div> 
                </p>    
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-map icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"><b>Google Map</b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                <?php 
                 $map_new=str_replace('width="600"','width="100%"',$map);
                 echo $map_new;
                 ?>
                 </p>
              </div>
            </li>

          </ul>
        </div>
    <?php }} ?>
    <div  class=" col-1 p-0 tusc pull-right mb-3">
      <a href="pindex" class="" style="background-color:skyblue;color:navy;"> &nbsp<<&nbsp</a>
   </div>
      </div>
     
    </section>
    <?php
    // include('footer.php');
    include('pddFooter.html');
    ?>
    <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>
  </html>

    
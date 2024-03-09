  <?php //session_start();?>
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
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
      <a href="dhome" class="navbar">
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
              <li><a href="nativehonor">သမိုင်းဝင်ဖြစ်ရပ်များ</a></li>
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

  Template Main JS File 
   <script src="assets/js/main.js"></script>
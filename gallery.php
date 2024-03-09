<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('db.php');
$pgdName=$_SESSION['pgdName'];
$limit =10;  
if (isset($_GET["page"]))
 {
 $page  = $_GET["page"]; 
 } 
else
{ 
 $page=1;
 }  
$start_from = ($page-1) * $limit;  
$result = mysqli_query($conn,"SELECT * FROM allimages  where allimages.pgdName='$pgdName' ORDER BY id ASC LIMIT $start_from, $limit");
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $pgdName;?></title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="Directory/asset/images/brand.png">

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

  

  

  <style>
     body{
      display: block;
     }
      .full-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 70%;
      background: rgba(0, 0, 0, 0.8); 
      display: flex;
      justify-content: center;
      align-items: center;
    
    }

    
    /* Optional: Style for content inside the container */
    .content {
      text-align: center;
      padding: 0px;
    }

     /* img {
    float: left;
    width:  100%;
    height: 90%; 
    
   }
      */
    
    #portfolio{
      
height: 200 px limportant;
width:250 px limportant;
position:relative;
left:80px;
top:-40px;
object-fit :cover;
}
.portfolio-img{
    border-radius:5px;
    height: 250px limportant;
    width:  250px limportant;
    position:relative;
    object-fit:cover;
    left:0px;
    top:-10px;
    object-fit:cover;


}
/* .card{
    border-radius: 10;
    cursor: pointer;
    margin-top: 100px limportant;
}
.card-body{
margin-top: -60px;
}
.bi{
    font-size: 25px;
}

*{
    padding : 0;
    margin: 0;
    box-sizing: border-box;

} 
 */  
  </style>


</head>



  <?php
  
   //include('header2.php');
   ?>
<link rel="icon" type="image/x-icon" href="Directory/asset/images/brand.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

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

 
  <style>
    a{
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

  

  
  <body> 
  <section id="portfolio" class="portfolio mt-5" align="left">
      <div class="container-fluid mt-5" data-aos="fade-up">
        <div class="section-title mt-5">
          <h4 class="mt-3" style="color:navy;"><b>ရွေးချယ်ကြည်ရှုရန်</b></h4>          
        </div>
        
        <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php 
           $i=0;
          if($result->num_rows > 0){
            while($row=mysqli_fetch_array($result)){
                $photo[]="admin/".$row['file_name'];
                $filename[]=$row['fName'];
            }
           
             foreach($photo as $img)
             { 
               
          ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="object-fit:contain;">
            <div class="portfolio-img"><img src="<?php echo $img ;?>" class="img-fluid" alt=""  ></div>
            <div class="portfolio-info">
              <h4 class="w-100"><?php echo $filename[$i] ;?></h4>              
              <a href="<?php echo $img; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $filename[$i]; ?>"><i class="bx bx-plus"></i></a>
              <a href="imgDetailInfo?fname=<?php echo $filename[$i];?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        <?php 
         $i++;

      } 
      
      
      //}?>
        </div>

      </div>
      <?php 
      $result_db = mysqli_query($conn,"SELECT COUNT(id) FROM allimages where pgdName='$pgdName'"); 
      $row_db = mysqli_fetch_row($result_db);  
      $total_records = $row_db[0];  
      // echo $total_records;
      $total_pages = ceil($total_records / $limit); 
      // echo  $total_pages; 
      $pagLink = "<ul class='pagination col-6' align='center'>";  
      for ($i=1; $i<=$total_pages; $i++) {
                    $pagLink .= "<li class='page-item' align='center'><a class='page-link' align='center' href='gallery?page=".$i."'>".$i."</a></li>";	
      }
      echo $pagLink . "</ul>";
    }  
      ?>
    </section>
    <!-- ======= End Photo Slideshow Section ======= -->
 
   <?php 
  // include('footer.php'); 
  include('pddFooter.html');
   ?>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
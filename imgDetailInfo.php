<?php 
session_start();
$pgdName=$_SESSION['pgdName'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $pgdName; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>
<?php 
  include('db.php');
  include('header2.php');
  $fname=$_GET['fname'];
  
?>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container mt-5 align-items-center" align="center">

        <div class="row gy-4">

          <div class="col-md-12 d-dflex p-5 " align="center">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                 <?php
                   $qry="select * from allimages where fName='$fname'";
                   $result=mysqli_query($conn,$qry);
                   while($row=mysqli_fetch_array($result)){
                    $photo[]="admin/".$row['file_name'];
                    $detail=$row['detail_info'];
                   }
                   foreach($photo as $img){
                 ?>
                <div class="swiper-slide d-flex p-5">
                  <img src="<?php echo $img;?>" class="img-responsive" height="700" alt="">
                </div>
               <?php }?>                
              </div>
              <div class="swiper-pagination"></div>
              <div class="portfolio-description">
              <h2><?php // echo $fname; ?></h2>
              <p>
              
              <?php echo $detail; ?>
              
              </p>
            </div>
            </div>
          </div>
          <br>
          
            
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  

 <?php include('footer.php');?>
  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
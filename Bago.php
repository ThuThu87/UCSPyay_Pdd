
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Pagoda Digital Directory</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="Directory/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Directory/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Directory/css/style.css" rel="stylesheet">
    <style>
         .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
          transition: 0.3s;
          width: 100%;
          border-radius: 25px;
        }
        
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        
        img {
          border-radius: 25px 25px 0 0;
        }
        
    </style>
</head>

<body>
    <!-- Topbar Start -->
         <?php 
          include("dheader.php");
          include("db.php");
          ?>
    
    <div class="container-fluid mb-5" style="background-color:#f8fcee">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <div><br></div>
            <h1 class="font-weight-semi-bold text-uppercase mb-3 text-primary section-title px-5"><span ><font color=" #154360">ပဲခူးတိုင်းဒေသကြီး</font></span></h1>
            <div><br><br></div>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-6 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-1 rounded mb-4" style="background-color:#f8fcee">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" style="background-color:#f8fcee">
                        <a href="https://shwesandawpagoda.com.mm/"><img class="img-fluid w-100" src="Directory/img/3.jpg" alt=""></a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3" style="background-color:#f8fcee">
                        <h6 class="text-truncate mb-3"><font color="#2b7749"><b>ရွှေဆံတော်ဘုရား</b></h6>
                        <div class="d-flex justify-content-center">
                            <h6><font color="#2b7749"><b>ပြည်မြို့နယ်</b></h6>
                        </div>
                    </div>
                    <div class="card-footer rounded d-flex justify-content-between border-1" style="background-color:#f8fcee">
                        <a href="https://shwesandawpagoda.com.mm/" class="btn btn-sm  p-0" ><i class="fas fa-eye mr-1"></i><font color="#2b7749"><b>ပိုမိုကြည့်ရှုရန်</b></font></a>                        
                    </div>
                </div>
            </div>
           
            <!-- <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-1 mb-4" style="background-color:#f8fcee">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100 h-50 " src="Directory/img/1.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3" style="background-color:#f8fcee">
                        <h6 class="text-truncate mb-3">ဆယ်ထပ်ကြီးဘုရား</h6>
                        <div class="d-flex justify-content-center" style="background-color:#f8fcee">
                            <h6>ပြည်မြို့နယ်</h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between border-1" style="background-color:#f8fcee">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye mr-1"></i>ပိုမိုကြည့်ရှုရန်</a>                       
                    </div>
                </div>-->
            </div> 
           
           
        </div>
    </div>
    <!-- Products End --> 

    <!-- Footer Start -->
   <?php include("dfooter.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="Directory/lib/easing/easing.min.js"></script>
    <script src="Directory/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="Directory/mail/jqBootstrapValidation.min.js"></script>
    <script src="Directory/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="Directory/js/main.js"></script>
</body>

</html>
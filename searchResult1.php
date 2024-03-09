<?php   
 include("dheader.php");
?>

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
    <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
    <link rel="stylesheet" type="text/css" href="admin/css/coreui" />
    <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
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
          /* width: 100%; */
          border-radius: 25px;
        }
      .container{
        background-color:#f8fcee;
      }
        
        .card:hover {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        
        img {
          border-radius: 35px 35px 0 0;
        }
        .background {
        /* background-image: url("/image.jpg"); */
        background-size: 200px;
        width: 300px;
        height: 250px;
        /* border: solid 2px rgba(244, 246, 248, 0.956); */
      }
      a,h3,h4,h5,h6{
      color:#2b7749;
    }
        
    </style>
</head>
<?php 
   include("db.php");
  
?>
<body>
    <!-- Topbar Start -->
         
 <div class="container-fluid mb-5" style="background-color:#f8fcee">
    <div class="row row-cols-4 row-cols-md-4 ms-5 g-4">
        <?php 
         $prefix=$_POST['search'];
         $prefix=explode(" ", trim($prefix));
         $queryString = "";
        $prefix = array_unique($prefix);
            foreach($prefix as $c) {
                $queryString .= "`subCatName` LIKE '%{$c}%' OR ";
            }
            $queryString = rtrim($queryString, " OR ");

            $query = "SELECT * FROM subcategory WHERE {$queryString}";

        // $result = mysqli_query($conn,"SELECT * FROM subcategory where subCatName like '%$prefix%'");
        $result = mysqli_query($conn,$query);   
          while ($row =( mysqli_fetch_array($result))) {
         ?>
            <div class="col col-lg-3  mt-5 ms-5">
                <div class="card product-item border-1 rounded mb-4" style="background-color:#f8fcee">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" style="background-color:#f8fcee">
                        <!-- <h6> -->
                      <?php
                      // echo "<a href=detailSearch?title=",urlencode($row['subCatName'])," class='btn text-green p-0'>";
                        // echo $row['subCatName']."</h6>";
                        echo '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode( $row['photo'] ).'" class="img-fluid img-responsive background w-100" height="250">';
                       ?> 
                       <!-- <img class="img-fluid w-100" src="Directory/img/2.jpg" alt=""></a> -->
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3" style="background-color:#f8fcee">
                        <h6 class="text-truncate mb-3"><font color=""><b><?php echo $row['subCatName']; ?></b></font></h6>
                        <!-- <div class="d-flex justify-content-center">
                            <h6>ဗဟန်းမြို့နယ်</h6>
                        </div> -->
                    </div>
                    <div class="card-footer d-flex justify-content-between border-1" style="background-color:#f8fcee;">
                    <?php
                      echo "<a href=detailSearch?title=",urlencode($row['subCatName'])," class='btn btn-sm text-green p-0'>";?>
                      <i class="fas fa-eye mr-1"></i><font color="#2b7749"><b>ပိုမိုကြည့်ရှုရန်</b></font></a>                        
                    </div>
                </div>
            </div>       
           
           <?php }?>
           
        </div>
    </div>
          </div>
    

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

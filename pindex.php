<?php 
  session_start();
  $pgdName=$_SESSION['pgdName'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pgdName;?> </title>
      <!--  -->
      <link rel="icon" type="image/x-icon" href="Directory/asset/images/brand.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
    <link rel="stylesheet" type="text/css" href="admin/css/coreui" />
    <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
 <!-- lang select -->
 <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet" />
<link href="css/flag-icon.min.css" rel="stylesheet"> -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" rel="stylesheet" /> -->
<link href="Directory/css/imagecaption.css" rel="stylesheet" />
<link
      rel="stylesheet"
      href="Directory/css/bootstrap.min.css"
    />
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- lang select -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <style>
    #div.container{
        background-color:snow;
      }
      h3,h4,h5{
      color:#06283D;
    }
    a{
      color:#06283D;
    }
    .btn-primary {
  color: #fff;
  background-color: #2b7749;
  border-color: #357ebd;
}
      #work {
  padding-top: 70px;
  padding-bottom: 30px;
  background-color: snow;
}
 #card .h5,.h4{
  color: black;
 }
   .background { 
        background-image: url("/image.jpg");
        background-size: 200px;
        width: 200px;
        height: 150px;
        border: solid 2px rgba(244, 246, 248, 0.956);
      }
      
      .card {
          box-shadow: 0 20px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 100%;
          border-radius: 50px;
          height:250px;
          
        }
        
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        
        #radius {
          border-radius: 50px 50px 5px 5px;
        } 
        
        /* .container {
          padding: 2px 16px;
        } */
        
/* .text-block {
  position: absolute;
  top: 150px;
  right: 30px;
  -webkit-text-fill-color: white;
  /* background-color: black; */
  /* color: white;
  padding-left: 20px;
  padding-right: 20px; */
  
/* } */ */
.a{
  text-decoration: none;
}
      </style>
      
  </head>
<body>
  <!-- logo -->
  
<?php
 include("header2.php");
 //get pagoda Name
// $pgdName=$_GET['pgdName'];  
//$_SESSION['pgdName']=$pgdName;

 $result = mysqli_query($conn,"SELECT * FROM images where pgdName='$pgdName' ");
?>
<section id="center" class="center_home vh-100">
<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="1000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"><!-- First-Slide -->
                          <?php                        
                            if ($row =( mysqli_fetch_array($result))) {
                              $photo="admin/". $row["file_name"];
                              ?>
                              <img src="<?php echo $photo; ?>" height="640" alt="ssd5" class="img-responsive"> 
                              <?php                         
                                }
                                ?> 
                  </div>          
                     <?php                  
                      while ($row =( mysqli_fetch_array($result))) {
                        $photo="admin/". $row["file_name"];
                        echo '<div class="item">';
                        ?>
                        <img src="<?php echo $photo;?>" height="640" alt="ssd5" class="img-responsive"> 
                        <?php
                             echo '</div>';
                             }
                         ?>                 
                   </div> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				     <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>            </a>  
              
      </div>
      </div>
      <script src="js/custom.js"></script>    
  
</section>
<section class="vh-auto" id="about" style="background-color:floralwhite;">
  <div class="container-fluid d-flex p-5 mb-5 align-items-center justify-content-center" style="background-color:floralwhite;">
  <!-- <div class="container justify-content-center">	
   </div> -->
   <div class="row col-10 g-4  ms-3" style="background-color:#87CEEB;">
   <h4 style="color:navy;font-weight:bold;" data-aos="zoom-in" data-aos-delay="300"  align="center"><?php echo $pgdName ?>သမိုင်းအကျဉ်း</h4>
   <div class="container-fluid mt-5">
    <div class="row d-flex">
   <?php   
   $result = mysqli_query($conn,"SELECT * from pagoda where pgdName='$pgdName'");     
   while ($row =( mysqli_fetch_array($result))) {
    // $link=$row['eng_title'];
    ?>  
  <div class="col-12 card p-2 mb-4 vh-auto align-items-center">
  <p align="justify d-flex align-items-center" style="object-fit:contain;">
  <h6 style="color:navy;font-weight:normal;line-height:2.2rem;text-indent:5%;" data-aos="zoom-in" data-aos-delay="300" align="justify"><?php echo $row['history']; ?></h6>
  </p>    
</div>
    <?php }?>
  </div>
</div>

   <!--  -->
	
	<!-- <a href="history"><img src="img/zayti.jpg"  class="img_responsive background ">	</a><h4><a href="history">သမိုင်း</a></h4><br> -->
   </div>
   </div>
 </div>
</section>
<?php include("footer.php");?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


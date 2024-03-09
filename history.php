<?php 
session_start();
// $title=$_GET['title'];
$pgdName=$_SESSION['pgdName'];
echo $pgdName;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pgdName;?></title>
      <!--  -->
      <link rel="icon" type="image/x-icon" href="Directory/asset/images/brand.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
    <link rel="stylesheet" type="text/css" href="admin/css/coreui" />
    <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
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
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .background {
        /* background-image: url("/image.jpg"); */
        background-size: 200px;
        width: 100%;
        height: 250px;
        /* border: solid 2px rgba(244, 246, 248, 0.956); */
      }
      .card {
          /* box-shadow: 0 20px 8px 0 rgba(0,0,0,0.2); */
          transition: 0.3s;
          width: 250px;
          /* height:200px;  */
          border-radius: 60px;
          
          
        }
        
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        
        /* img {
          border-radius: rounded-circle;
          height: 270px;
        }
         */
        /* .container {
          padding: 2px 16px;
        } */
        #div.container{
        background-color: snow;
      }
      #work {
      padding-top: 70px;
      padding-bottom: 30px;
      background-color:snow;
    }
    h3,h4,h5,h6{
      color:#06283D;
    }
    a{
      color:#06283D;
    }
    .btn-primary {
  color: #fff;
  background-color: #06283D;
  border-color: #06283D;
}
    
.flex-container {
  display: flex;
  flex-direction: row;
}
.a{
  text-decoration: none;
}

      </style>
  </head>
<body>
  <!-- logo -->
 
<?php 
include("header2.php");

?>

<section id="work" class="clearfix">
<div align="left">
<a href="pindex#about"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
</div>
<div class="container flex-container">
  <div class="row col-12 card justify-content-center">
   <div class="work_1 clearfix mt-3" data-aos="fade-right" data-aos-delay="50"><b><?php echo $pgdName; ?>၏ သမိုင်းများအား ရွေးချယ်ကြည်ရှု့ရန်</b></h4>	
   </div>
   <div class="row d-flex g-2 mb-5">   
          <?php   
          //  $result = mysqli_query($conn,"SELECT * FROM famous_places where catName='ဖူးမြော်လေ့လာနိုင်သောနေရာများ' and pgdName='$pgdName'"); 
          $result = mysqli_query($conn,"SELECT * FROM history join pagoda on pagoda.p_id=history.p_id where history.catName='သမိုင်းကြောင်းများ' and history.pgdName='$pgdName'");  

          while ($row =( mysqli_fetch_array($result))) {
            ?>            
    <div class="card rounded shadow shadow mt-5 ms-5 g-0" data-aos="fade-right" data-aos-delay="50" style="max-width: 540px; object-fit:contain; background-color:none;">
      <div class="row">
        <div class="col-md-5 ms-0 data-aos="zoom-in" data-aos-delay="50" justify-content-start">
          <?php
          $cat="သမိုင်းကြောင်းများ";
          $sub=urlencode($row['subCatName']);
          $photo="admin/". $row["icon"];
        echo "<a href=detail?title=$sub&catName=$cat>";
          echo '<img src="'.$photo.'" class="img-responsive rounded shadow shadow" width="200" height="270">';
          echo '</a>';
          ?>    
       </div>
       <div class="col-md-7" style="line-height:80%;" data-aos="zoom-in" data-aos-delay="50" align="left">
          <div class="card-body" >
          <h6 class="card-title"><b><?php echo $row['subCatName'];?></b></h6>
          <p class="card-text big" align ="justify"><?php 
            $substr=mb_substr($row['detail_info'],0,100);       
            echo "<h6>".$substr.".......</h6></p>";
            echo "<p align='left'><a href=detail?title=$sub&catName=$cat class='btn btn-primary'>ပိုမိုဖတ်ရှုရန်</a></p>";?>      
          </div>
        </div>
      </div>
   </div> 
   <!-- card end -->  
<?php }?>


   </div>
  </div>
  </div>

  </section>
  <?php 
  //include("footer.php");
  include('pddFooter.html')
   ?> 
</body>
</html>


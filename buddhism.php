<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagoda Digital Directory</title>
    <link rel="icon" type="image/x-icon" href="Directory/asset/images/brand.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/animate.css">
  <!-- <link href="css/card.css" type="text/css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
  <link rel="stylesheet" type="text/css" href="admin/css/coreui" />
  <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .background {
        /* background-image: url("/image.jpg"); */
        background-size: 200px;
        width: 200px;
        height: 150px;
        /* border: solid 2px rgba(244, 246, 248, 0.956); */
      }
      #pankhaing{
        background-color:white;
      }
      /* #div.container{
        background-color: greenyellow;
      } */
      #work {
      padding-top: 70px;
      padding-bottom: 30px;
      background-color: floralwhite;
    }
    h3,h4,h5{
      color:#2b7749;
    }
    a{
      color:#2b7749;
    }
    .btn-primary {
  color: #fff;
  background-color: #2b7749;
  border-color: #357ebd;
}
      </style>
  </head>
<body>
  <!-- logo -->
 
<?php
 include("header2.php");
 $pgdName=$_SESSION['pgdName'];
 
 ?>

<section id="work" class="mt-3">
<div class="container-fluid vh-auto mb-5" align="left">
<a href="pindex#about"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
<?php  // echo $pgdName;?>
</div>
  <div class="container col-10 mt-5" style="background-color:none;">
  <div class="row">
   <div class="work_1 clearfix">
	<h3 style="line-height:2rem;font-size:1.5rem;"  data-aos="fade-left" data-aos-delay="50"><b><?php echo $pgdName ?>၏သာသနာထွန်းကားမှု့ဆိုင်ရာများ ရွေးချယ်ကြည်ရှု့ရန်</b></h3><br>	
   </div>
   <div class="row g-4">
   <?php  
  //  $result = mysqli_query($conn,"SELECT * FROM famous_places join pagoda on pagoda.p_id=famous_places.p_id where famous_places.catName='ဖူးမြော်လေ့လာနိုင်သောနေရာများ' and famous_places.pgdName='$pgdName'");   
   $result = mysqli_query($conn,"SELECT * FROM buddhism join pagoda on pagoda.p_id=buddhism.p_id where buddhism.catName='သာသနာထွန်းကားမှု' and buddhism.pgdName='$pgdName'");  
   while ($row =( mysqli_fetch_array($result))) {
    ?>
   <div class="col-md-4">
    <div class="card shadow shadow" data-aos="zoom-in" data-aos-delay="50" style="border-radius:10%;box-shadow:10px 20px 10px 10px;">
    <?php
    $cat="သာသနာထွန်းကားမှု";
    $sub=urlencode($row['subCatName']);
    $photo="admin/". $row["photo"];
   echo "<a href=detail?title=$sub&catName=$cat>";?>
   <img src="<?php echo $photo; ?>" class="img_responsive " data-aos="fade-in" data-aos-delay="50" style="border-radius:20px 20px 0px 0px;" width="150" height="250">
   <?php
    echo '</a>';
    ?>  
      <div class="card-body mt-0 justify-content-start" align="center">
        <br><h6 class="card-title" style="line-height:2rem;"  data-aos="fade-right" data-aos-delay="50"><b><?php echo $row['subCatName'];?></b></h6>
        <p class="card-text" data-aos="zoom-in" data-aos-delay="50">
       <?php echo "<a href=detail?title=$sub&catName=$cat class='btn btn-primary'>"; echo "ပိုမိုဖတ်ရှု့ရန်"; ?></a></h4><br></p>
        </div>
    </div>
  </div>
  
<?php }?>
<br>
</section>
   </div>
  </div>
  </div>

  </section> 
</body>
    
<?php 
//include("footer.php"); 
include('pddFooter.html');
?>
</html>


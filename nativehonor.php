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
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .background {
        /* background-image: url("/image.jpg"); */
        background-size: 200px;
        width: 300px;
        height: 250px;
        /* border: solid 2px rgba(244, 246, 248, 0.956); */
      }
      
      .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
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
        
        /* .container {
          padding: 2px 16px;
        } */
        
      #div.container{
        background-color: greenyellow;
      }
      #work {
      padding-top: 70px;
      padding-bottom: 30px;
      background-color: #effdea;
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
 
<?php include("header2.php");?>

<section id="work" class="container-fluid popular-pack" style="background-color:floralwhite;">
<div class="mt-5" align="left">
<a href="index#about"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
</div>
  <div class="container col-10">
  <div class="row">
   <div class="work_1 clearfix">
	<h3 style="font-size:1.2rem;color:navy;"><b><?php echo $pgdName ?>၏သမိုင်းဝင်ဖြစ်ရပ်များအား ရွေးချယ်ကြည်ရှု့ရန်</b></h3><br>	
   </div>
     <div class="row pack-row g-4">
   <?php   
  $result = mysqli_query($conn,"SELECT * FROM historical_event join pagoda on historical_event.p_id=pagoda.p_id where catName='သမိုင်းဝင်ဖြစ်ရပ်များ' and historical_event.pgdName='$pgdName'");  
   while ($row =( mysqli_fetch_array($result))) {
    ?>
   <div class="col-md-3">
    <div class="card" style="border-radius:20px 20px 20px 20px;">
    <?php
    $cat="သမိုင်းဝင်ဖြစ်ရပ်များ";
    $sub=urlencode($row['subCatName']);
    $photo="admin/". $row["icon"];
   echo "<a href=detail?title=$sub&catName=$cat>";?>
   <img src="<?php echo $photo; ?>" class="img_responsive" style="border-radius:20px 20px 0px 0px; width="150" height="250">
   <?php
    echo '</a>';
    ?>  
      <div class="card-body" align="center">
        <br><h6 class="card-title"><b><?php echo $row['subCatName'];?></b></h6><br>
        <p class="card-text" >
       <?php echo "<a href=detail?title=$sub&catName=$cat class='btn btn-primary'>"; echo "ပိုမိုဖတ်ရှု့ရန်"; ?></a></h4><br></p>
        </div>
    </div>
  </div>
  
<?php }?>
<br>

   </div>
  </div>
  </div>
</section>
</body>
    
<?php
// include("footer.php");
include('pddFooter.html');
 ?>
</html>


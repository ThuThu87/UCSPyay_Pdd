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
  <!-- <link href="css/card.css" type="text/css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
  <link rel="stylesheet" type="text/css" href="admin/css/coreui" />
  <link rel="stylesheet" type="text/css" href="admin/css/coreui-grid.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
       popular-pack .colpack {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    background-color: #fff;
    margin-bottom: 30px;
}
    </style>
  </head>
<body>
  <!-- logo -->
 
<?php include("header2.php");?>

<section id="work" class="container-fluid popular-pack" style="background-color:floralwhite;">
<div  class="mt-5" align="left">
<a href="pindex#about"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
</div>
  <div class="container">
  <div class="row " >
   <div class="work_1 clearfix">
	<h3 style="font-size:1.2rem;"><b><?php echo $pgdName ?>၏ဒေသနာတော်များ ရွေးချယ်ကြည်ရှု့ရန်</b></h3>
   </div>
   <div class="row pack-row g-4">
   <?php   
   $result = mysqli_query($conn,"SELECT * FROM ecclesiastes join pagoda on ecclesiastes.p_id=pagoda.p_id  where ecclesiastes.catName='ဒေသနာတော်များ' and ecclesiastes.pgdName='$pgdName'");  
   while ($row =( mysqli_fetch_array($result))) {
    ?>
   <div class="col-md-3">
        <div class="card rounded" style="border-radius:20px 20px 20px 20px;">
          <?php
          $cat="ဒေသနာတော်များ";
          $cat=urlencode($cat);
          $sub=urlencode($row['subCatName']);
          $photo="admin/". $row["icon"];
          echo "<a href=detail?title=$sub&catName=$cat>";?>
          <img src="<?php echo $photo; ?>" class="img_responsive" style="border-radius:5px 5px 0px 0px; width="150" height="250">
          <?php
          echo '</a>';
          
          ?> 
          <br><h6 class="card-title" align="center"><b><?php echo $row['subCatName'];?></b></h6><br> 
        
      </div>
   </div>
  
<?php }?>


   </div>
  </div>
  </div>
</section>
 <?php
  //include("footer.php");
  include('pddFooter.html');
   ?>
</body>
    

</html>


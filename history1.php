<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shit Thaung Pagoda</title>
      <!--  -->
      <link rel="icon" type="image/x-icon" href="assets/img/icon1/domain.png">
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
    <script src="admin/js/coreui.esm.js"></script>
    <script src="admin/js/coreui.esm.min.js"></script>
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
          border-radius: 5px;
        }
        
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        
        img {
          border-radius: 15px 15px 0 0;
        }
        
        /* .container {
          padding: 2px 16px;
        } */
        
    
      </style>
  </head>
<body>
  <!-- logo -->
 
<?php include("header.php");?>

<section id="work" class="clearfix">
<div align="left">
<a href="index#work"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
</div>
  <div class="container">
  <div class="row">
   <div class="work_1 clearfix">
	<h3>သမိုင်း၊စေတီတော်နှင့်သက်ဆိုင်သော အကြောင်းအရာများအား ရွေးချယ်ကြည်ရှု့ရန်</h3><br>	
   </div>
   <div class="row row-cols-4 row-cols-md-4 g-4">
   <?php   
  //  $result = mysqli_query($conn,"SELECT * FROM subcategory where catName='သမိုင်းကြောင်းများ'");  
  $prefix="သ";
  $result = mysqli_query($conn,"SELECT * FROM subcategory where catName like $prefix.'%'");  
   while ($row =( mysqli_fetch_array($result))) {
    ?>
   <div class="col">
    <div class="card">
    <?php
    echo "<a href=detail?title=",urlencode($row['subCatName']),">";
    echo '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode( $row['photo'] ).'" class="img_responsive background ">';
    echo '</a>';
    ?>  
    <!-- <img src="img/in1.jpg"  class="card-img-top img-responsive background " alt="..."> -->
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['subCatName'];?></h5>
        <p class="card-text" align="justify"><?php 
        $info=$row['detail_info'];
        $info=substr($info,0,300);
        echo $info; ?>
        </p>
        <!-- <a href="#" class="btn btn-primary">Deatial</a> -->
        <?php echo "<a href=detail?title=",urlencode($row['subCatName'])," class='btn btn-primary'>"; echo "ပိုမိုဖတ်ရှု့ရန်"; ?></a></h4><br>
        </div>
    </div>
  </div>
  
<?php }?>
<br>

   </div>
  </div>
  </div>

  
</body>
    
<?php include("footer.php"); ?>
</html>


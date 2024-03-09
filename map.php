<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagoda Digital Directory</title>
      <!--  -->
      <link rel="icon" type="image/x-icon" href="../Directory/asset/images/brand.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/animate.css">
  <link href="css/card.css" type="text/css" rel="stylesheet">
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
 
<?php include("header.php");?>

<section id="work" class="clearfix">
<div align="left">
<a href="index#work"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
</div>
  <div class="container">
  <div class="row">
   <div class="work_1 clearfix">
	<h3>မြေပုံနှင့်ဆိုင်ရာများရွေးချယ်ကြည်ရှု့ရန်</h3><br>	
   </div>
   <div class="row row-cols-4 row-cols-md-4 g-4">
   <?php   
   $result = mysqli_query($conn,"SELECT * FROM map where catName='မြေပုံ'");  
   while ($row =( mysqli_fetch_array($result))) {
    ?>
   <div class="col">
    <div class="card">
    <?php
    echo "<a href=detailmap?title=",urlencode($row['subCatName']),">";
    echo '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode( $row['photo'] ).'" class="img_responsive " width="150" height="250">';
    echo '</a>';
    ?>  
    <!-- <img src="img/in1.jpg"  class="card-img-top img-responsive background " alt="..."> -->
      <div class="card-body" align="center">
        <br><h5 class="card-title"><?php echo $row['subCatName'];?></h5><br>
        <p class="card-text" ><?php 
       ?>
        
        <!-- <a href="#" class="btn btn-primary">Deatial</a> -->
        <?php echo "<a href=detailmap?title=",urlencode($row['subCatName'])," class='btn btn-primary'>"; echo "ပိုမိုကြည့်ရှုရန်"; ?></a></h4><br></p>
        </div>
    </div>
  </div>
  
<?php }?>
<br>

   </div>
  </div>
  </div>

  <br><br><br><br><br><br>
   </body>
<?php include("footer.php"); ?>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shwe San Daw Pagoda</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/animate.css">
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
	<h3>ထင်ရှားသောနေရာများအား ရွေးချယ်ကြည်ရှု့ရန်</h3><br>	
   </div>
   <div class="work_2">
   <?php   
   $result = mysqli_query($conn,"SELECT * FROM subcategory where catName='ထင်ရှားသောနေရာများ'");  
   while ($row =( mysqli_fetch_array($result))) {
    ?>
   
    <div class="col-sm-3">
	 <div class="work_3">
  
    <?php
    echo "<a href=detail?title=",urlencode($row['subCatName']),">";
    echo '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode( $row['photo'] ).'" class="img_responsive background ">';
    echo '</a>';
    ?>
    <h4>
    <?php echo "<a href=detail?title=",urlencode($row['subCatName']),">"; echo $row['subCatName']; ?></a></h4><br>
	  
	 </div>    
	</div>
	<?php }?>
	<!-- <a href="history"><img src="img/zayti.jpg"  class="img_responsive background ">	</a><h4><a href="history">သမိုင်း</a></h4><br> -->
   </div>
   
 </div>
   </div>
</body>
<?php include("footer.php"); ?>
</html>

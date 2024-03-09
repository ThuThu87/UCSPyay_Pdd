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
 
<?php 
include("header.php");
$monName=$_GET['name'];

?>

<section id="work" class="clearfix">
<div align="left">
<a href="festival"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
</div>
  <div class="container">
  <div class="row">
   <div class="work_1 clearfix">
	<h3><?php echo $monName ?>လတွင်ပြုလုပ်သော ပွဲတော်များအားရွေးချယ်ကြည်ရှုနိုင်ပါသည်</h3><br>	
   </div>
   <div class="row row-cols-4 row-cols-md-4 g-4">
   <?php   
  $result = mysqli_query($conn,"SELECT * FROM festival where monthName='$monName'");  
  // $prefix="စေတီ";
  // $result = mysqli_query($conn,"SELECT * FROM subcategory where subCatName like '%$prefix%'");
   $i=0;  
   while ($row =( mysqli_fetch_array($result))) {
     $i++;
    ?>
   <div class="col">
    <div class="card rounded">
    <?php
    echo "<a href=detailFestival?title=",urlencode($row['f_name']),">";
    echo '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode( $row['photo'] ).'" class="img_responsive" width="150" height="250">';
    echo '</a>';
    ?>  
   
      <div class="card-body" align="center">
      <br><h5 class="card-title"><?php echo $row['f_name'];?></h5><br>
        <p class="card-text" >         
        <a href="#show<?php echo $i;?>" class="btn btn-primary mb-5">ပိုမိုကြည့်ရှု့ရန်</a> 
      </div>
    </div>
  </div>
  
  <?php }?>
<br>

   </div>
  </div>
  </div>
</section>

<?php   
         
      $result = mysqli_query($conn,"SELECT * FROM festival where monthName='$monName'");  
      $j=0; 
   while ($row =( mysqli_fetch_array($result))) {
    $j++;
    ?>
<section id="show<?php echo $j;?>">
<div class="ms-5">
<br><br><br>
<div class="card ms-5 mb-1" style="max-width:90%;" align="center">
<div class="row ms-5 mt-5 ">
   <?php if($j%2!=0){?>
    <div class="col-md-6 ms-1 mt-3 " >
  <?php 
    $video=$row['video'];    
    $url=str_replace('watch?v=','embed/',$video);
   ?>

<iframe  src="<?php echo $url;?>" frameborder="0" width="650px" height="450px" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     
    </div>
    <div class="col-md-4 ms-1">
      <div class="card-body" align="justify">
        <h5 class="card-title mt-3 ms-5"><?php echo $row['f_name'];?></h5>
        <p class="card-text mt-2 ms-5"><?php echo $row['detail_info'];?></p>
        <div  class="tusc pull-right mb-3">         
         <a href="#work" class="read_more">  &nbsp <<&nbsp</a>       
         </div>
      </div>
      <div class="card-footer " align="right">
        <div  class="tusc pull-right mb-3">
      
         </div>
      </div>
    </div>
    <?php }else{?>
      <div class="col-md-6">
      <div class="card-body" align="justify">
        <h5 class="card-title mt-3"><?php echo $row['f_name'];?></h5>
        <p class="card-text mt-2 "><?php echo $row['detail_info'];?></p> 
        <div  class="tusc pull-right mb-3">         
         <a href="#work" class="read_more">  &nbsp <<&nbsp</a>       
         </div>       
      </div>
      <div class="card-footer " align="right">
        
      </div>
    </div>
    <div class="col-md-4 mr-5 mb-3စ mt-3" >
  <?php 
    $video=$row['video'];    
    $url=str_replace('watch?v=','embed/',$video);
   ?>

<iframe  src="<?php echo $url;?>" frameborder="0" width="650px" height="450px" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     
    </div>
    <?php }?>

  </div>
</div>
</section>
<?php }?> 
<div class="mt-5"></div>

  <br><br><br><br><br><br>
</body>
    
<?php include("footer.php"); ?>
</html>


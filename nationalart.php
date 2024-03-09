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
  <link href="css/card.css" type="text/css" rel="stylesheet">
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
 
<?php include("header2.php");?>
<section id="work" class="container-fluid popular-pack" style="background-color:floralwhite;">
<div class="mt-5" align="left">
<a href="pindex#about"><font size="4"> <<ရှေ့သို့ &nbsp;</font></a>
</div>
  <div class="container">
  <div class="row">
   <div class="work_1 clearfix mt-5">
	<h3 style="font-size:1.2rem;"><b><?php echo $pgdName ?>၏ခေတ်အဆက်ဆက် ပြုပြင်မွမ်းမံထိန်းသိမ်းမှုများအား ရွေးချယ်ကြည်ရှု့ရန်</b></h3><br>	
   </div>
   <div class="row pack-row g-4">
   <?php   
   $result = mysqli_query($conn,"SELECT * FROM national join pagoda on national.p_id=pagoda.p_id where national.catName='ခေတ်အဆက်ဆက် ပြုပြင်မွမ်းမံထိန်းသိမ်းမှုများ' and national.pgdName='$pgdName'");  
   while ($row =( mysqli_fetch_array($result))) {
    ?>
   <div class="col-md-3">
    <div class="card" style="border-radius:20px 20px 20px 20px;">
    <?php
    $cat="ခေတ်အဆက်ဆက် ပြုပြင်မွမ်းမံထိန်းသိမ်းမှုများ";
    $cat=urlencode($cat);
    $sub=urlencode($row['subCatName']);
    $photo="admin/". $row["icon"];
   echo "<a href=detail?title=$sub&catName=$cat>";?>
   <img src="<?php echo $photo; ?>" class="img_responsive" width="150" height="250" style="border-radius:20px 20px 0px 0px;">
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
//include("footer.php");
include('pddFooter.html');
?>
</html>


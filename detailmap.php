<?php session_start();
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
  
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .background {
        /* background-image: url("/image.jpg"); */
        background-size: 200px;
        width: 200px;
        height: 150px;
        /* border: solid 2px rgba(244, 246, 248, 0.956); */
      /* }
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
} */
.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
            /* width: 100%; */
          border-radius: 10px;
        }
        
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        } 
/*   
#div.container{
        background-color: greenyellow;
      }
      #work {
      padding-top: 70px;
      padding-bottom: 30px;
      background-color: #effdea;
    }
   */
      </style>
  </head>
<body>
  <!-- logo -->
 
<?php include("header2.php");?>
<?php   
    $pgdName=$_SESSION['pgdName']  ;
   $result = mysqli_query($conn,"SELECT map.* FROM map join pagoda on map.p_id=pagoda.p_id where catName='မြေပုံ' and  map.pgdName='$pgdName'");  
   if ($row =( mysqli_fetch_assoc($result))) {
    $subCatName=$row['subCatName']   ;
    echo "<body>$subCatName</body>";
    ?>
    <div><br></div>
    <div class="row col-12 mt-5 work_1 clearfix" data-aos="zoom-in" data-aos-delay="50">
      <br>
	<h3 style="font-size:1.2rem;" class="mt-3 mb-2"><b><?php  echo $subCatName ?> ရှိဘုရားများအားကြည့်ရှု့ဖူးမြော်နိုင်ပါသည်။</b></h3>
   </div>
<div>
<div class="card col-12 ms-5 mb-3" style="max-width:95%;" align="center">
<div class="row mt-5 ">
    <div class="col-md-7 ms-1 mt-3 rounded-start" data-aos="fade-left" data-aos-delay="50">
      <?php 
       $photo="admin/". $row["photo"];
       echo '<img src="'.$photo.'"  class="img-fluid rounded-start"  width="100%" height=100%" >';
      ?> 
    </div>
    <div class="col-md-4 ms-3">
      <div class="card-body" align="justify" data-aos="fade-right" data-aos-delay="50">       
        <?php 
        // $result1 = mysqli_query($conn,"SELECT map.* FROM map join pagoda on map.p_id=pagoda.p_id where catName='မြေပုံ' and  map.pgdName='$pgdName'");  
        $result1 = mysqli_query($conn,"SELECT famous_places.* FROM famous_places join pagoda on famous_places.p_id=pagoda.p_id where   famous_places.pgdName='$pgdName'");  
        while ($row =( mysqli_fetch_array($result1))) {?>
        <h6 class="card-title mt-3 ms-5 ">
        <span class=" ">
                  <img  src="admin/assets/img/icon1/pp.png" alt="" width="30px">
        <?php echo "<a href=detailmapInfo?title=",urlencode($row['subCatName']),">";echo $row['subCatName'];?></a></span></h6>
        <?php } ?>
        
      </div>
    </div>
</div>
      <div class="card-footer " align="right">
        <div  class="tusc pull-right mb-3">
      <a href="pindex" class="read_more">  &nbsp <<&nbsp</a>
   </div>
      </div>
    </div>
  </div>
</div>

<?php } //}?> 
<div class="mt-5"></div>
<?php 
     //include("footer.php"); 
     include('pddFooter.html'); 
?>
</div>
</body>
</html>
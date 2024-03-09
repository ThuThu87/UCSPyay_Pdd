<?php session_start();
// $title=$_GET['title'];
$pgdName=$_SESSION['pgdName'];
//echo $pgdName;

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
        } */
        
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
 $pgdName=$_SESSION['pgdName'];
?>

<?php   
   $subCatName=$_GET['title'];
   $catName=$_GET['catName'];
   $pgdName=$_SESSION['pgdName'];
   switch($catName)
   {
        case 'သမိုင်းကြောင်းများ' :  $result = mysqli_query($conn,"SELECT history.*,category.* FROM history,category where history.subCatName='$subCatName' and history.catName=category.catName"); 
                                  break;
        case "ဖူးမြော်လေ့လာနိုင်သောနေရာများ": $result = mysqli_query($conn,"SELECT famous_places.*,category.* FROM famous_places,category where famous_places.subCatName='$subCatName' and famous_places.catName=category.catName"); 
                                     break;
        case "သာသနာထွန်းကားမှု":$result = mysqli_query($conn,"SELECT buddhism.*,category.* FROM buddhism,category where buddhism.subCatName='$subCatName' and buddhism.catName=category.catName"); 
                                     break;
        case "ဒေသနာတော်များ": $result = mysqli_query($conn,"SELECT ecclesiastes.*,category.* FROM ecclesiastes,category where ecclesiastes.subCatName='$subCatName' and ecclesiastes.catName=category.catName"); 
                                     break;    
        case "ခေတ်အဆက်ဆက် ပြုပြင်မွမ်းမံထိန်းသိမ်းမှုများ": $result = mysqli_query($conn,"SELECT national.*,category.* FROM national,category where national.subCatName='$subCatName' and national.catName=category.catName"); 
                                     break;
        case "သမိုင်းဝင်ဖြစ်ရပ်များ":$result = mysqli_query($conn,"SELECT historical_event.*,category.* FROM historical_event,category where historical_event.subCatName='$subCatName' and historical_event.catName=category.catName");  
                                     break; 
        case "အထွေထွေ":$result = mysqli_query($conn,"SELECT general.*,category.* FROM general,category where general.subCatName='$subCatName' and general.catName=category.catName");  
                                     break; 
         case "မြေပုံ":$result = mysqli_query($conn,"SELECT map.*,category.* FROM map,category where map.subCatName='$subCatName' and map.catName=category.catName");          
                                     break; 
   }
   //$result = mysqli_query($conn,"SELECT history.*,category.* FROM history,category where history.subCatName='$subCatName' and history.catName=category.catName"); 
    if($result->num_rows>0){          
   if ($row =( mysqli_fetch_array($result)))
                {
                 $link=$row['eng_title'];
                }
              }
  switch($catName)
    {
      case 'သမိုင်းကြောင်းများ' : $result = mysqli_query($conn,"SELECT * FROM history where subCatName='$subCatName' and pgdName='$pgdName'");  
                                                break;
      case "ဖူးမြော်လေ့လာနိုင်သောနေရာများ": $result = mysqli_query($conn,"SELECT * FROM famous_places where subCatName='$subCatName' and pgdName='$pgdName'");  
                                                   break;
       case "သာသနာထွန်းကားမှု":$result = mysqli_query($conn,"SELECT buddhism.*,category.* FROM buddhism,category where buddhism.subCatName='$subCatName' and buddhism.catName=category.catName"); 
                                                   break;
      case "ဒေသနာတော်များ": $result = mysqli_query($conn,"SELECT ecclesiastes.*,category.* FROM ecclesiastes,category where ecclesiastes.subCatName='$subCatName' and ecclesiastes.catName=category.catName"); 
        // $result = mysqli_query($conn,"SELECT ecclesiastes.*,category.* FROM ecclesiastes,category where ecclesiastes.subCatName='$subCatName' and ecclesiastes.catName=category.catName"); 
                                                   break;    
                      case "ခေတ်အဆက်ဆက် ပြုပြင်မွမ်းမံထိန်းသိမ်းမှုများ": $result = mysqli_query($conn,"SELECT national.*,category.* FROM national,category where national.subCatName='$subCatName' and national.catName=category.catName"); 
                                                   break;
                      case "သမိုင်းဝင်ဖြစ်ရပ်များ":$result = mysqli_query($conn,"SELECT historical_event.*,category.* FROM historical_event,category where historical_event.subCatName='$subCatName' and historical_event.catName=category.catName");  
                                                   break; 
                      case "အထွေထွေ":$result = mysqli_query($conn,"SELECT general.*,category.* FROM general,category where general.subCatName='$subCatName' and general.catName=category.catName");  
                                                   break; 
                       case "မြေပုံ":$result = mysqli_query($conn,"SELECT map.*,category.* FROM map,category where map.subCatName='$subCatName' and map.catName=category.catName");          
                                                   break; 
  }

//  $result = mysqli_query($conn,"SELECT * FROM history where subCatName='$subCatName'");  
   if ($row =( mysqli_fetch_array($result))) {
      
    ?>

<section class="mt-5">
<div  align="left">
   <a href="<?php echo $link; ?>" style="color:navy;font-size:1.1rem;"><b><span> << </span>ရှေ့သို့ &nbsp;</b></a>
   
   <!-- <h4 style="color:navy;" align="center"><?php echo $row['subCatName'];?></h4>	 -->
   </div>
  <div class="container-fluid" align="left" style="background-color:floralwhite;">
  </div>
  
  <div class="container" align="center">
  <div class="row col-10 ms-5" align="center">
  
   <div class="row mt-5 mb-5">   
    <!-- <div class="card rounded shadow shadow mt-5 ms-5" align="center" style="max-width: 540px; background-color:none;"> -->
      <!-- <div class="row justify-content-center"> -->

       <h6 class="card-title mb-3" align="center"><b><?php echo $row['subCatName'];?></b></h6>
        <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center"  data-aos="fade-left" data-aos-delay="50" align="center">
         <?php 
              
              if(empty($row['vr_photo']))
                {
                $photo="admin/". $row["photo"];
                echo '<img src="'.$photo.'" class="img-fluid" style="float:left;" style="object-fit:contain;" width="100%" >';
                }
                else  if(isset($row['vr_photo']))
                {
                      $photo=$row['vr_photo'];               
                      // echo '<iframe src="$photo" frameborder="0" width="640" height="540" style="float:none;" allowfullscreen="true"></iframe>'; 
                      echo '<iframe src="'.$photo.'" frameborder="0" width="540" height="500" style="float:left;" allowfullscreen="true"></iframe>';
                    }
                ?>    
       </div>
       <div class="col-md-6 align-items-center" style="line-height:80%; " data-aos="fade-right" data-aos-delay="50" align="justify">
          <p class="card-text big" align ="justify">
          <table width="100%" border="0">
                                <tr>
                              <td class="scrollable-td" colspan="4"><textarea class="form-control" id="exampleTextarea" cols="400" rows="20"><?php echo $row['detail_info'];?></textarea></td>
                                    </tr>
                               </table> 
            <?php 
            // $substr=$row['detail_info'];       
           // echo "<h6>".$substr."</h6></p>";?>
            
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
  <?php include("pddFooter.html"); ?> 
</body>
</html>









































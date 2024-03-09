<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagoda Digital Directory</title>
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
  
#div.container{
        background-color: greenyellow;
      }
      #work {
      padding-top: 70px;
      padding-bottom: 30px;
      background-color: #effdea;
    }
  
      </style>
  </head>
<body>
  <!-- logo -->
 
<?php include("header.php");?>

<?php   
   $subCatName=$_GET['title'];
    
               $result = mysqli_query($conn,"SELECT subcategory.*,category.* FROM subcategory,category where subcategory.subCatName='$subCatName' and subcategory.catName=category.catName"); 
               if ($row =( mysqli_fetch_array($result))) {
                 $link=$row['eng_title'];
                 
   $result = mysqli_query($conn,"SELECT * FROM subcategory where subCatName='$subCatName'");  
   if ($row =( mysqli_fetch_array($result))) {
    ?>
<section id="work" class="clearfix">

<a href="<?php echo "index.php"?>"><font size="4"> << &nbsp;ရှေ့သို့</font></a>
	<div class="col-sm-12">
  <div class="container">
	 <div class="choose_4">
	  <h4 align="center"><?php echo $row['subCatName'];?></h4><br><br>
    <div class="choose_3" align="center">
    <?php echo '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode( $row['photo'] ).'"   width="540" height="500" >';?>  
    </div>
      <br><br><h4 align="left" style="line-height: 1.8;"><?php echo $row['subCatName'];?></h4>
      <p align="justify" style="font-size:1.1em;line-height: 1.8;">
        <?php echo $row['detail_info'];}?>
      </p>
  </div>
 </div> 
 <div class="tusc pull-right">
            
                 <a href=<?php echo "index.php";?> class="read_more">  &nbsp <<&nbsp</a>
                
            
            
           </div>  
           <?php }?>
 
</section>

 
<?php include("footer.php"); ?>
</body>
</html>
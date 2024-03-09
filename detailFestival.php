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
  <link
      rel="stylesheet"
      href="Directory/css/bootstrap.min.css"
    />
   
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="Directory/js/bootstrap.bundle.min.js"></script>
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
.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
            /* width: 100%; */
          border-radius: 10px;
        }
        
        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
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
 
<?php 
include("header2.php");
include('db.php');
if(empty($_POST['btnSearch'])){
        
  //$qry1="select * from festival"; 
  $qry1="select festival.* from festival join pagoda on festival.p_id=pagoda.p_id where festival.pgdName='$pgdName'";
} 
if(isset($_POST['btnSearch'])){ 
 $id=$_POST['Search'];
 if($id=="0")
 {
  $qry1="select festival.* from festival join pagoda on festival.p_id=pagoda.p_id where festival.pgdName='$pgdName'";
 }
else{
 $qry1="select festival.* from festival join pagoda on festival.p_id=pagoda.p_id where festival.pgdName='$pgdName' and festival.f_id='$id'";
//$qry1 ="select * from festival where f_id='$id'";
}
}   
?>

        
<section id="work vh-100" class="clearfix" style="background-color:floralwhite;">
<div class="container fluid w-100" style="background-color:floralwhite;">
<div  class="row justify-content-center mt-5 gap-lg-2 align-items-center w-100 vh-auto">
  <div class="container col-12  w-100 mt-5 p-5 align-items-center" style="background-color:floralwhite;" align="center">  
  <div class=" col-10" align="center">
  <div class="row col-sm-9 vh-20 d-flex  g-2" align="center">
  <h4  class="" style="color:navy;"><b>ပွဲတော်အမည်ဖြင့်မှတ်တမ်းများရွေးချယ်ကြည့်ရှု့နိုင်ပါသည်။</b></h4>
  <div class="col-sm-6 ms-5 mt-5" align="center">
  <form action="detailFestival" method="post" enctype="multipart/form-data">
        <!-- Dropdown -->
        <div class="dropdown" align="center">
        <select class="form-select form-select-sm  form-control" aria-label=".form-select-lg example" style="background-color: skyblue;color:navy;" name="Search">
          <option selected   value="0">  ပွဲတော်အလိုက်ရွေးချယ်ကြည့်ရှုရန်</option>
          <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
           
          <?php   
           // $qry="select * from festival";    
          $qry="select festival.* from festival join pagoda on festival.p_id=pagoda.p_id where festival.pgdName='$pgdName'";
          $result=mysqli_query($conn,$qry);
          while ($row =( mysqli_fetch_array($result))) {
   
    ?>
            <li><option class="dropdown-item" value="<?php echo $row['f_id'] ?>"><?php echo $row['f_name'];?></option></li>
            <?php }?>
            </select>
          </ul>
        </div>
      </div>
         
      <div class="col-sm-4 mt-5"> 
        <button type="submit"  name="btnSearch" class="btn btn-primary w-100" style="background-color:skyblue;color:navy;">ရှာရန်</button>
       </div>
    </div>
  </div>
  </form>
  <div class="card mb-3 col-12 mt-5 p-4 shadow shadow gap-5 align-items-center" align="center" style="background-color:snow;"> 
    <?php 
    
  // $qry="select festival.* from festival join pagoda on festival.p_id=pagoda.p_id where festival.pgdName='$pgdName'";
  $result=mysqli_query($conn,$qry1);
  if($result){
   while ($row =( mysqli_fetch_array($result))) {
    $path="admin/".$row["video"];
    ?>
     
    
                  
                  <div class="row g-0">
                  <h4 class="mt-1 mb-3 justify-content-center"  style="font-size:1.2rem;color:navy;"><b><?php //echo $row['subCatName']; ?></b></h4><br><br>
                              
                      <div class="col-md-6 mb-5 embed-responsive embed-responsive-16by9 d-flex justify-content-between" data-aos="fade-right" data-aos-delay="50">          
                      <video class="embed-responsive-item" controls controlsList="nodownload"  width="100%" height="200">
                          <source src="<?php  echo $path;?>" type="video/mp4">
                          Your browser does not support the video tag.
                      </video>
                              </div>
                       <div class="col-md-6 mb-5 d-flex justify-content-between" data-aos="fade-left" data-aos-delay="50">
                            <table width="100%" border="0">
                             <tr>
                           <td class="scrollable-td" colspan="3"><textarea class="form-control" id="exampleTextarea" cols="300" rows="13"><?php echo $row['detail_info'];?></textarea></td>
                                 </tr>
                            </table> 
                           <!-- <a href="option.html" class="btn btn-primary">SEE MORE</a> -->
                       <!-- </div> -->
                   </div>
               </div>
              

   
<?php 
 }}
 else{
   echo "<p style='color:navy;font-weight:bold;'>No Data!</p>";
 }
?> 
</div>

</div>
</div>
</div>
</section>
<?php 
//include("footer.php"); 
include('pddFooter.html');
?>
</div>
</body>

</html>
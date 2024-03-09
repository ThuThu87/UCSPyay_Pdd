<!-- <style>
  #footer_bottom{
  background:#87CEEB;
  border-top:1px solid #87CEEB;
  padding-top:20px;
  }
</style>
<section id="footer_bottom">
     <div class="container" >
      <div class="row d-flex p-5">
       <div class="col-sm-12">
        <div class="footer_bottom clearfix">
          <div class="footer_bottom_1 clearfix">
          
          </div>
          <div class="footer_bottom_2 clearfix choose_3">
            <p align="center"><font style="font-size: 1.2vw;color:navy ;text-decoration:solid;"><b>© 2023 Pagoda Digital Directory . All Rights Reserved |  <img src="img/cupyay.jpg" with="50" height="50"/>&nbsp;Developed by University of Computer Studies,Pyay</b></font></p>
          </div>
        </div>
       </div>
      </div>
     </div>
    </section> -->
    <!-- Footer Start -->
<style>
    @keyframes slide {
      0% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(50px);
      }
      100% {
        transform: translateY(0);
      }
    }
</style>
<?php 
//session_start();
$pgdName=$_SESSION['pgdName'];
// echo $pgdName;
?>
<div class="container-fluid  text-dark  p-1" style="background-color:#87CEEB">
        <div class="row px-xl-5 pt-2">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><font color="navy">
                      
                        <span class="font-weight-semi-bold  px-3 mr-1" style="background-color:none;"><b></b></font></h1>
                </a>
                <?php 
                    $qry="select * from pagoda join admin on pagoda.p_id=admin.p_id where pagoda.pgdName='$pgdName'";
                    $result=mysqli_query($conn,$qry);
                    if($result)
                    {
                      if($row=mysqli_fetch_array($result)){

                     
                ?>
                <p style="color:navy;font-size:2rem;"><img  src="admin/assets/img/icon1/pp.png" alt="" width="25px" height="25px"><b><?php echo $pgdName;?></b></p>
                <p class="mb-2" style="color:navy;"><img  src="admin/assets/img/icon1/placeholder.png" alt="" width="25px" height="25px"><i class=" text-navy mr-3"></i><?php echo $row['division']; ?></p>
                <p class="mb-2" style="color:navy;"><img  src="admin/assets/img/icon1/placeholder.png" alt="" width="25px" height="25px"><i class=" mr-3"></i><?php echo $row['district']; ?></p>
                <p class="mb-0" style="color:navy;"><img  src="admin/assets/img/icon1/placeholder.png" alt="" width="25px" height="25px"><i class=" mr-3"></i><?php echo $row['township']; ?></p>
                <p class="mb-0" style="color:navy;"><img  src="admin/assets/img/icon1/phone.png" alt="" width="25px" height="25px"><i class=" mr-3"></i><?php echo $row['phone']; ?></p>
            </div>
            <div class="col-lg-8 col-md-12">
             <?php 
               $map=$row['map_link'];
               $map_new=str_replace('width="600"','width="100%"',$map);
               echo $map_new;
             ?>
                
        </div>
        <?php  }}?>
        <!-- <div class="row border-top border-light mx-xl-5 py-4 justify-content-center" id="footer" style="color:navy;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                <font color="navy">  &copy; <a class="text-blue font-weight-semi-bold" href="#"><font color="navy">Pagoda Digital Directory</a>.<br><br> All Rights Reserved. Designed
                    by
                     <img src="img/cupyay.jpg" with="50" height="50" style="border-radius:5px 5px 5px 5px;"/>
                    <a class="text-dark font-weight-semi-bold" target="_blank" href="https://ucspyay.edu.mm"><font color="navy">University of Computer Studies, (Pyay)</a><br>
                </font>   
                </p>              
            </div> -->
            <div class="align-items-end" align="right">
            <a href="#" >
            <i class=""></i><img src="img/uparrow.png" width="90" height="90" style="border-radius:50%;animation: slide 5s infinite;">
            </a>
            </div> 
        </div>
    </div>
    
    <!-- Footer End -->
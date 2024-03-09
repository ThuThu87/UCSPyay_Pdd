<?php
  include('./db.php');
  $result = mysqli_query($conn,"SELECT * FROM category");
?>
<style>
 #header .navbar-default {
   /* background-color: #2b7749;
   border-color: #2b7749;
   box-shadow: 0 0 10px #2b7749; */
   /* #3090C7 skyblue */
   background-color: #3090C7 ;
   border-color: #3090C7 ;
   box-shadow: 0 0 10px #3090C7 ;
  }
  #div.container{
        background-color: greenyellow;
      }
      #work {
      padding-top: 70px;
      padding-bottom: 30px;
      background-color:aliceblue;
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
<section id="header">
 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container1">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-sm-1">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
        <!-- <a><img src="img/index.jpg"></a>-->
        <!-- <div class="choose_3" align="left"><a href="index"><img src="img/logo5.jpg" class="img-responsive" width="60" height="50"></a></div> -->
      </div> 
        <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="col-sm-12">
      
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar col-sm-12">
            <li class="active"><a href="index" style="color:#154360 ;text-decoration:solid;"><b>ပင်မစာမျက်နှာ</b></a></li>
             <?php
                while ($row =( mysqli_fetch_array($result)))
                {
                  ?>
                  <li class=""><a href="<?php echo $row[2];?>" style="color:#154360 ;text-decoration:solid;"><b><?php echo $row[1];?></b></a></li>
              <?php
                }
             ?>
           
          </ul>
       </div>
    </div>
</section>

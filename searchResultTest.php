<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Replease your site name and favicon -->
    <title></title>
    <link
      rel="shortcut icon"
      href="Directory/asset/images/brand.png"
      type="image/x-icon"
    />
    <!-- fonstaweasome for icons, you can use npm instaead of cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- 
        This is Bootstrap CDN link, instead of this you can use Bootstrap 
        local download or using npm 
    -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- <script>
        $(function () {
        $(".item").hide();
        $(".col-12:first-child a").click(function () {
            $(".item:visible").hide();
            $($(this).attr("href")).show();
            return false;
        });
        });
       
        function automateClick() {
            document.getElementById('rcorner1').click();
        
        }
        window.addEventListener("load", automateClick);
    </script> -->
    <style>   
        .flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}           
        .rcorner,.rcorner1{
        border-radius: 5px 5px 5px 5px;
        background:blue;
        padding: 20px; 
        width: 250px; 
        /* height: 20px;  */
        }
        .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
        border-radius: 0 0 15px 15px;
        }
        .btn-primary{
          background-color:#87CEEB;
          color:navy;
        }
   </style>
  </head>
  <body>
   
    <?php 
    include('pddHeader.php');
    include("db.php");
    ?>
    <!-- content -->
    <div class="container-fluid">
      <!-- Hero Section -->
      <div  class="row justify-content-center gap-lg-2 align-items-start vh-auto" style="background-color:floralwhite;">      
          <div class="container col-sm-10 mt-2 d-flex p-5" id="division" align="center">
            <div class="col">
                <div class="col-sm-3">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="admin/upload/3.jpg" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                            <img src="admin/upload/3.jpg" alt="Avatar" style="width:300px;height:300px;">
                                    <div class="wrapper"><h1>John Doe</h1></div> 
                                    <p>Architect & Engineer</p> 
                                    <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <img src="admin/upload/1.jpg" alt="Avatar" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                        <h1>John Doe</h1> 
                        <p>Architect & Engineer</p> 
                        <p>We love that guy</p>
                        </div>
                    </div>
                    </div>
                    <!--  -->
                    <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <img src="admin/upload/2.jpg" alt="Avatar" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                        <h1>John Doe</h1> 
                        <p>Architect & Engineer</p> 
                        <p>We love that guy</p>
                        </div>
                    </div>
                    </div>
                </div>
    
            </div> 
      </div>    
    <!--end division -->
    
     </div> 
      </div>
      <!--start division  -->
      
      <!-- Footer -->
      <div class="row">
        <div class="col-12 mt-3 p-0">
          <div class="w-100 p-3" style="background-color:#87CEEB;">
            <div class="text-center">
            <font color=" #154360">  &copy; <a class="text-dark font-weight-semi-bold" href="#"><font color=" #154360">Pagoda Digital Directory</a>.<br><br> All Rights Reserved. Designed
                    by
                     <img src="img/cupyay.jpg" with="50" height="50" style="border-radius:5px 5px 5px 5px;"/>
                    <a class="text-dark font-weight-semi-bold" target="_blank" href="https://ucspyay.edu.mm"><font color=" #154360">University of Computer Studies, (Pyay)</a><br>
                </font>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 
        We use js for some interaction for UI design
        This is Bootstrap CDN link, instead of this you can use Bootstrap 
        local download or using npm 
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Theme -->
    <!-- <script src="Directory/js/thmem.js"></script> -->
    <!-- State and Regions -->
    <!-- <script src="Directory/js/state.js"></script> -->
  </body>
</html>

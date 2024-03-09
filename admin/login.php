<?php
    include("../db.php");
?>
<!DOCTYPE html>
  <html lang="en">
    <!-- <head class="header"> -->
      <base href="./">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     
      <title>Pagoda Digital Directory</title>
      <!--  -->
      <link rel="manifest" href="assets/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <!-- Vendors styles-->
      <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
      <link rel="stylesheet" href="css/vendors/simplebar.css">
      <!-- Main styles for this application-->
      <link href="css/style.css" rel="stylesheet">
      <!-- We use those styles to show code examples, you should remove them in your application.-->
      <link href="css/examples.css" rel="stylesheet">
  <!-- <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet"> -->
  <link href="css/index.css" rel="stylesheet">
    
      <style>
   
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {background-color: #f2f2f2;}
        div:rcorners3 {
                      border-radius: 15px 50px;
                      background: #73AD21;
                      padding: 20px; 
                      width: 200px;
                      height: 150px; 
                    } 

        </style>

    </head>
    <body>
      
    
        <?php // include('slider.html');?>
        
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                <!-- <span>Home</span> -->
                </li>
             
              </ol>
            </nav>
          </div>
        </header>
    

  <div class="bg-dark mt-5 d-flex flex-row align-items-center">
        
      <div class="container col-12 card " style="background-color:skyblue;">
        <div class="row  justify-content-center">
        <!-- <div class="col-md-6">
          <img src="../img/ppd2.png" width="100%">
        </div> -->
          <div class="col-md-6">
            <div class="card mb-2 mx-4" style="background-color:skyblue;">
              <div class="card-body p-4">
                <h1>Login</h1>
     
           <form action="createcategory" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3  mt-3">
                  <span class="input-group-text">
                <img src="assets/img/icon1/mail.png" alt="" width="20px" height="20px">
                                     </span>
                  <input class="form-control" type="email" name="email" placeholder="Email">
                </div>

                <div class="input-group mb-3 mt-4">
                  <span class="input-group-text">
                <img src="assets/img/icon1/padlock.png" alt="" width="20px" height="20px">
             
                </span>                            
                   
                  <input class="form-control" type="password" name="password" placeholder="Password" class="password" id="password">           
          
           
                </div> 
                
                <button class="btn mt-2" name="btnCreate" type="submit">Login</button>

                <div class="login-signup mt-2">
            <span class="text mt-4">Not a member?
              <a href="AdminRegister" class="text px-3 signup-link">Register Now</a>
            </span>
          </div>

</form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- <footer class="footer mt-5">
         <div>Shwe San Daw Pagoda Admin </a> © 2023 creativeLabs.</div> -->
          <!-- <div class="ms-auto" >Developed by&nbsp;University of Computer Studies, Pyay</div> -->
        <!-- </footer>  -->
      </div>
      <!-- CoreUI and necessary plugins-->
      <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
      <script src="vendors/simplebar/js/simplebar.min.js"></script>
      <!-- Plugins and scripts required by this view-->      
      <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
      <script src="js/main.js"></script>
      <script>
      </script>
  
    </body>
  </html>
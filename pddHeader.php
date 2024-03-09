 <!-- Nav bar -->
 <!-- <link href='https://unpkg.com/css.gg@2.0.0/icons/css/search.css' rel='stylesheet'> -->
 <!-- <link href="Directory/css/bootstrap.min.css" rel='stylesheet'> -->
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-K1q2j45FgTKLBMLnXi48sh3Quq5TlmH+qx8hMVSvAYZUuuC03C+7pzU1dDOvwYxJy+ZVjGDI4tyWab3u8l1LQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
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
    <link
      rel="stylesheet"
      href="css/figure.css"
    />
    <!-- <script src="https://code.jquery.com/jquery-1.11.3.js"></script> -->
    <script src="Directory/js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="assets/vendor/aos/aos.js"></script> -->
<style>
       a,h1,h2,h3,h4,h5,h6{ 
      color:navy;
    }
 </style>
 <!-- <header id="header" class="fixed-top header-scrolled display-4 p-2" style="background-color:#87CEEB;color:navy;"> -->
    <nav class="navbar shadow p-3 text-light sticky-top header-scrolled" style="background-color:#87CEEB;">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center " href="dhome">
          <img src="Directory/asset/images/brand.png" alt="brand"   style="height:35px;" />
          <h4><b><span>Pagoda Digital Directory</span></b></h4>
        </a>
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dhome" style="color:navy;"><b>မူလစာမျက်နှာ</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dhome#pagoda" style="color:navy;"><b>တန်ခိုးကြီးဘုရားများ</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="division" style="color:navy;"><b>တိုင်းဒေသကြီး/ပြည်နယ်ရှိဘုရားများ</b></a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="dhome#footer" style="color:navy;"><b>ဆက်သွယ်ရန်</b></a>
          </li>
          <li class="nav-item d-flex flex-row" >
          <div class="container-fluid d-flex flex-row">
          <form action="searchResult.php" method="post">
                
                <div class="input-group ">
                 <font color="navy"> <input type="text" class="form-control btn-outline-secondary"  name="search" placeholder="ဘုရားအမည်ဖြင့်ရှာရန်" aria-label="Search" aria-describedby="searchIcon"> </font>
                  <button class="btn btn-success"  type="submit" id="searchIcon" style="background-color:navy;">Search</button>
                </div>
              
            </form>  
            </div>
         </li>                 
      </ul>       
      </div>
     
</nav>
 </header>

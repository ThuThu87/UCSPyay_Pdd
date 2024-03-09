<link
      rel="stylesheet"
      href="Directory/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- 
        This is Bootstrap CDN link, instead of this you can use Bootstrap 
        local download or using npm 
    -->
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    /> -->
    <link
      rel="stylesheet"
      href="Directory/css/bootstrap.min.css"
    />
    <style>
     a{
      text-decoration:none;
     }
    
    </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-light p-4 d-flex justify-content-right align-items-center gap-5"  style="background-color:#3090C7;">
    <a class="navbar-brand" href="#">Nav Bar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse font-weight-bold  d-flex align-items-right gap-5 " id="navbarNav" style="font-size:large; color:antiquewhite" >
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link scrollto" href="#">မူလစာမျက်နှာ <span class="sr-only"></span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link scrollto dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span> အကြောင်းအရာများရွေးချယ်ကြည့်ရှုရန်</span><i class="bi bi-chevron-right"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:aliceblue;font-size:1rem">
          <ul>
           <li> <a class="dropdown-item" href="history">သမိုင်းကြောင်းများ</a></li>
           <li><a class="dropdown-item" href="famousplace">ဖူးမြော်လေ့လာနိုင်သောနေရာများ</a></li>
           <li> <a class="dropdown-item" href="buddhism">သာသနာထွန်းကားမှု့များ</a></li>
           <li> <a class="dropdown-item" href="famousplace">ဒေသနာတော်များ</a></li>
           <li> <a class="dropdown-item" href="national">သမိုင်းဝင်ဖြစ်ရပ်များ</a></li>         
           <li> <a class="dropdown-item" href="map">မြေပုံ</a></li>
          </ul>
            <!-- <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </div> -->
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link scrollto dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            အထွေထွေ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:aliceblue;">
          <ul>
           <li>  <a class="dropdown-item" href="history">ပွဲတော်များ</a></li>
           <li><a class="dropdown-item" href="famousplace">သတင်းအချက်လက်များ</a></li>  
          </ul>    
          </li>

          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            အထွေထွေ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:lavender;">
          <ul>
           <li>  <a class="dropdown-item" href="history">ပွဲတော်များ</a></li>
           <li><a class="dropdown-item" href="famousplace">သတင်းအချက်လက်များ</a></li>  
          </ul>    
          </li> -->
          <li class="nav-item">
          <a class="nav-link" href="#">ဓါတ်ပုံများ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ဗီဒီယိုများ</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">ဆက်သွယ်ရန်</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php include('db.php');?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
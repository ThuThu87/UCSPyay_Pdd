<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Replease your site name and favicon -->
    <title>Pagoda Digital Directory</title>
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
    <link
      rel="stylesheet"
      href="css/figure.css"
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
      .img{
        height:10rem;
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
        .btn-primary {
  color: #fff;
  background-color: navy;
  border-color: navy;
}
 
        /* .btn-primary{
          background-color:#87CEEB;
          color:navy;
        }*/
   
   </style>
  </head>
  <body>
    <!-- Nav bar -->
    <!-- <nav class="navbar shadow  text-light sticky-top" style="background-color:#87CEEB;">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
          <img src="Directory/asset/images/brand.png" alt="brand" style="height: 35px;" />
          <h4><b><span>Pagoda Digital Directory</span></b></h4>
        </a>
        <ul class="navbar-nav d-flex flex-row gap-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Other</a>
          </li>
        </ul>
      </div>
    </nav> -->
    <?php include('pddHeader.php');?>
    <!-- content -->
    <div class="container-fluid">
      <!-- Hero Section -->
      <div  class="row justify-content-center gap-lg-2 align-items-center vh-auto" style="background-color:floralwhite;"> 
       <!--start Hero -->
       <div class="col-12 col-md-6 col-lg-3" style="" id="state">
          <!-- replace your text in Hero section -->
          <div class="display-3 fw-bold mb-5" style="color:navy;line-height :1.8em;">မြန်မာနိုင်ငံရှိ<br> တန်ခိုးကြီး <br>ဘုရားများ</div>
                <p class="text-lead" style="text-align: justify;color:navy;">
                  Hero text, Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Distinctio repellat laboriosam animi iusto porro non fuga facilis,
                  ipsa atque, eveniet in nam. Maxime ea at in nemo magnam veniam
                  asperiores.
                  Hero text, Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Distinctio repellat laboriosam animi iusto porro non fuga facilis,
                  ipsa atque, eveniet in nam. Maxime ea at in nemo magnam veniam
                  asperiores.
                  Hero text, Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Distinctio repellat laboriosam animi iusto porro non fuga facilis,
                  ipsa atque, eveniet in nam. Maxime ea at in nemo magnam veniam
                  asperiores.
                </p>
                <a class="btn btn-primary btn-lg mt-1" href="division">SEE STATE & REGION</a>
                <!-- <a class="btn btn-primary btn-lg mt-1" href="#pagoda">SEE PAGODA</a> -->
       </div>
       <!-- </div> -->
       <!--end Hero -->     
        <div class="col-12 col-md-12 col-lg-8 gap-lg-1 d-flex d-md-block">        
          <div class="card mt-3 mb-5" style="background-color:snow;" id="pagoda">
                <h4 class="mt-3 mb-4" align="center"><b>တန်ခိုးကြီးဘုရား(၁၀)ဆူ၏အကြောင်းအရာသမိုင်းများအားရှာဖွေကြည့်ရှုနိုင်ပါသည်။</b></h4>
                <div class="row justify-content-center object-fit-contain"> 
                      <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                          <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/and.jpg" alt="Card image cap">
                          <div class="card-body">
                          <h6 class="card-title" align="center"> <a href="SResult?title=အာနန္ဒာဘုရား" style="text-decoration:none;"><b>အာနန္ဒာဘုရား</b></a></h6>
                          </div>
                      </div>
              </div>  
              <!-- row end -->
                <!-- row start -->
                <div class="row justify-content-center"> 
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top img-flut mt-3 shadow shadow object-fit-contain" style="border-radius:15px 15px 15px 15px;"src="img/khy.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=ကျိုက်ထီးရိုးစေတီတော်" style="text-decoration:none;"><b>ကျိုက်ထီးရိုးစေတီတော်</b></a></h6>
                        </div>
                    </div> 
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top mt-3  img-responsive shadow shadow  w-100 height:12rem;" style="border-radius:15px 15px 15px 15px;" src="img/upntt.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=ဥပ္ပါတသန္တိစေတီတော်" style="text-decoration:none;"><b>ဥပ္ပါတသန္တိစေတီတော်</b></a></h6>
                        </div>
                    </div> 
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top  d-flex img-fluid mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/mmmn.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=မဟာမြတ်မုနိဘုရား" style="text-decoration:none;"><b>မဟာမြတ်မုနိဘုရား</b></a></h6>
                        </div>
                    </div>                      
              </div>  
              <!-- row end -->
               <!-- row start -->
               <div class="row justify-content-center object-fit-contain"> 
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/mtl.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=မြသလွန်စေတီတော်" style="text-decoration:none;"><b>မြသလွန်စေတီတော်</b></a></h6>
                        </div>                    
                    </div> 
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:13rem;" src="img/szg.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=ရွှေစည်းခုံစေတီတော်" style="text-decoration:none;"><b>ရွှေစည်းခုံစေတီတာ်</b></a></h6>
                        </div>
                    </div> 
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/ssd.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=ရွှေဆံတော်စေတီတော်" style="text-decoration:none;"><b>ရွှေဆံတော်စေတီတော်</b></a></h6>
                        </div>
                    </div> 
              </div>  
              <!-- row end -->
               <!-- row start -->
               <div class="row justify-content-center object-fit-contain"> 
                    <div class="card ms-3 mb-5 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/sdg.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=ရွှေတိဂုံစေတီတော်" style="text-decoration:none;"><b>ရွှေတိဂုံစေတီတော်</b></a></h6>
                        </div>
                    </div> 
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/smd.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=ရွှေမော်ဓောစေတီတော်" style="text-decoration:none;"><b>ရွှေမော်ဓောစေတီတော်</b></a></h6>
                        </div>
                    </div>
                    <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                        <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/1.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h6 class="card-title" align="center"> <a href="SResult?title=သျစ်သောင်းပုထိုးတော်ကြီး" style="text-decoration:none;"><b>သျစ်သောင်းပုထိုးတော်ကြီး</b></a></h6>
                        </div>
                    </div>
               </div>
              <!-- <div class="row justify-content-center object-fit-contain"> 
                      <div class="card ms-3 mb-2 shadow shadow" style="width:18rem;height:16rem;border-radius:15px 15px 15px 15px;">
                          <img class="card-img-top  img-responsive mt-3  shadow shadow w-100 vh-15" style="border-radius:15px 15px 15px 15px; height:12rem;" src="img/and.jpg" alt="Card image cap">
                          <div class="card-body">
                          <h6 class="card-title" align="center"> <a href="SResult?title=အာနန္ဒာဘုရား" style="text-decoration:none;"><b>အာနန္ဒာဘုရား</b></a></h6>
                          </div>
                      </div> -->
              </div>  
              <!-- row end -->
            <div><br></div>
              
          </div> <!--card end-->     
        </div><!-- col end -->
        
     </div> 
     <h3 class="mt-5 mb-1" align="center"><b>မြန်မာနိုင်ငံရှိလူမျိုးစုတို့၏တည်နေရာအလိုက်ဘုရားများအားရှာဖွေကြည့်ရှုနိုင်ပါသည်။</b></h3><br>
      <!--start division  -->
      <div class="container-fluid d-flex p-5" id="division" align="center">
            <!-- <div class="col">
                       <div class="card" style="background-color:aliceblue;">
                          <div class="card-title mt-3"><h5 style="color:red"><b>မြန်မာနိုင်ငံရှိ ဘုရားစေတီပုထိုးများတွင် လာရောက်ဖူးမြော် လည်ပတ်သူများလိုက်နာရမည့်အချက်များ</b></h6></div>
                          <div class="card-body d-flex p-5 gap-2">
                                <img src="img/d4.jpg" class="img-fluid" width="200" height="150">
                                <img src="img/d5.jpg" class="img-fluid" width="200" height="150">
                                <img src="img/d2.jpg" class="img-fluid" width="200" height="150">
                                <img src="img/d3.jpg"  class="img-fluid" width="200" height="140">
                            
                               <div align="justify" style="font-size:1em;">
                                <b>(၁)ဘလောက်အင်္ကျီလည်ဟိုက်များဝတ်ဆင်ခြင်းမပြုရန်။ <br>
                                (၂)ဘောင်းဘီတို၊စကပ်တိုများဝတ်ဆင်းခြင်မပြုရန်။<br>
                                (၃)ဘုရားရင်ပြင်တော်ပေါ်တွင် ဖိနပ်၊ခြေအိတ်များဝတ်ဆင်၍သွားလာခြင်းမပြုရန်။
                                </b>
                               </div>                                                   
                          </div>
                       </div>
                    </div>    
            </div>  -->
            <!-- <div class="col-sm-2"> -->
             
           
     
             <figure>
                  <img src="img/kachin.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>ကချင်</figcaption>
              </figure>
              <figure>
                  <img src="img/kayah.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>ကယား</figcaption>
             </figure>         
              <figure>
                  <img src="img/kayin.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>ကရင်</figcaption>
              </figure>
              <figure>
                  <img src="img/chin.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>ချင်း</figcaption>
              </figure>           
      </div> 
      <!-- <div class="container-fluid d-flex p-5 mt-2" id="division" align="center" style="background-color: #f1f1f1;"> 
      </div> -->
      <div class="container-fluid d-flex p-5" id="division" align="center"> 
           <figure>
                  <img src="img/burmese.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>ဗမာ</figcaption>
            </figure> 
              
              <figure>
                  <img src="img/mon.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>မွန်</figcaption>
              </figure>
                
            <figure>
                  <img src="img/rakhaine.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>ရခိုင်</figcaption>
              </figure>   
           <figure>
                  <img src="img/shan.jpg" class="img-responsive d-flex p-2" alt="img" width="100%" height="350">
                  <figcaption>ရှမ်း</figcaption>
              </figure>
            
              
             
    <!--end division -->
    </div>
      <!-- Footer -->
      <?php include("dfooter.php");?>
      <!-- <div class="row">
        <div class="col-12 mt-3 p-0">
          <div class="w-100 p-3" style="background-color:#87CEEB;">
            <div class="text-center">
              Foodter yourFootet123@bla_bla 2023 Web Nov-8
            </div>
          </div>
        </div>
      </div>
    </div> -->

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

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

<div class="container-fluid  text-dark  p-1" style="background-color:#87CEEB">
        <div class="row col-12 px-xl-5 pt-2">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><font color="navy">
                        <span class="font-weight-semi-bold border border-navy px-3 mr-1" style="background-color:floralwhite;"><b>E</b></span><b>Directory</b></font></h1>
                </a>
                <p style="color:navy;"> သာသနာရေးဝန်ကြီးဌာန<br>ရုံးအမှတ် (၁၀)<br>နေပြည်တော်</p>
                <p class="mb-2" style="color:navy;"><i class="fa fa-map-marker-alt text-navy mr-3"></i>123 Street, Nay Pyi Taw, Myanmar</p>
                <p class="mb-2" style="color:navy;"><i class="fa fa-envelope mr-3"></i>info@example.com</p>
                <p class="mb-0" style="color:navy;"><i class="fa fa-phone-alt mr-3"></i>+95 345 67890</p>
            </div>
           <div class="col-lg-8 col-md-12">
     <?php  
     
     $originalString='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15106.194466889992!2d95.2212025!3d18.818259!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c78351f88db9f9%3A0x476462d86f5f08f9!2sShwesandaw%20Pagoda!5e0!3m2!1sen!2smm!4v1701878754394!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
      $modifiedString = str_replace('width=600', 'width=50%', $originalString);
      echo $modifiedString;
    ?>
            <!-- <iframe width="100%" height="500" src="https:\\maps.google.com/maps?q=shwedagonpagodayangon&output=embed"></iframe> -->
 <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15016.60210935984!2d96.13191673534668!3d19.791214146035177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sministry%20of%20religious%20affairs%20and%20culture!5e0!3m2!1sen!2smm!4v1700728627925!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   -->
                
       </div> 
        
    
    <!-- Footer End -->
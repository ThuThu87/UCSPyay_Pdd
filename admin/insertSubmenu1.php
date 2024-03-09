<?php
    include("../db.php");
    session_start();
    $p_id=$_SESSION['p_id'];
    $pgdName=$_SESSION['pgdName'];
    $role=$_SESSION['role'];
    $division=$_SESSION['division'];
    $n= $_SESSION['name'];
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <base href="./">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     
      <title>Shit Thaung Pagoda</title>
      <!--  -->
      <link rel="icon" type="image/x-icon" href="assets/img/icon1/domain.png">
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
    <?php  
      if(!(isset($_POST['btnCreate']))){
        
        if($role=='1')
        {
         include('slider.html');
         $result = mysqli_query($conn,"SELECT * FROM admin  where admin.name='$n'");
        }
       if($role=='2')
        {
        $result = mysqli_query($conn,"SELECT * FROM admin join pagoda on admin.p_id=pagoda.p_id  where admin.name='$n' and admin.pgdName='$pgdName'");
        }
        if($row=(mysqli_fetch_array($result))){
          if($role=='2'){
          
                if(empty($row['website']) && $role=='2')
                {
                  include('slider2.html');
                }
                if(($row['website']!=null) && $role=='2')
                {
                  include('slider1.html');
                }
          }
    ?>


<div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>InsertSubMenu</span></li>
            </ol>
          </nav>
        </div>
          <!-- <div class="header-divider"></div> -->
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
               
              </ol>
            </nav>
          </div>
        </header>
       
        <div class="bg-light mt-3 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card mb-4 mx-4">
              <div class="card-title"> <h3>အမျိုးအစားခွဲများထည့်ရန်</h3></div>
              <div class="card-body p-7">

               
     <br>
           <form action="insertSubmenu1" method="post" enctype="multipart/form-data">
           <!-- <div class="input-group mb-3  mt-4">
                  <span class="input-group-text px-2">
                  </span>
           </div> -->
           <div class="input-group mb-3  mt-4">
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <select class="form-select form-select-lg  form-control" aria-label=".form-select-lg example" name="pgdName" required>
                    <option selected>ဘုရားအမည်</option>    
                  <?php  
                  $result = mysqli_query($conn,"SELECT * FROM pagoda");
                   while($row=mysqli_fetch_array($result)){
                  ?>                         
                  
                    <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                   <?php } ?>
                  </select>
                </div>
                <div class="input-group mb-3  mt-4">
                  <span class="input-group-text px-2">
                  <img  src="assets/img/icon1/p3.png" alt="" width="30px" height="20px"></span>
                  <select class="form-select form-select-lg  form-control" aria-label=".form-select-lg example" name="catName" required>
                    <option selected>အမျိုးအစား</option>    
                  
                    <option value="ဖူးမြော်လေ့လာနိုင်သောနေရာများ">ဖူးမြော်လေ့လာနိုင်သောနေရာများ</option>
                   
                  </select>
                </div>

                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                     <img  src="assets/img/icon1/subCategory.png" alt="" width="30px" height="20px"></span>
                  <input class="form-control" type="text" name="subCatName" placeholder="အမျိုးအစားခွဲများ" required>
                </div>

                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/gallery.png" alt="" width="30px" height="20px"></span>                
                  <input class="form-control" name="image" type="file" placeholder="iconပေါ်တွင့်ထားရန်ပုံရွေးပါ">
                </div>


                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span>  
                  <input class="form-control" name="image1" type="file" placeholder="အသေးစိတ်အကြောင်းတွင်ပြရန်ပုံရွေးပါ">
                </div>

                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/photo.png" alt="" width="30px" height="20px"></span>  
                  <!-- <input class="form-control" name="image2" type="input" placeholder="VR Photo ထည့်ရန်"> -->
                  <textarea class="form-control" name="image2" id="" rows="1" placeholder="VR Photo ထည့်ရန်"></textarea>
                </div>


                <div class="input-group mb-3 mt-4"><span class="input-group-text">
                <img  src="assets/img/icon1/info.png" alt="" width="30px" height="20px"></span> 
                  <!-- <input class="form-control" name="image" type="textarea" placeholder="Description"> -->
                  <textarea class="form-control" name="detail" id="" rows="5" placeholder="အသေးစိတ်အကြောင်းအရာ"></textarea>
                </div>
               <input type="submit" value="ထည့်ရန်" class="btn mt-2" name="btnCreate">

             
                <!-- <button class="btn  btn-success" name="btnCreate" type="submit">Create Menu</button> -->
</form>
<?php 
  }
  else
  {
        $pgdId=$_POST['pgdName'];
        $result = mysqli_query($conn,"SELECT * FROM pagoda where p_id=$pgdId");
        if($row=mysqli_fetch_array($result)){
          $pgdName=$row['pgdName'];
        }
        $catName=$_POST['catName'];
        $subCatName=$_POST['subCatName'];
        $detail=$_POST['detail'];
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         $fileType=strtolower($fileType);

         $fileName1 = basename($_FILES["image1"]["name"]); 
         $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION); 
          $fileType1=strtolower($fileType1);
       // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
          $image = $_FILES['image']['tmp_name']; 
          $image1 = $_FILES['image1']['tmp_name']; 
          $image2=$_POST['image2']; 
          // $imgContent = addslashes(file_get_contents($image));
          // $imgContent1 = addslashes(file_get_contents($image1));
          
        }
        switch($catName)
        {
       case 'သမိုင်းကြောင်းများ' : { 
                                //logo
                                $final_save_dir = 'upload/history/';
                                move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                                $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                                //image
                                move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                                $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                                $qry="Insert into history(h_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                                } break;
        case "ဖူးမြော်လေ့လာနိုင်သောနေရာများ":{ 
                                    //logo
                                    $final_save_dir = 'upload/famous_places/';
                                    move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                                    $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                                    //image
                                    move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                                    $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                                    $qry="Insert into famous_places(f_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                                   } break;
        case "သာသနာထွန်းကားမှု":{ 
                                //logo
                                $final_save_dir = 'upload/buddhism/';
                                move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                                $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                                //image
                                move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                                $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                                $qry="Insert into buddhism(b_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                              }break;
        case "ဒေသနာတော်များ": { 
                              //logo
                              $final_save_dir = 'upload/ecclesiastes/';
                              move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                              $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                              //image
                              move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                              $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                              $qry="Insert into ecclesiastes(e_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                              // $qry="Insert into ecclesiastes(e_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                            }break;    
        case "ခေတ်အဆက်ဆက် ပြုပြင်မွမ်းမံထိန်းသိမ်းမှုများ":{ 
                                //logo
                                $final_save_dir = 'upload/national/';
                                move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                                $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                                //image
                                move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                                $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                                $qry="Insert into national(n_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                               }break;
        case "သမိုင်းဝင်ဖြစ်ရပ်များ": { 
                                //logo
                                $final_save_dir = 'upload/historical_event/';
                                move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                                $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                                //image
                                move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                                $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                                $qry="Insert into historical_event(h_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                              } break; 
        case "အထွေထွေ": { 
                              //logo
                              $final_save_dir = 'upload/general/';
                              move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                              $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                              //image
                              move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                              $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                              $qry="Insert into general(g_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                            }break; 
         case "မြေပုံ": { 
                            //logo
                            $final_save_dir = 'upload/map/';
                            move_uploaded_file($_FILES['image']['tmp_name'], $final_save_dir.$_FILES['image']['name']);
                            $image_full_path = $final_save_dir . $_FILES['image']['name'];  
                            //image
                            move_uploaded_file($_FILES['image1']['tmp_name'], $final_save_dir.$_FILES['image1']['name']);
                            $image_full_path1 = $final_save_dir . $_FILES['image1']['name'];
                            $qry="Insert into map(m_id,p_id,pgdName,catName,subCatName,icon,photo,vr_photo,detail_info) values('','$pgdId','$pgdName','$catName','$subCatName','$image_full_path','$image_full_path1','$image2','$detail')";
                           }break; 

        
        
         }
       
         $res=mysqli_query($conn,$qry);
         if($res)     
         { //echo "<p> successfully </p>"; 
          echo '<div class="alert alert-success">Your inserted data successfully </div>';
          header("Refresh:1; URL=insertSubmenu"); 
         }  
          else
            echo "<p>Not</p>";
   mysqli_close($conn);
  }
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        
      </div>
      
      <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
      <script src="vendors/simplebar/js/simplebar.min.js"></script>
      <!-- Plugins and scripts required by this view-->
      <script src="vendors/chart.js/js/chart.min.js"></script>
      <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
      <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
      <script src="js/main.js"></script>
      <script>
      </script>
  
    </body>
  </html>
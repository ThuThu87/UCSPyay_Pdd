<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
          <li class="nav-item"><a class="nav-link" href="#>
              <svg class="nav-icon">
                <!-- <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use> -->
              </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
          
          <li class="nav-title">Components</li>
          <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>                
            </svg> Create  Category</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="createcategory"><span class="nav-icon"></span> Insert</a></li>
            <li class="nav-item"><a class="nav-link" href="updatemenu.html"><span class="nav-icon"></span> Update</a></li>
            <li class="nav-item"><a class="nav-link" href="deletemenu.html"><span class="nav-icon"></span> Delete</a></li>             
          </ul>
        </li>
          <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>                
              </svg> Create Main Menu</a>
            <ul class="nav-group-items">
              <li class="nav-item"><a class="nav-link" href="insertmenu"><span class="nav-icon"></span> Insert</a></li>
              <li class="nav-item"><a class="nav-link" href="updatemenu.html"><span class="nav-icon"></span> Update</a></li>
              <li class="nav-item"><a class="nav-link" href="deletemenu.html"><span class="nav-icon"></span> Delete</a></li>             
            </ul>
          </li>

          <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>                
            </svg> Create  SubMenu</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="insertSubmenu"><span class="nav-icon"></span> Insert</a></li>
            <li class="nav-item"><a class="nav-link" href="updatemenu.html"><span class="nav-icon"></span> Update</a></li>
            <li class="nav-item"><a class="nav-link" href="deletemenu.html"><span class="nav-icon"></span> Delete</a></li>             
          </ul>
        </li>
          
          <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
              </svg> Pages</a>
            <ul class="nav-group-items">
              <li class="nav-item"><a class="nav-link" href="profile.html" target="_top">
                  <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                  <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Login</a></li>
              <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                  <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                  </svg> Register</a>
              
                </li>
                </ul>  
                <br><br><br>           
        <!-- <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button> -->
      </div>
      <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
          <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
              <svg class="icon icon-lg">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
              </svg> </ul>
            </button><a class="header-brand d-md-none" href="#">
              <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
              </svg></a>
            <ul class="header-nav d-none d-md-flex">
             <h2><b></b>Shwe San Daw Pagoda Information System</b></h2>
             
            </ul>
            
            <ul class="header-nav ms-3">
              <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-md"><img class="avatar-img" src="../img/logo5.jpg" alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                  <div class="dropdown-header bg-light py-2">
                   
                  <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">Account</div>
                  </div><a class="dropdown-item" href="#">
                    <svg class="icon me-2">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg> Profile</a><a class="dropdown-item" href="#">
                   
                      <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                      </svg> Updates<span class="badge badge-sm bg-info ms-2"></span></a><a class="dropdown-item" href="#">                   
                    
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                    
                    <svg class="icon me-2">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                    </svg> Logout</a>
                </div>
              </li>
            </ul>
          </div>
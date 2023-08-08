  <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Offcanvas navbar large">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img class="site_logo" alt="Site Logo"  src="{{asset('site/assets/imgs/logo.svg')}}" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav ">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#about-section">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#service-section">Service</a>
                </li>
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="#">Pages</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#blog-section">Blogs</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>

            <!--Start Header Right-->
              <div class="header-style2__right">
                <div class="phone-number-box1">
                    <div class="phone-icon">
                        <img src="{{asset('site/assets/imgs/phone-call.png')}}">
                    </div>
                    <div class="phone">
                        <h4>Call Us</h4>
                        <h3>
                            <a href="tel:123456789">+123-234-1234</a>
                        </h3>
                    </div>
                </div>
              </div>
              <!--End Header Right-->
        </div>
      </nav>

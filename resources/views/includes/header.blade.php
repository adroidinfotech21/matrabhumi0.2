<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Matrabhumi real </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/reality-icon.css">
  <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
  <link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
  <link rel="stylesheet" type="text/css" href="css/settings.css">
  <link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/registration.css">
  <link rel="icon" href="images/icon.png">

</head>

<body>



  <!--Loader-->
  <div class="loader">
    <div class="span">
      <div class="location_indicator"></div>
    </div>
  </div>
  <!--Loader-->


  <!--Header-->
  <header class="white_header">
    <div class="topbar white border">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <!-- <p>We are Best in Town With 40 years of Experience.</p> -->
          </div>
          <div class="col-md-7 text-right">
            <ul class="breadcrumb_top text-right">
              <li><a href="#" style="color:white"><i class="icon-icons43" ></i>Favorites</a></li>
              <!-- <li><a href="#"><i class="icon-icons215"></i>Submit Property</a></li> -->
              <li><a href="#" style="color:white"><i class="icon-icons215"></i>My Property</a></li>
              <li><a href="#" style="color:white"><i class="icon-icons230"></i>Profile</a></li>
              <li><a href="{{url('/login')}}" style="color:white"><i class=""></i>Login  </a>
            
            
            </li>
            <li><a href="{{url('/registration')}}" style="color:white"><i class=""></i> Sigup </a>
            
            
            </li>              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default bootsnav">
      <div class="container">
        <div class="attr-nav">
          <div class="upper-column info-box first">
            <!-- <div class="icons"><i class="icon-telephone114"></i></div> -->
            <ul>
              <li style="line-height: 2.5;"><strong>Add Property</strong></li>
              <!-- <li>+1 900 234 567 - 68</li> -->
            </ul>
          </div>
        </div>
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="{{ url('/index')}}"><img src="{{asset('images/newupdatelogo.png')}}" class="logo" alt="" width="180px" ></a>
        </div>
        <!-- End Header Navigation -->
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
            <li class="dropdown active">
              <a href="#." class="dropdown-toggle" data-toggle="dropdown">Home </a>
              
            </li>
            <li class="dropdown megamenu-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buy Property</a>
              <ul class="dropdown-menu megamenu-content bg" role="menu">
                <li>
                  <div class="row">
                    <div class="col-menu col-md-3">
                      <h5 class="title">Select Property</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Ready To Move</a></li>
                          <li><a href="#">owner property</a></li>
                          <li><a href="#">Budget Home</a></li>
                          <li><a href="#">Commercial Shop</a></li>
                          <li><a href="#">Commercial Showroom</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">Property Type</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Flat</a></li>
                          <li><a href="#">Duplex</a></li>
                          <li><a href="#">Vila</a></li>
                          <li><a href="#">Plot</a></li>
                          <li><a href="#">Office Space</a></li>
                          <li><a href="#">Shop</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">Property Loction</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Bhopal</a></li>
                          <li><a href="#">indore</a></li>
                          <!-- <li><a href="property_detail3.html">Property Detail 3</a></li>
                          <li><a href="index7.html">Single Property</a></li>
                          <li><a href="listing4.html">Search by Type</a></li> -->
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">Budget</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Under &#8377; 50Lac</a></li>
                          <li><a href="#">&#8377; 50Lac- &#8377;1cr</a></li>
                          <li><a href="#">&#8377; 1cr- &#8377;1.5cr</a></li>
                          <li><a href="#">Above &#8377;1.5cr </a></li>
                          <!-- <li><a href="testimonial.html">Testimonials</a></li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown megamenu-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sell Property</a>
              <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                  <div class="row">
                    <div class="col-menu col-md-3">
                      <h5 class="title"> LIST PROPERTIES </h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Flat Listing</a></li>
                          <li><a href="#">Duplex Listing</a></li>
                          <li><a href="#">Vila Listing </a></li>
                          <li><a href="#">Plot Listing</a></li>
                          <li><a href="#">Office Space Listing</a></li>
                          <li><a href="#">Shop Listing</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-9">
                      <h5 class="title bottom20">PROPERTIES LIST</h5>
                      <div class="row">
                        <div id="nav_slider" class="owl-carousel">
                          <div class="item">
                            <div class="image bottom15">
                              <img src="images/slider1.png" alt="Featured Property">
                              <span class="nav_tag yellow text-uppercase">for Sell</span>
                            </div>
                            <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                            <p>Towson London, MR 21501</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15">
                              <img src="images/slider2.png" alt="Featured Property">
                              <span class="nav_tag yellow text-uppercase">for Sell</span>
                            </div>
                            <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                            <p>Towson London, MR 21501</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15">
                              <img src="images/slider3.png" alt="Featured Property">
                              <span class="nav_tag yellow text-uppercase">for Sell</span>
                            </div>
                            <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                            <p>Towson London, MR 21501</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15">
                              <img src="images/slider4.png" alt="Featured Property">
                              <span class="nav_tag yellow text-uppercase">for Sell</span>
                            </div>
                            <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                            <p>Towson London, MR 21501</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15">
                              <img src="images/slider5.png" alt="Featured Property">
                              <span class="nav_tag yellow text-uppercase">for Sell</span>
                            </div>
                            <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                            <p>Towson London, MR 21501</p>
                          </div>
                          <div class="item">
                            <div class="image bottom15">
                              <img src="images/slider6.png" alt="Featured Property">
                              <span class="nav_tag yellow text-uppercase">for Sell</span>
                            </div>
                            <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                            <p>Towson London, MR 21501</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown megamenu-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rent Properties</a>
              <ul class="dropdown-menu megamenu-content bg" role="menu">
                <li>
                  <div class="row">
                    <div class="col-menu col-md-3">
                      <h5 class="title">Select Property</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Owner Property</a></li>
                          <li><a href="#">Verified Property</a></li>
                          <li><a href="#">furnished House</a></li>
                          <li><a href="#">Bachelor Friendly House</a></li>
                          <li><a href="#">immediately available</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">Property Type </h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Flat For Rent In Bhopal </a></li>
                          <li><a href="#">House For Rent In Bhopal </a></li>
                          <li><a href="#">Villa For Rent In Bhopal </a></li>
                          <li><a href="#">PG in Bhopal </a></li>
                          <li><a href="#">Office Space In Bhopal</a></li>
                          <li><a href="#">Commercial Space In Bhopal </a></li>
                          <li><a href="#">Staudent Hostels In Bhopal</a></li>
                          <li><a href="#">Luxurk PG In Bhopal</a></li>

                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">Property Budget</h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="#">Under &#8377; 10,000 </a></li>
                          <li><a href="#">&#8377; 10,000-&#8377; 15,000</a></li>
                          <li><a href="#">&#8377; 15,000-&#8377; 25,000</a></li>
                          <li><a href="#">Above &#8377; 25,000</a></li>

                        </ul>
                      </div>
                    </div>
                    <div class="col-menu col-md-3">
                      <h5 class="title">Property Loction </h5>
                      <div class="content">
                        <ul class="menu-col">
                          <li><a href="favorite_properties.html">Bhopal</a></li>
                          <li><a href="agent_profile.html">Indore</a></li>
                          <!-- <li><a href="404.html">404 Error</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                          <li><a href="testimonial.html">Testimonials</a></li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#." class="dropdown-toggle" data-toggle="dropdown">Property Services </a>
              <ul class="dropdown-menu">
                <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Rent Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Rent Agreement</a></li>
                    <li><a href="#">Rent Receipt</a></li>
                    <!-- <li><a href="news3.html">news Style3</a></li> -->
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Buy/Sell Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Home Interior</a></li>
                    <li><a href="#">Property Valuation</a></li>
                    <li><a href="#">Legal Title Check</a></li>
                    <li><a href="#">Property Lawyers</a></li>
                    <li><a href="#">House Inspection</a></li>
                    <li><a href="#">Vastu</a></li>

                  </ul>
                </li>
                <!-- <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Agetn Profile Styles</a>
                  <ul class="dropdown-menu">
                    <li><a href="agent_profile.html">Agent Profile 1</a></li>
                    <li><a href="agent_profile2.html">Agent Profile 2</a></li>
                  </ul>
                </li> -->
                <!-- <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Testimonials</a>
                  <ul class="dropdown-menu">
                    <li><a href="testimonial.html">Style 1</a></li>
                    <li><a href="testimonial2.html">Style 2</a></li>
                  </ul>
                </li> -->
                <!-- <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">FAQ's</a>
                  <ul class="dropdown-menu">
                    <li><a href="faq.html">Style 1</a></li>
                    <li><a href="faq2.html">Style 2</a></li>
                  </ul>
                </li> -->
                <!-- <li><a href="favorite_properties.html">Favorite Properties</a></li>
                <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">404 Error</a>
                  <ul class="dropdown-menu">
                    <li><a href="404.html">404 Error 1</a></li>
                    <li><a href="404-2.html">404 Error 2</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li><a href="#">Help</a></li>
            <!-- <li><a href="https://themeforest.net/item/castle-real-estate-template/18593260?ref=BrighThemes">Buy Now</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--Header-->

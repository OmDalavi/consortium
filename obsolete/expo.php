<!DOCTYPE html>
<html lang="en" class="no-js">

    <?php $pagetitle = 'StartUp Expo | Consortium'; ?>
    <!-- Begin Head -->
    <?php include("includes/head.php")?>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->

        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo">
                                <a href="/" class="s-header-v2__logo-link">
                                    <!--<img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="https://startupconclave.ecellvnit.org/static/img/E-Cell_white.png" alt="Ecell Logo" height="50">-->
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="img/icon.png" alt="Conso" height="40">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <li class="s-header-v2__nav-item"><a href="index.php" class="s-header-v2__nav-link">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="#about" class="s-header-v2__nav-link">About</a></li>

                                    <li class="s-header-v2__nav-item">
                                        <!--<a href="#events" class="s-header-v2__nav-link">Events</a>-->
                                        <a href="index.html" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="https://startupconclave.ecellvnit.org" class="s-header-v2__dropdown-menu-link">Startup Conclave</a></li>
                                            <li><a href="/ceo.php" class="s-header-v2__dropdown-menu-link">CEO</a></li>

                                        </ul>
                                    </li>

                                    <li class="s-header-v2__nav-item">
                                        <!--<a href="#events" class="s-header-v2__nav-link">Events</a>-->
                                        <a href="/attractions.php" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Attractions <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="#townhall" class="s-header-v2__dropdown-menu-link">TownHall</a></li>
                                            <li><a href="#zerotoone" class="s-header-v2__dropdown-menu-link">Zero To One</a></li>
                                            <li><a href="/intern.php" class="s-header-v2__dropdown-menu-link">Internship Fair</a></li>
                                            <li><a href="#expo" class="s-header-v2__dropdown-menu-link">Startup Expo</a></li>
                                            <li><a href="/attractions.php" class="s-header-v2__dropdown-menu-link">Workshops & Webinars</a></li>


                                        </ul>
                                    </li>

                                    <li class="s-header-v2__nav-item"><a href="https://www.ecellvnit.org/spons.php" class="s-header-v2__nav-link">Sponsors</a></li>
                                    <li class="s-header-v2__nav-item"><a href="#register" class="s-header-v2__nav-link">Register</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/team.php" class="s-header-v2__nav-link">Team</a></li>
                                    <?php if($_SESSION['email']){ ?>
                                      <li class="s-header-v2__nav-item"><a href="logout.php" class="s-header-v2__nav-link">Logout</a></li>
                                  <?php }else{ ?>
                                    <!--<li class="s-header-v2__nav-item"><a href="reg.php" class="s-header-v2__nav-link">Register</a></li>-->
                                    <!-- <li class="s-header-v2__nav-item"><a href="login.php" class="s-header-v2__nav-link">Login</a></li> -->
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>

        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--xs" style="background: #161616">

            <div style="" class="expo-back-out"> </div>
            <div style="" class="expo-front-out"> </div>


            <div class="container g-ver-center--xs g-padding-y-100--xs g-padding-y-0--lg">
                <!--<img src="img/logo/logo-teentitans.png" alt="" width="280" style="margin-top:-180px">-->
                <div class="g-margin-t-10--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md g-margin-l-20--xs g-margin-l-80--sm" >


                     <div style="display:flex; align-items:center">
                     <img src="https://startupconclave.ecellvnit.org/static/img/E-Cell_white.png" alt="Ecell Logo" height="50" style="float:right; z-index:2"/>
                     <!--<p class="g-color--white-opacity" style="z-index:2; margin:20px;">&</p>-->
                     <p class="g-color--white-opacity" style="position: relative;margin-left:10px;z-index:2; margin-top:22px">presents</p>

                    <!--<img src="img/tielogo.jpg" alt="TIE Nagpur" style="z-index:2" height="50"/>-->
                    </div>




                    <h1 class="g-font-size-50--xs g-font-size-60--sm g-font-size-80--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>STARTUP<br>EXPO</b></h1>
                    <!-- <p class="g-color--white-opacity" style="position: relative;">in association with</p>
                    <img src="img/tielogo.jpg" alt="TIE Nagpur" style="z-index:2; position:relative; margin-top: -20px;" height="35"/> -->

                    <div class="row">
                        <br>
                        <div class="col-sm-6 col-sm-5 col-lg-5" style="padding-left:0px !important;">
                            <p class="g-color--white-opacity g-font-size-20--xs"><b>Ready, Set, Network!</p>
                            <p class="g-color--white-opacity g-font-size-18--xs"> 28-29 March 2020</p>
                        </div>
                    </div>
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                        <a id="reg_button" href="#newform" title="Register">
                            <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                            <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Register Now!</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>



        <div class="g-promo-section" style="background:#000" id="about">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-40--xs">
                <div class="row">
                    <div class="col-md-4 g-margin-t-45--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white" style="font-weight:900">About</h2>
                        </div>
                        <p class="g-font-size-14--xs g-font-size-16--sm g-color--white-opacity">
                            Startup Expo provides a grand platform to help Entrepreneurs/Startups to showcase their early stage prototypes, products, and services directly to the customers and investors.
                            <br>
                            This is a perfect low-cost opportunity for marketing startup ideas to the investors to get investment opportunities and live feedback from the general public.
                        </p>

                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <img src="img/expo-about.jpg" alt="" style="max-width:100%; max-height:400px">
                    </div>
                </div>
            <!--</div>-->
            </div>
        </div>
        <!-- End Coordinator -->

        <!--========== END PROMO BLOCK ==========-->
        <!-- Features -->
        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-40--xs g-padding-y-80--sm">
            <h1 class="g-margin-l-20--xs g-margin-l-80--sm g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--dark" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;position: relative;"><b>Why?<br></b></h1>

            <div class="card" id="event-card-bg">
    		    <div class="card-tabs">
    		      <ul class="tabs tabs-fixed-width">
    		        <li class="tab"><a class="active" href="#perks" id="but_perks">Perks</a></li>
    		        <li class="tab"><a id="but_startups" href="#startups">Startups</a></li>
    		      </ul>
    		    </div>
    		    <div class="card-content code">
    		    	<div id="perks">


    				<div class="container g-padding-y-0--xs">

                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">On Ground Visibilty</h4>
                        <a class="g-color--dark-light footer-para g-font-size-14--xs">
                            Product showcase & feedback from your Target Audience comprising of college students, corporate professionals, investors and entrepreneurs.
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Mentoring Sessions</h4>
                        <a class="g-color--dark-light footer-para g-font-size-14--xs">
                            Online mentoring sessions by our venerable mentors to scrutinize your startup and provide valuable remarks.
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Investor Trail</h4>
                        <a class="g-color--dark-light footer-para g-font-size-14--xs">
                             Investors from your sector that are present will personally visit your kiosk at different times during the Consortium to interact with you.
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Networking Arena</h4>
                        <a  class="g-color--dark-light footer-para g-font-size-14--xs">
                            Meet startups to gain invaluable contacts, which they’ll be able to leverage with time. The arena will include all finalists of startup conclave, a panel of investors, judges for startup conclave, students in college pursuing their own ideas.

                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Publicity</h4>
                        <a  class="g-color--dark-light footer-para g-font-size-14--xs">
                             Presence in consortium in the form of standees, banners & pamphlets put in registration kits. Also, presence in social media posts and official website of Consortium ‘20.
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h4 class="g-color--dark">Complimentary Passes</h4>
                        <div  class="g-color--dark-light footer-para g-font-size-14--xs">
                            Free Entry to Zero To One, TownHall, and access to Startup Conclave pitching sessions.
                        </div>
                    </div>

                </div>



            </div>
            </div>
            <div id="startups" style="display:none;">

              <div class="container g-padding-y-0--xs">

                  <div class="row">
                      <!-- <div class="col-sm-12 col-md-4">
                          <a href="https://novzo.in" target="_blank"><img src="img/expo/novzo.png" alt="Novzo" class="imgs" /></a>
                      </div> -->


                  </div>

              </div>

    				</div>


    		    </div>
		  </div>
        </div>
        <!-- End Features -->


        <div id="mentors" class="container-fluid g-padding-y-40--xs g-padding-y-60--sm" style="background:#000;">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <p class="text-uppercase g-font-size-20--xs g-font-weight--700 g-letter-spacing--2 g-margin-b-25--xs" style="color: #fff">MENTORS</p>
            </div>

            <!-- Swiper -->
            <div class="s-swiper js__swiper-news swiper-container-horizontal">
                <!-- Wrapper -->
                <div class="swiper-wrapper g-margin-b-0--xs" style="transform: translate3d(-1046px, 0px, 0px); transition-duration: 0ms;"><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="11" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/mahesh.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">MAHESH RAKHEJA</h3>
                                <p class="g-color--white">Former Director, Religare</p>
                            </div>
                            <a href="https://www.linkedin.com/in/maheshrakheja/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="12">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/anil.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">ANIL KUMAR REDDY</h3>
                                <p class="g-color--white">CEO &amp; Co-founder at Donatekart</p>
                            </div>
                            <a href="https://www.linkedin.com/in/anil-kumar-reddy/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                        </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="13">
                       <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                           <div class="g-margin-b-15--xs">
                               <img src="img/pictures/harshad.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                               <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">HARSHAD SACHANI</h3>
                               <p class="g-color--white">Co-Founder at Career Mentors</p>
                           </div>
                           <a href="https://www.linkedin.com/in/harshadsachani/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                       </div>
                   </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate swiper-slide-prev" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="14">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/manish.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">MANISH KHANCHANDANI</h3>
                              <p class="g-color--white">Co-Founder at Khichadiwala LLP</p>
                          </div>
                          <a href="https://www.linkedin.com/in/manish-khanchandani-1b303b33/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                      </div>
                  </article>
                  <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="3" style="width: 231.5px; margin-right: 30px;">
                       <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                           <div class="g-margin-b-15--xs">
                               <img src="img/pictures/balaji.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                               <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">Balaji Viswanathan</h3>
                               <p class="g-color--white">CEO - Invento Robotics</p>
                           </div>
                           <a href="https://www.linkedin.com/in/balajivi/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                       </div>
                   </article>
                    <article class="g-bg-position--center swiper-slide grad swiper-slide-active" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="0">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-20--lg g-padding-y-40--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/yukti.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">YUKTI MEHANDIRATTA</h3>
                              <p class="g-color--white">Silhouette by Yukti</p>
                          </div>
                          <a href="https://www.linkedin.com/in/yukti-mehandiratta-3164b652" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                      </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="2">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/anup.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:30px">ANUP PANDEY</h3>
                                <p class="g-color--white">Chief Customer Officer at Kare4u Healthcare Solutions </p>
                            </div>
                            <a href="https://www.linkedin.com/in/anuppandey/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article>


                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="6" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/dashradh.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:30px">DASHRADH RAM NUTAKKI</h3>
                                <p class="g-color--white">Mentor &amp; Coach - Factoryal Business Incubator (OPC) Pvt. Ltd. </p>
                            </div>
                            <a href="https://www.linkedin.com/in/ramnutakki/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="7" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/aparna.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:30px">APARNA MISHRA</h3>
                                <p class="g-color--white">Founder CafeBiz Women Entrepreneurs Hub</p>
                            </div>
                            <a href="https://www.linkedin.com/in/aparna-mishra-8a685810/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="8" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/giridhar.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:30px">T R GIRIDHAR</h3>
                                <p class="g-color--white">Founder Partner - Just Bespoke Advisory LLP</p>
                            </div>
                            <a href="https://www.linkedin.com/in/tarakad-giridhar-ab33012/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="9" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/krishna.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">KRISHNAKUMAR DEVNALLY</h3>
                                <p class="g-color--white">Director, mPower Solutions</p>
                            </div>
                            <a href="https://www.linkedin.com/in/krishnakumardevnally/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="10" style="width: 231.5px; margin-right: 30px;">
                       <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                           <div class="g-margin-b-15--xs">
                               <img src="img/pictures/dipesh.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                               <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">DIPESH AJMERA</h3>
                               <p class="g-color--white">CEO, Ajmera Tyres, Nagpur</p>
                           </div>
                           <a href="https://www.linkedin.com/in/dipesh-ajmera-757b4315/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                       </div>
                   </article>
                     <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="11" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/mahesh.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">MAHESH RAKHEJA</h3>
                                <p class="g-color--white">Former Director, Religare</p>
                            </div>
                            <a href="https://www.linkedin.com/in/maheshrakheja/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article>
                     <article class="g-bg-position--center swiper-slide grad" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="12">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/anil.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">ANIL KUMAR REDDY</h3>
                                <p class="g-color--white">CEO &amp; Co-founder at Donatekart</p>
                            </div>
                            <a href="https://www.linkedin.com/in/anil-kumar-reddy/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                        </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="13">
                       <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                           <div class="g-margin-b-15--xs">
                               <img src="img/pictures/harshad.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                               <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">HARSHAD SACHANI</h3>
                               <p class="g-color--white">Co-Founder at Career Mentors</p>
                           </div>
                           <a href="https://www.linkedin.com/in/harshadsachani/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                       </div>
                   </article>
                   <article class="g-bg-position--center swiper-slide grad" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="14">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/manish.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">MANISH KHANCHANDANI</h3>
                              <p class="g-color--white">Co-Founder at Khichadiwala LLP</p>
                          </div>
                          <a href="https://www.linkedin.com/in/manish-khanchandani-1b303b33/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                      </div>
                  </article>
                <article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="0">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-20--lg g-padding-y-40--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/yukti.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">YUKTI MEHANDIRATTA</h3>
                              <p class="g-color--white">Silhouette by Yukti</p>
                          </div>
                          <a href="https://www.linkedin.com/in/yukti-mehandiratta-3164b652" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                      </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="1">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/saurabh.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:30px"> SAURABH MOODY VOICEMAN</h3>
                                <p class="g-color--white">CEO - alphaa.ai </p>
                            </div>
                            <a href="https://www.linkedin.com/in/saurabhmoody/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" style="width: 231.5px; margin-right: 30px;" data-swiper-slide-index="2">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/anup.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:30px">ANUP PANDEY</h3>
                                <p class="g-color--white">Chief Customer Officer at Kare4u Healthcare Solutions </p>
                            </div>
                            <a href="https://www.linkedin.com/in/anuppandey/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More</a>
                        </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 231.5px; margin-right: 30px;">
                       <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                           <div class="g-margin-b-15--xs">
                               <img src="img/pictures/balaji.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                               <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">Balaji Viswanathan</h3>
                               <p class="g-color--white">CEO - Invento Robotics</p>
                           </div>
                           <a href="https://www.linkedin.com/in/balajivi/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Read More</a>
                       </div>
                   </article></div>
                <!-- End Wrapper -->

                <!-- Pagination -->
                <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--dark g-text-center--xs js__swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
            </div>
            <!-- End Swiper -->
        </div>


        <div id="investors" class="container-fluid g-padding-y-60--xs g-padding-y-80--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-20--xs g-font-weight--700 g-letter-spacing--2 g-margin-b-25--xs" style="color: #111"> PREVIOUS INVESTORS</p>
            </div>

            <!-- Swiper -->
            <div class="s-swiper js__swiper-news swiper-container-horizontal">
                <!-- Wrapper -->
                <div class="swiper-wrapper g-margin-b-60--xs" style="transform: translate3d(-1046px, 0px, 0px); transition-duration: 0ms;"><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 231.5px; margin-right: 30px;">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/shashikant.png" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">SHASHIKANT CHAUDHARY</h3>
                              <p class="g-color--white">Cofounder, Nagpur Angels</p>
                          </div>
                          <a href="https://www.linkedin.com/in/bhaveshkothari1511/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                      </div>
                  </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/devesh.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">DEVESH CHAWLA</h3>
                                <p class="g-color--white">CEO &amp; Founder - Chatur Ideas</p>
                            </div>
                            <a href="https://www.linkedin.com/in/devesh-chawla/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/shwetank.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">SHWETANK SHRIMAL</h3>
                                <p class="g-color--white">Serial Entrepreneur &amp; Investor - UK</p>
                            </div>
                            <a href="https://www.linkedin.com/in/shwetank-shrimal-43b74625/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="4" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/neha.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">NEHA JAIN</h3>
                                <p class="g-color--white">Co-founder at Z Nation Lab</p>
                            </div>
                            <a href="https://www.linkedin.com/in/neha-jain-820ab5120/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article>
                  <article class="g-bg-position--center swiper-slide grad swiper-slide-active" data-swiper-slide-index="0" style="width: 231.5px; margin-right: 30px;">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/kishor.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">KISHOR PANPALIYA</h3>
                              <p class="g-color--white">Vice President At Americas &amp; APAC</p>
                          </div>
                          <a href="https://www.linkedin.com/in/kishorbampaliya/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                      </div>
                  </article>
                  <!-- <article class="g-bg-position--center swiper-slide grad swiper-slide-next" data-swiper-slide-index="1" style="width: 231.5px; margin-right: 30px;">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/shashikant.png" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">SHASHIKANT CHAUDHARY</h3>
                              <p class="g-color--white">Cofounder, Nagpur Angels</p>
                          </div>
                          <a href="https://www.linkedin.com/in/bhaveshkothari1511/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                      </div>
                  </article> -->
                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="2" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/devesh.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">DEVESH CHAWLA</h3>
                                <p class="g-color--white">CEO &amp; Founder - Chatur Ideas</p>
                            </div>
                            <a href="https://www.linkedin.com/in/devesh-chawla/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="3" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/shwetank.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">SHWETANK SHRIMAL</h3>
                                <p class="g-color--white">Serial Entrepreneur &amp; Investor - UK</p>
                            </div>
                            <a href="https://www.linkedin.com/in/shwetank-shrimal-43b74625/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article>
                    <article class="g-bg-position--center swiper-slide grad" data-swiper-slide-index="4" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/neha.jpeg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">NEHA JAIN</h3>
                                <p class="g-color--white">Co-founder at Z Nation Lab</p>
                            </div>
                            <a href="https://www.linkedin.com/in/neha-jain-820ab5120/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article>
                <article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 231.5px; margin-right: 30px;">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/kishor.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">KISHOR PANPALIYA</h3>
                              <p class="g-color--white">Vice President At Americas &amp; APAC</p>
                          </div>
                          <a href="https://www.linkedin.com/in/kishorbampaliya/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                      </div>
                  </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 231.5px; margin-right: 30px;">
                      <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                          <div class="g-margin-b-15--xs">
                              <img src="img/pictures/shashikant.png" style="border-radius: 100px; width: 200px;height: 200px">
                              <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">SHASHIKANT CHAUDHARY</h3>
                              <p class="g-color--white">Cofounder, Nagpur Angels</p>
                          </div>
                          <a href="https://www.linkedin.com/in/bhaveshkothari1511/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                      </div>
                  </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/devesh.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">DEVESH CHAWLA</h3>
                                <p class="g-color--white">CEO &amp; Founder - Chatur Ideas</p>
                            </div>
                            <a href="https://www.linkedin.com/in/devesh-chawla/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article><article class="g-bg-position--center swiper-slide grad swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 231.5px; margin-right: 30px;">
                        <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs pad">
                            <div class="g-margin-b-15--xs">
                                <img src="img/pictures/shwetank.jpg" style="border-radius: 100px; width: 200px;height: 200px">
                                <h3 class="g-font-size-16--xs g-color--white g-margin-b-10--xs" style="padding-top:50px">SHWETANK SHRIMAL</h3>
                                <p class="g-color--white">Serial Entrepreneur &amp; Investor - UK</p>
                            </div>
                            <a href="https://www.linkedin.com/in/shwetank-shrimal-43b74625/" target="_blank" class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Know More<img src=""></a>
                        </div>
                    </article></div>
                <!-- End Wrapper -->

                <!-- Pagination -->
                <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--dark g-text-center--xs js__swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
            </div>
            <!-- End Swiper -->
        </div>
        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-40--xs g-padding-y-80--sm" style="background:#161416" id="register">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <p class="text-uppercase g-font-size-20--xs g-font-weight--700 g-letter-spacing--2 g-margin-b-10--xs" style="color: #fff">REGISTER</p>
            </div>

            <div class="row">


                    <div class="col-md-6 col-md-offset-3" style="text-align: center;">
                        <p class="g-color--white-opacity g-font-size-16--sm">Here is your chance to showcase your start-up to a pool of intellectual minds and network with eminent personalities!<br></p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a id="reg_button" href="#newform" title="Register">
                                <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                                <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Register Now!</span>
                            </a>
                        </div>
                    </div>
                </div>

        </div>
        <div id="popup" style="background:#000; display:none;">

            <div class="g-container--sm g-padding-y-80--xs g-padding-y-80--sm">
                <div id="close" class="g-text-center--xs g-padding-y-40--xs" >
                  <i class="ti-close"></i>
                </div>


                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Startup Expo</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                    <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"></p>

                </div>
                <form class="center-block g-width-550--sm g-width-650--md g-width-700--lg" method="post" action="exposub.php" onsubmit="return validateData();">
                    <div class="permanent">
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Startup Name" name="startup">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Basic Description" name="description">
                        </div>
                        <div class="row g-margin-b-50--xs">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="email" class="form-control s-form-v3__input" placeholder="* EMAIL" name="email" style="text-transform: none">
                            </div>
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="text" class="form-control s-form-v3__input" placeholder="* WEBSITE" name="website" style="text-transform: none">
                            </div>


                        </div>

                        <div class="row g-margin-b-50--xs">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v3__input" placeholder="* Phone" name="phone" style="text-transform: none">
                            </div>
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="hiring" placeholder="* No. of members">
                                    <option value="" selected="" disabled="" hidden="">Interested In hiring?</option>
                                    <option value="1" style="color:black">Yes</option>
                                    <option value="0" style="color:black">No</option>
                                    <!-- <option value="More" style="color:black">More</option> -->

                                </select>
                            </div>
                        </div>


                    </div>
                    <!--<div class="temp"></sdiv>-->

                    <br>

                    <div class="g-text-center--xs">
                        <button type="submit" name="register" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-40--xs g-padding-y-80--sm" style="background:#000" >
            <h2 class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--md g-color--white g-padding-x-20--xs" style="text-align:center">Get In Touch</h2>

            <div id="managers" class="row g-row-col--5 g-padding-x-40--xs g-padding-y-40--xs g-padding-x-20--md g-padding-x-100--lg">
                <div class="col-xs-4 col-sm-offset-2 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Lakshya Shukla</h4>
                         <p class="g-color--white">+91 77384 46941<br>lakshyashukla32@gmail.com</p>
                    </div>
                </div>
                <!--<div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">-->
                <!--    <div class="g-text-center--xs">-->
                <!--        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Sagar Bansal</h4>-->
                <!--         <p class="g-color--white">+91 77580 11192<br>sagarbansal@ecellvnit.org</p>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Jitendra Rahangdale</h4>
                         <p class="g-color--white">+91 89560 79892<br>jitendra98rahangdale@gmail.com</p>
                    </div>
                </div>

            </div>
        </div>





        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <?php include("includes/script.php");?>

        <script type="text/javascript">
          $("#reg_button").click(function(){
            $("#popup").css({"display":"block","color":"white"});
            var x = $("#popup").offset().top;
            $("html ,body").animate({ scrollTop: x},800);

          });
          $("#close").click(function(){
            $("#popup").css({"display":"none"});
            var y = $("#login").offset().top;
            $("html ,body").animate({ scrollTop: y},800);
          });

          $("#but_perks").click(function(){
            $("#perks").css({"display":"block"});
            $("#perks").animate({opacity: 1}, 1000);
            $("#startups").css({"display":"none"});
            $("#startups").animate({opacity: 0}, 100);
          });

          $("#but_startups").click(function(){
            $("#perks").css({"display":"none"});
            $("#perks").animate({opacity: 0}, 1000);
            $("#startups").css({"display":"block"});
            $("#startups").animate({opacity: 1}, 100);
          });
        </script>

        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
  <!--      <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>-->

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
  <!--      <script type="text/javascript" src="vendor/jquery.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>-->
  <!--      <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>-->
  <!--      <script src="/js/cards.js"></script>-->
		<!--<script src="/js/materialize.js"></script>-->

        <!-- General Components and Settings -->
  <!--      <script type="text/javascript" src="js/global.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/header-sticky.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/scrollbar.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/swiper.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/parallax.min.js"></script>-->
  <!--      <script type="text/javascript" src="js/components/wow.min.js"></script>-->
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>

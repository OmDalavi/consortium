<!DOCTYPE html>
<html lang="en" class="no-js">
  <?php $pagetitle = 'Brainathon | Consortium'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>
  <!-- End Head -->
    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-fullheight--xs event-landing1" style="background: url('img/1920x1080/landing-brainathon.jpg');" id="swades">
          <style type="text/css">
                @media(max-width: 767px){
                  .brain{
                    background: rgba(0,0,0,0.6);
                  }
                }
              </style>
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--lg event-landing-inner brain">
              

                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md g-margin-l-20--xs g-margin-l-80--sm">
                    <!--<img src="img/logo/ceoblack.png" alt="" width="200" style="margin-top:-100px; margin-left:-20px">-->

                    <h1 class="g-font-size-45--xs g-font-size-60--sm g-font-size-70--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;"><b>Brainathon</b></h1>

                    <h3 class="g-color--white ">Aptitude Talent Hunt</h3>
                    <p class="g-color--white g-font-size-15--xs">A one hour aptitude test to put your brain cells to work</p><br/>
                    <h3 class="g-color--white"><b>ON SPOT CASH PRIZE <span class="g-color--red">&#8377; 15K </span></b><br>
              

                    </h3>

                    <br>

                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                                <a href="/register.php" title="Register">
                                    <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                                    <span class="text-uppercase s-btn--primary-bg g-radius--50 g-padding-x-30--xs g-padding-y-15--xs g-font-size-13--xs g-color--white g-padding-x-15--xs">Register Now <span class="ti-angle-right"></span></span>
                                </a>
                            </div>

                </div>

            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->


        <div class="g-promo-section" style="background:#000" id="contact">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-10--xs">
                <h2 class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--md g-color--white g-padding-x-20--xs">Are you smarter than the people who hire you?</h2>
                <ol>
                  <li class="g-color--white"><p class="g-color--white">On spot cash prize of <b>INR 15K</b>.</p></li>
                  <li class="g-color--white"><p class="g-color--white">Attractive prizes for top 10 positions.</p></li>
                  <li class="g-color--white"><p class="g-color--white">Certificate of Participation from E-Cell VNIT to each and every participant!</p></li>
                  <li class="g-color--white"><p class="g-color--white">Instant rewards and a chance to know where you stand!</p></li>
                </ol>

            </div>
        </div>

        <!-- End Features -->
        <div class="g-promo-section" style="background:#000" id="contact">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-40--xs">
                <h2 class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--md g-color--white g-padding-x-20--xs">Get In Touch</h2>
        <!--<img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">-->
            <!--<div class="g-container--md g-padding-y-40--xs">-->
            <div id="managers" class="row g-row-col--5 g-padding-x-40--xs g-padding-y-40--xs g-padding-x-20--md g-padding-x-100--lg">
                <div class="col-xs-4 col-md-offset-2 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Pratik Zodpey</h4>
                         <p class="g-color--white">+91 73788 97208</p>
                    </div>
                </div>
                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Anushree Rungta</h4>
                         <p class="g-color--white">+91 98224 44112</p>
                    </div>
                </div>
            </div>
            </div>
        </div>



        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <?php include("includes/script.php");?>

        <script type="text/javascript">

          $("#but_why").click(function(){
            $("#why").css({"display":"block"});
            $("#why").animate({opacity: 1}, 1000);
            $("#structure").css({"display":"none"});
            $("#structure").animate({opacity: 0}, 100);
            $("#timeline").css({"display":"none"});
            $("#timeline").animate({opacity: 0}, 100);
          });

          $("#but_structure").click(function(){
            $("#why").css({"display":"none"});
            $("#why").animate({opacity: 0}, 100);
            $("#structure").css({"display":"block"});
            $("#structure").animate({opacity: 1}, 1000);
            $("#timeline").css({"display":"none"});
            $("#timeline").animate({opacity: 0}, 100);
          });

          $("#but_timeline").click(function(){
            $("#why").css({"display":"none"});
            $("#why").animate({opacity: 0}, 100);
            $("#structure").css({"display":"none"});
            $("#structure").animate({opacity: 0}, 100);
            $("#timeline").css({"display":"block"});
            $("#timeline").animate({opacity: 1}, 1000);
          });
        </script>
        <!--========== END FOOTER ==========-->

    </body>
    <!-- End Body -->
</html>

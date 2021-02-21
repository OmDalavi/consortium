<!DOCTYPE html>
<html lang="en" class="no-js">
  <?php $pagetitle = 'CONSOx | Consortium'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>
  <!-- End Head -->
    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-fullheight--xs event-landing1" style="background: url('img/1920x1080/consox.png');">
          <style type="text/css">
                @media(max-width: 767px){
                  .brain{
                    background: rgba(0,0,0,0.4);
                  }
                }
                .brain{
                    background: rgba(0,0,0,0.4);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  }
              </style>
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--lg event-landing-inner brain">
              
                    <!--<img src="img/logo/ceoblack.png" alt="" width="200" style="margin-top:-100px; margin-left:-20px">-->      

                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s" style="text-align:center;">
                        <a href="https://goo.gl/forms/tbVLBBNFL1uYvbJo1" title="Register" style="text-align:center;">
                            <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                            <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Register Now <span class="ti-angle-right"></span></span>
                        </a>
                        <br>
                        <p class="g-color--white g-font-size-14--xs g-margin-t-20--xs g-text-center--xs"><b>Register Now to collect your passes from the registrations desk.<br>VNIT Auditorium</b></p>
                    </div>

                

            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->

        <!-- End Features -->
        <div class="g-promo-section" style="background:#000" id="contact">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-10--xs">
                <h2 class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--md g-color--white g-padding-x-20--xs g-text-center--xs">Get In Touch</h2>
        <!--<img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">-->
            <!--<div class="g-container--md g-padding-y-40--xs">-->
            <div id="managers" class="row g-row-col--5 g-padding-x-40--xs g-padding-y-40--xs g-padding-x-20--md g-padding-x-100--lg">
                <div class="col-xs-4 col-md-offset-2 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Sagar Bansal</h4>
                         <p class="g-color--white">+91 7758011192<br>sagarbansal@ecellvnit.org</p>
                    </div>
                </div>
                <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Anushree Rungta</h4>
                         <p class="g-color--white">+91 98224 44112<br>anushree.rungta@ecellvnit.org</p>
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
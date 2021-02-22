<?php
  @session_start();
  // error_reporting(E_ALL);
  //   ini_set('display_errors', '1');
  require_once('includes/dbconnect.php');



  require_once('includes/mailing.php');

  // Connected
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $contact = $_SESSION['contact'];
  }else{
    $_SESSION['login_error'] = "Kindly Login First";
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <?php $pagetitle = 'Dashboard | Consortium'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>
    <!-- Body -->
    <body>
        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->
        <!--========== PROMO BLOCK ==========-->
        <div class="core-container">
        <div class="g-bg-position--center js__parallax-window" style="background:#000;height:auto;">
            <div class="g-container--md g-text-center--xs g-padding-y-60--xs">
                <h2 class="g-font-size-26--xs g-font-size-36--sm g-font-size-40--md g-margin-t-90--xs g-color--white g-letter-spacing--1">Dashboard</h2>
                <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">
                  <?php if(isset($msg)) {echo $msg;} ?></p>
                  <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-color--white g-letter-spacing--2 g-margin-b-25--xs"><?php  if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; }?></p>
            </div>
        </div>

        <!--========== END PROMO BLOCK ==========-->
        <!--========== PAGE CONTENT ==========-->
        <div class="container g-padding-x-40--sm g-padding-x-100--md g-padding-x-0--xs g-padding-y-40--xs g-padding-y-80--sm" id="details" style="background:rgba(255, 255, 255,1);">
            <div class="card" id="event-card-bg">
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#why" id="but_why">YOUR EVENTS</a></li>
                <li class="tab"><a  href="#structure" id="but_structure">WORKSHOPS</a></li>

              </ul>
            </div>
            <div class="card-content code">
              <div id="why">
                <br>
                <div class="row product-grid">

                  <?php
                    $events = array('Swadesh','AdVenture','trec','renderico','ceo','war_of_worlds','BizMantra','BizQuiz', 'nirmaan','iplauction');
                    $query = "SELECT * FROM registrations WHERE email='$email'";
                    $result = mysqli_query($con,$query);
                    $num = mysqli_num_rows($result);
                    if($num>0){
                      echo "<p class='g-color--dark g-font-size-16--xs'>Your registered events will be shown here.</p><br/>";
                      $row = mysqli_fetch_array($result);
                      for($var = 0;$var < 10; $var++ ){
                        if($row[$events[$var]] == 1){
                    ?>
                    <div id="<?php echo $events[$var] ?>click" class="product-card col-xs-12 col-md-3" style="cursor:pointer;">
                        <div class="product-card__item-grid" style="background:url(img/events/<?php echo $events[$var] ?>.jpg)">
                            <div class="product-card__item-text-v2">
                              <h2 class="g-color--white g-text-center--xs g-font-size-16--xs" style="text-decoration: underline;"><b><?php echo $events[$var] ?></b></h2>


                              <p class="g-color--white g-text-center--xs g-font-size-14--xs">
                                <?php
                                  echo 'Welcome to the event, ', $name, '!';
                                 ?>

                              </p>
                              <br>
                              <br>

                              <div class="wow fadeInLeft g-text-center--xs" data-wow-duration=".3" data-wow-delay=".5s" style="display: flex;justify-content: center;">
                                  <a id="reg_button" href="<?php if($events[$var] == 'Brainathon')
                                                              {echo 'brainathon.php';}
                                                              elseif ($events[$var] == 'CEO')
                                                              {echo 'CEO.php';}
                                                              else {echo $events[$var].'.php';} ?>" target="_blank" title="Register">
                                      <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50 g-margin-r-10--xs">View Event</span>
                                  </a>

                                  <a href="#paylink"><span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">
                                        <?php if($events[$var] == 'Brainathon'){
                                          echo 'Pay Here';
                                        }elseif($events[$var] == "ceo"){
                                          echo 'Pay Now';;
                                        }elseif($events[$var] == "nirmaan" ){
                                          echo 'Start Test';
                                        }elseif($events[$var] == "Swadesh" ){
                                          echo 'Start Test';
                                        }elseif($events[$var] == "trec" ){
                                          echo 'Fill questionnaire';
                                        }elseif($events[$var] == "war_of_worlds" ){
                                          echo 'Results';
                                        }else{
                                          echo 'Pay now';
                                        } ?>
                                      </span>
                                  </a>

                                  <?php

                                  if($events[$var] == 'nirmaan')
                                  { echo '<a id="reg_button" href="#nirmaanclick"

                                      <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50 g-margin-r-10--xs">Your Team</span>
                                  </a>';}
                                  elseif($events[$var] == 'renderico')
                                  { echo '<a id="reg_button" href="https://www.dropbox.com/request/opVcxvwLFtHctuLdleoo"

                                      <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50 g-margin-r-10--xs">Upload here</span>
                                  </a>';}

                                  ?>

                              </div>


                            </div>
                        </div>
                    </div>
                  <?php }
                      }
                    }

                   ?>
                 </div>

                <br/>
                <br>
                <a href="register.php"><p class="g-font-size-16--xs g-color--red g-letter-spacing--2 g-margin-b-25--xs"><b>Click here to register for new events</b></p></a>
                <br>

            </div>
            <div id="structure" style="display:none;">
              <!-- <h5><b>The Workshops you register for will be shown here. Stay Tuned!</b></h5> -->
              <div class="row product-grid">

                <?php
                  $attractions = array('aimlworkshop', 'Pitch_Perfe');
                  $query = "SELECT * FROM registrations WHERE Email='$email'";
                  $result = mysqli_query($con,$query);
                  $num = mysqli_num_rows($result);
                  if($num>0){
                    echo "<p class='g-color--dark g-font-size-16--xs'>Your registered workshops and many other attractions will be shown here.</p><br/>";
                    $row = mysqli_fetch_array($result);
                    for($var = 0;$var < 2; $var++ ){
                      if($row[$attractions[$var]] == 1){
                  ?>
                  <div id="<?php echo $events[$var] ?>click" class="product-card col-xs-12 col-md-3" style="cursor:pointer;">
                      <div class="product-card__item-grid" style="background:url(img/events/<?php echo $attractions[$var] ?>.jpg)">
                          <div class="product-card__item-text-v2">
                            <h2 class="g-color--white g-text-center--xs g-font-size-16--xs" style="text-decoration: underline;"><b><?php echo $attractions[$var] ?></b></h2>
                            <h2 class="g-color--white g-text-center--xs g-font-size-14--xs">Click on Register button below to </2>

                          </div>
                      </div>
                  </div>
                <?php }
                    }
                  }

                 ?>
               </div>
              <br/>
              </div>
            </div>
      </div>
        </div>
      </div>
      <?php
        $query = "SELECT * FROM ceo WHERE email='$email'";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if($num>0){
          $data = mysqli_fetch_array($result);
          if($data['payment_status']==0){
       ?>
      <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylink" style="display:none; background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylink');" style="position:absolute; left:90%" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Payment for CEO Registration</h2>

      <form class="center-block g-width-600--sm" method="post" action="pay.php">
          <div class="permanent permanent-CEO row">
            <p class="g-color--white g-text-center--xs g-font-size-14--xs">Fill this form to pay 100 and complete your registration.</p>
              <div class="col-sm-6 g-margin-b-30--xs">
                    <input type="text" class="form-control s-form-v3__input" placeholder="* Name" name="CUSTOMER_NAME" style="text-transform: none" value="<?php echo $name ?>">
              </div>
              <div class="col-sm-6 g-margin-b-30--xs">
                    <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="CUSTOMER_EMAIL" style="text-transform: none" value="<?php echo $email ?>">
              </div>
              <div class="col-sm-6 g-margin-b-30--xs">
                    <input type="contact" class="form-control s-form-v3__input" placeholder="* Contact" name="CUSTOMER_MOBILE" style="text-transform: none" value="<?php echo $contact ?>">
              </div>

          </div>
          <div class="g-text-center--xs">
              <button type="submit" name="pay" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Proceed to Pay</button>
          </div>
      </form>
    </div>
    <?php
  }else {
    ?>  <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylink" style="display:none; background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylink');" style="position:absolute; left:90%" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">You have registered Successfully! All further details shall be communicated to you through your registered email id.</h2>
      </div>
        <?php
      }
    }
     ?>
        <!-- End Speakers -->


        <?php include("includes/script.php");?>
        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <!--========== END FOOTER ==========-->

        <script>
            var wid = $(".product-card__item-grid").width();
            $(".product-card__item-grid").css({
                "height":wid+"px"
            });
        </script>
        <!--========== END JAVASCRIPTS ==========-->
        <script type="text/javascript">
        $("#Swadeshclick").click(function(){
          $("#Swadesh").css({"display":"block"});
          $("#Swadesh").animate({opacity: 1}, 1000);
          var y = $("#Swadesh").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });
        $("#trecclick").click(function(){
          $("#trec").css({"display":"block"});
          $("#trec").animate({opacity: 1}, 1000);
          var y = $("#trec").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });

        $("#iplauctionclick").click(function(){
          $("#iplauction").css({"display":"block"});
          $("#iplauction").animate({opacity: 1}, 1000);
          var y = $("#iplauction").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });
        function closemodel(event){
            $("#"+event).css({"display": "none"},100);
        }

        $("#nirmaanclick").click(function(){
          $("#nirmaan").css({"display":"block"});
          $("#nirmaan").animate({opacity: 1}, 1000);
          var y = $("#nirmaan").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });



        $("#rendericoclick").click(function(){
          $("#renderico").css({"display":"block"});
          $("#renderico").animate({opacity: 1}, 1000);
          var y = $("#renderico").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });
         $("#AdVentureclick").click(function(){
          $("#AdVenture").css({"display":"block"});
          $("#AdVenture").animate({opacity: 1}, 1000);
          var y = $("#AdVenture").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });
         $("#BizQuizclick").click(function(){
          $("#BizQuiz").css({"display":"block"});
          $("#BizQuiz").animate({opacity: 1}, 1000);
          var y = $("#BizQuiz").offset().top;
            $("html ,body").animate({ scrollTop: y},200);
        });
        $("#ceoclick").click(function(){
         $("#paylink").css({"display":"block"});
         $("#paylink").animate({opacity: 1}, 1000);
         var y = $("#paylink").offset().top;
           $("html ,body").animate({ scrollTop: y},200);
       });



        </script>


    </body>
    <!-- End Body -->
</html>

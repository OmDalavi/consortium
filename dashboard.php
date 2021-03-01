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
                <h2 class="g-font-size-26--xs g-font-size-36--sm g-font-size-40--md g-margin-t-90--xs g-color--white g-letter-spacing--1">Dashboard</h2><br>
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                  <a href="register.php" title="Register">
                      <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                      <span class="text-uppercase s-btn--primary-bg g-radius--50 g-padding-x-30--xs g-padding-y-15--xs g-font-size-13--xs g-color--white g-padding-x-15--xs">Register for new events</span>
                  </a>
                </div>
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
                    $events = array('swades','adventure','operation_research','renderico','ceo','war_of_worlds','pitch_mantra','bizquiz','wallstreet');
                    $query = "SELECT * FROM registrations WHERE email='$email'";
                    $result = mysqli_query($con,$query);
                    $num = mysqli_num_rows($result);
                    if($num > 0) {
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
                              <?php 
                                      if(in_array($events[$var], array('adventure'), true) ){
                                        ?>
                                      <a id="reg_button" href="#members<?php echo $events[$var]; ?>" target="_blank">
                                      
                                        <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50 g-margin-r-10--xs">Add members</span>
                                        </a>
                                      <?php }elseif(in_array($events[$var], array('operation_research','renderico','bizquiz','swades','ceo','wallstreet','war_of_worlds'), true) ){ ?>
                                        <a id="reg_button" href="<?php echo $events[$var].'.php'; ?>" target="_blank">
                                        <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50 g-margin-r-10--xs"> View event </span>
                                        </a>
                                      <?php }?>
                                    

                                  <a href="#paylink<?php echo $events[$var]; ?>"><span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">
                                        <?php
                                        if(in_array($events[$var], array('adventure','swades','ceo','wallstreet','war_of_worlds'), true) ){
                                          echo 'Pay Here';
                                        }elseif(in_array($events[$var], array('operation_research','renderico','bizquiz'), true) ){
                                          echo 'Add Members';//demo button
                                        }?>
                                      </span>
                                  </a>


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
                  // $attractions = array('aimlworkshop', 'Pitch_Perfe');
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
                      <div class="product-card__item-grid" style="background:url(img/events/ <?php echo $attractions[$var] ?>.jpg)">
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

      <!-- Event Sections -->

      <!-- CEO Payment Section -->

      <?php
        $query = "SELECT * FROM ceo WHERE email='$email'";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if($num>0){
          $data = mysqli_fetch_array($result);
          if($data['payment_status']==0){
       ?>
      <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkceo" style="display:none; background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkceo');" style="position:absolute; left:90%; cursor:pointer" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Payment for CEO Registration</h2>

      <form class="center-block g-width-600--sm" method="post" action="pay.php?v=ceo">
          <div class="permanent permanent-CEO row">
            <p class="g-color--white g-text-center--xs g-font-size-14--xs">Fill this form to pay &#8377;100 and complete your registration.</p>
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
    ?>  <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkceo" style="display:none; background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkceo');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">You have successfully registed for CEO! All further details shall be communicated to you through your registered email id.</h2>
      </div>
        <?php
      }
    }
     ?>

     <!-- CEO Payment Section ends -->
     <!-- adventure payment section -->
     <?php
        $query = "SELECT * FROM adventure WHERE email='$email'";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        if($num>0){
          $data = mysqli_fetch_array($result);
          if($data['payment_status']==0){
       ?>
      <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkadventure" style="display:none; background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkadventure');" style="position:absolute; left:90%; cursor:pointer" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Payment for Adventure Registration</h2>

      <form class="center-block g-width-600--sm" method="post" action="pay.php?v=adventure">
          <div class="permanent permanent-CEO row">
            <p class="g-color--white g-text-center--xs g-font-size-14--xs">Fill this form to pay &#8377;100 and complete your registration.</p>
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
    ?>  <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkadventure" style="display:none; background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkadventure');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">You have successfully registed for CEO! All further details shall be communicated to you through your registered email id.</h2>
      </div>
        <?php
      }
    }
     ?>

     <!-- adve

     <!-- Wallstreet Payment Section -->

     <?php
       $query = "SELECT * FROM wallstreet WHERE email='$email'";
       $result = mysqli_query($con,$query);
       $num = mysqli_num_rows($result);
       if($num>0){
         $data = mysqli_fetch_array($result);
         if($data['payment_status']==0){
      ?>
     <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkwallstreet" style="display:none; background: #000">

       <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkwallstreet');" style="position:absolute; left:90%" >X</a>
       <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Payment for Wallstreet Registration</h2>

       <form class="center-block g-width-600--sm" method="post" action="pay.php?v=wallstreet">
          <div class="permanent permanent-CEO row">
            <p class="g-color--white g-text-center--xs g-font-size-14--xs">Fill this form to pay <b>&#8377;200</b> and complete your registration.</p>
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
            <button type="submit" name="paybasic" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Proceed to Pay <b>&#8377;75</b></button>
          </div>
          <div class="g-text-center--xs">
            <button type="submit" name="payadvanced" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Proceed to Pay <b>&#8377;200*</b></button>
          </div>
        </form>
      </div>
      <?php
    }else {
    ?>  <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkwallstreet" style="display:none; background: #000">

          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkwallstreet');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">You have succesfully registered for <b>Wallstreet</b>! All further details shall be communicated to you through your registered email id.</h2>
        </div>
        <?php
      }
    }
    ?>

    <!-- Wallstreet Payment Section ends -->

    <!-- War of Worlds Payment Section -->

    <?php
      $query = "SELECT * FROM war_of_worlds WHERE email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);
      if($num>0){
        $data = mysqli_fetch_array($result);
        if($data['payment_status']==0){
     ?>
    <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkwar_of_worlds" style="display:none; background: #000">

      <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkwar_of_worlds');" style="position:absolute; left:90%" >X</a>
      <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Payment for Wallstreet Registration</h2>

      <form class="center-block g-width-600--sm" method="post" action="pay.php?v=war_of_worlds">
         <div class="permanent permanent-CEO row">
           <p class="g-color--white g-text-center--xs g-font-size-14--xs">Fill this form to pay &#8377;50 and complete your registration.</p>
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
   ?>  <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="paylinkwar_of_worlds" style="display:none; background: #000">

         <a class="g-color--white g-font-size-20--xs" onclick="closemodel('paylinkwar_of_worlds');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
         <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">You have succesfully registered for <b>War of Worlds</b>! All further details shall be communicated to you through your registered email id.</h2>
       </div>
       <?php
     }
   }
   ?>
  

   <!-- War of Worlds Payment ends -->

  <!-- Adventure Team Members details --->
  <?php
    $query = "SELECT * FROM adventure WHERE email='$email'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);
    if($num>0){
      $data = mysqli_fetch_array($result);
      if($data['team_conso_id']==''){
    ?>
    <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="adventure" style="display:none; background: #000">

      <a class="g-color--white g-font-size-20--xs" onclick="closemodel('adventure');" style="position:absolute; left:90%; cursor:pointer" >X</a>
      <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Add Team members for AdVenture</h2>
      <p class="g-color--white g-text-center--xs g-font-size-14--xs">atleast fill the details of one member to complete team registration</p>
      <form class="center-block g-width-500--sm g-text-center--xs g-width-600--md" method="post" action="" onsubmit="return validateData();">

          <div class="permanent">
              <div class="g-margin-b-30--xs">
                    <input type="text" class="form-control s-form-v3__input" placeholder="*Second Team Member Name" name="ad2_name" style="text-transform: none" id="name">
              </div>
              <div class="row g-margin-b-50--xs">
                  <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                      <input type="email" class="form-control s-form-v3__input" placeholder="*Second Team Member Email" name="ad2_email" style="text-transform: none" id="email">
                  </div>
                  <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                      <input type="tel" class="form-control s-form-v3__input" placeholder="*Second Team Member Contact" name="ad2_contact" style="text-transform: none">
                  </div>
              </div>

          </div>
          <div class="permanent">
              <div class="g-margin-b-30--xs">
                    <input type="text" class="form-control s-form-v3__input" placeholder="*Third Team Member Name" name="ad3_name" style="text-transform: none" id="name">
              </div>
              <div class="row g-margin-b-50--xs">
                  <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                      <input type="email" class="form-control s-form-v3__input" placeholder="*Third Team Member Email" name="ad3_email" style="text-transform: none" id="email">
                  </div>
                  <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                      <input type="tel" class="form-control s-form-v3__input" placeholder="*Third Team Member Contact" name="ad3_contact" style="text-transform: none">
                  </div>
              </div>

          </div>
          <div class="permanent">
              <div class="g-margin-b-30--xs">
                    <input type="text" class="form-control s-form-v3__input" placeholder="*Fourth Team Member Name" name="ad4_name" style="text-transform: none" id="name">
              </div>
              <div class="row g-margin-b-50--xs">
                  <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                      <input type="email" class="form-control s-form-v3__input" placeholder="*Fourth Team Member Email" name="ad4_email" style="text-transform: none" id="email">
                  </div>
                  <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                      <input type="tel" class="form-control s-form-v3__input" placeholder="*Fourth Team Member Contact" name="ad4_contact" style="text-transform: none">
                  </div>
              </div>

          </div>

          <div class="g-text-center--xs">
              <button type="submit" name="addteam_ad" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
          </div>

      </form>
  </div>
  <?php
  if(isset($_POST['addteam_ad'])) {
    $ad_email = $ad_name = $ad_contact = array();
    $count_mem = 0;
    $ad_email[0] = $con->real_escape_string($_POST['ad2_email']);
    $ad_name[0] = $con->real_escape_string($_POST['ad2_name']);
    $ad_contact[0] = $con->real_escape_string($_POST['ad2_contact']);
    $ad_email[1] = $con->real_escape_string($_POST['ad3_email']);
    $ad_name[1] = $con->real_escape_string($_POST['ad3_name']);
    $ad_contact[1] = $con->real_escape_string($_POST['ad3_contact']);
    $ad_email[2] = $con->real_escape_string($_POST['ad4_email']);
    $ad_name[2] = $con->real_escape_string($_POST['ad4_name']);
    $ad_contact[2] = $con->real_escape_string($_POST['ad4_contact']);
    $_otp = '1234567890';
    $_otp = str_shuffle($_otp);
    // $otp = substr($otp, 0, 6);

    $team_conso_id = substr($name, 0, 3);
    $team_conso_id .= substr($_otp, 0, 4);
    $query_main  = "UPDATE adventure SET team_conso_id='$team_conso_id' WHERE email='$email'";
    $q = '';
    for($i=0; $i<3; $i++){
      if($ad_name[$i]!='' || $ad_email[$i]!='' || $ad_contact[$i]!='')
      {
        $q  .= "INSERT INTO adventure(email,name,contact,team_conso_id) VALUES('$ad_email[$i]','$ad_name[$i]','$ad_contact[$i]','$team_conso_id')";
        $count_mem = $count_mem +1;
      }
    }

  if($count_mem >= 1){
    if ($con->query($query_main) === TRUE){
    if ($con->multi_query($q) === TRUE) {
      ?>
      <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="adventure" style="display:none; background: #000">

          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('adventure');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">You have successfully registed your team members. Kindly pay your payment if not done yet!</h2>
        </div>
        <?php
      //header('location:dashboard.php');
    } else {
      ?>
      <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="adventure" style="display:none; background: #000">

          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('adventure');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Error Connecting. Try Again!</h2>
        </div>
    <?php
  }
}
}
  else{
    ?>
    <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="adventure" style="display:none; background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('adventure');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">No members added!</h2>
      </div>
      <?php
  }
  }
}
  else {
  ?> <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="adventure" style="display:none; background: #000">

      <a class="g-color--white g-font-size-20--xs" onclick="closemodel('adventure');" style="position:absolute; left:90%; cursor:pointer;" >X</a>
      <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">You have successfully registed your team members. Kindly pay your payment if not done yet!</h2>
    </div>
      <?php
    }

}
   ?>
   <!-- adventure members section end -->

        <?php include("includes/script.php");?>
        <script type="text/javascript" src="js/dashboard.js"></script>
        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <!--========== END FOOTER ==========-->

        <!--========== END JAVASCRIPTS ==========-->
    </body>
    <!-- End Body -->
</html>

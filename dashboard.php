<?php
  @session_start();
  // error_reporting(E_ALL);
  //   ini_set('display_errors', '1');
  $db_host = "localhost:3306";
  $db_username = "conso20";
  $db_pass = "Conso@123";
  $db_name = "conso20";
  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");



  require_once('includes/mailing.php');

  // Connected
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    if(isset($_POST['swanewmem'])){


      // Adding Team First
      $teamname = $con->real_escape_string($_POST['teamname']);
      $teamemail = $_SESSION['email'];
      $contact = $_SESSION['contact'];
      $query = "INSERT INTO Swadesh_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
      if(mysqli_query($con,$query)){
        $s = 'Welcome Aboard Team '.$teamname.' | Swades20';

        htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'Swadesh');
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);


        for($i=2; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO Swadesh(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | Swades20';
            htmlMail($memberemail,$s,$membername,$teamname, 'Swadesh');

          }
          else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }

      }else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "You've registered successfully. Check your email, to begin with the first round of Swades which is a questionnaire.";
      header('location:dashboard.php');

    }

    if(isset($_POST['swanewmem-renderico'])){


      // Adding Team First
      $teamname = $con->real_escape_string($_POST['teamname']);
      $teamemail = $_SESSION['email'];
      $contact = $_SESSION['contact'];
      $query = "INSERT INTO renderico_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
      if(mysqli_query($con,$query)){
        $s = 'Welcome Aboard Team '.$teamname.' | Render.ico';

        htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'renderico');
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);


        for($i=2; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO renderico(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | Render.ico';
            htmlMail($memberemail,$s,$membername,$teamname, 'renderico');

          }
          else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }

      }else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "You've registered successfully. Check your email, to begin with the first round of Render.ico.";
      header('location:dashboard.php');

    }

    if(isset($_POST['swanewmem-trec'])){


      // Adding Team First
      $teamname = $con->real_escape_string($_POST['teamname']);
      $teamemail = $_SESSION['email'];
      $contact = $_SESSION['contact'];
      $query = "INSERT INTO trec_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
      if(mysqli_query($con,$query)){
        $s = 'Welcome Aboard Team '.$teamname.' | TREC';

        htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'TREC');
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);


        for($i=2; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO trec(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | TREC';
            htmlMail($memberemail,$s,$membername,$teamname, 'TREC');

          }
          else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }

      }else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "You've registered successfully. The notification of the first round will be sent to you through email.";
      header('location:dashboard.php');

    }


    if(isset($_POST['swanewmem-adventure'])){


      // Adding Team First
      $teamname = $con->real_escape_string($_POST['teamname']);
      $teamemail = $_SESSION['email'];
      $contact = $_SESSION['contact'];
      $query = "INSERT INTO AdVenture_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
      if(mysqli_query($con,$query)){
        $s = 'Welcome Aboard Team '.$teamname.' | AdVenture';

        htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'AdVenture');
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);


        for($i=2; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO AdVenture(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | AdVenture';
            htmlMail($memberemail,$s,$membername,$teamname, 'AdVenture');

          }
          else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }

      }
      else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "You've registered successfully. Check your email, to begin with the first round of AdVenture.";
      header('location:dashboard.php');

    }


        if(isset($_POST['swanewmem-nirmaan'])){


          // Adding Team First
          $teamname = $con->real_escape_string($_POST['teamname']);
          $teamemail = $_SESSION['email'];
          $contact = $_SESSION['contact'];
          $query = "INSERT INTO nirmaan_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | Nirmaan';

            htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'nirmaan');
            #Adding Menbers
            $number = $con->real_escape_string($_POST['number']);


            for($i=2; $i<=$number; $i++){

              $membername = $con->real_escape_string($_POST['membername'.$i]);
              $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
              $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
              $memberteam = $teamemail;

              $query = "INSERT INTO nirmaan(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
              if(mysqli_query($con,$query)){
                $s = 'Welcome Aboard Team '.$teamname.' | Nirmaan';
                htmlMail($memberemail,$s,$membername,$teamname, 'Nirmaan');

              }
              else{
                $msg = "Error member: " . mysqli_error($con);
              }

            }

          }else{
            $msg = "Error Team: " . mysqli_error($con);
          }
          $_SESSION['msg'] = "You've registered successfully. Check your email, to begin with the first round of Nirmaan.";
          header('location:dashboard.php');

        }


    if(isset($_POST['swanewmem-bizquiz'])){


      // Adding Team First
      $teamname = $con->real_escape_string($_POST['teamname']);
      $teamemail = $_SESSION['email'];
      $contact = $_SESSION['contact'];
      $query = "INSERT INTO BizQuiz_team(Name,Email,Contact) VALUES('$teamname','$teamemail','$contact')";
      if(mysqli_query($con,$query)){
        $s = 'Welcome Aboard Team '.$teamname.' | BizQuiz';

        htmlMail($teamemail,$s,$_SESSION['name'],$teamname, 'BizQuiz');
        #Adding Menbers
        $number = $con->real_escape_string($_POST['number']);


        for($i=2; $i<=$number; $i++){

          $membername = $con->real_escape_string($_POST['membername'.$i]);
          $memberemail = $con->real_escape_string($_POST['memberemail'.$i]);
          $memberphone = $con->real_escape_string($_POST['memberphone'.$i]);
          $memberteam = $teamemail;

          $query = "INSERT INTO BizQuiz(Name,Main_Email,Email,Contact) VALUES('$membername','$memberteam','$memberemail','$memberphone')";
          if(mysqli_query($con,$query)){
            $s = 'Welcome Aboard Team '.$teamname.' | BizQuiz';
            htmlMail($memberemail,$s,$membername,$teamname, 'BizQuiz');

          }
          else{
            $msg = "Error member: " . mysqli_error($con);
          }

        }

      }else{
        $msg = "Error Team: " . mysqli_error($con);
      }
      $_SESSION['msg'] = "You've registered successfully. Check your email, to begin with the first round of BizQuiz.";
      header('location:dashboard.php');

    }
  }
  else{
    $_SESSION['login_error'] = "Kindly Login First";
    header('location:/login.php');
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
                    $events = array('Swadesh','AdVenture','trec','renderico','CEO','war_of_worlds','BizMantra','BizQuiz', 'nirmaan','iplauction');
                    $query = "SELECT * FROM Registrations WHERE Email='$email'";
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

                                if($events[$var] != "Brainathon"){
                                  echo 'Click Here To Edit Your Team Members';
                                }
                                elseif($events[$var] != "CEO"){
                                  echo 'Further details will be mailed to you';
                                }
                                elseif($events[$var] != "BizMantra"){
                                  echo 'Paper will be conducted on your respective sections';
                                }
                                else{

                                  $query = "SELECT * FROM Brainathon WHERE Email = '$email'";
                                  $result = mysqli_query($con,$query);
                                  $data = mysqli_fetch_assoc($result);

                                  if($data['isPaid'] == 1){
                                    echo 'Your Are Successfully Registered.';
                                  }
                                  else{
                                      echo 'You have not paid your registration fee. Click on the registered event below to complete your registrations.';
                                  }

                                }

                                 ?>

                              </p>
                              <br>
                              <br>

                              <div class="wow fadeInLeft g-text-center--xs" data-wow-duration=".3" data-wow-delay=".5s" style="display: flex;justify-content: center;">
                                  <a id="reg_button" href="/<?php if($events[$var] == 'Brainathon')
                                                              {echo 'brainathon.php';}
                                                              elseif ($events[$var] == 'CEO')
                                                              {echo 'CEO.php';}
                                                              else {echo $events[$var].'.php';} ?>" target="_blank" title="Register">
                                      <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50 g-margin-r-10--xs">View Event</span>
                                  </a>

                                  <a id="reg_button" href="<?php if($events[$var] == 'Brainathon')
                                                                    {echo'/paybrain.php';}
                                                                    elseif($events[$var] == "CEO"){
                                                                      echo'/team.php';
                                                                    }
                                                                    elseif($events[$var] == "nirmaan"){
                                                                      echo '/nirmaan-test.php';
                                                                    }
                                                                    elseif($events[$var] == "Swadesh"){
                                                                      echo '/swadesh-questionnaire.php';

                                                                    }
                                                                    elseif ($events[$var] == 'trec')
                                                                    {echo '/pay-trec.php';}
                                                                    elseif ($events[$var] == 'war_of_worlds')
                                                                    {echo '/war-of-worlds-result.php';}
                                                                    else{echo '#'.$events[$var].'click';}
                                                                     ?>" >
                                      <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50"><?php if($events[$var] == 'Brainathon')
                                                                                                                        {echo'Pay Here';}
                                                                                                                        elseif($events[$var] == "CEO"){
                                                                                                                          echo'Contact Team';
                                                                                                                        }
                                                                                                                        elseif($events[$var] == "nirmaan" ){
                                                                                                                          echo'Start Test';
                                                                                                                        }
                                                                                                                        elseif($events[$var] == "Swadesh" ){
                                                                                                                          echo'Start Test';
                                                                                                                        }
                                                                                                                        elseif($events[$var] == "trec" ){
                                                                                                                          echo'Fill questionnaire';
                                                                                                                        }
                                                                                                                        elseif($events[$var] == "war_of_worlds" ){
                                                                                                                          echo'Results';
                                                                                                                        }
                                                                                                                        else
                                                                                                                        {echo 'Your Team';} ?></span>
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
              <h5><b>Tickets</b></h5>
              <div class="row product-grid">

                <?php
                  $attractions = array('aimlworkshop', 'Pitch_Perfe');
                  $query = "SELECT * FROM Registrations WHERE Email='$email'";
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



                            <div class="wow fadeInLeft g-text-center--xs" data-wow-duration=".3" data-wow-delay=".5s" style="display: flex;justify-content: center;">
                                <a id="reg_button" href="/<?php if($attractions[$var] == 'aimlworkshop')
                                                            {echo 'aimlworkshop.php';}
                                                            else {echo $attractions[$var].'.php';} ?>" target="_blank" title="Register">
                                    <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50 g-margin-r-10--xs">Register</span>
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
              </div>
            </div>
      </div>
        </div>
      </div>
        <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="Swadesh" style="display:none;background: #000">

          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('Swadesh');" style="position:absolute; left:90%" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Swades</h2>

          <?php
            $query = "SELECT * FROM Swadesh_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
              $query = "SELECT * FROM Swadesh WHERE Main_Email='$email'";
              $result = mysqli_query($con,$query);
              $num = mysqli_num_rows($result);
              echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
              while($row = mysqli_fetch_array($result)){
                echo "<li class='g-color--white' style='text-decoration:none;'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }
              echo "</ol>";
            }
            else{
            ?>

            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent permanent-Swadesh row">
                  <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default</p>
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                    </div>

                    <div class="col-sm-6 g-margin-b-30--xs">
                        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-Swadesh">
                            <option value="" selected="" disabled="" hidden="">Add more members</option>
                            <option value="2" style="color:black">1</option>
                            <option value="3" style="color:black">2</option>
                            <option value="4" style="color:black">3</option>

                        </select>
                    </div>

                </div>
                <div class="g-text-center--xs">
                    <button type="submit" name="swanewmem" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
                </div>
            </form>
          <?php
            }
          ?>

        </div>


        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="renderico" style="display:none;background: #000">

          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('renderico');" style="position:absolute; left:90%" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Render.ico</h2>


          <?php
            $query = "SELECT * FROM renderico_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
              $query = "SELECT * FROM renderico WHERE Main_Email='$email'";
              $result = mysqli_query($con,$query);
              $num = mysqli_num_rows($result);
              echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
              while($row = mysqli_fetch_array($result)){
                echo "<li class='g-color--white'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }
              echo "</ol>";
            }
            else{
            ?>

            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent permanent-renderico row">
                  <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default. One can also participate as a single member team.</p>
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                    </div>

                    <div class="col-sm-6 g-margin-b-30--xs">
                        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-renderico">
                            <option value="" selected="" disabled="" hidden="">Add more members</option>
                            <option value="1" style="color:black">0 (Single Member)</option>
                            <option value="2" style="color:black">1</option>

                        </select>
                    </div>


                </div>
                <div class="g-text-center--xs">
                    <button type="submit" name="swanewmem-renderico" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
                </div>
            </form>
          <?php
            }
          ?>

        </div>

        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="AdVenture" style="display:none;background: #000">
          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('AdVenture');" style="position:absolute; left:90%" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">AdVenture</h2>

          <?php
            $query = "SELECT * FROM AdVenture_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
              $query = "SELECT * FROM AdVenture WHERE Main_Email='$email'";
              $result = mysqli_query($con,$query);
              $num = mysqli_num_rows($result);
              echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
              while($row = mysqli_fetch_array($result)){
                echo "<li class='g-color--white' style='text-decoration:none;'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }
              echo "</ol>";
            }
            else{
            ?>

            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent permanent-AdVenture row">
                  <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default</p>
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                    </div>

                    <div class="col-sm-6 g-margin-b-30--xs">
                        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-AdVenture">
                            <option value="" selected="" disabled="" hidden="">Add more members</option>
                            <option value="2" style="color:black">1</option>
                            <option value="3" style="color:black">2</option>
                            <option value="4" style="color:black">3</option>
                            <option value="5" style="color:black">4</option>

                        </select>
                    </div>


                </div>
                <div class="g-text-center--xs">
                    <button type="submit" name="swanewmem-adventure" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
                </div>
            </form>
          <?php
            }
          ?>
        </div>



        <!-- BizQuiz -->

        <div class="container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="BizQuiz" style="display:none;background: #000">
          <a class="g-color--white g-font-size-20--xs" onclick="closemodel('BizQuiz');" style="position:absolute; left:90%" >X</a>
          <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Bizquiz</h2>

          <?php
            $query = "SELECT * FROM BizQuiz_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
              $query = "SELECT * FROM BizQuiz WHERE Main_Email='$email'";
              $result = mysqli_query($con,$query);
              $num = mysqli_num_rows($result);
              echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
              while($row = mysqli_fetch_array($result)){
                echo "<li class='g-color--white' style='text-decoration:none;'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
              }
              echo "</ol>";
            }
            else{
            ?>

            <form class="center-block g-width-600--sm" method="post" action="">
                <div class="permanent permanent-AdVenture row">
                  <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default</p>
                    <div class="col-sm-6 g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                    </div>

                    <div class="col-sm-6 g-margin-b-30--xs">
                        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-AdVenture">
                            <option value="" selected="" disabled="" hidden="">Add more members</option>
                            <option value="2" style="color:black">1</option>

                        </select>
                    </div>


                </div>
                <div class="g-text-center--xs">
                    <button type="submit" name="swanewmem-bizquiz" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
                </div>
            </form>
          <?php
            }
          ?>
        </div>

      <!-- TREC -->
      <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="trec" style="display:none;background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('trec');" style="position:absolute; left:90%" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">TREC</h2>

        <?php
          $query = "SELECT * FROM trec_team WHERE Email='$email'";
          $result = mysqli_query($con,$query);
          $num = mysqli_num_rows($result);
          $data = $result->fetch_array(MYSQLI_ASSOC);
          if($num!=0){
            echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
            $query = "SELECT * FROM trec WHERE Main_Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
            while($row = mysqli_fetch_array($result)){
              echo "<li class='g-color--white' style='text-decoration:none;'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
            }
            echo "</ol>";
          }
          else{
          ?>

          <form class="center-block g-width-600--sm" method="post" action="">
              <div class="permanent permanent-TREC row">
                <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default</p>
                  <div class="col-sm-6 g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                  </div>

                  <div class="col-sm-6 g-margin-b-30--xs">
                      <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-TREC">
                          <option value="" selected="" disabled="" hidden="">Add more members</option>
                          <option value="2" style="color:black">1</option>
                          <option value="3" style="color:black">2</option>
                          <option value="4" style="color:black">3</option>

                      </select>
                  </div>

              </div>
              <div class="g-text-center--xs">
                  <button type="submit" name="swanewmem-trec" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
              </div>
          </form>
        <?php
          }
        ?>

      </div>


      <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="nirmaan" style="display:none;background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('nirmaan');" style="position:absolute; left:90%" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Nirmaan</h2>

        <?php
          $query = "SELECT * FROM nirmaan_team WHERE Email='$email'";
          $result = mysqli_query($con,$query);
          $num = mysqli_num_rows($result);
          $data = $result->fetch_array(MYSQLI_ASSOC);
          if($num!=0){
            echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
            $query = "SELECT * FROM nirmaan WHERE Main_Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
            while($row = mysqli_fetch_array($result)){
              echo "<li class='g-color--white' style='text-decoration:none;'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
            }
            echo "</ol>";
          }
          else{
          ?>

          <form class="center-block g-width-600--sm" method="post" action="">
              <div class="permanent permanent-nirmaan row">
                <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default</p>
                  <div class="col-sm-6 g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                  </div>

                  <div class="col-sm-6 g-margin-b-30--xs">
                      <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-nirmaan">
                          <option value="" selected=""  hidden="">Add more members</option>
                          <option value="2" style="color:black">1</option>
                          <option value="3" style="color:black">2</option>
                          <option value="4" style="color:black">3</option>

                      </select>
                  </div>

              </div>
              <div class="g-text-center--xs">
                  <button type="submit" name="swanewmem-nirmaan" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
              </div>
          </form>
        <?php
          }
        ?>

      </div>

      <div class="swades container g-padding-x-40--sm g-padding-x-20--xs g-padding-y-20--xs g-padding-y-50--sm" id="iplauction" style="display:none;background: #000">

        <a class="g-color--white g-font-size-20--xs" onclick="closemodel('iplauction');" style="position:absolute; left:90%" >X</a>
        <h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">IPL Auction</h2>

        <?php
          $query = "SELECT * FROM iplauction_team WHERE Email='$email'";
          $result = mysqli_query($con,$query);
          $num = mysqli_num_rows($result);
          $data = $result->fetch_array(MYSQLI_ASSOC);
          if($num!=0){
            echo '<h2 class="g-font-size-30--xs g-text-center--xs g-margin-t-70--xs g-color--white g-letter-spacing--1">Hello, '.$data['Name'].'</h2>';
            $query = "SELECT * FROM iplauction WHERE Main_Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            echo "<p class='g-color--white g-font-size-20--xs'>Team Members</p><ol>";
            while($row = mysqli_fetch_array($result)){
              echo "<li class='g-color--white' style='text-decoration:none;'>".$row['Name'].", ".$row['Email'].", ".$row['Contact']."</li>";
            }
            echo "</ol>";
          }
          else{
          ?>

          <form class="center-block g-width-600--sm" method="post" action="">
              <div class="permanent permanent-iplauction row">
                <p class="g-color--white g-text-center--xs g-font-size-14--xs">You're a Team Leader by default</p>
                  <div class="col-sm-6 g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" style="text-transform: none" id="teamname">
                  </div>

                  <div class="col-sm-6 g-margin-b-30--xs">
                      <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* Add more members" id="members-iplauction">
                          <option value="" selected=""  hidden="">Add more members</option>
                          <option value="3" style="color:black">2</option>
                          <option value="4" style="color:black">3</option>
                          <option value="5" style="color:black">4</option>

                      </select>
                  </div>

              </div>
              <div class="g-text-center--xs">
                  <button type="submit" name="swanewmem-iplauction" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Create Team</button>
              </div>
          </form>
        <?php
          }
        ?>

      </div>

        <div class="" id="BizMantra">

        </div>

        <div class="" id="CEO">

        </div>

        <div class="" id="Teen_Titans">

        </div>



        <div class="" id="ConsoWorld">

        </div>

            <!--<div class="row g-overflow--hidden">-->

            <!--</div>-->

        </div>
        <!-- End Speakers -->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <!--========== END FOOTER ==========-->
        <?php include("includes/script.php");?>


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



        </script>


    </body>
    <!-- End Body -->
</html>

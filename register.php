<?php
  @session_start();
  $pagetitle = "Register | Consortium'20";
  require_once('includes/mailing.php');

    require_once('includes/dbconnect.php');

    // $altquery = "ALTER TABLE `Registrations` CHANGE `ConsoWorld` `Brainathon` TINYINT(1) NULL DEFAULT '0';";
    // mysqli_query($con,$altquery);


    // $regquery = "CREATE TABLE IF NOT EXISTS Registrations(
    //             ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //             Name VARCHAR(255) NOT NULL,
    //             Email VARCHAR(255) NOT NULL,
    //             Contact VARCHAR(255) NOT NULL,
    //             Password VARCHAR(255) NOT NULL,
    //             College VARCHAR(255) NOT NULL,
    //             Swadesh TINYINT(1) DEFAULT '0',
    //             AdVenture TINYINT(1) DEFAULT '0',
    //             trec TINYINT(1) DEFAULT '0',
    //             renderico TINYINT(1) DEFAULT '0',
    //             CEO TINYINT(1) DEFAULT '0',
    //             war_of_worlds TINYINT(1) DEFAULT '0',
    //             BizQuiz TINYINT(1) DEFAULT '0',
    //             otp VARCHAR(255) NOT NULL
    //             )";
    //
    // mysqli_query($con,$regquery);
    //
    //
    //
    // $eve = array('Swadesh','AdVenture','trec','renderico','CEO','war_of_worlds','BizMantra','BizQuiz');
    // for($var = 0; $var < 8; $var++){
    //   $evequery = "CREATE TABLE IF NOT EXISTS $eve[$var](
    //             ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //             Name VARCHAR(255) NOT NULL,
    //             Main_Email VARCHAR(255) NOT NULL,
    //             Email VARCHAR(255) NOT NULL,
    //             Contact VARCHAR(255) NOT NULL
    //             )";
    // mysqli_query($con,$evequery);
    // }
    //
    // $eve = array('nirmaan_team','AdVenture_team','trec_team','renderico_team','BizMantra_team','BizQuiz_team','war_of_worlds_team');
    // for($var = 0; $var < 8; $var++){
    //   $evequery = "CREATE TABLE IF NOT EXISTS $eve[$var](
    //             ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //             Name VARCHAR(255) NOT NULL,
    //             Email VARCHAR(255) NOT NULL,
    //             Contact VARCHAR(255) NOT NULL
    //             )";
    // mysqli_query($con,$evequery);
    // }
    //
    // $brainquery = "CREATE TABLE IF NOT EXISTS Brainathon(
    //             ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //             Name VARCHAR(255) NOT NULL,
    //             Email VARCHAR(255) NOT NULL,
    //             Contact VARCHAR(255) NOT NULL,
    //             isPaid TINYINT(1) DEFAULT '0'
    //             )";
    // mysqli_query($con,$brainquery);




  if(!isset($_SESSION['email'])){
      $_SESSION['login_error'] = "Kindly Login First";
      header('location:login.php');
  }
  else if(isset($_POST['sub_event'])) {

    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $contact = $_SESSION['contact'];
    $college = $_SESSION['college'];
    // $conso_id = $_SESSION['consoID'];
    $event = $con->real_escape_string($_POST['event']);

    if($event == ""){
      $msg = "Please Select an event!";
    }else{
      $query = "SELECT * FROM registrations WHERE Email = '$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);

      if($num > 0){
        $data = mysqli_fetch_array($result);
        if($data[$event] != 1){
          $q1 = "UPDATE registrations SET $event = 1 WHERE email = '$email'";
          mysqli_query($con,$q1);

          $q2 = "INSERT INTO $event(name,email,contact,college) VALUES('$name','$email','$contact','$college')";
          mysqli_query($con,$q2);

          $subject = "Welcome to $event | Consortium'21";
          htmlMail($email,$subject,$name,'',$event);

          $_SESSION['msg'] = "Thank You for showing interest in $event. Click on the registered events below to complete your registration.";
          header('location:dashboard.php');
        }else{
          $_SESSION['msg'] = "You have already registered for this event! To manage or create your team please go below.";
          header('location:dashboard.php');
        }
      }else{
        echo("Error description: " . mysqli_error($con));
      }
    }
  }
?>

<!DOCTYPE html>
<html>
  <?php include("includes/head.php"); ?>
  <body class="back">
    <?php include("includes/header.php"); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-125--xs g-padding-y-125--sm g-margin-t-60--xs">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Event</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                <p class="text-uppercase g-font-size-14--xs g-color--white g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                <!-- <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"></p> -->
            </div>
            <form class="center-block g-width-500--sm g-width-550--md" method="post" action="register.php">
                <div class="permanent">
                  <select pattern="[0-9]{11}" class="form-control s-form-v3__input g-margin-b-30--xs" name="event" placeholder="* No. of members" id="members" >
                      <option value='' selected disabled hidden>Choose an Event you wish to participate in.</option>
                      <option value='ceo'>CEO</option>
                      <option value='wallstreet'>Wallstreet</option>
                      <option value='adventure'>AdVenture</option>
                      <option value='war_of_worlds'>War of Worlds</option>
                      <!-- <option value='swades'>Swades</option>
                      <option value='bizquiz'>BizQuiz</option>
                      <option value='war_of_worlds'>War of Worlds</option>
                      <option value='renderico'>Render.ico</option>
                      <option value='operation_research'>Operation Research</option>
                      <option value='pitch_mantra'>Pitchmantra</option> -->
                      <!-- <option value='BizMantra'>BizMantra</option> -->


                      <!--<option value='AdVenture'>AdVenture</option>
                      <option value='Pitch_Perfect'>Pitch Perfect</option>
                      <option value='renderico'>render.ico</option>
                      -->
                      <!-- <option value='Teen_Titans'>Teen Titans</option>
                      <option value='BizMantra'>BizMantra</option>
                      <option value='BizQuiz'>BizQuiz</option>
                       <option value='Brainathon'>Brainathon</option> -->
                      <!-- <option value='Wallstreet'>Wallstreet</option> -->
                  </select>
                </div>

                <div class="g-text-center--xs">
                    <button type="submit" name="sub_event" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Next</button>
                    <br>
                    <a href="dashboard.php">See Dashboard Here</a>
                </div>

            </form>
        </div>
    </div>
      <?php include("includes/footer_landing.php");?>
      <?php include("includes/script.php");?>


    </body>
  </html>

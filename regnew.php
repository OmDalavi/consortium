<?php
  @session_start();
  $pagetitle = "Register Now | Consortium'20";
  require_once('includes/mailing.php');
  // error_reporting(E_ALL);
  // ini_set('display_errors', '1');

  if($_SESSION['email']){
    header('location:dashboard.php');
  }

    $db_host = "localhost:3306";
    $db_username = "conso20";
    $db_pass = "Conso@123";
    $db_name = "conso20";

    $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
    mysqli_select_db($con,$db_name) or die ("no database");

    $regquery = "CREATE TABLE IF NOT EXISTS Registrations(
                ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Contact VARCHAR(255) NOT NULL,
                Password VARCHAR(255) NOT NULL,
                College VARCHAR(255) NOT NULL,
                Swadesh TINYINT(1) DEFAULT '0',
                AdVenture TINYINT(1) DEFAULT '0',
                trec TINYINT(1) DEFAULT '0',
                renderico TINYINT(1) DEFAULT '0',
                CEO TINYINT(1) DEFAULT '0',
                war_of_worlds TINYINT(1) DEFAULT '0',
                BizQuiz TINYINT(1) DEFAULT '0',
                iplauction TINYINT(1) DEFAULT '0',
                otp VARCHAR(255) NOT NULL
                )";

    mysqli_query($con,$regquery);

    $eve = array('Swadesh','AdVenture','trec','renderico','CEO','war_of_worlds','BizMantra','BizQuiz','iplauction');
    for($var = 0; $var < 8; $var++){
      $evequery = "CREATE TABLE IF NOT EXISTS '$eve[$var]'(
                ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Main_Email VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Contact VARCHAR(255) NOT NULL
                )";
    mysqli_query($con,$evequery);
    }

    $eve = array('Swadesh_team','AdVenture_team','trec_team','renderico_team','BizMantra_team','BizQuiz_team','war_of_worlds_team','iplauction_team');
    for($var = 0; $var < 9; $var++){
      $evequery = "CREATE TABLE IF NOT EXISTS $eve[$var](
                ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Contact VARCHAR(255) NOT NULL
                )";
    mysqli_query($con,$evequery);
    }

    $brainquery = "CREATE TABLE IF NOT EXISTS Brainathon(
                ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(255) NOT NULL,
                Email VARCHAR(255) NOT NULL,
                Contact VARCHAR(255) NOT NULL,
                isPaid TINYINT(1) DEFAULT '0'
                )";
    mysqli_query($con,$brainquery);

    $nirmaanquery = "ALTER TABLE Registrations ADD COLUMN nirmaan TINYINT(1) DEFAULT '0' AFTER BizQuiz;";
    mysqli_query($con,$nirmaanquery);

    $aimlquery = "ALTER TABLE Registrations ADD COLUMN aimlworkshop TINYINT(1) DEFAULT '0' AFTER nirmaan;";
    mysqli_query($con,$aimlquery);

    $nirmaan = "CREATE TABLE IF NOT EXISTS nirmaan(
      ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Name VARCHAR(255) NOT NULL,
      Email VARCHAR(255) NOT NULL,
      Contact VARCHAR(255) NOT NULL,
    )";

    $iplauction = "CREATE TABLE IF NOT EXISTS iplauction(
      ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Name VARCHAR(255) NOT NULL,
      Email VARCHAR(255) NOT NULL,
      Contact VARCHAR(255) NOT NULL,
    )";

    mysqli_query($con,$nirmaan);

    if(isset($_POST['regnew'])) {
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $contact = $con->real_escape_string($_POST['contact']);
    $college = $con->real_escape_string($_POST['college']);
    $password = $con->real_escape_string($_POST['password']);
    $cpassword = $con->real_escape_string($_POST['cpassword']);

    if( $name == "" || $email == "" || $contact == "" || $password == "" || $cpassword == "" || $college == ""){
      $msg = "Please enter all the details";
      header('location:/regnew.php');
    }
    elseif($password == $cpassword){
      $hashed_password = $con->real_escape_string(password_hash($cpassword, PASSWORD_DEFAULT));

      $query = "SELECT * FROM Registrations WHERE Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);


      if($num > 0){
        $row = mysqli_fetch_array($result);
      }

      if($num != 0 && $row['otp'] == 'Confirmed'){
        $msg = "The email you entered is already registered. Login <a href='login.php'>here</a>.";
      }

      elseif($num != 0 && $row['otp'] != 'Confirmed'){
        $_SESSION['verify'] = "Please verify your email id in order to login";
        header('location:verify.php?email='.$email.'');
      }

      elseif($num == 0){

        $otp = '1234567890';
        $otp = str_shuffle($otp);
        $otp = substr($otp, 0, 6);

        $q = "INSERT INTO Registrations(Name,Email,Contact,College,Password,otp) VALUES('$name','$email','$contact','$college','$hashed_password','$otp')";
        if(mysqli_query($con,$q)){

          $msg = "Please verify your email id to login.";
          $s = "Verify Your Emaid ID";
          $_SESSION['verify'] = "Welcome. An OTP is sent to your registered email id. Please enter the OTP below to confirm your email address.";
          htmlMail($email,$s,'',$otp, 'otp');
          header('location:verify.php?email='.$email.'');

        }else {
          echo(mysqli_error($con));
        }

      }

    }
    else{
      $msg = "Passwords didn't matched";
    }
  }
?>

<!DOCTYPE html>
<html>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg1; ?></p>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs" id="message"></p>
            </div>
            <form class="center-block g-width-500--sm g-text-center--xs g-width-600--md" method="post" action="regnew.php" onsubmit="return validateData();">

                <div class="permanent">
                    <div class="g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* Full Name" name="name" style="text-transform: none" id="name">
                    </div>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="email" style="text-transform: none" id="email">
                        </div>
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="tel" class="form-control s-form-v3__input" placeholder="* Contact" name="contact" style="text-transform: none">
                        </div>
                    </div>
                    <div class="g-margin-b-30--xs">
                          <input type="text" class="form-control s-form-v3__input" placeholder="* College" name="college" style="text-transform: none" id="college">
                    </div>
                    <!-- <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input g-margin-b-30--xs" name="event" placeholder="* No. of members" id="members" >
                        <option value='' selected disabled hidden>Choose an Event</option>
                        <option value='Swadesh'>Swadesh</option>
                        <option value='AdVenture'>AdVenture</option>
                        <option value='Pitch_Perfect'>Pitch Perfect</option>
                        <option value='renderico'>render.ico</option>
                        <option value='CEO'>CEO</option>
                        <option value='Teen_Titans'>Teen Titans</option>
                        <option value='BizMantra'>BizMantra</option>
                        <option value='BizQuiz'>BizQuiz</option>
                        <option value='ConsoWorld'>ConsoWorld</option>
                    </select> -->
                    <div class="g-margin-b-30--xs">
                            <input type="password" class="form-control s-form-v3__input" placeholder="* Password" name="password" id="password">
                    </div>
                    <div class="g-margin-b-30--xs">
                            <input type="password" class="form-control s-form-v3__input" placeholder="* Confirm Password" name="cpassword">
                    </div>

                </div>

                <div class="g-text-center--xs">
                    <button type="submit" name="regnew" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button>
                </div>
                <a href="login.php" class="g-color--white g-font-size-13--xs ">Already Registered?</a><br>

            </form>

        </div>
    </div>
    <?php include("includes/footer.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>

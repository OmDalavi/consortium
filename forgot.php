<?php
  session_start();
  $pagetitle = 'Forgot Password | Consortium';

  require_once('includes/dbconnect.php');

  if(isset($_POST['reset'])){
    $email = $con->real_escape_string($_POST['reset_email']);

    $query = "SELECT * FROM Registrations WHERE Email = '$email'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num > 0){
      $otp = '1234567890';
      $otp = str_shuffle($otp);
      $otp = substr($otp, 0, 6);

      $_SESSION['OTP'] = $otp;

      $to = $email;

      $subject = "Reset Your Password | E-Cell VNIT Nagpur";
      $html = "
      <!DOCTYPE html>
          <html>
              <head>
                  <style>
                      li{
                          padding:10px;
                      }
                      p{
                          font-size:16px;
                      }

                      *{
                          font-family:Helvetica,Arial,sans-serif;
                      }

                      h2{
                          text-align: center;
                          margin-top: 150px;

                      }
                      html, body{
                          background-color:#f7f9fb;
                          margin: 0;
                      }
                      .context {
                          font-size: 12px;
                          padding: 40px 60px;
                          margin-left:10%;
                          margin-right: 10%;
                      }

                      .context p{
                          font-size: 12px;
                      }
                      p{
                          margin: 15px 0px;
                      }

                  </style>
              </head>
              <body>

                  <div style='background: #0b0b0b; padding:10px 30px;'><img src='https://www.ecellvnit.org/img/logo-ecell.png'></div>
                  <h2 style='font-size:22px;'>E-Cell VNIT | Consortium'20</h2><br>

                  <div class='context'>


                      <h3><b>Hello there!</b></h3>
                      <div>
                          <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board.<br/><br/>
                          To reset your password, use this OTP: <br/> <span style='font-size:24px'>$otp</span></p>
                          For queries and in case of any difficulty, feel free to contact us.<br>
                              <p>
                              With warm regards,<br>
                              E-Cell VNIT
                          </p>


                      </div>
                  </div>
              </body>
          </html>
  ";


      $url = 'https://startupconclave.ecellvnit.org/send';
      $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'Entrepreneurs1999');

      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
          )
      );
      $context  = stream_context_create($options);

      if($result = file_get_contents($url, false, $context)){
        $msg = "An OTP is sent to your registered email id. Please enter the OTP below to confirm your email address.<br> (Please do not reload the page.)
        <form class='center-block g-width-500--sm g-width-550--md' method='post' action='forgot.php?email=$email'>
            <div class='permanent'>
            <div class='g-margin-b-30--xs'>
              <input type='text' class='form-control s-form-v3__input' placeholder='* Your OTP' name='otp' style='text-transform: none' id='otp'>
            </div>
            </div>

            <div class='g-text-center--xs'>
                <button type='submit' name='otp_sub' class='text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs'>Submit</button>
            </div>
        </form>
        ";
      }
      if ($result === FALSE) {
        $msg = "We are facing problem in sending email. Please contact our <a href='https://www.ecellvnit.org/team.php' >team.</a>";
      }
    }else{
      $msg = "Please enter a valid email id.";
    }
    include('includes/head.php');
    include('includes/header.php');
    // include("includes/footer.php");
    include("includes/script.php");
    echo "<html>
      <?php include('includes/head.php'); ?>
      <body class='back'>
        <?php include('includes/header.php'); ?>
        <div id='register'>
            <div class='g-container--sm g-padding-y-80--xs g-padding-y-125--sm'>
                <div class='g-text-center--xs g-margin-b-60--xs'>
                    <h2 class='g-font-size-32--xs g-font-size-36--md g-color--white'>Reset Your Password</h2>
                    <p class='text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs'>$msg</p>
                </div>
            </div>
        </div>

      </body>
                ";
  }elseif(isset($_POST['otp_sub'])) {
    $otpver = $con->real_escape_string($_POST['otp']);
    $email = $con->real_escape_string($_GET['email']);

    if($_SESSION['OTP'] == $otpver){
      $msg ="
      <form class='center-block g-width-500--sm g-width-550--md' method='post' action='forgot.php?email=$email'>
          <div class='permanent'>
          <div class='g-margin-b-30--xs'>
                  <input type='password' class='form-control s-form-v3__input' placeholder='* Enter New Password' name='password' id='password'>
          </div>
          <div class='g-margin-b-30--xs'>
                  <input type='password' class='form-control s-form-v3__input' placeholder='* Confirm Password' name='cpassword'>
          </div>
          </div>

          <div class='g-text-center--xs'>
            <button type='submit' name='pass_reset' class='text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs'>Submit</button>
          </div>
      </form>
      ";
    }else{
      $msg = "Your OTP is incorrect. Please try again.
      <form class='center-block g-width-500--sm g-width-550--md' method='post' action='forgot.php?email=$email'>
          <div class='permanent'>
          <div class='g-margin-b-30--xs'>
            <input type='text' class='form-control s-form-v3__input' placeholder='* Your OTP' name='otp' style='text-transform: none' id='otp'>
          </div>
          </div>

          <div class='g-text-center--xs'>
            <button type='submit' name='otp_sub' class='text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs'>Submit</button>
          </div>
      </form>";
    }
    include('includes/head.php');
    include('includes/header.php');
    // include("includes/footer.php");
    include("includes/script.php");
    echo "<html>
      <?php include('includes/head.php'); ?>
      <body class='back'>
        <?php include('includes/header.php'); ?>
        <div id='register'>
            <div class='g-container--sm g-padding-y-80--xs g-padding-y-125--sm'>
                <div class='g-text-center--xs g-margin-b-60--xs'>
                    <h2 class='g-font-size-32--xs g-font-size-36--md g-color--white'>Reset Your Password</h2>
                    <p class='text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs'>$msg</p>
                </div>
            </div>
        </div>

      </body>
                ";
  }elseif(isset($_POST['pass_reset'])){
    $password = $con->real_escape_string($_POST['password']);
    $cpassword = $con->real_escape_string($_POST['cpassword']);
    $email = $con->real_escape_string($_GET['email']);

    if($password != "" && $cpassword != "" && $password == $cpassword ){
      $hashed_password = $con->real_escape_string(password_hash($cpassword, PASSWORD_DEFAULT));

      $query = "SELECT * FROM Registrations WHERE Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);
      if($num > 0){
        $query = "UPDATE Registrations SET Password = '$hashed_password' WHERE Email='$email'";
        mysqli_query($con,$query);
        $_SESSION['login_error'] = "Your password was reset successfully. ";
        header('location:login.php');
      }else{
        echo("Error description: " . mysqli_error($con));
      }
    }else{
      $msg = "Passwords did not match. Please try again.
      <form class='center-block g-width-500--sm g-width-550--md' method='post' action='forgot.php?email=$email'>
          <div class='permanent'>
          <div class='g-margin-b-30--xs'>
                  <input type='password' class='form-control s-form-v3__input' placeholder='* Enter New Password' name='password' id='password'>
          </div>
          <div class='g-margin-b-30--xs'>
                  <input type='password' class='form-control s-form-v3__input' placeholder='* Confirm Password' name='cpassword'>
          </div>
          </div>

          <div class='g-text-center--xs'>
            <button type='submit' name='pass_reset' class='text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs'>Submit</button>
          </div>
      </form>";
    }
    include('includes/head.php');
    include('includes/header.php');
    // include("includes/footer.php");
    include("includes/script.php");
    echo "<html>
      <?php include('includes/head.php'); ?>
      <body class='back'>
        <?php include('includes/header.php'); ?>
        <div id='register'>
            <div class='g-container--sm g-padding-y-80--xs g-padding-y-125--sm'>
                <div class='g-text-center--xs g-margin-b-60--xs'>
                    <h2 class='g-font-size-32--xs g-font-size-36--md g-color--white'>Reset Your Password</h2>
                    <p class='text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs'>$msg</p>
                </div>
            </div>
        </div>

      </body>
                ";
  }else {
?>

<!DOCTYPE html>
<html>
<?php include("includes/head.php"); ?>
  <body class="black">
    <?php include("includes/header.php"); ?>

    <!--========== PROMO BLOCK ==========-->
    <div id='forgot'>
        <div class='g-container--sm g-padding-y-80--xs g-padding-y-125--sm'>
            <div class='g-text-center--xs g-margin-b-60--xs'>
                <h2 class='g-font-size-32--xs g-font-size-36--md g-color--white'>Reset your Password</h2>
            </div>

            <div class='g-text-center--xs'>
              <form class='center-block g-width-500--sm g-width-550--md' method='post' action='forgot.php'>
                  <div class='permanent'>
                    <div class='g-margin-b-30--xs'>
                      <input type='email' class='form-control s-form-v3__input' placeholder='* Your EMAIL ID?' name='reset_email' style='text-transform: none' id='email'>
                    </div>
                  </div>

                  <div class='g-text-center--xs'>
                    <button type='submit' name='reset' class='text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs'>Submit</button>
                  </div>
              </form>
            </div>
        </div>
    </div>

  </body>
  <?php include("includes/footer.php"); ?>
  <?php include("includes/script.php"); ?>
</html>
<?php } ?>

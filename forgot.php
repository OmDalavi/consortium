<?php
  session_start();
  $pagetitle = 'Forgot ConsoID | Consortium';

  require_once('includes/dbconnect.php');
  require_once('includes/mailing.php');

  if(isset($_POST['reset'])){
    $email = $con->real_escape_string($_POST['reset_email']);

    $query = "SELECT * FROM Registrations WHERE Email = '$email'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num > 0){
      $data = mysqli_fetch_array($result);

      $name = $data['name'];
      $otp = '1234567890';
      $otp = str_shuffle($otp);
      // $otp = substr($otp, 0, 6);

      $conso_id = substr($name, 0, 3);
      $conso_id .= substr($otp, 0, 4);


      $query = "SELECT * FROM Registrations WHERE Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);
      if($num != 0){
        $conso_id = "";
        $pass = str_shuffle($otp);
        $conso_id = substr($name, 0, 3);
        $conso_id .= substr($pass, 0, 4);
      }

      $query = "UPDATE Registrations SET conso_id = '$conso_id' WHERE email='$email'";
      if(mysqli_query($con,$query)){
        $s = "Reset Your ConsoID | E-Cell VNIT Nagpur";
        htmlMail($email,$s,$name,$conso_id, 'forgot');

        // if($sent){
          $msg = "Your new ConsoID has been sent to your registered email id. Check it out and use it to login into your dashboard.<br>
          <div class='wow fadeInLeft' data-wow-duration='.3' data-wow-delay='.5s'>
                        <a href='login.php' title='Register'>
                            <span class='text-uppercase s-btn--primary-bg g-radius--50 g-padding-x-30--xs g-padding-y-15--xs g-font-size-13--xs g-color--white g-padding-x-15--xs'>Login</span></span>
                        </a>
          </div>
          ";
        // }else {
        //   $msg = "We are facing problem in sending email. Please contact our <a href='https://www.ecellvnit.org/team.php' >team.</a>";
        // }
      }else {
          echo(mysqli_error($con));
      }

      // $sent = htmlMail($email,$s,'',$conso_id, 'forgot');

      // $_SESSION['OTP'] = $otp;

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
  <?php include("includes/footer_landing.php"); ?>
  <?php include("includes/script.php"); ?>
</html>
<?php } ?>

<?php
  session_start();
  $pagetitle = 'Login | Consortium';
  require_once('includes/mailing.php');
  // error_reporting(E_ALL);
  // ini_set('display_errors', '1');

   if(isset($_SESSION['email'])){
      header('location:dashboard.php');
   }
  else if(isset($_POST['login1'])) {
    require_once('includes/dbconnect.php');

    $conso_id = $con->real_escape_string($_POST['conso_id']);
    // $email = $con->real_escape_string($_POST['email']);
    // $password = $con->real_escape_string($_POST['password']);

    // if($email=="" || $password==""){
    if($conso_id == ""){
        $msg =  "Please enter your Conso ID login :)";
    }

    else{

      $events = array('Swadesh','AdVenture','Pitch_Perfect','renderico','CEO','Teen_Titans','BizMantra','BizQuiz');

      $conso_id = password_verify($conso_id,$data['hashed_ci']);

      $query = "SELECT * from registrations WHERE conso_id='$conso_id'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);

      if($num > 0){

        $data = mysqli_fetch_array($result);

        if($data['otp'] == 'Confirmed'){
          // if(password_verify($conso_id,$data['hashed_ci'])){


            function split_name($name) {
              $name = trim($name);
              $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
              $first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
              return array($first_name, $last_name);
            }

            $_SESSION['email'] = $email;
            $_SESSION['name'] = split_name($data['Name'])[0];
            $_SESSION['contact'] = $data['Contact'];
            $_SESSION['fullname'] = $data['Name'];

            // if($_GET['v'] == 'ai-ml'){
            //   header('location:aimlworkshop.php');
            // }
            //
            // else{
              header('location:register.php');
            // }

          }
          else {
            $msg = "Incorrect ID. You sure you remember it?.";
          }
        }
        else{
          $msg = "This ID isn't registered with us. Register <a href='regnew.php'>here</a>.";
        }
        // else{
        //
        //   $otp = '1234567890';
        //   $otp = str_shuffle($otp);
        //   $otp = substr($otp, 0, 6);
        //
        //   $q = "UPDATE Registrations SET otp='$otp' WHERE Email = '$email'";
        //
        //
        //   if(mysqli_query($con,$q)){
        //
        //
        //
        //     $msg = "Please verify your email id to login.";
        //     $s = "Verify Your ConsoID";
        //     $_SESSION['verify'] = "Welcome. An OTP is sent to your registered email id. Please enter the OTP below to confirm your email address.";
        //     htmlMail($email,$s,'',$otp, 'otp');
        //     header('location:verify.php?email='.$email.'');
        //   }
        //   else{
        //     $msg = "Something Went Wrong";
        //   }
        //
        // }
      }
      // else{
      //   $msg = "This ID isn't registered with us. Register <a href='regnew.php'>here</a>.";
      // }
    // }
  }
  else if(isset($_POST['login2'])){
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html>
<?php include("includes/head.php"); ?>
  <body class="black">
    <?php include("includes/header.php"); ?>

    <!--========== PROMO BLOCK ==========-->

    <div id="login" class="s-promo-block-v1">
        <div class="container g-ver-center--md g-padding-y-100--xs">
            <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                      <?php
                      if($_GET == 'v'){
                        echo '?v=ai-ml';
                      }else{
                        $action = 'login.php';
                      }
                      ?>
                        <form submit="" action="<?php echo $action; ?>" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__dark-lightest-v3 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                            <div class="g-text-center--xs g-margin-b-40--xs">
                                <h2 class="g-font-size-30--xs g-color--white">Login</h2>
                                <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                                <p class="text-uppercase g-font-size-14--xs g-text-center--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php  if(isset($_SESSION['login_error'])){ echo $_SESSION['login_error'];session_destroy(); }?></p>
                            </div>
                            <div class="g-margin-b-30--xs">
                                  <input type="text" class="form-control s-form-v3__input" placeholder="* Your ConsoID" name="conso_id" style="text-transform: none" id="conso_id">
                            </div>
                            <!-- <div class="g-margin-b-30--xs">
                                <input type="email" name="email" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Email">
                            </div>
                            <div class="g-margin-b-30--xs">
                                <input type="password" name="password" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
                            </div>
                            <div class="g-text-center--xs"> -->
                                <button type="submit" name="login1" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
                                <a href="forgot.php" class="g-color--white g-font-size-13--xs regclass">Forgot ConsoID</a><br>
                                <a href="regnew.php" class="g-color--white g-font-size-13--xs regclass">Not Registered?</a><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->
      <?php include("includes/script.php"); ?>
  </body>
</html>

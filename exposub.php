<?php
  session_start();

  $db_host = "localhost:3306";
  $db_username = "conso20";
  $db_pass = "Conso@123";
  $db_name = "conso20";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

  $regquery ="CREATE TABLE IF NOT EXISTS Expo(
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    startup VARCHAR(255) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    email VARCHAR(255) NOT NULL,
    website VARCHAR(255) NOT NULL,
    phone VARCHAR(16) NOT NULL,
    hiring TINYINT(1) NOT NULL,
    paid TINYINT(1) NOT NULL
  )";

  mysqli_query($con,$regquery);

  if(isset($_POST['register'])){
    $startup = $con->real_escape_string($_POST['startup']);
    $desc = $con->real_escape_string($_POST['description']);
    $email = $con->real_escape_string($_POST['email']);
    $website = $con->real_escape_string($_POST['website']);
    $phone = $con->real_escape_string($_POST['phone']);
    $hiring = $con->real_escape_string($_POST['hiring']);

    if($startup=="" || $desc=="" || $email=="" || $website=="" || $phone=="" || $hiring==""){
        $msg = "Please fill all the details. <a href='expo.php' style='color:#eee;'>Try Again</a>";
    }else{
      $query = "SELECT * from Expo where Email='$email'";
      $result = mysqli_query($con,$query);
      $num = mysqli_num_rows($result);
      $data = $result->fetch_array(MYSQLI_ASSOC);

      if($num!=0){

        if($data['paid'] == '0'){
            $msg = 'Your startup <b>'.$data['startup'].'</b> is already registered.<br> <span style="font-size:18px;">Kindly pay the required registration fee to ensure your registration.</span><br>
              <p class="g-color--white-opacity g-font-size-12--sm">

                          *Note: Kindly only use your startup email address while payment.
                        </p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a id="reg_button" href="https://www.payumoney.com/paybypayumoney/#/3CE4A3B78852ADA9D1FCA3DE063D08C4" title="Register">
                                <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                                <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Pay Now!</span>
                            </a>
                        </div>
            ';

        }
        else{
          $msg = "Your startup <b>".$data['startup']."</b> is already registered.<br> <span style='font-size:18px;'>Kindly use different email address for new registration.</span>";
        }


      }
      else{

        $q = "INSERT INTO Expo(startup,description,email,website,phone,hiring, paid) VALUES('$startup','$desc','$email','$website','$phone','$hiring','0')";


        if(mysqli_query($con,$q)){

          $msg = "You are registered with us. To ensure complete registration, kindly check the email.";


          $to = $email;

          $subject = "Thank you for registering in Startup Expo | Consortium'20";
          $html = '
          <!DOCTYPE html>
              <html>
                  <head>
          <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>

          <script>window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag("js", new Date());

                gtag("config", "UA-125403862-1");
            </script>
            <title>Email-Template</title>
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

                      <div style="background: #0b0b0b; padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
                      <h2 style="font-size:22px;">Welcome to Startup Expo</h2><br>

                      <div class="context">
                          <h3><b>Hello '.$startup.',</b></h3>


                          <p>Thank You for registering!</p>
                          <div>
                              <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for the <b>Startup Expo</b></p>
                              <p>
                                  To complete your registration follow the button below and become a part of Central India’s Biggest Entrepreneurship Summit Consortium 19 <br>
                                  <br>
                              </p>
                              <br>

                                <a style="display:block; text-align: center;width:100px; padding:12px 10px; background: #111; color:#FFF; text-decoration: none; border-radius:30px; position: relative;" href="https://consortium.ecellvnit.org/payexpo.php">Pay Now!</a>

                              <p>
                                <br>
                                <p>For queries and in case of any difficulty, feel free to contact us.</p>
                                <br>

                                <br>
                                  With warm regards,<br>
                                  Anushree Rungta<br>
                                  Core-Coordinator, Ecell VNIT
                              </p>
                          </div>
                      </div>
                  </body>
              </html>';


          $url = 'https://startupconclave.ecellvnit.org/send';
          $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'Entrepreneurs2020');

          // use key 'http' even if you send the request to https://...
          $options = array(
              'http' => array(
                  'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                  'method'  => 'POST',
                  'content' => http_build_query($data)
              )
          );
          $context  = stream_context_create($options);
          $result = file_get_contents($url, false, $context);
          if ($result === FALSE) {

              $msg = 'We are facing problem in sending email. Please use this link to pay your registration fees.';
              header('location:https://consortium.ecellvnit.org/payexpo.php');

          }
        }

      else{
          $msg = "Something went Wrong. <a href='expo.php' style='color:#eee;'>Try Again</a>";
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html>
  <?php $pagetitle = 'StartUp Expo | Consortium'; ?>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-text-center--xs g-margin-b-60--xs" style="padding-bottom:10em; padding-top:10em;">
                <!-- <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p> -->
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white"><?php echo $msg; ?></h2>
            </div>
        </div>
    </div>
    <?php include("includes/footer_landing.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>

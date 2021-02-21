<?php
  session_start();

  require_once('includes/mailing.php');

  require_once('includes/dbconnect.php');

  $regquery ="CREATE TABLE IF NOT EXISTS Azure(
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(255) NOT NULL,
    college VARCHAR(255) NOT NULL,
    year VARCHAR(10) NOT NULL,
    branch VARCHAR(100) NOT NULL,
    paid TINYINT(1) NOT NULL
  )";

  mysqli_query($con,$regquery);


  if(isset($_POST['register'])){

    if(isset($_SESSION['email'])){
      $email = $_SESSION['email'];
      $college = $con->real_escape_string($_POST['college']);
      $year = $con->real_escape_string($_POST['year']);
      $branch = $con->real_escape_string($_POST['branch']);

      if($college=="" || $year=="" || $branch==""){
          $msg = "Please fill all the details.Try Again";
      }else{
        $query = "SELECT * from Azure where Email='$email'";
        $result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);
        $data = $result->fetch_array(MYSQLI_ASSOC);

        if($num!=0){

          if($data['paid'] == '0' && $data['college'] == '1'){
              $msg = 'You are already registered with this <b>'.$data['startup'].'</b><br> Try again with different account.';
          }
          else if ($data['paid'] == '0'){
            $msg = 'You are already registered with this <b>'.$data['startup'].'</b><br> Kindly pay your required registration fee.';
          }
          else{
            $msg = "Your startup <b>".$data['startup']."</b> is already registered.<br> <span style='font-size:18px;'>Kindly use different email address for new registration.</span>";
          }
        }
        else{

          $q = "INSERT INTO Azure(Email,college,year,branch, paid) VALUES('$email','$college','$year','$branch','0')";
          if(mysqli_query($con,$q)){

            if($college == '1'){

              $_SESSION['msg'] = "Thank You for showing interest in Microsoft Azure Cloud Computing Workshop. Confirmation mail has been sent to you.";
              htmlMail($email,'Welcome to Azure Space | Consortium19','','','Azurevnit');
              header('location:azure.php#register');

            }
            else{
              $_SESSION['msg'] = "Thank You for showing interest in Azure Space. To ensure complete registration please pay the registration fee.";
              htmlMail($email,'Welcome to Azure Space | Consortium19','','','Azure');
              header('location:payazure.php');

            }

          }
          else{
              $msg = "Something went Wrong. <a href='azure.php' style='color:#eee;'>Try Again</a>";
          }
        }
      }
    }
    else{
        $_SESSION['login_error'] = "Kindly Login First.</a>";
        header('location:login.php?v=azure');
    }


  }



?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <?php $pagetitle = 'Azure Space | Consortium'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>
  <!-- End Head -->
    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-fullheight--xs event-landing1" style="background: url('img/1920x1080/landing-azure.jpg');" id="swades">
          <style type="text/css">
                @media(max-width: 767px){
                  .brain{
                    background: rgba(0,0,0,0.6);
                  }
                }
              </style>
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--lg event-landing-inner brain">


                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md g-margin-l-20--xs g-margin-l-80--sm">
                    <!--<img src="img/logo/ceoblack.png" alt="" width="200" style="margin-top:-100px; margin-left:-20px">-->

                    <div style="display:flex; align-items:center">
                     <img src="https://startupconclave.ecellvnit.org/static/img/E-Cell_white.png" alt="Ecell Logo" height="50" style="float:right; z-index:2"/>
                     <!--<p class="g-color--white-opacity" style="z-index:2; margin:20px;">&</p>-->
                     <p class="g-color--white-opacity" style="position: relative;margin-left:10px;z-index:2; margin-top:22px">presents</p>

                    <!--<img src="img/tielogo.jpg" alt="TIE Nagpur" style="z-index:2" height="50"/>-->
                    </div>
                    <h1 class="g-font-size-45--xs g-font-size-60--sm g-font-size-70--lg g-color--white" style="font-weight:900; text-shadow: 2px 0 #333;letter-spacing:2px;"><b>Azure Space</b></h1>
                    <p class="g-color--white-opacity" style="position: relative;">in association with</p>
                    <img src="img/azure.png" alt="Azure" style="z-index:2; position:relative; margin-top: -20px;" height="40"/><br>

                    <h3 class="g-color--white ">A Cloud Computing Workshop</h3>
                    <p class="g-color--white g-font-size-16--xs">Computing is not about computers any more. It's about living.</p><br/>
                    <h3 class="g-color--white"><b>AZ203 Certified <i class="ti-cloud-down"></i></span></b><br>


                    </h3>

                    <br>

                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                                <a href="#register" title="Register">
                                    <!--<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-down"></i>-->
                                    <span class="text-uppercase s-btn s-btn--xs s-btn--white-brd g-radius--50">Register Now <span class="ti-angle-down"></span></span>
                                </a>
                            </div>


                </div>

            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->


        <div id="register" style="background: #000;">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-60--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Register Now</h2>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg.$_SESSION['msg'];?></p>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs" id="message"></p>
            </div>
            <form class="center-block g-width-500--sm g-text-center--xs g-width-600--md" method="post" action="" onsubmit="return validateData();">

                <div class="permanent">


                    <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input g-margin-b-30--xs" name="college" placeholder="* College" id="members" >
                        <option value='' selected disabled hidden>Choose your College</option>
                        <option value='1'>Visvesvaraya National Institute of Technology Nagpur</option>
                        <option value='Shri Ramdeobaba College of Engineering and Management, Nagpur'>Shri Ramdeobaba College of Engineering and Management, Nagpur</option>
                        <option value='GH Raisoni College of Engineering, Nagpur'>GH Raisoni College of Engineering, Nagpur</option>
                        <option value='Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur'>Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur</option>
                        <option value='Indian Institute of Information Technology, Nagpur'>Indian Institute of Information Technology, Nagpur</option>
                        <option value='Laxminarayan Institute of Technology, Nagpur'>Laxminarayan Institute of Technology, Nagpur</option>
                        <option value='Priyadarshini College of Engineering, Nagpur'>Priyadarshini College of Engineering, Nagpur</option>
                        <option value='KDK College of Engineering, Nagpur'>KDK College of Engineering, Nagpur</option>
                        <option value='Anjuman College of Engineering and Technology, Nagpur'>Anjuman College of Engineering and Technology, Nagpur</option>
                        <option value='Central India College of Engineering and Technology, Nagpur'>Central India College of Engineering and Technology, Nagpur</option>
                        <option value='Others'>Others</option>



                    </select>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input g-margin-b-30--xs" name="branch" placeholder="* Branch" id="members" >
                                <option value='' selected disabled hidden>Choose your Branch</option>
                                <option value='Circuit'>Circuit(CSE, EEE, ECE)</option>
                                <option value='Non Circuit'>Non-Circuit</option>

                            </select>
                        </div>

                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input g-margin-b-30--xs" name="year" placeholder="* Year" id="members" >
                                <option value='' selected disabled hidden>Year Of Study</option>
                                <option value='1'>1st Year</option>
                                <option value='1'>2nd Year</option>
                                <option value='3'>3rd Year</option>
                                <option value='4'>4th Year</option>
                                <option value='5'>5th Year</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="g-text-center--xs">
                    <button type="submit" name="register" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register with ConsoID</button>
                </div>
                <a href="regnew.php" class="g-color--white g-font-size-13--xs ">Don't have ConsoID?</a><br>

            </form>

        </div>
    </div>

        <!-- End Features -->
        <div class="g-promo-section" style="background:#000" id="contact">
            <div class="container g-padding-y-30--xs g-padding-y-30--sm g-padding-x-80--md g-padding-x-60--sm g-padding-x-40--xs">
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

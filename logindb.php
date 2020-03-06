<?php
session_start();


if(isset($_POST['select']) && isset($_SESSION['auth']) && $_SESSION['auth'] ){
    $event = $_POST['event'];
    $type = $_SESSION['type'];
    if(empty($event)) {
        $msg = "ERROR: Please Select Event!";
    }
    if( $type == 0){
        // Authentication successful - Set session

        $_SESSION['event'] = $event;
        // setcookie("username", $_POST['name'], time()+(84600*30));
        header('Location: database.php');
        exit;
    }
    else if( $type == 1){
        // Authentication successful - Set session


        if($event == 'Townhall' || $event == 'Expo' || $event == 'aimlworkshop' || $event == 'Brainathon'){
            $msg = "ERROR: Access Denied!";

        }
        else{
            $_SESSION['event'] = $event;
            // setcookie("username", $_POST['name'], time()+(84600*30));
            header('Location: database.php');
            exit;
        }
    }

}


else if(isset($_POST['login'])){

    $type = $_POST['type'];
    $pass = $_POST['pass'];

    if($type =='' || empty($pass)){
        $msg = "ERROR: Please enter Details!";
    }


    else if( $type == 0 && $pass == "CoreTeam@123" ){
        // Authentication successful - Set session
        $_SESSION['auth'] = true;
        $_SESSION['type'] = $type;

    }
    else if( $type == 1 && $pass == "ConsoManagers" ){
        // Authentication successful - Set session

        $_SESSION['auth'] = true;
        $_SESSION['type'] = $type;

    }
    else {
        $msg = "ERROR: Invalid Relationship!";
    }
}


?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <?php include("includes/head.php"); ?>
    <!-- End Head -->

    <!-- Body -->
    <body class="black">

        <!--========== HEADER ==========-->
        <?php include("includes/header.php"); ?>
        <!--========== END HEADER ==========-->
        <!--========== PROMO BLOCK ==========-->
        <div id="login" class="s-promo-block-v1">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <p class="g-text-center--xs text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"><?php echo $msg; ?></p>
                            <?php

                            if(isset($_SESSION['auth']) && $_SESSION['auth'] ){
                            ?>
                            <form submit="" style="background: #bd2026 !important;" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Select Event</h2>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <select name="event" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Type">
                                        <option disabled selected>Select Event</option>
                                        <option value="Swadesh">Swades</option>
                                        <option value="Swadesh_team">Swadesh Team</option>
                                        <option value="trec">TREC</option>
                                        <option value="nirmaan">Nirmaan</option>
                                        <option value="nirmaan_team">Nirmaan Team</option>
                                        <option value="CEO">CEO</option>
                                        <option value="war_of_worlds">War of Worlds</option>
                                        <option value="BizQuiz">Bizquiz</option>
                                        <option value="iplauction">IPL Auction</option>
                                        <!-- <option value="Pitch_Perfect">Pitch Perfect</option>
                                        <option value="renderico_team">Render Ico</option>
                                        <option value="BizQuiz_team">Bizquiz</option>
                                        <option value="Azure">Azure</option>
                                        <option value="Brainathon">Brainathon</option>
                                        <option value="Townhall">Townhall</option>
                                        <option value="Expo">Startup Expo</option> -->
                                    </select>
                                </div>

                                <div class="g-text-center--xs">
                                    <button type="submit" name="select" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">View Now</button>
                                </div>
                                <div style="text-align: center;width: 100%;"><a href="/logout.php?q=db" class="g-color--white">Logout</a></div>


                            </form>

                        <?php }else{ ?>
                            <form submit="" style="background: #bd2026 !important;" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Admin Login</h2>
                                </div>

                                <div class="g-margin-b-30--xs">
                                    <select name="type" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Type">
                                        <option disabled selected>Select Type</option>
                                        <option value="0">Core</option>
                                        <option value="1">Manager</option>
                                    </select>
                                </div>


                                <div class="g-margin-b-30--xs">
                                    <input type="password" name="pass" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" name="login" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">You Better</button>
                                </div>
                            </form>
                        <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== FOOTER ==========-->
        <?php include("includes/script.php"); ?>
    </body>
    <!-- End Body -->
    </html>

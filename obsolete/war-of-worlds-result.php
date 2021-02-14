<?php
  session_start();

  require_once('includes/dbconnect.php');
?>

<!DOCTYPE html>
<html>
  <?php $pagetitle = 'War of Worlds| Consortium'; ?>
  <?php include('includes/head.php'); ?>
  <body class="back">
    <?php include('includes/header.php'); ?>
    <div id="register">
        <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">WAR OF WORLDS</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">
                      The First Round will go live on 31st January
                    </h2>



                    </div>
                </div>
            </div>

    <?php include("includes/footer_landing.php");?>
    <?php include("includes/script.php");?>
  </body>
</html>

<?php
   @session_start();
  // error_reporting(E_ALL);
  //   ini_set('display_errors', '1');
  require_once('includes/dbconnect.php');

    //   $brainquery = "CREATE TABLE IF NOT EXISTS nirmaan_answer(
    //             name VARCHAR (255) PRIMARY KEY,
    //             answer1 VARCHAR(255),
    //             answer2 VARCHAR(255),
    //             answer3 VARCHAR(255),
    //             answer4 VARCHAR(255),
    //             answer5 VARCHAR(255),
    //             answer6 VARCHAR(255),
    //             answer7 VARCHAR(255),
    //             answer8 VARCHAR(255),
    //             answer9 VARCHAR(255),
    //             answer10 VARCHAR(255),
    //             answer11 VARCHAR(255),
    //             answer12 VARCHAR(255),
    //             answer13 VARCHAR(255),
    //             answer14 VARCHAR(255),
    //             answer15 VARCHAR(255),
    //             )";
    //
    // mysqli_query($con,$brainquery);



    if(isset($_SESSION['email'])){
         $email = $_SESSION['email'];
          $query = "SELECT * FROM nirmaan_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              $name=$data['Name'];
              }
              $answer1=$_POST['answer1'];
              $answer2=$_POST['answer2'];
              $answer3=$_POST['answer3'];
              $answer4=$_POST['answer4'];
              $answer5=$_POST['answer5'];
              $answer6=$_POST['answer6'];
              $answer7=$_POST['answer7'];
              $answer8=$_POST['answer8'];
              $answer9=$_POST['answer9'];
              $answer10=$_POST['answer10'];
              $answer11=$_POST['answer11'];
              $answer12=$_POST['answer12'];
              $answer13=$_POST['answer13'];
              $answer14=$_POST['answer14'];
              $answer15=$_POST['answer15'];



              $sql = "INSERT INTO nirmaan_answer (name,answer1,answer2,answer3,answer4,answer5,
                                              answer6,answer7,answer8,answer9,answer10,answer11,answer12,
                                              answer13,answer14,answer15)
                      VALUES ('$name','$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10',
                              '$answer11','$answer12','$answer13','$answer14','$answer15')";
              if(mysqli_query($con,$sql)) {
                header("location: success.php");
                  }
              else {
                header("location: failure.php");
                  }
                }







?>

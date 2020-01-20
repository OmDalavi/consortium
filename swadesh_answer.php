<?php
   @session_start();
  // error_reporting(E_ALL);
  //   ini_set('display_errors', '1');
  $db_host = "localhost:3306";
  $db_username = "conso20";
  $db_pass = "Conso@123";
  $db_name = "conso20";
  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

      $brainquery = "CREATE TABLE IF NOT EXISTS Swadesh_answer(
                team_name VARCHAR (255) PRIMARY KEY,
                answer1 VARCHAR(255),
                answer2 VARCHAR(255),
                answer3 VARCHAR(255),
                answer4 VARCHAR(255),
                answer5 VARCHAR(255),
                answer6 VARCHAR(255),
                answer7 VARCHAR(255),
                answer8 VARCHAR(255),
                des1 VARCHAR(2000),
                des2 VARCHAR(2000)
                )";

    mysqli_query($con,$brainquery);

    if(isset($_SESSION['email'])){
         $email = $_SESSION['email'];
          $query = "SELECT * FROM Swadesh_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              $team_name=$data['Name'];
              }
              $answer1=$_POST['answer1'];
          $answer2=$_POST['answer2'];
          $answer3=$_POST['answer3'];
         $answer4=$_POST['answer4'];
          $answer5=$_POST['answer5'];
           $answer6=$_POST['answer6'];
          $answer7=$_POST['answer7'];
          $answer8=$_POST['answer8'];
          $des1=$_POST['des1'];
          $des2=$_POST['des2'];


          $sql = "INSERT INTO Swadesh_answer (team_name,answer1,answer2,answer3,answer4,answer5,answer6,answer7,answer8,des1,des2)
          VALUES ('$team_name' , '$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$des1','$des2')";
          if(mysqli_query($con,$sql)) {
        header("location: success.php");
      }
      else {
        header("location: failure.php");
          }
            }







?>

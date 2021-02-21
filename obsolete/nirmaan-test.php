<?php
  @session_start();
  // error_reporting(E_ALL);
  //   ini_set('display_errors', '1');
  require_once('includes/dbconnect.php');
  if(isset($_SESSION['email'])){
   $email = $_SESSION['email'];
             }
           else{
              $_SESSION['login_error'] = "Kindly Login First";
   header('location:/login.php');
           }


  ?>
<!DOCTYPE html>
  <html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="user-css/login-style.css">
        <link rel="shortcut icon" type="image/png" href="images/conso-icon.png">
        <title>Online Test | Round 1 | Nirmaan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/swades.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">



    </head>
    <body>



      <nav class="navbar sticky-top navbar-expand-lg navbar-dark " >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <form class="form-inline my-2 my-lg-0">

              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Welcome : <?php  $query = "SELECT * FROM nirmaan_team WHERE Email='$email'";
            $result = mysqli_query($con,$query);
            $num = mysqli_num_rows($result);
            $data = $result->fetch_array(MYSQLI_ASSOC);
            if($num!=0){
              echo $data['Name'];
            }
            ?></button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">Log Out</a></button>

            </form>

          </div>
        </nav>
        <div  class="start-test">
          <button class="start-test" type="start-test" onclick="myFunction()">start test</button>
        </div>
        <div class="start-test instructions">
          <h5 style="color: white;">Instructions</h5>
          <ol style="color: white;">
            <li>Before starting the test, make sure you are connected with high speed internet connection.</li>
            <li>Once you start the test, do not refresh.</li>
            <li>All the Questions are compulsory.</li>
            <li>The Question Paper is divided in 2 parts(PART 1 AND PART 2).</li>
            <li>PART 1 : FIRST 4 QUESTIONS ARE OF 2 MARKS EACH </li>
            <li>PART 2 : OTHERS ARE 1 MARKS EACH</li>
            <li>No negative marking</li>
            <li>Total time for the exam is 10 minutes.</li>
            <li>Submit the paper before the time overs otherwise your responses will be submitted automatically.</li>
          </ol>
          <br>
          <h5 style="color: white;" class="maximummarks">M.M.:- 60</h5>
          <br>
        </div>


        </div>




        <div id="test" style="display: none;">

          <form id="myForm1" name="myForm1" action="nirmaan-answer.php" method='post' >
            <div id="questions">
              <p class="allthebest">----ALL THE BEST----</p>
              <br><br>


      *1) Which of the following is “Bending Equation”?</br>
      </br>
      <input type="checkbox" name="answer1" value="a">  a)  <i>M/I=&sigma;/Y=E/R</i></br>
      <input type="checkbox" name="answer1" value="b">  b)  <i>M/Y=&sigma;/R=E/I</i></br>
      <input type="checkbox" name="answer1" value="c">  c)  <i>M/I=&sigma;/R=E/Y<br>
      <input type="checkbox" name="answer1" value="d">  d)  None of the above
      </br>

      </br>
      </br></br>
      *2) Calculate the bursting pressure for a cold drawn seamless steel tubing of 60mm internal diameter with 2mm wall thickness. The ultimate strength of steel is 380 MN/m<sup>2</sup>. (in MN/m<sup>2</sup>)</br></br>
      <input type="checkbox" name="answer2" value="a">  a)  38.28</br>
      <input type="checkbox" name="answer2" value="b">  b)  35.23</br>
      <input type="checkbox" name="answer2" value="c">  c)  25.33</br>
      <input type="checkbox" name="answer2" value="d">  d)  29.28
      </br>

      </br>
      </br></br>
      *3) “The arrival of wealthier people in an existing urban district, a related increase in rents and property values, and changes in the district's character and culture.” This is also termed as-</br></br>
      <input type="checkbox" name="answer3" value="a">  a)  Gentrification</br>
      <input type="checkbox" name="answer3" value="b">  b)  Generation</br>
      <input type="checkbox" name="answer3" value="c">  c)  Degentrification</br>
      <input type="checkbox" name="answer3" value="d">  d)  Degeneration</br>

      </br></br>
      </br>
      *4) Smaller metropolitan areas which are located somewhat near to, but are mostly independent  of, larger metropolitan area are also known as-</br></br>
      <input type="checkbox" name="answer4" value="a">  a)  Parasite Town</br>
      <input type="checkbox" name="answer4" value="b">  b)  Paradise Town</br>
      <input type="checkbox" name="answer4" value="c">  c)  Satellite Town</br>
      <input type="checkbox" name="answer4" value="d">  d)  Suburbs</br>


</br>
</br>

    *5) Each and every city is associated with one or the other major activity which serves as nucleus and population grow around it. Which of the following was initially a trading town?</br></br>
        <input type="checkbox" name="answer5" value="a">a) Mumbai</br>
        <input type="checkbox" name="answer5" value="b">b) Bhilai</br>
        <input type="checkbox" name="answer5" value="c">c) Nagpur</br>
        <input type="checkbox" name="answer5" value="d">d) Kharagpur</br>
        </br>
        </br>
    *6) The tube of fluorescent lamp is filled with:</br></br>
        <input type="checkbox" name="answer5" value="a">a) Mercury and Nitrogen </br>
        <input type="checkbox" name="answer5" value="b">b) Mercury and Argon</br>
        <input type="checkbox" name="answer5" value="c">c) Nitrogen and Argon</br>
        <input type="checkbox" name="answer5" value="d">d) Oxygen and Argon</br>
      </br>
      </br>
    *7) Ohm’s Law is not applicable for:</br></br>
          <input type="checkbox" name="answer5" value="a">a) Vacuum Tubes </br>
          <input type="checkbox" name="answer5" value="b">b) Carbon Resistors </br>
          <input type="checkbox" name="answer5" value="c">c) High Voltage Circuits </br>
          <input type="checkbox" name="answer5" value="d">d) Circuits with low current densities</br>
          </br>
          </br>
    *8) A material which is slightly repelled by a magnetic field is known as:  </br></br>
          <input type="checkbox" name="answer5" value="a">a) Ferromagnetic Material </br>
          <input type="checkbox" name="answer5" value="b">b) Diamagnetic Material </br>
          <input type="checkbox" name="answer5" value="c">c) Paramagnetic Material </br>
          <input type="checkbox" name="answer5" value="d">d) Antiferromagnetic Material</br>
          </br>
          </br>
    *9) The standard frequency used in India and USA respectively is:</br></br>
          <input type="checkbox" name="answer5" value="a">a) 50 and 60 Hz </br>
          <input type="checkbox" name="answer5" value="b">b) 70 and 60 Hz </br>
          <input type="checkbox" name="answer5" value="c">c) 60 and 50 Hz </br>
          <input type="checkbox" name="answer5" value="d">d) 60 and 70 Hz</br>
          </br>
          </br>
    *10) A capacitor blocks: </br></br>
          <input type="checkbox" name="answer5" value="a">a) DC </br>
          <input type="checkbox" name="answer5" value="b">b) AC</br>
          <input type="checkbox" name="answer5" value="c">c) Both AC and DC </br>
          <input type="checkbox" name="answer5" value="d">d) None of the above</br>
          </br>
          </br>
    *11) In a series resonant circuit, the impedance of the circuit is: </br></br>
          <input type="checkbox" name="answer5" value="a">a) Minimum </br>
          <input type="checkbox" name="answer5" value="b">b) Maximum </br>
          <input type="checkbox" name="answer5" value="c">c) Zero </br>
          <input type="checkbox" name="answer5" value="d">d) None of the above</br>
          </br>
          </br>
    *12) Which of the following ions causes the cement to set quickly?</br></br>
          <input type="checkbox" name="answer5" value="a">a) Sulphate </br>
          <input type="checkbox" name="answer5" value="b">b) Carbonate </br>
          <input type="checkbox" name="answer5" value="c">c) Chloride </br>
          <input type="checkbox" name="answer5" value="d">d) Nitrate</br>
          </br>
          </br>
    *13) The maximum bearing capacity of soil is that of:</br></br>
          <input type="checkbox" name="answer5" value="a">a) Hard Rocks  </br>
          <input type="checkbox" name="answer5" value="b">b) Black Cotton Soil </br>
          <input type="checkbox" name="answer5" value="c">c) Dry, coarse Sandy Soil  </br>
          <input type="checkbox" name="answer5" value="d">d) Fine Sandy Soil</br>
          </br>
          </br>
    *14)  In Nagpur conference, the minimum width of village roads was recommended as: </br></br>
          <input type="checkbox" name="answer5" value="a">a) 2 m   </br>
          <input type="checkbox" name="answer5" value="b">b) 2.25 m  </br>
          <input type="checkbox" name="answer5" value="c">c) 2.45 m   </br>
          <input type="checkbox" name="answer5" value="d">d) 3.2 m </br>
          </br>
          </br>
    *14)  Canals constructed for draining off water from water logged areas, are known as: </br></br>
          <input type="checkbox" name="answer5" value="a">a) Drains  </br>
          <input type="checkbox" name="answer5" value="b">b) Inundation canals  </br>
          <input type="checkbox" name="answer5" value="c">c) Valley canals   </br>
          <input type="checkbox" name="answer5" value="d">d) Contour canals</br>
          </br>
          </br>
    *14)  According to Joule's law, the internal energy of a perfect gas is the function of absolute-</br></br>
          <input type="checkbox" name="answer5" value="a">a) Density  </br>
          <input type="checkbox" name="answer5" value="b">b) Pressure </br>
          <input type="checkbox" name="answer5" value="c">c) Temperature  </br>
          <input type="checkbox" name="answer5" value="d">d) Volume</br>
          </br>
          </br>
  </br>
  </br>
  </br>
  </br>

</div>

<input type="submit" value="Submit" name="submit" class="test-submit">
</form>
</div>










<script>

  var x;

function myFunction() {
   document.querySelector("#test").style.display = "block";
   x= setTimeout(Func, 2700000);

}
 function Func(){
      var y = document.getElementById("questions");
          y.style.display = "none";
   alert('Time over !!!Please Submit Your Response.');



 }
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>

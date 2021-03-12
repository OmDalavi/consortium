<?php
session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
    $welcomeMessage = "Welcome to the databse!";
} else {
    header('Location: logindb.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="JUGAAD STUDENT DATABASE">
    <meta name="author" content="Vipul Wairagade">
    <title>Event Database</title>
    <link href="" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- 
    <style>
        table.db-table 		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
        table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
        table.db-table td	{ padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
    </style> -->

</head>

<body style="width: 100%; overflow-x: hidden;">

    <div style="width:100%; text-align: center;"><h1 style="text-align:center; margin-top:50px; padding:20px 20px;"><?php echo $_SESSION['event'];?></h1>
    <a style="text-align: center; color: #bd2620; text-decoration:none; font-size: 16px;" href="/logindb.php">Change Event Now</a></div>



    <div style="overflow-x: auto; padding:10px 30px;">

<table class="table" id="myTable" >


        <?php

        require_once('includes/dbconnect.php');


        if($_SESSION['event'] == 'adventure'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Team conso ID</th>
            <th>Type of ad</th>
            <th>Order id</th>
            <th>Razor payment ID</th>
            <th>Payment status</th>
        </tr>
        </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'bizquiz'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Team conso ID</th>
            <th>Order id</th>
            <th>Razor payment ID</th>
            <th>Payment status</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'ceo'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Order id</th>
            <th>Razor payment ID</th>
            <th>Payment status</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'operation_research'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Team conso ID</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'pitch_mantra'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Round 1</th>
            <th>Round 2</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'render_ico'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'swades'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Team conso ID</th>
            <th>Round 1</th>
            <th>Round 2</th>
            <th>Round 3</th>
            <th>Order id</th>
            <th>Razor payment ID</th>
            <th>Payment status</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'wallstreet'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Tier</th>
            <th>Order id</th>
            <th>Razor payment ID</th>
            <th>Payment status</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'war_of_worlds'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>College</th>
            <th>Round 1</th>
            <th>Round 2</th>
            <th>Round 3</th>
            <th>Order id</th>
            <th>Razor payment ID</th>
            <th>Payment status</th>
        </tr>
    </thead>
        <tbody>';
        }
        else{
            echo '<thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>

        </tr>
    </thead>
        <tbody>';
        }



        $result=mysqli_query($con, "SELECT * FROM `$_SESSION[event]`");
        while ($row = mysqli_fetch_assoc($result)):

            if($_SESSION['event'] == 'adventure'){
        ?>


        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['team_conso_id'];?></td>
            <td><?php echo $row['typeof_ad'];?></td>
            <td><?php echo $row['order_id'];?></td>
            <td><?php echo $row['razor_payment_id'];?></td>
            <td><?php echo $row['payment_status'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'bizquiz'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['team_conso_id'];?></td>
            <td><?php echo $row['order_id'];?></td>
            <td><?php echo $row['razor_payment_id'];?></td>
            <td><?php echo $row['payment_status'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'ceo'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['order_id'];?></td>
            <td><?php echo $row['razor_payment_id'];?></td>
            <td><?php echo $row['payment_status'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'operation_research'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['team_conso_id'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'pitch_mantra'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['round1'];?></td>
            <td><?php echo $row['round2'];?></td>


        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'render_ico'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>



        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'swades'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['team_conso_id'];?></td>
            <td><?php echo $row['round1'];?></td>
            <td><?php echo $row['round2'];?></td>
            <td><?php echo $row['round3'];?></td>
            <td><?php echo $row['order_id'];?></td>
            <td><?php echo $row['razor_payment_id'];?></td>
            <td><?php echo $row['payment_status'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'wallstreet'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['tier'];?></td>
            <td><?php echo $row['order_id'];?></td>
            <td><?php echo $row['razor_payment_id'];?></td>
            <td><?php echo $row['payment_status'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'war_of_worlds'){
        ?>

        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['round1'];?></td>
            <td><?php echo $row['round2'];?></td>
            <td><?php echo $row['round3'];?></td>
            <td><?php echo $row['order_id'];?></td>
            <td><?php echo $row['razor_payment_id'];?></td>
            <td><?php echo $row['payment_status'];?></td>

        </tr>
        <?php
        }
        else{
        ?>

        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Contact'];?></td>

        </tr>

        <?php
            }
           endwhile;
        ?>
    </tbody>
</table>
</div>


<!-- DataTables -->
<script src="tables/jquery.js"></script>
<script src="tables/jquery.dataTables.js"></script>
<script src="tables/dataTables.bootstrap.js"></script>

<script language="javascript">
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
</script>

</body>
</html>

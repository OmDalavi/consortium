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

        $db_host = "localhost:3306";
        $db_username = "conso20";
        $db_pass = "Conso@123";
        $db_name = "conso20";

        $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
        mysqli_select_db($con,$db_name) or die ("no database");


        if($_SESSION['event'] == 'Azure'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>College</th>
            <th>Year</th>
            <th>Branch</th>
            <th>Paid</th>
        </tr>
        </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'Brainathon'){
            echo '<thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>isPaid</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'Expo'){
            echo '<thead>
        <tr>
            <th>ID</th>
            <th>Startup</th>
            <th>Email</th>
            <th>Website</th>
            <th>Phone</th>
            <th>Paid</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'Townhall'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>College</th>
            <th>Year</th>
            <th>Question</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'trec'){
            echo '<thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
    </thead>
        <tbody>';
        }
        else if($_SESSION['event'] == 'aimlworkshop'){
            echo '<thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>College</th>
            <th>branch</th>
            <th>year</th>
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

            if($_SESSION['event'] == 'Azure'){
        ?>


        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['year'];?></td>
            <td><?php echo $row['branch'];?></td>
            <td><?php echo $row['paid'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'Brainathon'){
        ?>

        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Contact'];?></td>
            <td><?php echo $row['isPaid'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'Expo'){
        ?>

        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['startup'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['website'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['paid'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'Townhall'){
        ?>

        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['year'];?></td>
            <td><?php echo $row['question'];?></td>

        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'trec'){
        ?>

        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Contact'];?></td>


        </tr>
        <?php
        }
        else if($_SESSION['event'] == 'aimlworkshop'){
        ?>

        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['college'];?></td>
            <td><?php echo $row['branch'];?></td>
            <td><?php echo $row['year'];?></td>



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

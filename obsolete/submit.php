<?php
// Add name tags to input in html: name,email,phone,submit
// Change table names to adventure,bizmantra,silhouette resp.

// add in formtag : method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"

if ( isset( $_POST['submit'] ) ) {
    $con = mysqli_connect("localhost:3306", "conso", "Conso123@", "conso");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $query = mysqli_query($con, "INSERT into ceo (NAME,EMAIL,CONTACT) values('$name','$email','$phone')");
     mysqli_close($con);
}
?>

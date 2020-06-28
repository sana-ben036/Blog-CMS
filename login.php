<?php
// connection to db
$host='localhost';
$user='root';
$pass='';
$db='blog';

$connect=mysqli_connect($host,$user,$pass,$db);

/*
$req = $db->prepare('SELECT * FROM admin WHERE username = :username');

$data = $req->fetch();

$isPasswordCorrect = password_verify($_POST['password'], $data['password']);

if (!$data)
{
    echo 'invalid input1!';
}
else
{
    if ($isPasswordCorrect) {
        $_SESSION['username'] = $username;
        echo 'you are connected!';
        header("LOCATION:dashbord.php");
    }
    else {
        echo 'invalid input2 !';
    }
}

*/
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password= $_POST['password'];
    $query = "SELECT * FROM admin WHERE username='$username'&& password='$password'";
    if(mysqli_num_rows(mysqli_query($connect,$query))>0){
        $_SESSION['username']=$username;
        header("LOCATION:admin.php");
    } else{
        echo ' username or password invalid';
    }
    
} 


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
        <title>Login</title>
    </head>

    <body>

        <?php
include "navbar.php";
?>

<form action="" method='POST'>
    <input type="text" name="username" placeholder='username'><br><br>
    <input type="password" name="password" placeholder='password'><br><br>
    <input type="submit" name="submit" class='btn btn-primary'>

</form>




 <!-- Bootsrap JS -->

 <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    </body>
</html>


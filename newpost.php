<?php


if(isset($_POST['submit'])){
    unset($_SESSION['name']);
    header('LOCATION:login.php');
 
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
require "navbar.php";
?>
    <div class="row">
        <div class="col-lg-3 cl">
            <a href="newpost.php"><h5>New post</h5></a><hr>
            <a href=""><h5>Manage posts</h5></a><hr>
            <a href=""><h5>Manage topics</h5></a><hr>
            <form action="" method='POST'>
                <button type='submit' name='submit' class='btn btn-primary'>Logout</button>
            </form>


        </div>
        <div class="col-lg-9 cl">
            <div class="container">
                <h5>Create a new post</h5>
                <form action="" method='POST'>
                    <pre>
                    <label for="title">Title:</label>
                    <input type="text" name='title' id='title'><br><br>
                    <label for="text">Text:</label>
                    <input type="text" name='text' id='text'><br><br>
                    <label for="image">Image:</label>
                    <input type="upload" name='image' id='image'><br><br>
                    </pre>
                    <input type="submit" name='submit' value='Submit' class='btn btn-primary'>

                







                </form>
            </div>

        </div>

    </div>










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
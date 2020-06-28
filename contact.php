<?php
// connection to db
require "connect.php";
// send input value to table of db
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message = $_POST['message'];
    $query = "INSERT INTO contact (name,email,subject,message) value ('$name','$email','$subject','$message')";
    mysqli_query($connect,$query);
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
        <title>Contact</title>
    </head>

    <body>

        <?php include "navbar.php"; ?>
        <div class="container">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions?
                Please do not hesitate to contact us directly. Our team will come back to you
                within a matter of hours to help you.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="contact.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea
                                        type="text"
                                        id="message"
                                        name="message"
                                        rows="2"
                                        class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="text-center text-md-left">
                        <input type="submit" name='submit' value='send'>
                    </div>

                    </form>

                    
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Youssoufia, CP 46300, MA</p>
                        </li>

                        <li>
                            <i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 212 662 656 878</p>
                        </li>

                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contact@agency.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>
        </div>



        <div class="container">
            <div class="row">
                <iframe
                    class='map'
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8828.51980909768!2d-8.527390585734633!3d32.24476510798407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefcd3cdac94a5%3A0x2cfe67e059e518d!2sYoussoufia!5e0!3m2!1sfr!2sma!4v1593002932548!5m2!1sfr!2sma"
                    width="600"
                    height="450"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"></iframe>
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
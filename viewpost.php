<?php require 'connect.php'  ?>


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
        <title>Blog</title>
    </head>
    <body>

        <?php
require "navbar.php";
?>
        <h2 class='actualités'>Actualités</h2>
        <div class="container" >
            <?php
            // get data from db
$result=$db->query('SELECT * FROM post ');

while ($data = $result->fetch())
{
?>
                <div>
                    <h5><?php echo htmlspecialchars($data['title']);?></h5>
                    <p><?php echo ($data['date']);?></p>
                    <p class='text'><?php echo htmlspecialchars($data['text']);?></p>
                
                </div>
                <div class="btn btn-info float-right">Précédant</div>

<?php
}

$result->closeCursor(); // Termine le traitement de la requête
            ?>
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
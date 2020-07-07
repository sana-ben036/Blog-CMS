<?php require'action.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>




<h2 class='news'>About Coronavirus News</h2>
<div class='container'>
    <div class="row">
    <!--------php --------------------->
    <?php 
       // get data from db
        $sth= $db->query('SELECT * FROM post');
        while ($row = $sth->fetch()){
        ?>
        <div class="col-lg-4 col-md-6 col-xd-12">
            <div class="card">
                <img src="admin/<?= $row['image'];?>" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title">
                <?= $row['title'];?>‎<br><br>
                <a  href="viewpost.php?read=<?= $row['id'] ;?>">Read</a>
                </h5>
                </div>
            </div>
        </div>
        <?php 

        }  
        $db=null ; // fin de connexion        
    ?> 
    <!--------php --------------------->
    </div>
</div>

    









<footer>
</footer>
<!-- Bootsrap JS -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
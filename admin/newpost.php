<?php require'../action.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <title>Newpost</title>
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>

<div class="row">
<div class="col-lg-3 cl">
            <a href="newpost.php"><h5>New post</h5></a><hr>
            <a href="managepost.php"><h5>Manage posts</h5></a><hr>
            <a href=""><h5>Manage topics</h5></a><hr>
            <a href="../login.php"><h5>Logout</h5></a><hr>
        </div>

        <div class="col-lg-9 cl">
            <div class="container">
                <h5>Create a new post</h5><br><br>
                <!-----------php/alert---------------->

                <?php if(isset($_SESSION['message'])){ ;?>
                    <div class="alert alert-<?= $_SESSION['msg_type'];?>  alert-dismissible text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <b><?= $_SESSION['message'] ; ?></b>
                    </div>
                <?php } unset($_SESSION['message']) ; ?>
                <!-----------php---------------------->

                <form action="" method='POST' enctype="multipart/form-data">
                <pre>
                    <input type="hidden" name='id' value='<?= $id; ?>'> 
                    <label for="title">Title:</label>
                    <!---<textarea name="title" id="title" cols="100" rows="2" value='<?= $title; ?>' required></textarea><br><br>--->
                    <input class='input1' type="text" name='title' id='title' value='<?= $title; ?>' required><br><br>
                    <label for="text">Text:</label>
                    <!---<textarea name="text" id="text" cols="100" rows="10" value='<?= $text; ?>' required></textarea><br><br>--->
                    <input class='input2' type="text" name='text' id='text' value='<?= $text; ?>' required><br><br>
                    <label for="image">Image:</label>
                    <input type="hidden" name='oldimage' value='<?= $image; ?>'>
                    <input type="file" id="image" name="image"  accept="image/png, image/jpeg">
                    <img src="<?= $image; ?>" width='120' class='img-thumbnail'>
                </pre>
                    <?php if($update == true){ ?>
                        <input type="submit" name='update' value='Update post' class='btn btn-info btn-md'>
                    <?php }else { ?>
                    <input type="submit" name='add' value='Add post' class='btn btn-info btn-md'>
                    <?php } ?>
                </form>
            </div>
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



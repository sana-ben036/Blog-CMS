<?php require'../db.php';


session_start();

$update = false;

$id=" ";
$title=" ";
$text=" ";
$image=" ";


// fonction pour tester les input
function valid_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if(isset($_POST['add'])){                    //$_SERVER["REQUEST_METHOD"] == "POST"

    //test values on input
    $title =valid_data ($_POST['title']);
    $text= valid_data($_POST['text']);
    $image= $_FILES['image']['name'];
    $upload="uploads/".$image;

     //insert values in  db
    $sth = $db->prepare("
    INSERT INTO post(title, text, image)
    VALUES(:title, :text, :image)");
    $sth->bindParam(':title',$title);
    $sth->bindParam(':text',$text);
    $sth->bindParam(':image',$upload);
    $sth->execute();
    move_uploaded_file($_FILES['image']['tmp_name'],$upload);

   //header('Location : newpost.php');

    $_SESSION['message']= " Your post added successfuly!";
    $_SESSION['msg_type']= "success";

} 


// update a post:::::::

if(isset($_GET['edit'])){

    $id = $_GET['edit'];

    // select the post a modifier selon son id et recuperer les details de ce post
    $sth=$db->prepare('SELECT * FROM post WHERE id = :id ')  ;
    $sth->bindParam(':id',$id);
    $sth->execute();
    while ($row = $sth->fetch())
    {
        $id=$row['id'];
        $title=$row['title'];
        $text=$row['text'];
        $image=$row['image'];

        $update = true;     // true ou false selon selon le choix : newpost vide input ou update pr recuperer les details de post in input
        
    }

    


}

// edit details of post
if(isset($_POST['update'])){

    //show details post befor update it
    $id = $_POST['id'];
    $title = valid_data($_POST['title']);
    $text= valid_data ($_POST['text']);
    $oldimage= $_POST['oldimage'];

    // to change and upload new image 
    if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] != " ")){

        $newimage="uploads/".$_FILES['image']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['tmp_name'],$newimage);

    } else{
        $newimage=$oldimage;
    }

    $sth=$db->prepare('UPDATE post SET title=?,text=?,image=? WHERE id = ? ')  ;
    $sth->bindParam(1,$title);
    $sth->bindParam(2,$text);
    $sth->bindParam(3,$newimage);
    $sth->bindParam(4,$id);
    $sth->execute();

    $_SESSION['message']= " Your post updated successfuly!";
    $_SESSION['msg_type']= "info";



    


}

$db= null; // Termine le traitement de la requête


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
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
            <a href="../login.php"><h5>Login Out</h5></a><hr>
        </div>

        <div class="col-lg-9 cl">
            <div class="container">
                <h5>Create a new post</h5><br><br><br>
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
                    <input type="text" name='title' id='title' value='<?= $title; ?>' required><br><br>
                    <label for="text">Text:</label>
                    <input type="text" name='text' id='text' value='<?= $text; ?>' required><br><br>
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



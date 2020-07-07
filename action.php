<?php

// conexion db 
require 'db.php';

// declarer session
session_start();

// fonction pr tester les input
function valid_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// script for login :::::::::::::::::::::::::::::::::::::

    if(isset($_POST['submit'])){

        $email = valid_data ($_POST['email']);
        $password = $_POST['password'];
    
    
        $sth = $db->prepare("SELECT * FROM admin WHERE email = :email ");
        $sth->bindParam(':email',$email);
        $sth->execute();
        while ($row = $sth->fetch())
        {
            $username=$row['username'];
            $email=$row['email'];
            $password=$row['password'];

            if ($row && ($_POST['password'] === $row['password']))
            {
                header("LOCATION:admin/dashboard.php"); 
    
                //$_SESSION['message']= " You are login as admin !";
                //$_SESSION['msg_type']= "success";
                
                
                
            }else{
                $_SESSION['message']= " Email or Password Invalid !";
                $_SESSION['msg_type']= "danger";
        
            }
        } 
        

    }


        /*
        $sth->execute([$_POST['email']]);
        $admin = $sth->fetch();
    
        if ($admin && ($_POST['password'] === $admin['password']))
        {
            header("LOCATION:admin/dashboard.php"); 

            $_SESSION['message']= " You are login as admin !";
            $_SESSION['msg_type']= "success";
            
            
        } else{
            $_SESSION['message']= " Email or Password Invalid !";
            $_SESSION['msg_type']= "danger";
    
        }

    }
*/



// script for contact us :::::::::::::::::::::::::::::::::


if (isset($_POST['send'])) {
    $name = valid_data($_POST['name']);
    $email= valid_data($_POST['email']);
    $subject= valid_data($_POST['subject']);
    $message = valid_data($_POST['message']);


    //On insère les données vers db
    $sth = $db->prepare("
    INSERT INTO contact(name, email, subject, message)
    VALUES(:name, :email, :subject, :message)");
$sth->bindParam(':name',$name);
$sth->bindParam(':email',$email);
$sth->bindParam(':subject',$subject);
$sth->bindParam(':message',$message);
$sth->execute();

$_SESSION['message']= "Message Successfuly Sent !";
$_SESSION['msg_type']= "success";

} 


// script for newpost :::::::::::::::::::::::::::::::::::::

    $update = false;

    $id=" ";
    $title=" ";
    $text=" ";
    $image=" ";
    
    
    if(isset($_POST['add'])){                    
    
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

// script to delet post ::::::::::::::::::::::::::::::::::

if(isset($_GET['delete'])){

    $id = $_GET['delete'];

    //delete image from uploads folder
    $sth2=$db->prepare( 'SELECT image FROM post WHERE id= :id ');
    $sth2->bindParam(':id',$id);
    $sth2->execute();
    while ($row = $sth2->fetch())
    {
        $imagepath=$row['image'];
        unlink($imagepath);
    }

    // delete the post from db
    $sth=$db->prepare('DELETE FROM post WHERE id= :id ')  ;
    $sth->bindParam(':id',$id);
    $sth->execute();

    //header("Location: managepost.php");

    $_SESSION['message']= "Successfuly Deleted !";
    $_SESSION['msg_type']= "danger";

}



//script for viewpost::::::::::::::::::::::::::::::::::::::

if(isset($_GET['read'])){
    $id=$_GET['read'];

    // select the post a afficher selon son id et recuperer les details de ce post
    $sth=$db->prepare('SELECT * FROM post WHERE id = :id ')  ;
    $sth->bindParam(':id',$id);
    $sth->execute();
    while ($row = $sth->fetch())
    {
        $id=$row['id'];
        $title=$row['title'];
        $text=$row['text'];
        $image=$row['image'];
        $date=$row['date'];


        
    }

}

// script to block anyone to check in dashboard from url






$db=null;
?>
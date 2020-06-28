<?php
try{
    // connection to Mysql
    $db= new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Error: '.$e->getMessage());
}

?>

<?php

/*
$host='localhost';
$user='root';
$pass='';
$db='blog';

$connect=mysqli_connect($host,$user,$pass,$db);

/*if($connect){
    echo 'connected';
}else {
    echo 'not connected';

}*/


?>

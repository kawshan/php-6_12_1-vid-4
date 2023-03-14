<?php

require_once("db.php");

if (! isset($_GET['id'])){
    die("error");
}


$id=$_GET['id'];

$sql="delete from employee where id=".$id;
mysqli_query($conn,$sql);

?>

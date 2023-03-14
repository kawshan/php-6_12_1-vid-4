<?php

require_once("db.php");

if (   ! (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender'])  )   ){
die("error");
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$sql="insert into employee (name,age,gender_id) values ('$name',$age,'$gender'); ";
$result=mysqli_query($conn,$sql);
echo ($result);

?>

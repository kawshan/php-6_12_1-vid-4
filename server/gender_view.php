<?php

require_once("db.php");

$sql="select * from gender";
$result=mysqli_query($conn,$sql);

$genders=array();
while ($gender=mysqli_fetch_assoc($result)){
    array_push($genders,$gender);

}
$json=json_encode($genders);
echo ($json);
?>

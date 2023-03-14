<?php

require_once("db.php");

$sql="select id,name,age,(select name from gender where id=gender_id) as gender from employee";
$result=mysqli_query($conn,$sql);

$employees=array();
    while ($employee=mysqli_fetch_assoc($result)){
        array_push($employees,$employee);

    }
    $json=json_encode($employees);
    echo ($json);
    ?>

<?php
$con = mysqli_connect("localhost","root","","kh-works");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = '';
if( isset( $_GET['id'])) {
    $id = $_GET['id'];
}

$result = mysqli_query($con,"SELECT * FROM `users` WHERE id = $id");
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows['object_name'][] = $r;
}

print json_encode($rows);

?>
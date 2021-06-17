<?php

$con=mysqli_connect('localhost','root','','familyMan');
$json = file_get_contents('php://input');
$data = json_decode($json);
  
print_r($data);

$con=mysqli_connect('localhost','root','','familyMan');
$sql = "INSERT INTO data (img, portrayed, nickname, birthday, status)
VALUES ('$data->img', '$data->portrayed', '$data->nickname', '$data->birthday', '$data->status')";
 $res=mysqli_query($con,$sql);

?>


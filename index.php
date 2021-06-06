<?php

 $con=mysqli_connect('localhost','root','','familyMan');
 $sql = "SELECT * from data ";
 $res=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($res)){
	$arr[] = $row;
}
$newArr = [];

	if($_GET['str'] != null){
		$str = $_GET['str'];
	$sql = "SELECT Distinct id,char_id,img,nickname,portrayed,status FROM data where portrayed like '%$str%' or nickname like '%$str%' GROUP BY portrayed  ";
 	$res=mysqli_query($con,$sql);
 		while($row=mysqli_fetch_assoc($res)){
		$newArr[] = $row;
		}
		echo json_encode($newArr);	
}else{
	echo json_encode($arr);	
}
?>

<!-- $con=mysqli_connect('localhost','rahulssd_rahulssdemoFM','Rahul@11','rahulssd_FamilyMan'); -->


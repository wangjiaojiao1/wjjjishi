<?php
    $conn=mysqli_connect('localhost','root','');
	mysqli_query($conn,'set names utf8');
	$db=mysqli_select_db($conn,'liuyan');
	$result=mysqli_query($conn,'select * from wen');
	$a=array();
	while($row=mysqli_fetch_array($result)){
		array_push($a,$row);
	}
	$json=json_encode($a);
	$json=preg_replace_callback('/\\\\u([0-9a-f]{4})/i', create_function('$matches', 'return iconv("UCS-2BE","UTF-8",pack("H*", $matches[1]));'), $json);
	echo $json;
?>
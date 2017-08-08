<?php
    $conn=mysqli_connect('localhost','root','');
	mysqli_query($conn,"set names utf8");
	$db=mysqli_select_db($conn,'liuyan');
	$title=$_POST['title'];
	$result=mysqli_query($conn,'delete from wen where title="'.$title.'"');
	if($result){
		echo "删除成功";
	}
?>
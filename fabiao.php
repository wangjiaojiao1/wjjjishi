<?php
    $conn=mysqli_connect('localhost','root','');
	mysqli_query($conn,"set names utf8");
	$db=mysqli_select_db($conn,'liuyan');
	$title=$_POST['title'];
	$content=$_POST['content'];
	
	$user="admin";
	$pic="images/abc.jpg";
	$c=mysqli_query($conn,'insert into wen values("'.$title.'","'.$content.'","admin","images/abc.jpg")');
	if($c){
		echo "发表成功";
	}
?>
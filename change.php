<?php
    $conn=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'liuyan');
	$pwd=$_POST['password'];
	$user=$_POST['username'];
	
	$result=mysqli_query($conn,'select * from user where username="'.$user.'"');
	$row=mysqli_fetch_array($result);
	if($row){
		$newresult=mysqli_query($conn,'update user set password="'.$pwd.'" where username="'.$user.'"');
		if($newresult){
			echo "修改成功";
		}
	}
?>
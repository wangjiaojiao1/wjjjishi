<?php
   if($_POST['upload']){
		/*var_dump($_FILES['upfile']);*/
		$c=move_uploaded_file($_FILES['upfile']['tmp_name'],"images/abc.jpg");
		if($c){
			echo "上传成功";
		}
	}
?>
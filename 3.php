<?php
header("Content-type: text/html; charset=utf-8"); 
session_start();
if($_SESSION['Checknum']==$_POST['yanzhengma']){
	if($_FILES["file"]["type"]=="image/jpeg"){
			move_uploaded_file($_FILES['file']['tmp_name'],'jpg/'.$_FILES["file"]["name"]); 
			echo "已保存至文件夹jpg";
			$img=imagecreatefromjpeg("jpg/".$_FILES["file"]["name"]);
		}
		else if($_FILES["file"]["type"]=="image/png"){
			move_uploaded_file($_FILES['file']['tmp_name'],'png/'.$_FILES["file"]["name"]); 
			echo "已保存至文件夹png";
			$img=imagecreatefromjpeg("png/".$_FILES["file"]["name"]);
		}
		else if($_FILES["file"]["type"]=="image/gif"){
			move_uploaded_file($_FILES['file']['tmp_name'],'gif/'.$_FILES["file"]["name"]); 
			echo "已保存至文件夹gif";
			$img=imagecreatefromjpeg("gif/".$_FILES["file"]["name"]);
		}
}
else{
	echo"wrong";
}

?>
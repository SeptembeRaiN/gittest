<?php
session_start();					
include_once("conn/conn.php");			
$name = $_SESSION['name'];
$pinglun = $_POST['pinglun'];
$sql = "select name from word where name='".$name."'";

   $query = mysql_query($sql);
   $rows=mysql_fetch_array($query);
   mysql_free_result($query);
   if ($rows['name']==$name) {
   	if(mysql_query("update pinglun set pinglun = '".$pinglun."' where name = '".$name."'")){
  echo "<script>alert('评论发表成功！');history.back();</script>";
}else{
    echo "<script>alert('评论发表失败！');history.back();</script>";
  }}else{
   $sql1 = "insert into pinglun(name) values('".$name."') ";
$result = mysql_query($sql);
if(mysql_query("update pinglun set pinglun = '".$pinglun."' where name = '".$name."'")){
  echo "<script>alert('评论发表成功！');history.back();</script>";
}else{
    echo "<script>alert('评论发表失败！');history.back();</script>";
  }
}
?>
      
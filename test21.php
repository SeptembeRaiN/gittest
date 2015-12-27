<?php
include('./config.php');
$webname=$_POST['webname'];
$website=$_POST['website'];
$sql = "insert into `website` (name,website) values('$webname', '$website')";
$dbh->exec();
$sql = 'select * from `website`';
$res = $dbh->prepare($sql);
$res->execute();
$message = $res->fetchAll(PDO::FETCH_ASSOC);
var_dump($message);

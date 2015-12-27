<!DOCTYPE html>
<html>
<head>
	<title>Add anything you like</title>
	<meta charset="UTF-8">
	<style type="text/css">
	h1{
		font-size:40px;
		color:#1E90FF;
		text-align:center;
	}
	form{
		text-align: center;
	}
	</style>
</head>
<body>
<h1>添加您喜爱的网页</h1>
 <form action="test21.php" method="post">
        网站名： 
        <input type="text" name="webname"/> 
        <br><br>
        网址：
        <input type="text" name="website"/> 
        <br><br>
        <input type="submit" value="提交" onclick="alert('提交成功!')">
    </form>
</body>
</html>
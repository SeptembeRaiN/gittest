<!DOCTYPE html>
<html>
<head>
	<title>text</title>
	<meta charset="UTF-8">
	<style type="text/css">
	form{
		text-align: center;
	}
	</style>
</head>
<body>
    <form action="3.php" method="post" enctype="multipart/form-data">
        <label for="file">文件名:</label>
        <input type="file" name="file" id="file" /> 
        <br><br>
        <input type="text" name="yanzhengma"><br><br>
        <img src="2.php"><br><br>
        <input type="submit" value="提交" />
    </form>
</body>
</html>

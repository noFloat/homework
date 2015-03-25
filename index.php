<html>
<head>
	<meta charset="UTF-8">
	<title>balabala</title>
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
</head>
<body>
	<form method="post" action ="search.php" name = "figure">
		<select name = "image">
			<option value = "square">正方形</option>
			<option value = "circle">圆</option>
			<option value = "cubic">立方体</option>
			<option value = "ball">	球</option>
		</selcet>
		<input name="length" type="text" placeholder="请输入长度" onkeyup="value=value.replace(/[^\d]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
		<input name= " " type = "submit" placeholder ="提交">
	</form>

</body>
</htmL>
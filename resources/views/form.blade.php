<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>这是一个form</title>
</head>
<body>
	<form action='http://localhost/project/public/form' method='post'>
		<input type='text' name='asd'>
		{{csrf_field()}}
		<input type='submit' value='ads'>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>เข้าสู่ระบบ</title>
</head>
<body>
	<h1>เข้าสู่ระบบ</h1>
	<form action="process-login.php" method="POST" >
		<div>
			<input name="email_account" type="email" placeholder="email" required>
		</div>
		<div>
			<input type="password" name="password_account" placeholder="password" required>
		</div>
		<button type="submit">Login</button>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>สร้างบัญชีใหม่</title>
</head>
<body>
	<h1>สร้างบัญชีของคุณ</h1>
	<form action="process-register.php" method="POST">
		<div>
			<input type="text" name="username_account" placeholder="ชื่อผู้ใช้" required>
		</div>
		<div>
			<input type="email" name="email_account" placeholder="อีเมล" required>
		<div>
			<input type="password" name="password_account1" placeholder="รหัสผ่าน" required>
		</div>
		<div>
			<input type="password" name="password_account2" placeholder="ยืนยันรหัสผ่าน" required>
		</div>
		<button type="submit">สร้างบัญชี</button>
		<a href="form-login.php">มีบัญชีแล้วใช่ไหม</a>
		<!-- <a href="form-login.php">เข้าสู่ระบบ</a> -->
	</form>
</body>
</html>
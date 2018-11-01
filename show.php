<html>
<head>
    <title>Input Data</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <section id="input-form">
		<form method="POST" action="post.php">
			<div class="form">
				<label>Id</label>
				<input type="text" name="id"
			</div>
			<div class="form">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>Password</label>
				<input type="text" name="pass">
			</div>
			<div class="form">
				<label>Full Name</label>
				<input type="text" name="fullname">
			</div>
			<div class="form">
				<label>Level</label>
				<select name="level">
					<option value="">-- pilih level --</option>
					<option value="admin">Admin</option>
					<option value="guest">Guest</option>
					<option value="user">User</option>
				</select>
			</div>
			<div class="form">
				<input type="submit" name="daftar" value="Daftar" class="bg-blue">
			</div>
		</form>
	</selection>
</body>
</html>
<html>
<head>
	<title>UPDATE DATA</title>
</head>
<body>
 
	<h2>UPDATE DATA PHP</h2>
	<br/>
	<a href="result.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>
 
	<?php
	include 'config.php';
	$id = $_GET['id'];
	$data = mysqli_query($connection,"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="username" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="pass" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fullname" value="<?php echo $d['fullname']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>
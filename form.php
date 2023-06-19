<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/form.css">
	<title>form</title>
</head>

<body>
	<div class="form">
		<div class="title">Welcome</div>
		<div class="subtitle">Let's create your account!</div>
		<form method="POST" action="process.php">
			<div class="input-container ic1">
				<input id="namalengkap" name="fullname" class="input" type="text" placeholder=" " />
				<div class="cut"></div>
				<label for="namalengkap" class="placeholder">Nama Lengkap</label>
			</div>
			<div class="input-container ic2">
				<input id="notelepon" name="telp" class="input" type="text" placeholder=" " />
				<div class="cut"></div>
				<label for="notelepon" class="placeholder">No Telepon</label>
			</div>
			<div class="input-container ic2">
				<input id="pesan" name="message" class="input" type="text" placeholder=" " />
				<div class="cut cut-short"></div>
				<label for="pesan" class="placeholder">Pesan</label>
			</div>
			<button type="text" class="submit">submit</button>
		</form>
	</div>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('Style/login.css')?>">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div>
				<form class="signup" method="POST" action="<?= base_url('simpan/AlfianDorifMurtadlo/20081010251')?>" >
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="Username" placeholder="User name" required=""> <p class="text-right"><small class="text-danger pl-3"><?= form_error('Username');?></small></p>
					<input type="email" name="Email" placeholder="Email" required=""> <p class="text-right"><small class="text-danger pl-3"><?= form_error('Email');?></small></p>
					<input type="password" name="Password" placeholder="Password" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			<!-- <div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="password" name="Password" placeholder="Password" required="">
					<button type="submit">Login</button>
				</form>
			</div> -->
	</div>
</body>
</html>
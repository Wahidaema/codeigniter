<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet"href="asset/css/signup.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>user login</title>
</head>
<body>
	<div class="align">
		<img class="logo" src="asset/img/logo.svg">
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login" class="selected" href="#login">Login</a>
				<a id="register" href="#register">Register</a>
				<div></div>
			</div>
			<div class="tabs">
				<form action="<?php echo site_url('login/check')?>" method="post">
					<div class="inputs">
						<div class="input">
							<input placeholder="Username" type="text" name="username">
							<img src="asset/img/user.svg">
						</div>
						<div class="input">
							<input placeholder="Password" type="password" name="password">
							<img src="asset/img/pass.svg">
						</div>
						<label class="checkbox">
							<input type="checkbox">
							<span>Remember me</span>
						</label>
					</div>
					<div >
                        <input style="width:110px;background: linear-gradient(to right, #e76b05,#78bb51);padding: 10px 30px; border-radius: 5px;color:white;" type="submit"  Value="login" id="send" name="send">
                        <input style="width:110px;background: linear-gradient(to right, #e76b05,#78bb51);padding: 10px 30px; border-radius: 5px;color:white;" type="reset"  Value="Clear" id="clear" name="clear">
                      </div>
				</form>
				<form>
					<div class="inputs">
						<div class="input">
							<input placeholder="Email" type="text">
							<img src="asset/img/mail.svg">
						</div>
						<div class="input">
							<input placeholder="Username" type="text">
							<img src="asset/img/user.svg">
						</div>
						<div class="input" >
							<input  placeholder="Password" type="password">
							<img src="asset/img/pass.svg">
						</div>
					</div>
					<div >
                        <input style="width:110px;background: linear-gradient(to right, #e76b05,#78bb51);padding: 10px 30px; border-radius: 5px;color:white;" type="submit"  Value="login" id="send" name="send">
                        <input style="width:110px;background: linear-gradient(to right, #e76b05,#78bb51);padding: 10px 30px; border-radius: 5px;color:white;" type="reset"  Value="Clear" id="clear" name="clear">
                      </div>
				</form>
			</div>
		</div>
	</div>
	<script src="asset/logojs/jquery-3.3.1.min.js"></script>
	<script src="asset/logojs/index.js"></script>
</body>
</html>

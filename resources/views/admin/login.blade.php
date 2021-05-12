<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  
<base href="{{ asset('').'admin/' }}">
 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="./style_login.css">
</head>
<body>

	<main>
		<div class="container">
		<div class="login-form">
			<form action="" method="post">
				@csrf
				<h1>Đăng nhập vào website</h1>
				<div class="input-box">
					<i ></i>
					<input type="email" placeholder="Nhập email" name="email">
				</div>
				<div class="input-box">
					<i ></i>
					<input type="password" placeholder="Nhập mật khẩu" name="password">
				</div>
				<div class="btn-box">
					<button class="btn btn-primary" type="submit">
						Đăng nhập
					</button>
				</div>
			</form>
		</div>
		</div>
	</main>

</body>
</html>
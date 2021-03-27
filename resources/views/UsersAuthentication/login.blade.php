<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Work - Job Board Mobile Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	
	<link rel="shortcut icon" href="img/favicon.png">

	
    @include('header.styles')
</head>
<body>

    <!-- navbar -->
	@include('header.navigationbar')
	<!-- end navbar -->

	<!-- panel control left -->
		@include('header.panelControl')
	<!-- end panel control left -->
	
	<!-- login-->
	<div class="login app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Login</h3>
			</div>
			<form action="#" id="loginForm">
				<input type="email" id="email" name="email" style="padding: 25px;" placeholder="Email">
				<input type="password" id="password" name="password" style="padding: 25px;" placeholder="password">
				<div><a href="#" class="forgot">Forgot Password?</a></div>
				<div class="chebox">
					<input type="checkbox" id="checkbox" />
  					<label for="checkbox">Remember me</label>
				</div>
				<button type="submit" class="button">Login</button>
				<div class="create-account">Not Registered? <a href="register.html">Create an account</a></div>
			</form>
			
		</div>
	</div>
	<!-- end login -->
	
<!-- footer -->
    @include('footer.footer')
<!-- end footer -->
	
	<!-- script -->
	@include('footer.script')

	<script>
		loginForm.onsubmit = async (e) =>{
			e.preventDefault();

			let reponse = await fetch('/login',{
				method:"POST",	
				body:  new FormData(loginForm)
			});

			let result = await response.json();
			console.log(result);
		}
	</script>
</body>
</html>
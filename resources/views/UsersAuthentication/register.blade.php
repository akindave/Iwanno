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
	
	<!-- register-->
	<div class="register app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Register</h3>
			</div>
			<form action="#" id="registerForm">
				@csrf
				
				<input type="text" name="org_name" style="padding: 25px;" placeholder="Organization Name">
				<input type="email" name="email" style="padding: 25px;" placeholder="Email">
				<input type="password" name="password"  autocomplete="off" style="padding: 25px;" placeholder="Password">
				<input type="password" name="confirmpass" autocomplete="off"  style="padding: 25px;" placeholder="Confirm Password">
				<button type="submit" class="button">Register</button>
				<strong class="login-now">Your already registered? <a href="/login">Login now</a></strong>
			</form>
			
		</div>
	</div>
	<!-- end register -->
				
    <!-- footer -->
    @include('footer.footer')
    <!-- end footer -->

    <!-- script -->
    @include('footer.script')

	<script>
		
		registerForm.onsubmit = async (e) => {
			e.preventDefault();
			let getAllFormData = new FormData(registerForm);
			let getPasswordValue = getAllFormData.get("password");
			let getConfirmPasswordValue = getAllFormData.get("confirmpass");
			
			//test if the password is the same 
			if(getPasswordValue === getConfirmPasswordValue){

				let response = await fetch('/register',{
					method:"POST",
					body: new FormData(registerForm)
				});

				let result = await response.json();
				if(result.status==200){

					Materialize.toast("Registration Successful",3000);
				}else if(result.status==206){

					Materialize.toast("<span style='color:#fff'>Email Already Used</span>",8000,);

				}else{

				}
				
			}else{

				Materialize.toast("Password Does not Match",4000);
			}
			
		}
		
	</script>

</body>
</html>
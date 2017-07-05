<!doctype html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css files -->
<link href="{{asset('seller/register/style.css')}}" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<h1>Unique Login Form</h1>
<div class="log">
	<div class="content1">
		<h2>Sign In Form</h2>
		<form>
			<input type="text" name="userid" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}">
			<input type="password" name="psw" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
			<div class="button-row">
				<input type="submit" class="sign-in" value="Sign In">
				<input type="reset" class="reset" value="Reset">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	<div class="content2">
		<h2>Sign Up Form</h2>
		<form>
			<input type="text" name="userid" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NAME AND SURNAME';}">
			<input type="tel" name="usrtel" value="PHONE" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PHONE';}">
			<input type="email" name="email" value="EMAIL ADDRESS" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL ADDRESS';}">
			<input type="password" name="psw" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
			<input type="submit" class="register" value="Register">
		</form>
	</div>
	<div class="clear"></div>
</div>

</body>
</html>
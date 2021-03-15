<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>

	<form method="post">
        @csrf
	<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User Id: </td>
					<td><input type="text" name="UserId"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="Password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
					<td><input type='button' onclick="location.href='/register';" value="Sign up"></input></td>
				</tr>
			</table>
		</fieldset>
	</form>

    {{session('msg')}}

</body>
</html>

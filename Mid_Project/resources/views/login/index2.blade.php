<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>
<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Priyo<span>Zone</span></div>
		</div>
		<br>
		<div class="login">
            <form method="post">
            @csrf
				<input type="text" placeholder="User ID" name="UserId"><br>
				<input type="password" placeholder="Password" name="Password"><br>
                <input type="submit" name ="submit" value="Login">
                <input type='button' onclick="location.href='/register';" value="Sign up"></input>
		    </form>  
            {{session('msg')}}
        </div>
    
</body>
</html>
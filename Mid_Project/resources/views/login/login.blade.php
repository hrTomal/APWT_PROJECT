@extends('layouts.main')

@section('content')
<body>
	<br><br>
	<div class="login_page">
		<div class="form">
			<form action="" method="post" class="loginform">
				@csrf
				<h2>Login</h2>
				<input  type="text" name="username" placeholder="user name" id="id"/><br>
				<input type="password"  name="password" placeholder="password" id="password" /><br>
				{{ session('msg') }} 
				<a href="{{route('register')}}">Sign up</a>
			<hr>

			<input id="submit" type="submit" name="submit" value="LOGIN" /><br>
			
			</form>
		</div>
	</div>
@endsection
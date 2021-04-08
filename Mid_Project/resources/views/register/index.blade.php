<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <h1>Registration Page</h1>
</head>
<body>
<form method="post">
    	@csrf
		<fieldset>
			<legend>Register </legend>
			<table>
				<tr>
					<td>User id: </td>
					<td><input type="text" name="UserId" value="{{old('UserId')}}"></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="Name" value="{{old('Name')}}"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="Email" value="{{old('Email')}}"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<select name='Gender'>
							<option value="Male"> Male </option>
							<option value="Female"> Female </option>
                            <option value="Other"> Other </option>                            
						</select>
					</td>
				</tr>
				<tr>
					<td>Role: </td>
					<td>
						<select name='Type'>
							<!-- <option value="Admin"> Admin </option> -->
							<!-- <option value="accountant"> Accountant </option> -->
                            <option value="customer"> Customer </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="PhoneNo" value="{{old('PhoneNo')}}"></td>
				</tr>
				<tr>
					<td>Date of Birth: </td>
					<td><input type="date" name="DOB" value="{{old('DOB')}}"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="Password" value="{{old('Password')}}"></td>
				</tr>
				<tr>
					<td>Confirm Password: </td>
					<td><input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"></td>
				</tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	{{session('msg')}}

	<!-- @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach -->
    
</body>
</html>
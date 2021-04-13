<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <h1>Update Profile</h1>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Update Profile </legend>
			<table>
                <tr>
					<td>User id: </td>
					<td><input type="text" name="UserId" value="{{session('UserId')}}" readonly></td>
				</tr>
				<tr>
					<td>Profile Image: </td>
					<td><input type="file" name="img"></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="Name" value="{{ $user['Name'] }}"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="Email" value="{{ $user['Email'] }}"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<select name='Gender' value="{{ $user['Gender'] }}">
							<option value="Male"> Male </option>
							<option value="Female"> Female </option>
                            <option value="Other"> Other </option>                            
						</select>
					</td>
				</tr>
				<!-- <tr>
					<td>Role: </td>
					<td>
						<select name='Type' value="{{ $user['Type'] }}">
							<option value="admin"> Admin </option>
							<option value="accountant"> Accountant </option>
                            <option value="customer"> Customer </option>
						</select>
					</td>
				</tr> -->
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="PhoneNo" value="{{ $user['PhoneNo'] }}"></td>
				</tr>
				<tr>
					<td>Date of Birth: </td>
					<td><input type="date" name="DOB" value="{{ $user['DOB'] }}"></td>
				</tr>
                <tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	{{session('msg')}}

	@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    
</body>
</html>
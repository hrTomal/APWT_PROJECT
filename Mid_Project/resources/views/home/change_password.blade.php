<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method='post'>
    @csrf
        <table>
            <tr>
                <td>Old Password:  </td>
                <td>
                <input type="password" name="Password" value="{{ $user['Password']}}" readonly> 
                </td>
            </tr>
            <td>Old Password:  </td>
                <td>
                <input type="password" name="oldPassword"> 
                </td>
            <tr>
                <td>New Password:  </td>
                <td>
                <input type="password" name="newPassword"> 
                </td>
            </tr>
            <tr>
                <td>Retype New Password:  </td>
                <td>
                <input type="password" name="Confirm_password"> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" value="Submit">
                </td>
            </tr>
            {{session('msg')}}

        </table>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </form>    
</body>
</html>
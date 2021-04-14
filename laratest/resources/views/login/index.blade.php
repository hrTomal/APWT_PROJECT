<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is login Page</h1>
    <form method="post">
      <!--  @csrf -->
      <!-- {{ csrf_field() }} -->
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
            <legend>Login Form</legend>
            <table>
                <tr>
                    <td>User ID:</td>
                    <td> <input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td> <input type="password" name="password"></td>
                </tr>
                <tr>
                    <td> <input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    {{ session('msg') }} 
</body>
</html>
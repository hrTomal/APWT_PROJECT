<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 cellspacing="0"  cellpadding="0">
    	<tr>
    		<td colspan="2">
    			<h1>Welcome {{ session('name') }}!</h1>
    		</td>
    	</tr>
    	<tr height="400px">
    		<td colspan="">
    			<h2>Accounts</h2>
			    <a href="/home/create">Create user</a><br>
			    <a href="/home/userlist">View user list|</a><br>
			    <a href="/logout">Logout</a></br>
    		</td>
    		<td width="600px"></td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			@copyright from ebusenss.com
    		</td>

    	</tr>
    </table>
</body>
</html>


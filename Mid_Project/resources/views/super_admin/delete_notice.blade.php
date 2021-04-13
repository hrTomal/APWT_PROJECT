<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Notice</title>
</head>
<body>
    <h1>Delete Notice</h1>
			<table>
				<tr>
					<td>Notice id: </td>
					<td>{{$notice['notice_id']}}</td>
				</tr>
				<tr>
					<td>Details</td>
					<td>{{ $notice['details']}}</td>
				</tr>
				<tr>
					<td>Status:</td>
					<td>{{ $notice['status']}}</td>
				</tr>
                <tr>
					<td>Created at: </td>
					<td>{{ $notice['created_at'] }}</td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							@csrf
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
</body>
</html>

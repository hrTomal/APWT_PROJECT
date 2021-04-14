<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product List!</h1>
    <a href="/home">back |</a>
    <a href="/logout">Logout</a>
    <br><br>
    <table border=1 cellspacing="0" >
        <tr align="center">
            <th>Product ID</th>
            <th>Product Nam</th>
            <th>Price</th>
            <th>type</th>
            <th>Status</th>
            <th>Quantity</th>
            <th>Review</th>
            <th>Offer</th>
            <th>Seller Id</th>
            <th>Action</th>
        </tr>
        @foreach($product as  $value)
        <tr align="center">
            <td>{{ $value['id'] }}</td>
            <td>{{ $value['ProductName'] }}</td>
            <td>{{ $value['Price'] }}</td>
            <td>{{ $value['Type'] }}</td>
            <td>{{ $value['Status'] }}</td>
            <td>{{ $value['Quantity'] }}</td>
            <td>{{ $value['Review'] }}</td>
            <td>{{ $value['Offer'] }}</td>
            <td>{{ $value['SellerId'] }}</td>
            <td>
                <a href="/home/edit/{{ $value['id'] }}">Edit</a>
                <a href="/home/delete/{{ $value['id'] }}">Delete</a>
                <a href="/home/details/{{ $value['id'] }}">Details</a>
            </td>
        </tr>
        <tr>
        @endforeach  
    </table>
</body>
</html>
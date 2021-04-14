<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <h1>Product Details</h1>
</head>
<body>
    
    <table>
        <tr>
            <td>Product ID:</td>
            <td>{{ $product['id'] }}</td>
        </tr>
        <tr>
            <td>Product Name:</td>
            <td>{{ $product['ProductName'] }}</td>
        </tr>
        <tr>
            <td>Price:</td>
            <td>{{ $product['Price'] }}</td>
        </tr>
        <tr>
            <td>type:</td>
            <td>{{ $product['Type'] }}</td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>{{ $product['Status'] }}</td>
        </tr>
        <tr>
            <td>Quantity:</td>
            <td>{{ $product['Quantity'] }}</td>
        </tr>
        <tr>
            <td>Review:</td>
            <td>{{ $product['Review'] }}</td>
        </tr>
        </tr>
        <tr>
            <td>Offer:</td>
            <td>{{ $product['Offer'] }}</td>
        </tr>
        <tr>
            <td>Seller Id:</td>
            <td>{{ $product['SellerId'] }}</td>
        </tr>
        <tr><br></tr>
        <tr>
            <form method = "post">  
            @csrf
            <td>Are you sure you want to delete this product?</td>
            <td><input type="submit" name="submit" value="Delete"></td>
            </form>
        </tr>
        <tr>
             <td>
            <a href="/home/userlist">Back</a>
            </td>
        </tr>
    </table>
</body>
</html> 